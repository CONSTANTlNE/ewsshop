<?php

namespace App\Http\Controllers;

use App\Http\Requests\MainBannerRequest;
use App\Models\MainBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class MainBannerController extends Controller
{
    public function edit(Request $request, $banner)
    {


        $banner = MainBanner::where('shop_id', auth()->user()->shop->id)
            ->where('id', $banner)
            ->with('media')
            ->first();

        return view('htmx.banners.mainbanner', compact('banner'));


    }

    public function store(Request $request)
    {


        $authuser = auth()->user();
        $validate = Validator::make($request->all(), (new MainBannerRequest())->rules(),
            (new MainBannerRequest())->messages());


        if ($validate->fails()) {
            $errors = $validate->errors();

            return response()->view('htmx.errors', compact('errors', 'authuser'))->setStatusCode(500);
        }

        $validated = $validate->validated();


        $banner          = new MainBanner();
        $banner->shop_id = auth()->user()->shop->id;
        $banner->title   = $validated['bannertext'];
        $banner->save();


        if ($request->has('mainbanner_image')) {

            foreach ($banner->getMedia('mainbanner_image') as $media) {
                $media->delete();
            }

            $image = $validated['mainbanner_image'];
            // Decode the base64 image data
            $decodedImageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image));

            // Generate a unique filename for the converted image
            $filename = 'converted_image_'.time().'.webp';

            // Store the image data using Laravel's storage system
            Storage::disk('public')->put($filename, $decodedImageData);

            // Add the converted image to the media library
            $banner->addMedia(storage_path('app/public/'.$filename))
                ->toMediaCollection('mainbanner_image');
            // Delete the temporary file
            Storage::disk('public')->delete($filename);
        }

        return back();
    }

    public function update(Request $request)
    {


        $authuser = auth()->user();
        $validate = Validator::make($request->all(), (new MainBannerRequest())->rules(),
            (new MainBannerRequest())->messages());

        $banner = MainBanner::where('shop_id', auth()->user()->shop->id)
            ->where('id', $request->id)
            ->first();


        if ($validate->fails()) {
            $errors = $validate->errors();

            return response()->view('htmx.errors', compact('errors', 'authuser'))->setStatusCode(500);
        }

        $validated = $validate->validated();

        $banner->title = $validated['bannertext'];
        $banner->save();


        if ($request->has('mainbanner_image') && $request->mainbanner_image !== null) {

            foreach ($banner->getMedia('mainbanner_image') as $media) {
                $media->delete();
            }

            $image = $validated['mainbanner_image'];
            // Decode the base64 image data
            $decodedImageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image));

            // Generate a unique filename for the converted image
            $filename = 'converted_image_'.time().'.webp';

            // Store the image data using Laravel's storage system
            Storage::disk('public')->put($filename, $decodedImageData);

            // Add the converted image to the media library
            $banner->addMedia(storage_path('app/public/'.$filename))
                ->toMediaCollection('mainbanner_image');
            // Delete the temporary file
            Storage::disk('public')->delete($filename);
        }

        return back();
    }

    public function delete(Request $request){

        $banner = MainBanner::where('shop_id', auth()->user()->shop->id)
            ->where('id', $request->id)
            ->first();

        $banner->delete();

        return  response()->noContent();
    }


}
