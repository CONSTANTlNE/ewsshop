<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function store(Request $request)
    {

//        dd($request->all());

        $validate = Validator::make($request->all(), (new CategoryStoreRequest())->rules(),
            (new CategoryStoreRequest())->messages());


        if ($validate->fails()) {
            $errors = $validate->errors();

            return response()->view('htmx.errors', compact('errors',))->setStatusCode(500);

        }

        $validated = $validate->validated();

        $category          = new Category();
        $category->name    = $validated['name'];
        $category->shop_id = auth()->user()->shop->id;
        $category->save();

        return back();

    }

    public function imageUpdate(Request $request)
    {

        $category = Category::where('shop_id', auth()->user()->shop->id)->where('id', $request->id)->first();

        $category->image = $request->image;
        $category->save();

        return back();
    }

    public function category(Request $request, $shopslug, $category)
    {

        $shop       = Shop::where('slug', $shopslug)
            ->with('categories.products')
            ->first();
        $categories = Category::where('shop_id', $shop->id)
            ->where('slug', $category)
            ->with('products.media')
            ->first();
//dd($categories);
        $productscount = count($shop->products);


        return view('pages.categories', compact('categories', 'productscount', 'shop'));
    }


    public function categorySorting(Request $request, $shopslug, $category, $sorting)
    {



        return back();
    }
}
