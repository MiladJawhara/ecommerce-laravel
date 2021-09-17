<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name = $this->faker->unique()->words($nb = 4, $asText = true);
        $slug = Str::slug($product_name);
        return [
            'name' => $product_name,
            'slug' => $slug,
            'description' => $this->faker->text(200),
            'price' => $this->faker->numberBetween(10, 500),
            'SKU' => 'DIGI' . $this->faker->unique()->numberBetween(100, 500),
            'stock_status' => Product::$STOCK_STATUS_IN_STOCK,
            'quantity' => $this->faker->numberBetween(50, 200),
            'category_id' => Category::all()->random()->id,
            'image' => 'digital_' . $this->faker->unique()->numberBetween(1, 22)
        ];
    }
}
