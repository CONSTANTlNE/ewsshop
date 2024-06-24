<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeMobileRequest;
use App\Http\Requests\ShopCreateRequest;
use App\Http\Requests\ShopSettingsRequest;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Shop;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ShopController extends Controller
{

    public function create()
    {

        if (auth()->user()->mob_confirmed === 0) {
            return redirect()->route('confirm.mobile');
        }

        if (Shop::where('user_id', auth()->user()->id)->first() !== null) {
            $shop = auth()->user()->shop->first()->slug;

            return redirect(route('home', $shop));
        }

        return view('pages.createshop');
    }

    public function store(Request $request)
    {

        $validate = Validator::make($request->all(), (new ShopCreateRequest())->rules(),
            (new ShopCreateRequest())->messages());
        $validated         = $validate->validated();



        $shop = new Shop();
        $shop->name        = $validated['shop'];
        $shop->address     = $validated['address'];
        $shop->description = $validated['description'];
        $shop->user_id     = auth()->user()->id;
        $shop->save();

        $settings          = new Setting();
        $settings->shop_id = $shop->id;
        $settings->save();

        $category          = new Category();
        $category->shop_id = $shop->id;
        $category->name    = 'კატეგორიის გარეშე';
        $category->save();

        return redirect()->route('home', ['shop' => $shop->slug]);
    }

    public function mobConfirm()
    {
        $user = auth()->user();

        if ($user->mob_confirmed === 1) {
            return redirect()->route('shop.create');
        }

        return view('pages.mobileconfirm', compact('user'));
    }

    public function mobStore(Request $request)
    {
        $user = auth()->user();


        $validate = Validator::make($request->all(), (new ChangeMobileRequest())->rules(),
            (new ChangeMobileRequest())->messages());

//        if ($validate->fails()) {
//            $errors = $validate->errors();
//
//            return response()->view('htmx.errors', compact('errors',))->setStatusCode(500);
//
//        }
        $validated = $validate->validated();


        if ($user->mob_confirmed === 1) {
            $user->mob_confirmed = 0;
            $user->save();
        }

        $code = random_int(1000, 9999);


        $user->mobile = $validated['mobile'];
        $user->code   = $code;
        $user->save();

//dd(env('UBILL_KEY'));

        $client = new Client();
        $url    = 'https://api.ubill.dev/v1/sms/send';
        $params = [
            'query' => [
                'key'      => env('UBILL_KEY'),
                'brandID'  => 2,
                'numbers'  => '995'.$user->mobile,
                'text'     => 'shop.ews.ge კოდი: '.$code,
                'stopList' => false,
            ],
        ];


        try {
            $response = $client->get($url, $params);

        } catch (RequestException $e) {
            // Handle request exceptions, e.g., connection errors, HTTP errors, etc.
            echo 'Error: '.$e->getMessage();
        }


        return back()->with('mobsuccess','კოდი გამოგზავნილია მითითებულ ნომერზე');
    }

    public function mobConfirm2(Request $request)
    {

        $user = auth()->user();
        if ($user->code == $request->code && $user->code!==null) {
            $user->mob_confirmed = 1;
            $user->save();

            if (Shop::where('user_id', auth()->user()->id)->first() === null) {
                return redirect()->route('shop.create');
            } else {
                return redirect()->route('home', ['shop' => $user->shop->slug]);
            }
        } else {
            return back()->with('codeerror', 'არასწორი კოდი');
        }
    }

    public function logoUpdate(Request $request)
    {
        $shop = Shop::where('user_id', auth()->user()->id)->first();

        if ($request->has('logoimg') && $request->logoimg != null) {

            foreach ($shop->media as $media) {
                $media->delete();
            }

            $image = $request->logoimg;
            // Decode the base64 image data
            $decodedImageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image));

            // Generate a unique filename for the converted image
            $filename = 'converted_image_'.time().'.webp';

            // Store the image data using Laravel's storage system
            Storage::disk('public')->put($filename, $decodedImageData);

            // Add the converted image to the media library
            $shop->addMedia(storage_path('app/public/'.$filename))
                ->toMediaCollection('shop_logo');
            // Delete the temporary file
            Storage::disk('public')->delete($filename);
        }

        $shop->save();

        return back();
    }

    public function descrHtmxEdit(Request $request)
    {
        $shop = Shop::where('user_id', auth()->user()->id)->first();

        return view('htmx.editshopdescription', compact('shop'));
    }

    public function descrHtmxUpdate(Request $request)
    {
        $shop              = Shop::where('user_id', auth()->user()->id)->first();
        $shop->description = $request->description;
        $shop->save();

        return view('htmx.updateshopdescription');
    }
}
