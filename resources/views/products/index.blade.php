@extends('layouts.app')

@section('title', 'Products - Dimilliy')

@section('content')
<section class="section-padding">
    <div class="container">
        <!-- Header -->
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-gradient">Our Products</h1>
            <p class="text-muted">Discover our collection of fashion and cosmetics</p>
        </div>
        
        <!-- Filters -->
        <div class="card-custom p-4 mb-4">
            <div class="row g-3 align-items-end">
                <div class="col-lg-4">
                    <label class="form-label fw-semibold">Search</label>
                    <form action="{{ route('products.index') }}" method="GET">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control search-input" 
                                   placeholder="Search products..." value="{{ request('search') }}">
                            <button type="submit" class="btn btn-primary-custom">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <label class="form-label fw-semibold">Category</label>
                    <form action="{{ route('products.index') }}" method="GET" id="categoryForm">
                        <select name="category" class="form-select" onchange="this.form.submit()">
                            <option value="">All Categories</option>
                            @foreach($categories as $category)
                                <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>
                                    {{ $category }}
                                </option>
                            @endforeach
                        </select>
                        @if(request('search'))
                            <input type="hidden" name="search" value="{{ request('search') }}">
                        @endif
                    </form>
                </div>
                <div class="col-lg-5 text-lg-end">
                    @if(request('search') || request('category'))
                        <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-times me-1"></i>Clear Filters
                        </a>
                    @endif
                    <span class="ms-2 text-muted">Showing {{ $products->count() }} of {{ $products->total() }} products</span>
                </div>
            </div>
        </div>
        
        <!-- Products Grid -->
        @if($products->count() > 0)
            <div class="row g-4">
                @foreach($products as $product)
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="card-custom h-100 position-relative">
                        @if($product->is_special)
                            <span class="badge badge-special position-absolute top-0 end-0 m-2 text-white" style="z-index: 1;">Special</span>
                        @elseif($product->is_top)
                            <span class="badge badge-top position-absolute top-0 end-0 m-2 text-white" style="z-index: 1;">Top</span>
                        @endif
                        
                        <div class="position-relative overflow-hidden">
                            <img src="{{ $product->image_url }}" 
                                 alt="{{ $product->name }}" 
                                 class="product-image w-100">
                            <div class="position-absolute bottom-0 start-0 end-0 p-2 bg-gradient-dark opacity-0 hover-opacity-100 transition-all" 
                                 style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                                <a href="{{ route('products.show', $product) }}" class="btn btn-light btn-sm w-100">
                                    Quick View
                                </a>
                            </div>
                        </div>
                        
                        <div class="p-3">
                            <small class="text-muted text-uppercase" style="font-size: 0.7rem;">
                                @if($product->category)
                                    {{ $product->category->name }}
                                @else
                                    Uncategorized
                                @endif
                            </small>
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
                                @if($product->stock_quantity > 0)
                                    <form action="{{ route('cart.add', $product) }}" method="POST">
                                        @csrf
                                        <div class="d-flex gap-2">
                                            <input type="number" name="quantity" value="1" min="1" 
                                                   max="{{ $product->stock_quantity }}" 
                                                   class="form-control form-control-sm" style="width: 60px;">
                                            <button type="submit" class="btn btn-primary-custom btn-sm flex-fill">
                                                <i class="fas fa-cart-plus me-1"></i>Add
                                            </button>
                                        </div>
                                    </form>
                                @else
                                    <button class="btn btn-secondary btn-sm w-100" disabled>
                                        <i class="fas fa-times me-1"></i>Out of Stock
                                    </button>
                                @endif
                            @else
                                <a href="{{ route('login') }}" class="btn btn-outline-dark btn-sm w-100">
                                    <i class="fas fa-sign-in-alt me-1"></i>Login to Buy
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Pagination -->
            <div class="mt-5">
                {{ $products->withQueryString()->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-search fa-4x text-muted mb-3"></i>
                <h4 class="text-muted">No products found</h4>
                <p class="text-muted">Try adjusting your search or filters</p>
                <a href="{{ route('products.index') }}" class="btn btn-primary-custom">
                    View All Products
                </a>
            </div>
        @endif
    </div>
</section>
@endsection

@section('styles')
<style>
    .pagination {
        justify-content: center;
    }
    .pagination .page-link {
        color: var(--primary-pink);
        border-color: var(--soft-pink);
    }
    .pagination .page-item.active .page-link {
        background-color: var(--primary-pink);
        border-color: var(--primary-pink);
    }
</style>
@endsection
