<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function googleredirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googlecallback()
    {



        try {
            $user = Socialite::driver('google')->user();
//dd($user);
            $google_user = User::updateOrCreate([
                'google_id' => $user->id
            ], [
                'google_id' => $user->id,
                'name' => $user->name,
                'auth_type' => 'google',
                'email' => $user->email,
                'password'=>Hash::make(Str::random(10))]);

            Auth::login($google_user);

            if(auth()->user()->mob_confirmed===0){
                return redirect()->route('confirm.mobile');
            }
            if(Shop::where('user_id',auth()->user()->id)->first()===null){
                return redirect()->route('shop.create');
            } else{

                $shop=Shop::where('user_id',auth()->user()->id)->first()->slug;

                return redirect(route('home',['shop'=>$shop]));

            }



        } catch (Exception $e) {
            dd($e);
        }
    }


    public function facebookedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function facebookcallback()
    {

        try {
            $user = Socialite::driver('facebook')->user();

            $facebook_user = User::updateOrCreate([
                'facebook_id' => $user->id
            ], [
                'facebook_id' => $user->id,
                'name' => $user->name,
                'auth_type' => 'facebook',
                'email' => $user->email,
                'password'=>Hash::make(Str::random(10))]);

            Auth::login($facebook_user);

            if(auth()->user()->mob_confirmed===0){
                return redirect()->route('confirm.mobile');
            }
            if(Shop::where('user_id',auth()->user()->id)->first()===null){
                return redirect()->route('shop.create');
            } else{

                $shop=Shop::where('user_id',auth()->user()->id)->first()->slug;
                return redirect(route('home',['shop'=>$shop]));

            }



        } catch (Exception $e) {
            dd($e);
        }
    }


}
