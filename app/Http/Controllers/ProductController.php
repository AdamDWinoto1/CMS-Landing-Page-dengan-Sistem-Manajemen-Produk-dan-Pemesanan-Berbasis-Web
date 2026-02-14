<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Halaman admin: menampilkan semua produk
     */
    public function index()
    {
        $products = Product::with('category')->get();
        $categories = Category::all();
        return view('admin.products', compact('products', 'categories'));
    }

    /**
     * Simpan produk baru
     */
    public function store(Request $request)
    {
        // Validasi input dari form tambah produk
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'discount_type' => 'nullable|in:percentage,nominal',
            'discount_value' => 'nullable|numeric|min:0',
            'link' => 'nullable|url|max:255',
            'link_whatsapp' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Jika ada upload gambar, simpan ke storage
        if ($request->hasFile('image')) {
            $image = $request->file('image');
    $fileName = time() . '_' . $image->getClientOriginalName();
    $destinationPath = public_path('storage/products');
    $image->move($destinationPath, $fileName);
    $validatedData['image'] = 'storage/products/' . $fileName; // simpan path public
        }

        // Simpan produk ke database
        Product::create($validatedData);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan!');
    }

    /**
     * Update produk
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'discount_type' => 'nullable|in:percentage,nominal',
            'discount_value' => 'nullable|numeric|min:0',
            'link' => 'nullable|url|max:255',
            'link_whatsapp' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $product = Product::findOrFail($id);

        // Kalau ada upload gambar baru, hapus gambar lama lalu ganti
        if ($request->hasFile('image')) {
            if ($product->image && file_exists(storage_path('app/public/' . $product->image))) {
                unlink(storage_path('app/public/' . $product->image));
            }
            // $path = $request->file('image')->store('products', 'public');
            // $validatedData['image'] = $path;
            if ($request->hasFile('image')) {
    $image = $request->file('image');
    $fileName = time() . '_' . $image->getClientOriginalName();
    $destinationPath = public_path('storage/products');
    $image->move($destinationPath, $fileName);
    $validatedData['image'] = 'storage/products/' . $fileName; // ✅ simpan path sesuai lokasi sebenarnya
}
        }

        $product->update($validatedData);

        return redirect()->route('products')->with('success', 'Produk berhasil diperbarui!');
    }

    /**
     * Hapus produk
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Hapus gambar dari storage kalau ada
        if ($product->image && file_exists(storage_path('app/public/' . $product->image))) {
            unlink(storage_path('app/public/' . $product->image));
        }

        $product->delete();

        return redirect()->route('products')->with('success', 'Produk berhasil dihapus!');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product-detail', compact('product'));
    }

    public function discounts()
    {
    // Ambil produk yang punya diskon
        $products = Product::with('category')
        ->whereNotNull('discount_type')
        ->where('discount_value', '>', 0)
        ->get();

    return view('admin.discounts', compact('products'));
}

}
