<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\CategoryFactory;
use Database\Factories\ProductFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         User::factory(5)->create();
//
//        User::factory()->create([
//            'name' => 'Admin',
//            'email' => 'admin@test.com',
//            'is_admin' => true,
//            'password' => Hash::make('password'),
//        ]);

//        Category::factory(10)->create();
        Product::factory(100)->create();


    }
}
