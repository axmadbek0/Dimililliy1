@extends('layouts.app')

@section('title', 'Shopping Cart - Dimilliy')

@section('content')
<section class="section-padding">
    <div class="container">
        <h1 class="display-5 fw-bold text-gradient mb-4">Savat</h1>
        
        @if($cartItems->count() > 0)
            <div class="row g-4">
                <!-- Cart Items -->
                <div class="col-lg-8">
                    <div class="card-custom">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cartItems as $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="{{ $item->product->image_url }}" 
                                                     alt="{{ $item->product->name }}" 
                                                     class="rounded" style="width: 60px; height: 60px; object-fit: cover;">
                                                <div>
                                                    <h6 class="mb-1">{{ $item->product->name }}</h6>
                                                    <small class="text-muted">
                                                        @if($item->product->category)
                                                            {{ $item->product->category->name }}
                                                        @else
                                                            Uncategorized
                                                        @endif
                                                    </small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ number_format($item->product->price, 0, ',', ' ') }} UZS</td>
                                        <td>
                                            <form action="{{ route('cart.update', $item) }}" method="POST" class="d-flex align-items-center gap-2">
                                                @csrf
                                                @method('PUT')
                                                <input type="number" name="quantity" value="{{ $item->quantity }}" 
                                                       min="1" max="{{ $item->product->stock_quantity }}" 
                                                       class="form-control form-control-sm" style="width: 70px;">
                                                <button type="submit" class="btn btn-sm btn-outline-primary">
                                                    <i class="fas fa-sync"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td class="fw-bold" style="color: var(--primary-pink);">
                                            {{ number_format($item->total, 0, ',', ' ') }} UZS
                                        </td>
                                        <td>
                                            <form action="{{ route('cart.remove', $item) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Remove this item?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-between mt-3">
                        <a href="{{ route('products.index') }}" class="btn btn-outline-dark">
                            <i class="fas fa-arrow-left me-2"></i>Continue Shopping
                        </a>
                        <form action="{{ route('cart.clear') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Clear entire cart?')">
                                <i class="fas fa-trash me-2"></i>Clear Cart
                            </button>
                        </form>
                    </div>
                </div>
                
                <!-- Cart Summary -->
                <div class="col-lg-4">
                    <div class="card-custom p-4">
                        <h5 class="fw-bold mb-4">Buyurtma Xususiyatlari</h5>
                        
                        <div class="d-flex justify-content-between mb-2">
                            <span>Tag'il</span>
                            <span>{{ number_format($total, 0, ',', ' ') }} UZS</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Yuk tashish</span>
                            <span class="text-success">Free</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-4">
                            <span class="fw-bold fs-5">Total</span>
                            <span class="fw-bold fs-5" style="color: var(--primary-pink);">
                                {{ number_format($total, 0, ',', ' ') }} UZS
                            </span>
                        </div>
                        
                        <a href="{{ route('orders.create') }}" class="btn btn-primary-custom w-100 py-3 fw-semibold">
                            Checkout <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                        
                        <div class="mt-3 text-center">
                            <small class="text-muted">
                                <i class="fas fa-shield-alt me-1"></i>Maxfiy xaridingiz xavfsizdir
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-shopping-cart fa-4x text-muted mb-3"></i>
                <h4 class="text-muted">Savat bo'sh</h4>
                <p class="text-muted">Boshlash uchun biror mahsulot qo'shing</p>
                <a href="{{ route('products.index') }}" class="btn btn-primary-custom btn-lg">
                    <i class="fas fa-shopping-bag me-2"></i>Xarid qilish
                </a>
            </div>
        @endif
    </div>
</section>
@endsection
