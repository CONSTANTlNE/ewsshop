<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ShopSettingsRequest;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{

    public function update(Request $request)
    {

        $settings = auth()->user()->shop->settings->first();

        $features = [
            'use_main_banner',
            'use_main_gallery',
            'use_category',
            'use_slider',
            'use_faq',
            'use_spec',
            'use_socials',
            'use_description',
            'use_messenger',
            'show_description',
            'whatsapp',
            'use_logo'
        ];

        foreach ($features as $feature) {
            $settings->$feature = $request->has($feature) ? 1 : 0;
        }


        $settings->save();

        return back();

//        return response()->noContent();
    }

    public function shopSettings(Request $request)
    {
        $shop = Shop::where('user_id', auth()->user()->id)->first();

        $validate = Validator::make($request->all(), (new ShopSettingsRequest())->rules(),
            (new ShopSettingsRequest())->messages());

        if ($validate->fails()) {
            $errors = $validate->errors();
            return response()->view('htmx.errors', compact('errors',))->setStatusCode(500);
        }
        $validated = $validate->validated();

        if($shop->name!==$validated['name'] &&  !empty($validated['name']) ){
            $shop->name    = $validated['name'];
        }

        $shop->address = $validated['address'];
//        $shop->mobile=$validated['mobile'];
        $shop->messenger = $validated['messenger'];
        $shop->facebook  = $validated['facebook'];
        $shop->instagram = $validated['instagram'];
        $shop->youtube   = $validated['youtube'];
        $shop->save();


        if ($request->has('email') && $validated['email'] != auth()->user()->email && !empty($validated['email'])) {
            $user        = auth()->user();
            $user->email = $validated['email'];
            $user->save();
        }


        if ($request->has('password') && !empty($validated['password'])) {
            $user         = auth()->user();
            $user->password =Hash::make($validated['password']);
            $user->save();
        }

        return redirect()->route('home', ['shop' => $shop->slug]);
    }
}
