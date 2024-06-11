<?php

namespace App\Http\Controllers;

use App\Http\Requests\HeaderRequest;
use App\Models\HeaderName;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HeaderNameController extends Controller
{
    public function headerEdit(Request $request){

        $header=HeaderName::where('shop_id',auth()->user()->shop->id)->first();

        return view('htmx.populartext',compact('header'));
    }

    public function headerUpdate(Request $request){

        $authuser = auth()->user();
        $validate = Validator::make($request->all(), (new HeaderRequest())->rules(),
            (new HeaderRequest())->messages());

        if ($validate->fails()) {
            $errors = $validate->errors();

            return response()->view('htmx.errors', compact('errors', 'authuser'))->setStatusCode(500);

        }

        $validated=$validate->validated();

        $header=HeaderName::where('shop_id',$authuser->shop->id)->first();
        if($header){
            $header->name=$validated['title'];
            $header->save();
        }else{
            $header=new HeaderName();
            $header->shop_id=$authuser->shop->id;
            $header->name=$validated['title'];
            $header->save();

        }

        $shop = Shop::where('user_id', auth()->user()->id)
            ->with([
                'headername'
            ])
            ->first();

        return view('htmx.populartext2',compact('header','shop'));
    }

}
