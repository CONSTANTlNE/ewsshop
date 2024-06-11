<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Shop extends Model implements HasMedia
{
    use HasFactory , InteractsWithMedia;


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function settings()
    {
        return $this->hasMany(Setting::class);
    }

    public function mainbanner()
    {
        return $this->hasMany(MainBanner::class);
    }

    public function secondbanners()
    {
        return $this->hasMany(SecondBanner::class);
    }

    public function thirdbanners()
    {
        return $this->hasMany(ThirdBanner::class);
    }

    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function slider()
    {
        return $this->hasOne(Slider::class);
    }


    public function socials()
    {
        return $this->hasMany(Social::class);
    }

    public function headername(){
        return $this->hasOne(HeaderName::class);
    }

    public function categories(){
        return $this->hasMany(Category::class);
    }

    public function adminsettings(){
        return $this->hasMany(AdminSettings::class);
    }



    // CREATE SLUG FROM NAME

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = $model->createSlug($model->name);
        });

        static::updating(function ($model) {
            $model->slug = $model->createSlug($model->name);
        });
    }

    private function createSlug($name)
    {
        // Convert non-Latin characters to their closest ASCII equivalents
        $name = Str::ascii($name);

        // Replace spaces with dashes and lowercase the title
        $slug = Str::slug($name, '-');

        return $slug;
    }


}
