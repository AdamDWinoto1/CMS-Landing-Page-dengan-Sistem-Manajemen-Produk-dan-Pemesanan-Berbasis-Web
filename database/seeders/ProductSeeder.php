<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void {
        $sale = Category::where('name', 'Sale')->first();
        $product = Category::where('name', 'Products')->first();

        Product::create([
            'name' => 'Kitab Franchise Kuliner',
            'description' => 'Cara tembus 473+ Mitra',
            'price' => 199000,
            'image' => 'images/produk1.jpg',
            'category_id' => $sale->id
        ]);

        Product::create([
            'name' => 'Mahir Digital',
            'description' => 'Platform belajar digital marketing',
            'price' => 950000,
            'image' => 'images/produk2.jpg',
            'category_id' => $product->id
        ]);
    }
}
