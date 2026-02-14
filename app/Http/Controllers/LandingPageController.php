<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class LandingPageController extends Controller
{
    public function index() {
        // // ambil kategori
        // $categories = Category::all();

        // // untuk setiap kategori, ambil 4 produk berdasarkan nama kategori
        // foreach ($categories as $category) {
        //     $category->products = Product::where('category_id', $category->name)->take(4)->get();
        // }
        // Ambil semua kategori beserta produk
        $categories = Category::with('products')->get();
        $products = Product::all(); // ambil semua produk

        return view('welcome', compact('categories', 'products'));
    }
}
