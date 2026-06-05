@extends('layouts.app')

@section('title', 'Checkout - Dimilliy')

@section('content')
<section class="section-padding">
    <div class="container">
        <h1 class="display-5 fw-bold text-gradient mb-4">Yetkazib berish</h1>
        
        <div class="row g-4">
            <!-- Checkout Form -->
            <div class="col-lg-8">
                <div class="card-custom p-4">
                    <h5 class="fw-bold mb-4">Yetkazib berish ma'lumotlari</h5>
                    
                    <form action="{{ route('orders.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="shipping_address" class="form-label fw-semibold">Yetkazib berish manzili *</label>
                            <textarea class="form-control @error('shipping_address') is-invalid @enderror" 
                                      id="shipping_address" name="shipping_address" rows="3" required>{{ old('shipping_address', auth()->user()->address) }}</textarea>
                            @error('shipping_address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="phone" class="form-label fw-semibold">Aloqa telefon raqami *</label>
                            <input type="tel" class="form-control @error('phone') is-invalid @enderror" 
                                   id="phone" name="phone" value="{{ old('phone', auth()->user()->phone) }}" required>
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="notes" class="form-label fw-semibold">Buyurtma izohlari (Ixtiyoriy)</label>
                            <textarea class="form-control @error('notes') is-invalid @enderror" 
                                      id="notes" name="notes" rows="2" 
                                      placeholder="Any special instructions...">{{ old('notes') }}</textarea>
                            @error('notes')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <h5 class="fw-bold mb-3">To'lov usuli</h5>
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            Buyurtma qo'yilgach, siz bizning xavfsiz sandbox to'lov gateway'imizga yo'naltirilasiz.
                        </div>
                        
                        <button type="submit" class="btn btn-primary-custom w-100 py-3 fw-semibold">
                             Buyurtma berish <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Order Summary -->
            <div class="col-lg-4">
                <div class="card-custom p-4">
                    <h5 class="fw-bold mb-4">Buyurtma xulosa</h5>
                    
                    @foreach($cartItems as $item)
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">
                            {{ Str::limit($item->product->name, 25) }} x {{ $item->quantity }}
                        </span>
                        <span>{{ number_format($item->total, 0, ',', ' ') }} UZS</span>
                    </div>
                    @endforeach
                    
                    <hr>
                    
                    <div class="d-flex justify-content-between mb-2">
                        <span>Jami</span>
                        <span>{{ number_format($total, 0, ',', ' ') }} UZS</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Yetkazib berish</span>
                        <span class="text-success">Viloyatlar uchun pochta orqali</span><span>Toshkent shaxri ichida bo'lsa yandex orqali yetkazib berish mumkin</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span class="fw-bold fs-5">Total</span>
                        <span class="fw-bold fs-5" style="color: var(--primary-pink);">
                            {{ number_format($total, 0, ',', ' ') }} UZS
                        </span>
                    </div>
                </div>
                
                <div class="mt-3">
                    <a href="{{ route('cart.index') }}" class="btn btn-outline-dark w-100">
                        <i class="fas fa-arrow-left me-2"></i>Savatga qaytish
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
