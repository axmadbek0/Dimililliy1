@extends('layouts.app')

@section('title', 'Dimilliy - Home')

@section('content')
<!-- Hero Section -->
<section class="hero-gradient min-vh-100 d-flex align-items-center position-relative overflow-hidden">
    <div class="position-absolute top-0 end-0 w-50 h-100 opacity-25 d-none d-lg-block" style="overflow: hidden;">
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="w-100 h-100" style="max-width: 100%;">
            <path fill="#FFFFFF" d="M44.7,-76.4C58.8,-69.2,71.8,-59.1,79.6,-46.3C87.4,-33.5,90,-18,89.2,-2.8C88.4,12.4,84.2,27.3,76.3,40.2C68.4,53.1,56.8,64,43.9,71.8C31,79.6,16.8,84.3,1.8,81.3C-13.2,78.3,-26.9,67.6,-39.8,57.6C-52.7,47.6,-64.8,38.3,-72.6,25.8C-80.4,13.3,-83.9,-2.4,-80.6,-16.8C-77.3,-31.2,-67.2,-44.3,-55.1,-52.6C-43,-60.9,-28.9,-64.4,-15.1,-69.1C-1.3,-73.8,12.2,-79.7,26.3,-80.8L44.7,-76.4Z" transform="translate(100 100)" />
        </svg>
    </div>
    
    <div class="container position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-6 text-white">
                <h1 class="display-3 fw-bold mb-4">Sizning go'zalligingiz bizning ilhomimiz</h1>
                <p class="lead mb-4 opacity-90">Dimilliy — har bir ayolning betakror uslubini milliy matolar va zamonaviy bichimlar orqali namoyon etuvchi brend.</p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="{{ route('products.index') }}" class="btn btn-light btn-lg px-4 py-3 fw-semibold">
                        Sotib olish <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                    <a href="{{ route('about') }}" class="btn btn-outline-light btn-lg px-4 py-3">
                            Ko'proq ma'lumot
                        </a>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <div class="position-relative">
                    <div class="rounded-4 shadow-lg overflow-hidden" style="transform: rotate(-3deg);">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&h=700&fit=crop" 
                             alt="Fashion Collection" 
                             class="img-fluid" 
                             style="height: 500px; object-fit: cover;">
                    </div>
                    <div class="position-absolute bottom-0 start-0 bg-white rounded-4 p-3 shadow-lg" style="transform: translate(-20%, 20%);">
                        <div class="d-flex align-items-center gap-2">
                            <div class="bg-success rounded-circle p-2">
                                <i class="fas fa-check text-white"></i>
                            </div>
                            <div>
                                <small class="text-muted d-block">E'tibor qilingan</small>
                                <strong class="text-dark">10,000+ mijozlar</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6">
                        <img src="https://i.pinimg.com/474x/3d/40/d2/3d40d205a70a5600ff1324a6d56dfd3e.jpg" 
                             alt="Fashion" class="img-fluid rounded-4 shadow-lg" style="height: 300px; object-fit: cover;">
                    </div>
                    <div class="col-6 mt-5">
                        <img src="https://i.pinimg.com/474x/3d/40/d2/3d40d205a70a5600ff1324a6d56dfd3e.jpg" 
                             alt="Cosmetics" class="img-fluid rounded-4 shadow-lg" style="height: 300px; object-fit: cover;">
                    </div>
                </div>-
            </div>
            <div class="col-lg-6">
                <span class="text-uppercase text-muted small fw-semibold tracking-wider">Biz haqimizda</span>
                <h2 class="display-5 fw-bold mt-2 mb-4 text-gradient">An'anaviy moda va zamonaviy eleganti</h2>
                <p class="text-muted mb-4">Dimilliy’da biz zamonaviy uslublarni qabul qilgan holda o‘zbek an’anaviy modasining go‘zalligini ulug‘laymiz. Bizning puxta tanlangan kolleksiyamizda mohir hunarmandlar tomonidan yaratilgan asl milliy kiyimlar, shuningdek, tabiiy go‘zalligingizni yanada oshiradigan premium kosmetika mahsulotlari mavjud.</p>
                <div class="row g-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-pink-100 rounded-3 p-3" style="background: var(--soft-pink);">
                                <i class="fas fa-gem fs-4" style="color: var(--primary-pink);"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Yuqori sifat</h6>
                                <small class="text-muted">Qo'l bilan yasalgan</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-pink-100 rounded-3 p-3" style="background: var(--soft-pink);">
                                <i class="fas fa-shipping-fast fs-4" style="color: var(--primary-pink);"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Tez yetkazib berish</h6>
                                <small class="text-muted">Butun mamlakat bo'ylab yetkazib berish</small>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="btn btn-primary-custom mt-4 px-4 py-2">
                    Ko'proq ma'lumot <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Special Products Section -->
