<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Product A',
                'price' => 100.00,
                'image' => '/images/headphone.png',
                'description' => 'Description for Product A',
                'stock' => 50,
                'rating' => 4.5,
            ],
            [
                'name' => 'Product B',
                'price' => 150.00,
                'image' => '/images/laptop.webp',
                'description' => 'Description for Product B',
                'stock' => 30,
                'rating' => 4.0,
            ],
            [
                'name' => 'Product C',
                'price' => 200.00,
                'image' => '/images/mobile.jpg',
                'description' => 'Description for Product C',
                'stock' => 20,
                'rating' => 4.8,
            ],
        ];

        foreach ($products as $product) {
            $cretated = Product::firstOrCreate([
                'name' => $product['name'],
            ], $product);

            if ($cretated->wasRecentlyCreated) {
                echo "Created: " . $cretated->name . "\n";
            } else {
                echo "Already exists: " . $cretated->name . "\n";
            }
        }
    }
}
