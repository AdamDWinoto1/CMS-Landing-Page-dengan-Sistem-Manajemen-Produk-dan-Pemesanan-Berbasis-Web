@foreach($products as $product)
    <div class="product">
        @if($product->image)
            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" width="150">
        @else
            <img src="https://via.placeholder.com/150?text=No+Image" alt="No Image" width="150">
        @endif
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->description }}</p>
        <p>Rp {{ number_format($product->price, 0, ',', '.') }}</p>
        <a href="#">Beli Sekarang</a>
    </div>
@endforeach

