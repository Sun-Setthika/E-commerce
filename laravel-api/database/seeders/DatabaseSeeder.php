<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductCategory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // $this->call([
        //     UserSeeder::class
        // ]);

        Product::factory()->count(10)->create();
        ProductCategory::factory()->count(3)->create();

        $categories = ProductCategory::all();
        Product::all()->each(function($product) use ($categories){
            $product->productCategory()->associate(
                $categories->random(1)->pluck('id')->toArray()
            );
            // $product->productCategory()->associate($categories->random());
            // $product->save();
        });

        
    }
}
