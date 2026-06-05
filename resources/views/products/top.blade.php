@extends('layouts.app')

@section('title', 'Top Products - Dimilliy')

@section('content')
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="text-uppercase text-muted small fw-semibold tracking-wider">Most Popular</span>
            <h1 class="display-4 fw-bold text-gradient mt-2">Top Products</h1>
            <p class="text-muted mx-auto" style="max-width: 600px;">Customer favorites that everyone loves. These are our best-selling items loved by thousands.</p>
        </div>
        
        @if($products->count() > 0)
            <div class="row g-4">
                @foreach($products as $product)
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="card-custom h-100 position-relative">
                        <span class="badge badge-top position-absolute top-0 end-0 m-2 text-white" style="z-index: 1;">Top Rated</span>
                        
                        <img src="{{ $product->image_url }}" 
                             alt="{{ $product->name }}" 
                             class="product-image w-100">
                        
                        <div class="p-3">
                            <small class="text-muted text-uppercase" style="font-size: 0.7rem;">{{ $product->category }}</small>
                            <h6 class="fw-bold mt-1 mb-2" style="height: 40px; overflow: hidden;">{{ $product->name }}</h6>
                            <p class="text-muted small mb-2" style="height: 36px; overflow: hidden; font-size: 0.8rem;">
                                {{ Str::limit($product->description, 50) }}
                            </p>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-bold" style="color: var(--primary-pink); font-size: 1rem;">
                                    {{ number_format($product->price, 0, ',', ' ') }} UZS
                                </span>
                                <small class="text-muted">{{ $product->stock_quantity }} in stock</small>
                            </div>
                            
                            @auth
                                <form action="{{ route('cart.add', $product) }}" method="POST">
                                    @csrf
                                    <div class="d-flex gap-2">
                                        <input type="number" name="quantity" value="1" min="1" 
                                               max="{{ $product->stock_quantity }}" 
                                               class="form-control form-control-sm" style="width: 60px;">
                                        <button type="submit" class="btn btn-primary-custom btn-sm flex-fill" 
                                                {{ $product->stock_quantity < 1 ? 'disabled' : '' }}>
                                            <i class="fas fa-cart-plus me-1"></i>Add
                                        </button>
                                    </div>
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-outline-dark btn-sm w-100" onclick="alert('Please login to continue');">
                                    <i class="fas fa-sign-in-alt me-1"></i>Login to Buy
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="mt-5">
                {{ $products->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-star fa-4x text-muted mb-3"></i>
                <h4 class="text-muted">No top products available</h4>
                <p class="text-muted">Check back soon for our popular items</p>
                <a href="{{ route('products.index') }}" class="btn btn-primary-custom">
                    Browse All Products
                </a>
            </div>
        @endif
    </div>
</section>
@endsection
