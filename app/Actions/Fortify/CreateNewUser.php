<?php

namespace App\Actions\Fortify;

use App\Models\ConfirmMobile;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        $messages = [
            'name.required' => 'სახელის მითითება სავალლდებულოა',
            'name.string' => 'სახელი უნდა იყოს ტექსტო',
            'name.max' => 'სახელი არ უნდა აღემატებოდეს 85 სიმბოლოს',
            'email.required' => 'მეილის მითითება სავალდებულოა',
            'email.string' => 'მეილის არასწორი ფორმატი',
            'email.email' => 'მეილის არასწორი ფორმატი',
            'email.max' => 'მეილი არ უნდ აღემატებოდეს 255 სიმბოლოს',
            'email.unique' => 'ანგარიში ამ მეილით უკვე რეგისტრირებულია',
            'password.required' => 'პაროლის მითითება სავალდებულოა',
            // Add other custom messages for password validation rules if needed
        ];

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ], $messages)->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

    }
}
