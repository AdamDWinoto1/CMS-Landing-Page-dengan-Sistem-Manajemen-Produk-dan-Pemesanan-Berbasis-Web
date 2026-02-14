<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Discount; // kalau kamu punya model diskon

class AdminController extends Controller
{
    public function index()
    {
        // hitung semua data
        $totalProducts = Product::count();
        $totalCategories = Category::count();
        $totalDiscounts = Product::whereNotNull('discount_type')
                                ->where('discount_value', '>', 0)
                                ->count();

        // nanti dikirim ke blade
        return view('admin.index', compact('totalProducts', 'totalCategories', 'totalDiscounts'));
    }
}