@if($specialProducts->count() > 0)
<section class="section-padding" style="background: linear-gradient(135deg, #fff5f7, #ffffff);">
    <div class="container">
        <div class="text-center mb-5">
            <span class="text-uppercase text-muted small fw-semibold">Maxsus kolleksiyamiz</span>
            <h2 class="display-5 fw-bold mt-2 text-gradient">Maxsus mahsulotlar</h2>
            <p class="text-muted mx-auto" style="max-width: 500px;">Elegance va an'anani aniqlaydigan qo'l bilan tanlangan elementlar</p>
        </div>
        
        <div class="row g-4">
            @foreach($specialProducts as $product)
            <div class="col-lg-3 col-md-6">
                <div class="card-custom h-100 position-relative">
                    <span class="badge badge-special position-absolute top-0 end-0 m-3 text-white">Special</span>
                    <img src="{{ $product->image_url }}" 
                         alt="{{ $product->name }}" 
                         class="product-image w-100">
                    <div class="p-4">
                        <small class="text-muted text-uppercase" style="font-size: 0.75rem;">{{ $product->category }}</small>
                        <h5 class="fw-bold mt-1 mb-2">{{ $product->name }}</h5>
                        <p class="text-muted small mb-3" style="height: 40px; overflow: hidden;">{{ Str::limit($product->description, 60) }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fs-5 fw-bold" style="color: var(--primary-pink);">{{ number_format($product->price, 0, ',', ' ') }} UZS</span>
                            <a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-outline-dark rounded-pill px-3">View</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('products.index', ['filter' => 'special']) }}" class="btn btn-primary-custom px-5 py-2">
                View All Special Products
            </a>
        </div>
    </div>
</section>
@endif

<!-- Top Products Section -->
@if($topProducts->count() > 0)
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <span class="text-uppercase text-muted small fw-semibold">Eng ko'p sotiladigan</span>
            <h2 class="display-5 fw-bold mt-2 text-gradient">Top mahsulotlar</h2>
            <p class="text-muted mx-auto" style="max-width: 500px;">Barcha kishilar sevimli mijozlar</p>
        </div>
        
        <div class="row g-4">
            @foreach($topProducts as $product)
            <div class="col-lg-3 col-md-6">
                <div class="card-custom h-100 position-relative">
                    <span class="badge badge-top position-absolute top-0 end-0 m-3 text-white">Top Rated</span>
                    <img src="{{ $product->image_url }}" 
                         alt="{{ $product->name }}" 
                         class="product-image w-100">
                    <div class="p-4">
                        <small class="text-muted text-uppercase" style="font-size: 0.75rem;">{{ $product->category }}</small>
                        <h5 class="fw-bold mt-1 mb-2">{{ $product->name }}</h5>
                        <p class="text-muted small mb-3" style="height: 40px; overflow: hidden;">{{ Str::limit($product->description, 60) }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fs-5 fw-bold" style="color: var(--primary-pink);">{{ number_format($product->price, 0, ',', ' ') }} UZS</span>
                            <a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-outline-dark rounded-pill px-3">View</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('products.index', ['filter' => 'top']) }}" class="btn btn-primary-custom px-5 py-2">
                Barcha top mahsulotlarni ko'rish
            </a>
        </div>
    </div>
</section>
@endif

<!-- All Products Preview Section -->
<section class="section-padding" style="background: linear-gradient(135deg, #f8f9fa, #ffffff);">
    <div class="container">
        <div class="text-center mb-5">
            <span class="text-uppercase text-muted small fw-semibold">Barcha mahsulotlar</span>
            <h2 class="display-5 fw-bold mt-2 text-gradient">Barcha mahsulotlarni ko'rish</h2>
            <p class="text-muted mx-auto" style="max-width: 500px;">Bizning barcha kengaytirilgan kengashi</p>
        </div>
        
        <div class="row g-4">
            @foreach($allProducts as $product)
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card-custom h-100">
                    @if($product->is_special)
                        <span class="badge badge-special position-absolute top-0 end-0 m-2 text-white" style="z-index: 1;">Special</span>
                    @elseif($product->is_top)
                        <span class="badge badge-top position-absolute top-0 end-0 m-2 text-white" style="z-index: 1;">Top</span>
                    @endif
                    <img src="{{ $product->image_url }}" 
                         alt="{{ $product->name }}" 
                         class="product-image w-100">
                    <div class="p-3">
                        <small class="text-muted text-uppercase" style="font-size: 0.7rem;">{{ $product->category }}</small>
                        <h6 class="fw-bold mt-1 mb-1" style="height: 40px; overflow: hidden;">{{ $product->name }}</h6>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold" style="color: var(--primary-pink); font-size: 0.9rem;">{{ number_format($product->price, 0, ',', ' ') }} UZS</span>
                            @auth
                                <form action="{{ route('cart.add', $product) }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="submit" class="btn btn-sm btn-primary-custom rounded-pill">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-sm btn-outline-dark rounded-pill">
                                    <i class="fas fa-plus"></i>
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('products.index') }}" class="btn btn-primary-custom px-5 py-3">
                Barcha mahsulotlarni ko'rish <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="section-padding">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-lg-3 col-md-6">
                <div class="p-4 rounded-4" style="background: var(--soft-pink);">
                    <i class="fas fa-truck fa-3x mb-3" style="color: var(--primary-pink);"></i>
                    <h5 class="fw-bold">Hohlagan manzilingizga yetkazib berish</h5>
                    <p class="text-muted small mb-0">500,000 UZS dan yuqori buyurtmalar uchun</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="p-4 rounded-4" style="background: #f0f9ff;">
                    <i class="fas fa-shield-alt fa-3x mb-3 text-primary"></i>
                    <h5 class="fw-bold">Xavfsiz to'lov</h5>
                    <p class="text-muted small mb-0">100% xavfsiz checkout</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="p-4 rounded-4" style="background: #f5f3ff;">
                    <i class="fas fa-undo fa-3x mb-3 text-purple"></i>
                    <h5 class="fw-bold">Oson qaytarish</h5>
                    <p class="text-muted small mb-0">30-kunlik qaytarish siyosati</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="p-4 rounded-4" style="background: #fff7ed;">
                    <i class="fas fa-headset fa-3x mb-3" style="color: var(--warm-gold);"></i>
                    <h5 class="fw-bold">24/7 Qo'llab-quvvatlash</h5>
                    <p class="text-muted small mb-0">Yordam xizmati 24 soat davomida</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
