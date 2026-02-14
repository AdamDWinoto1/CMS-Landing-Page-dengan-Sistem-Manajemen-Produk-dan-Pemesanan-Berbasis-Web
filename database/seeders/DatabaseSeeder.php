<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat kategori
        $categories = [
            'Sale',
            'Products',
            'Books',
            'Food',
            'Classes'
        ];

        foreach ($categories as $cat) {
            Category::create(['name' => $cat]);
        }

        // Contoh produk kategori Sale
        Product::create([
            'name' => 'Kitab Franchise Kuliner',
            'description' => 'Cara tembus 473+ Mitra',
            'price' => 199000,
            'discount' => 43,
            'image' => 'franchise.jpg', // taruh gambar di public/images
            'category_id' => 1
        ]);

        // Contoh produk kategori Products
        Product::create([
            'name' => 'Fast Track Leadership',
            'description' => 'Workshop Hebat',
            'price' => 4500000,
            'discount' => 0,
            'image' => 'leadership.jpg', // taruh gambar di public/images
            'category_id' => 2
        ]);
    }
}
