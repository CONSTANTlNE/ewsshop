<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model implements  HasMedia
{
    use HasFactory,InteractsWithmedia;


    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function secondbanner()
    {
        return $this->hasOne(SecondBanner::class);
    }

    public function thirdbanner()
    {
        return $this->hasOne(ThirdBanner::class);
    }


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            // Generate a slug for the article based on its title
            $slug = $category->createSlug($category->name);
            // Assign the generated slug to the article
            $category->slug = $slug;
        });

        static::updating(function ($category) {
            $category->slug = $category->createSlug($category->name);
        });
    }


    private function createSlug($category)
    {
        // Convert non-Latin characters to their closest ASCII equivalents
        $category = Str::ascii($category);

        // Replace spaces with dashes and lowercase the title
        $slug = Str::slug($category, '-');

        return $slug;
    }
}
