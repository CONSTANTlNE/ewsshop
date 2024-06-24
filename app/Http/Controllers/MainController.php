<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Benchmark;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(Request $request, $slug)
    {

//        return Benchmark::measure(fn () =>   $shop = Shop::where('slug', $slug)
//            ->with([
//                'user',
//                'settings',
//                'products',
//                'products.specs',
//                'products.category',
//                'categories.products.media',
//                'categories.media',
//                'mainbanner',
//                'mainbanner.media',
//                'secondbanners',
//                'thirdbanners',
//                'faqs',
//                'services',
//                'slider',
//                'socials',
//                'headername'
//            ])
//            ->first());


        $shop = Shop::where('slug', $slug)
            ->with([
                'user',
                'settings',
                'products',
                'products.specs',
                'products.category',
                'categories.products.media',
                'categories.media',
                'mainbanner',
                'mainbanner.media',
                'secondbanners',
                'thirdbanners',
                'faqs',
                'services',
                'slider',
                'socials',
                'headername'
            ])
            ->first();


        if ($shop === null) {
            return redirect()->route('index');
        }

        if (auth()->check() && request()->segment(1) !== Shop::where('user_id', auth()->user()->id)->first()->slug) {

            return redirect()->route('home', ['shop' => Shop::where('user_id', auth()->user()->id)->first()->slug]);
        }

        if (auth()->check() && auth()->user()->mob_confirmed === 0) {
            return redirect()->route('confirm.mobile');
        }


        $productscount = count($shop->products);


//         $settings=auth()->user()->shop->settings->first();
//         $categories=auth()->user()->shop->categories;
//         $products=auth()->user()->shop->products;


        {
            return view('pages.shop', compact('shop', 'productscount'));
        }

    }
    public function allProducts(Request $request)
    {


        $shop = Shop::where('slug', $request->segment(1))
            ->with([
                'settings',
                'products.media',
                'products.category',
                'categories.products'
            ])
            ->first();

        if ($shop === null) {
            return back()->with('error', 'მაღაზია არ მოიძებნა');
        }


        $settings = $shop->settings;

        $productscount = count($shop->products);


        return view('pages.products', compact('shop', 'settings', 'productscount'));
    }
    public function allProductsSorting(Request $request, $shopslug, $sort)
    {


        if ($sort === 'price_asc') {
            $shop = Shop::where('slug', $shopslug)
                ->with([
                    'settings',
                    'products' => function ($query) {
                        $query->orderBy('price', 'asc')->with('media', 'category');
                    },
                    'categories.products'
                ])
                ->first();

        }
        elseif ($sort === 'price_desc') {
            $shop = Shop::where('slug', $shopslug)
                ->with([
                    'settings',
                    'products' => function ($query) {
                        $query->orderBy('price', 'desc')->with('media', 'category');
                    },
                    'categories.products'
                ])
                ->first();

        }
        elseif ($sort === 'newest') {
            $shop = Shop::where('slug', $shopslug)
                ->with([
                    'settings',
                    'products' => function ($query) {
                        $query->latest()->with('media', 'category');
                    },
                    'categories.products'
                ])
                ->first();
        }
        elseif ($sort === 'oldest') {
            $shop = Shop::where('slug', $shopslug)
                ->with([
                    'settings',
                    'products' => function ($query) {
                        $query->oldest()->with('media', 'category');
                    },
                    'categories.products'
                ])
                ->first();

        }
        else {
            return back()->with('error', 'არასწორი სორტირება');
        }


        if ($shop === null) {
            return back()->with('error', 'მაღაზია არ მოიძებნა');
        }

        $settings      = $shop->settings;
        $productscount = count($shop->products);

        return view('pages.products', compact('shop', 'settings', 'productscount'));

    }


}
