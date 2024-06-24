<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class LandingController extends Controller
{

    public function index(Request $request)
    {
        if(auth()->check()){
            if(auth()->user()->mob_confirmed===0){
                return redirect()->route('confirm.mobile');
            }
            if(Shop::where('user_id',auth()->user()->id)->first()===null){
                return redirect()->route('shop.create');
            } else{

                $shop=auth()->user()->shop->first()->slug;
                return redirect(route('home',$shop));
            }
        }

        return view('index');

    }
}
