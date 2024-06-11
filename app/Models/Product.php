<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements  HasMedia
{
    use HasFactory,InteractsWithmedia;


    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function specs()
    {
        return $this->hasMany(Spec::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            // Generate a slug for the article based on its title
            $slug = $product->createSlug($product->name);
            // Assign the generated slug to the article
            $product->slug = $slug;
        });

        static::updating(function ($product) {
            $product->slug = $product->createSlug($product->name);
        });
    }


    private function createSlug($product)
    {
        // Convert non-Latin characters to their closest ASCII equivalents
        $product = Str::ascii($product);

        // Replace spaces with dashes and lowercase the title
        $slug = Str::slug($product, '-');

        return $slug;
    }
}
