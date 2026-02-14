@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="flex flex-col md:flex-row gap-8">
        <!-- Gambar Produk -->
        <div class="flex-1">
            <!-- <img src="{{ asset('storage/' . $product->image) }}" file lama -->
             <img src="{{ asset($product->image) }}" 
                 alt="{{ $product->name }}" 
                 class="rounded-xl shadow-md w-full">
        </div>

        <!-- Info Produk -->
        <div class="flex-1">
            <h1 class="text-2xl font-bold mb-2">{{ $product->name }}</h1>

            @php
                $price = $product->price;
                $finalPrice = $price;
                $discountText = null;

                if ($product->discount_type === 'percentage' && $product->discount_value > 0) {
                    $finalPrice = $price - ($price * $product->discount_value / 100);
                    $discountText = $product->discount_value . '%';
                } elseif ($product->discount_type === 'nominal' && $product->discount_value > 0) {
                    $finalPrice = $price - $product->discount_value;
                    $discountText = 'Rp ' . number_format($product->discount_value, 0, ',', '.');
                }
            @endphp

            <div class="mb-3">
                @if($discountText)
                    <span class="text-gray-500 line-through">Rp {{ number_format($price, 0, ',', '.') }}</span>
                    <span class="ml-2 text-red-500 font-bold">{{ $discountText }}</span>
                @endif
            </div>

            <div class="text-3xl font-extrabold text-green-600 mb-4">
                Rp {{ number_format($finalPrice, 0, ',', '.') }}
            </div>

            <p class="mb-4">{{ $product->description }}</p>

            <div class="flex gap-4">
                <button class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300">
                    Tanya Mas Kas
                </button>
                <button class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Beli Sekarang
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
