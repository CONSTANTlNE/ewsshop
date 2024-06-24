<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{

    protected $model = Product::class;


    public function definition(): array
    {

        return [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'SKU' => $this->faker->unique()->ean13,
            'main_page' => $this->faker->boolean,


            'category_id' => function () {
                return Category::inRandomOrder()->first()->id;
            },
            'shop_id' => 1,
        ];
    }


    public function configure(): self
    {
        return $this->afterCreating(function (Product $product) {

            $product->addMediaFromUrl('https://picsum.photos/800/1000')->toMediaCollection('product_image1');
            $product->addMediaFromUrl('https://picsum.photos/800/1000')->toMediaCollection('product_image2');
            $product->addMediaFromUrl('https://picsum.photos/800/1000')->toMediaCollection('product_image3');
            $product->addMediaFromUrl('https://picsum.photos/800/1000')->toMediaCollection('product_image4');
        });
    }


}
