<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Password;
use Laravel\Fortify\Contracts\FailedPasswordResetLinkRequestResponse;
use Laravel\Fortify\Contracts\RequestPasswordResetLinkViewResponse;
use Laravel\Fortify\Contracts\SuccessfulPasswordResetLinkRequestResponse;
use Laravel\Fortify\Fortify;

class CustomPasswordResetLinkController extends Controller
{
    /**
     * Show the reset password link request view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Laravel\Fortify\Contracts\RequestPasswordResetLinkViewResponse
     */
    public function create(Request $request): RequestPasswordResetLinkViewResponse
    {
        return app(RequestPasswordResetLinkViewResponse::class);
    }

    /**
     * Send a reset link to the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Support\Responsable
     */
    public function store(Request $request): Responsable
    {
//        $request->validate([Fortify::email() => 'required|email']);

        $customMessages = [
            'email.required' => 'მეილის მითითება სავალდებულოა',
            'email.email' => 'მეილის არასწორი ფორმატი',
        ];

        $request->validate([
            Fortify::email() => 'required|email',
        ], $customMessages);


        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = $this->broker()->sendResetLink(
            $request->only(Fortify::email())
        );

        if ($status == Password::RESET_LINK_SENT) {
            // Get the reset link for SMS
            $user = User::where('email', $request->email)->first(); // Assuming you have the user instance available
            $token = Password::createToken($user);
            $resetLink = url(route('password.reset', ['token' => $token, 'email' => $user->email], false));

            // Send the reset link via SMS
            $client = new Client();
            $url = 'https://api.ubill.dev/v1/sms/send';
            $params = [
                'query' => [
                    'key' => env('UBILL_KEY'),
                    'brandID' => 2,
//                    'numbers' => '995' . $user->mobile,
                    'numbers' => '995'.$user->mobile,
                    'text' => 'shop.ews.ge : პაროლის აღდგენა : ' . $resetLink,
                    'stopList' => false,
                ],
            ];

            try {
                $response = $client->get($url, $params);
            } catch (RequestException $e) {
                // Handle request exceptions, e.g., connection errors, HTTP errors, etc.
                echo 'Error: ' . $e->getMessage();
            }
        }

        return $status == Password::RESET_LINK_SENT
//            ? app(SuccessfulPasswordResetLinkRequestResponse::class, ['status' => $status])
//            : app(FailedPasswordResetLinkRequestResponse::class, ['status' => $status]);
            ? app(SuccessfulPasswordResetLinkRequestResponse::class, ['status' => 'პაროლის აღსადგენი ლინკი გამოგზავნილია'])
            : app(FailedPasswordResetLinkRequestResponse::class, ['status' => 'რეგისტრირებული მეილი არ მოიძებნა ']);
    }

    /**
     * Get the broker to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\PasswordBroker
     */
    protected function broker(): PasswordBroker
    {
        return Password::broker(config('fortify.passwords'));
    }
}
