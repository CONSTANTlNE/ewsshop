<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    public function storeHtmx(Request $request)
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


        $shop = Shop::where('id', auth()->user()->shop->id)->with('categories')->first();

        return view('htmx.categoryupdatedtext', compact('shop'));

    }

    public function editHtmx(Request $request)
    {

        $category = Category::where('shop_id', auth()->user()->shop->id)->where('id', $request->catid)->first();

        return view('htmx.categorytextedit', compact('category'));

    }

    public function updateHtmx(Request $request)
    {

        $validate = Validator::make($request->all(), (new CategoryStoreRequest())->rules(),
            (new CategoryStoreRequest())->messages());


        if ($validate->fails()) {
            $errors = $validate->errors();

            return response()->view('htmx.errors', compact('errors',))->setStatusCode(500);

        }

        $validated = $validate->validated();


        $category = Category::where('shop_id', auth()->user()->shop->id)->where('id', $request->catid)->first();

        if (!$category) {
            $error = 'კატეგორიი არ მოიძებნა';

            return response()
                ->view('htmx.customerror', compact('error'))
                ->setStatusCode(500);
        }

        $category->name = $validated['name'];
        $category->save();

        $shop = Shop::where('id', auth()->user()->shop->id)->with('categories')->first();

        return view('htmx.categoryupdatedtext', compact('shop'));
    }

    public function delete(Request $request)
    {
        $category = Category::where('shop_id', auth()->user()->shop->id)->where('id', $request->catid)
            ->with('products.media')
            ->first();

        if (!$category) {
            return back();
        }

        foreach ($category->products as $product) {
            foreach ($product->media as $media) {
                $media->delete();
            }
        }

        $category->delete();

        return back();
    }

    public function imageUpdate(Request $request)
    {


        $category = Category::where('shop_id', auth()->user()->shop->id)->where('id', $request->id)
            ->with('media')
            ->first();

//        dd($request->categoryimage);


        if ($request->has('categoryimage') && $request->categoryimage != null) {

            foreach ($category->media as $media) {

                $media->delete();

            }

            $image = $request->categoryimage;
            // Decode the base64 image data
            $decodedImageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image));

            // Generate a unique filename for the converted image
            $filename = 'converted_image_'.time().'.webp';

            // Store the image data using Laravel's storage system
            Storage::disk('public')->put($filename, $decodedImageData);

            // Add the converted image to the media library
            $category->addMedia(storage_path('app/public/'.$filename))
                ->toMediaCollection('category_image');
            // Delete the temporary file
            Storage::disk('public')->delete($filename);
        }

        return back();
    }

    public function category(Request $request, $shopslug, $category)
    {

        $shop = Shop::where('slug', $shopslug)
            ->with('categories.products')
            ->first();


        if (!$shop) {
            return back()->with('error', 'მაღაზია არ მოიძებნა');
        }

        $categories = Category::where('shop_id', $shop->id)
            ->where('slug', $category)
            ->with('products.media')
            ->first();

        if (!$categories) {
            return back()->with('error', 'კატეგორია არ მოიძებნა');
        }
//dd($categories);
        $productscount = count($shop->products);


        return view('pages.categories', compact('categories', 'productscount', 'shop'));
    }

    public function categorySorting(Request $request, $shopslug, $category, $sorted)
    {

        $sort = explode('&', $sorted)[0];

        $shop = Shop::where('slug', $shopslug)
            ->with(['categories.products'])
            ->first();

        if (!$shop) {
            return back()->with('error', 'მაღაზია არ მოიძებნა');
        }

        if ($sort === 'price_asc') {


            $categories = Category::where('shop_id', $shop->id)
                ->where('slug', $category)
                ->with([
                    'products.media', 'products' => function ($query) {
                        $query->orderBy('price', 'asc')->with('category');
                    }
                ])
                ->first();

        } elseif ($sort === 'price_desc') {


            $categories = Category::where('shop_id', $shop->id)
                ->where('slug', $category)
                ->with([
                    'products.media', 'products' => function ($query) {
                        $query->orderBy('price', 'desc')->with('category');
                    }
                ])
                ->first();

        } elseif ($sort === 'newest') {

            $categories = Category::where('shop_id', $shop->id)
                ->where('slug', $category)
                ->with([
                    'products.media', 'products' => function ($query) {
                        $query->latest()->with('category');
                    }
                ])
                ->first();
        } elseif ($sort === 'oldest') {

            $categories = Category::where('shop_id', $shop->id)
                ->where('slug', $category)
                ->with([
                    'products.media', 'products' => function ($query) {
                        $query->oldest()->with('category');
                    }
                ])
                ->first();
        } else {
            return back()->with('error', 'არასწორი სორტირება');
        }


        $settings      = $shop->settings;
        $productscount = count($shop->products);

        return view('pages.categories', compact('categories', 'productscount', 'shop'));


    }
}
