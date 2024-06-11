<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class ProductController extends Controller
{

    public function store(Request $request)
    {

//        dd($request->all());


        $authuser          = auth()->user();
        $shopCategories    = auth()->user()->shop->categories->pluck('id')->toArray();
        $undefinedCategory = auth()->user()->shop->categories->where('name', 'კატეგორიის გარეშე')->first();

        $validate = Validator::make($request->all(), (new ProductStoreRequest())->rules(),
            (new ProductStoreRequest())->messages());

        if ($validate->fails()) {
            $errors = $validate->errors();

            return response()->view('htmx.errors', compact('errors', 'authuser'))->setStatusCode(500);

        }

        $validated = $validate->validated();

        $product              = new Product();
        $product->name        = $validated['name'];
        $product->price       = $validated['price'];
        $product->description = $validated['description'];
        $product->shop_id     = auth()->user()->shop->id;
        if (in_array($validated['category'], $shopCategories)) {
            $product->category_id = $validated['category'];
        } else {
            $product->category_id = $undefinedCategory->id;
        }

        if ($request->main_page == true) {
            $product->main_page = 1;
        } else {
            $product->main_page = 0;
        }

        if ($request->category_gallery == true) {
            $product->category_gallery = 1;
        } else {
            $product->category_gallery = 0;
        }

        if ($request->SKU != null) {
            $product->SKU = $validated['SKU'];
        }


        // if usage of categories is turned off in settings apply default
        if (auth()->user()->shop->settings->first()->use_category == 0) {
            $product->category_id = $undefinedCategory->id;
        }


        $product->save();


        if ($request->has('new_spec')) {

            foreach ($validated['new_spec'] as $key => $spec) {
                $product->specs()->create([
                    'product_id' => $product->id,
                    'name'       => $spec,
                    'value'      => $validated['new_value'][$key],
                ]);
            }
        }

//=============================ADD image to product =======================================

        if ($request->has('image1') && $request->image1 != null) {
            $image = $request->image1;
            // Decode the base64 image data
            $decodedImageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image));

            // Generate a unique filename for the converted image
            $filename = 'converted_image_'.time().'.webp';

            // Store the image data using Laravel's storage system
            Storage::disk('public')->put($filename, $decodedImageData);

            // Add the converted image to the media library
            $product->addMedia(storage_path('app/public/'.$filename))
                ->toMediaCollection('product_image1');
            // Delete the temporary file
            Storage::disk('public')->delete($filename);
        }


        if ($request->has('image2') && $request->image2 != null) {
            $image = $request->image2;
            // Decode the base64 image data
            $decodedImageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image));

            // Generate a unique filename for the converted image
            $filename = 'converted_image_'.time().'.webp';

            // Store the image data using Laravel's storage system
            Storage::disk('public')->put($filename, $decodedImageData);

            // Add the converted image to the media library
            $product->addMedia(storage_path('app/public/'.$filename))
                ->toMediaCollection('product_image2');
            // Delete the temporary file
            Storage::disk('public')->delete($filename);
        }


        if ($request->has('image3') && $request->image3 != null) {
            $image = $request->image3;
            // Decode the base64 image data
            $decodedImageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image));

            // Generate a unique filename for the converted image
            $filename = 'converted_image_'.time().'.webp';

            // Store the image data using Laravel's storage system
            Storage::disk('public')->put($filename, $decodedImageData);

            // Add the converted image to the media library
            $product->addMedia(storage_path('app/public/'.$filename))
                ->toMediaCollection('product_image3');
            // Delete the temporary file
            Storage::disk('public')->delete($filename);
        }


        if ($request->has('image4') && $request->image4 != null) {
            $image = $request->image4;
            // Decode the base64 image data
            $decodedImageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image));

            // Generate a unique filename for the converted image
            $filename = 'converted_image_'.time().'.webp';

            // Store the image data using Laravel's storage system
            Storage::disk('public')->put($filename, $decodedImageData);

            // Add the converted image to the media library
            $product->addMedia(storage_path('app/public/'.$filename))
                ->toMediaCollection('product_image4');
            // Delete the temporary file
            Storage::disk('public')->delete($filename);
        }

        return back();
    }
    public function quickView(Request $request,$shop, $id)
    {

        $product = Product::where('id', $id)
            ->with('media')
            ->first();

        return view('htmx.product.quickview', compact('product'));
    }
    public function destroy(Request $request)
    {

        $product = Product::where('shop_id', auth()->user()->shop->id)->where('id', $request->id)->first();
        if (!$product) {
            return back();
        }
        $product->delete();

        return back();
    }
    public function edit(Request $request, $shopslug, $id)
    {



        $shop    = Shop::where('slug', $shopslug)
            ->with([

                'settings',
                'categories',

            ])
            ->first();
        $product = Product::where('shop_id', $shop->id)->where('id', $id)
            ->with('specs', 'media')
            ->first();

//        return $product;

        if (!$product) {
            return back();
        }

        return view('htmx.product.editproduct', compact('product', 'shop'));
    }
    public function update(Request $request)
    {

        $product = Product::where('shop_id', auth()->user()->shop->id)->where('id', $request->id)
            ->with('specs', 'media')
            ->first();
        if (!$product) {
            return back();
        }


        $authuser          = auth()->user();
        $shopCategories    = auth()->user()->shop->categories->pluck('id')->toArray();
        $undefinedCategory = auth()->user()->shop->categories->where('name', 'კატეგორიის გარეშე')->first();

        $validate = Validator::make($request->all(), (new ProductStoreRequest())->rules(),
            (new ProductStoreRequest())->messages());

        if ($validate->fails()) {
            $errors = $validate->errors();

            return response()->view('htmx.errors', compact('errors', 'authuser'))->setStatusCode(500);

        }

        $validated = $validate->validated();


        $product->name        = $validated['name'];
        $product->price       = $validated['price'];
        $product->description = $validated['description'];
        $product->shop_id     = auth()->user()->shop->id;
        if (in_array($validated['category'], $shopCategories)) {
            $product->category_id = $validated['category'];
        } else {
            $product->category_id = $undefinedCategory->id;
        }

        if ($request->main_page == true) {
            $product->main_page = 1;
        } else {
            $product->main_page = 0;
        }

        if ($request->category_gallery == true) {
            $product->category_gallery = 1;
        } else {
            $product->category_gallery = 0;
        }

        if ($request->SKU != null) {
            $product->SKU = $validated['SKU'];
        }


        // if usage of categories is turned off in settings apply default
        if (auth()->user()->shop->settings->first()->use_category == 0) {
            $product->category_id = $undefinedCategory->id;
        }

        $product->save();

        // Add new Specs
        if ($request->has('new_spec')) {

            foreach ($validated['new_spec'] as $key => $spec) {
                $product->specs()->create([
                    'product_id' => $product->id,
                    'name'       => $spec,
                    'value'      => $validated['new_value'][$key],
                ]);
            }
        }

        // Update existing Specs
        if ($request->has('old_spec')) {
            foreach ($validated['old_spec'] as $key => $spec) {
//                dd($key);
                $product->specs()->where('id', $request->old_spec_id[$key])->update([
                    'product_id' => $product->id,
                    'name'       => $spec,
                    'value'      => $validated['old_value'][$key],
                ]);
            }
        }


        // delete old specs
        foreach ($product->specs as $spec) {

            if ($request->has('old_spec_id') && !in_array($spec->id, $validated['old_spec_id'], false)) {
                $spec->delete();
            }

            if (!$request->has('old_spec_id')) {
                $spec->delete();
            }

        }


//=============================ADD image to product =======================================


        if ($request->has('image_1') && $request->image_1 != null) {

            foreach ($product->getMedia('product_image1') as $media) {

                $media->delete();

            }

            $image = $request->image_1;
            // Decode the base64 image data
            $decodedImageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image));

            // Generate a unique filename for the converted image
            $filename = 'converted_image_'.time().'.webp';

            // Store the image data using Laravel's storage system
            Storage::disk('public')->put($filename, $decodedImageData);

            // Add the converted image to the media library
            $product->addMedia(storage_path('app/public/'.$filename))
                ->toMediaCollection('product_image1');
            // Delete the temporary file
            Storage::disk('public')->delete($filename);
        }


        if ($request->has('image2') && $request->image2 != null) {

            foreach ($product->getMedia('product_image2') as $media) {

                $media->delete();

            }

            $image = $request->image2;
            // Decode the base64 image data
            $decodedImageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image));

            // Generate a unique filename for the converted image
            $filename = 'converted_image_'.time().'.webp';

            // Store the image data using Laravel's storage system
            Storage::disk('public')->put($filename, $decodedImageData);

            // Add the converted image to the media library
            $product->addMedia(storage_path('app/public/'.$filename))
                ->toMediaCollection('product_image2');
            // Delete the temporary file
            Storage::disk('public')->delete($filename);
        }


        if ($request->has('image3') && $request->image3 != null) {

            foreach ($product->getMedia('product_image3') as $media) {

                $media->delete();

            }


            $image = $request->image3;
            // Decode the base64 image data
            $decodedImageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image));

            // Generate a unique filename for the converted image
            $filename = 'converted_image_'.time().'.webp';

            // Store the image data using Laravel's storage system
            Storage::disk('public')->put($filename, $decodedImageData);

            // Add the converted image to the media library
            $product->addMedia(storage_path('app/public/'.$filename))
                ->toMediaCollection('product_image3');
            // Delete the temporary file
            Storage::disk('public')->delete($filename);
        }


        if ($request->has('image4') && $request->image4 != null) {


            foreach ($product->getMedia('product_image4') as $media) {

                $media->delete();

            }

            $image = $request->image4;
            // Decode the base64 image data
            $decodedImageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image));

            // Generate a unique filename for the converted image
            $filename = 'converted_image_'.time().'.webp';

            // Store the image data using Laravel's storage system
            Storage::disk('public')->put($filename, $decodedImageData);

            // Add the converted image to the media library
            $product->addMedia(storage_path('app/public/'.$filename))
                ->toMediaCollection('product_image4');
            // Delete the temporary file
            Storage::disk('public')->delete($filename);
        }

        return back();


    }
    public function imageDelete(Request $request,)
    {


        $product = Product::where('shop_id', auth()->user()->shop->id)
            ->where('id', $request->id)
            ->with('media')
            ->first();


        $product->media()->where('id', $request->media_id)->delete();

        return response()->noContent();
    }

}
