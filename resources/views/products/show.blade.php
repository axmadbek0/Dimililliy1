@extends('layouts.app')

@section('title', $product->name . ' - Dimilliy')

@section('content')
<section class="section-padding">
    <div class="container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></li>
                <li class="breadcrumb-item active">{{ $product->name }}</li>
            </ol>
        </nav>
        
        <div class="row g-5">
            <!-- Product Image -->
            <div class="col-lg-6">
                <div class="card-custom p-3">
                    <img src="{{ $product->image_url }}" 
                         alt="{{ $product->name }}" 
                         class="img-fluid rounded-4 w-100"
                         style="max-height: 500px; object-fit: cover;">
                    @if($product->is_special || $product->is_top)
                        <div class="position-absolute top-0 end-0 m-4">
                            @if($product->is_special)
                                <span class="badge badge-special text-white mb-1 d-block">Special</span>
                            @endif
                            @if($product->is_top)
                                <span class="badge badge-top text-white d-block">Top Rated</span>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
            
            <!-- Product Details -->
            <div class="col-lg-6">
                <span class="badge bg-light text-dark mb-2">
                    @if($product->category)
                        {{ $product->category->name }}
                    @else
                        Uncategorized
                    @endif
                </span>
                <h1 class="display-5 fw-bold mb-3">{{ $product->name }}</h1>
                
                <div class="d-flex align-items-center gap-3 mb-4">
                    <span class="fs-2 fw-bold" style="color: var(--primary-pink);">
                        {{ number_format($product->price, 0, ',', ' ') }} UZS
                    </span>
                    <span class="text-muted">|</span>
                    <span class="text-muted">
                        @if($product->stock_quantity > 10)
                            <span class="text-success"><i class="fas fa-check-circle me-1"></i>In Stock ({{ $product->stock_quantity }})</span>
                        @elseif($product->stock_quantity > 0)
                            <span class="text-warning"><i class="fas fa-exclamation-circle me-1"></i>Only {{ $product->stock_quantity }} left</span>
                        @else
                            <span class="text-danger"><i class="fas fa-times-circle me-1"></i>Out of Stock</span>
                        @endif
                    </span>
                </div>
                
                <p class="text-muted mb-4" style="line-height: 1.8;">{{ $product->description }}</p>
                
                @auth
                    @if($product->stock_quantity > 0)
                        <form action="{{ route('cart.add', $product) }}" method="POST" class="mb-4">
                            @csrf
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label class="fw-semibold">Quantity:</label>
                                    <input type="number" name="quantity" value="1" min="1" 
                                           max="{{ $product->stock_quantity }}" 
                                           class="form-control" style="width: 80px;">
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary-custom btn-lg px-5">
                                        <i class="fas fa-cart-plus me-2"></i>Add to Cart
                                    </button>
                                </div>
                            </div>
                        </form>
                    @else
                        <button class="btn btn-secondary btn-lg mb-4" disabled>
                            <i class="fas fa-times me-2"></i>Out of Stock
                        </button>
                    @endif
                @else
                    <div class="alert alert-info mb-4">
                        <i class="fas fa-info-circle me-2"></i>Please <a href="{{ route('login') }}">login</a> to add items to your cart.
                    </div>
                @endauth
                
                <div class="d-flex gap-3 mb-4">
                    <div class="d-flex align-items-center gap-2 text-muted">
                        <i class="fas fa-truck"></i>
                        <small>Free shipping over 500K UZS</small>
                    </div>
                    <div class="d-flex align-items-center gap-2 text-muted">
                        <i class="fas fa-undo"></i>
                        <small>30-day returns</small>
                    </div>
                </div>
                
                <!-- Share -->
                <div class="border-top pt-3">
                    <small class="text-muted">Share:</small>
                    <div class="d-flex gap-2 mt-2">
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle"><i class="fab fa-telegram"></i></a>
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Related Products -->
        @if($relatedProducts->count() > 0)
        <div class="mt-5 pt-5 border-top">
            <h3 class="fw-bold mb-4">Related Products</h3>
            <div class="row g-4">
                @foreach($relatedProducts as $related)
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="card-custom h-100">
                        <img src="{{ $related->image_url }}" 
                             alt="{{ $related->name }}" 
                             class="product-image w-100">
                        <div class="p-3">
                            <small class="text-muted text-uppercase" style="font-size: 0.7rem;">{{ $related->category }}</small>
                            <h6 class="fw-bold mt-1 mb-2" style="height: 40px; overflow: hidden;">{{ $related->name }}</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold" style="color: var(--primary-pink); font-size: 0.9rem;">
                                    {{ number_format($related->price, 0, ',', ' ') }} UZS
                                </span>
                                <a href="{{ route('products.show', $related) }}" class="btn btn-sm btn-outline-dark rounded-pill">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>
@endsection
