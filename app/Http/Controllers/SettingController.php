<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function update(Request $request){

        $settings = auth()->user()->shop->settings->first();

        $features = [
            'use_main_banner',
            'use_main_gallery',
            'use_category',
            'use_slider',
            'use_faq',
            'use_spec',
            'use_socials',
            'use_service',
            'use_messenger',
        ];

        foreach ($features as $feature) {
            $settings->$feature = $request->has($feature) ? 1 : 0;
        }


        $settings->save();
        return back();

//        return response()->noContent();
    }


    public function shopSettings(Request $request){
        $shop=Shop::where('user_id',auth()->user()->id)->first();

        $shop->name=$request->name;
        $shop->address=$request->address;
        $shop->mobile=$request->mobile;
        $shop->messenger=$request->messenger;
        $shop->email=$request->email;
        $shop->save();

        return redirect()->route('home',['shop'=>$shop->slug]);
    }
}
