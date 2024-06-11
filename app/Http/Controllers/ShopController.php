<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Setting;
use App\Models\Shop;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public function create()
    {

        if (auth()->user()->mob_confirmed === 0) {
            return redirect()->route('confirm.mobile');
        }

        if(Shop::where('user_id',auth()->user()->id)->first()!==null){
            $shop=auth()->user()->shop->first()->slug;
            return redirect(route('home',$shop));
        }

        return view('pages.createshop');
    }

    public function store(Request $request)
    {

        $shop          = new Shop();
        $shop->name    = $request->shop;
        $shop->address = $request->address;
        $shop->mobile  = $request->mobile;
        $shop->user_id = auth()->user()->id;
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
        $user         = auth()->user();

        if ($user->mob_confirmed === 1) {
            return redirect()->route('shop.create');
        }

        return view('pages.mobileconfirm',compact('user'));
    }


    public function mobStore(Request $request)
    {
        $user         = auth()->user();

        if ($user->mob_confirmed === 1) {
            $user->mob_confirmed = 0;
            $user->save();
        }

        $code = random_int(1000, 9999);


        $user->mobile = $request->mobile;
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


        return back();
    }

    public function mobConfirm2(Request $request)
    {

        $user = auth()->user();
        if ($user->code == $request->code) {
            $user->mob_confirmed = 1;
            $user->save();

            if (Shop::where('user_id', auth()->user()->id)->first() === null) {
                return redirect()->route('shop.create');
            } else {
                return redirect()->route('home', ['shop' => $user->shop->slug]);
            }
        }
    }
}
