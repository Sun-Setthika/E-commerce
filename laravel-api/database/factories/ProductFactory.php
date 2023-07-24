<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductCategory;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   
        protected $model = Product::class;

        public function definition(): array
        {
            $name = $this->faker->word;
            $category = ProductCategory::factory()->create();
    
            return [
                'name' => $name,
                'description' => $this->faker->realText(100),
                'image' => $this->faker->imageUrl(),
                'category_id' => $category->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
    
}
