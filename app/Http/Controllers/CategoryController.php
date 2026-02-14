<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show($id)
    {
        $category = Category::with('products')->findOrFail($id);
        return view('category', compact('category'));
    }

    public function index()
    {
        $categories = Category::all();
        return view('admin.categories', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create($validated);

        return redirect()->route('categories')->with('success', 'Kategori berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::findOrFail($id);
        $category->update($validated);

        return redirect()->route('categories')->with('success', 'Kategori berhasil diperbarui');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories')->with('success', 'Kategori berhasil dihapus');
    }
}
