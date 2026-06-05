<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        $categories = Product::CATEGORIES;
        $category = $this->faker->randomElement($categories);
        
        $productNames = [
            'Shim' => ['Traditional Uzbek Shim', 'Embroidered Shim', 'Silk Shim', 'Cotton Shim', 'Festive Shim'],
            'Kastyum' => ['Elegant Kastyum', 'Modern Kastyum', 'Classic Kastyum', 'Wedding Kastyum', 'Daily Kastyum'],
            'Atlas Ishton' => ['Premium Atlas Ishton', 'Gold Thread Ishton', 'Handmade Atlas Ishton', 'Designer Ishton', 'Bridal Ishton'],
            'Atlas Ko\'ylak' => ['Luxury Atlas Ko\'ylak', 'Traditional Ko\'ylak', 'Bridal Ko\'ylak', 'Party Ko\'ylak', 'Summer Ko\'ylak'],
            'Cosmetics' => ['Organic Face Cream', 'Herbal Lipstick', 'Natural Foundation', 'Rose Perfume', 'Silk Body Lotion'],
            'Others' => ['Hair Accessories', 'Jewelry Set', 'Traditional Bag', 'Decorative Scarf', 'Gift Set'],
        ];

        return [
            'name' => $this->faker->randomElement($productNames[$category]),
            'description' => $this->faker->paragraph(3),
            'price' => $this->faker->randomFloat(2, 50000, 500000),
            'image' => null,
            'category' => $category,
            'is_top' => $this->faker->boolean(20),
            'is_special' => $this->faker->boolean(30),
            'stock_quantity' => $this->faker->numberBetween(5, 100),
        ];
    }
}
