@extends('layouts.app')

@section('title', 'About Us - Dimilliy')

@section('content')
<section class="hero-gradient py-5">
    <div class="container text-center text-white py-5">
        <h1 class="display-4 fw-bold">Biz haqimizda</h1>
        <p class="lead opacity-90">An'analar zamonaviy nafislik bilan uchrashadigan joyda</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1558171813-4c088753af8f?w=600&h=500&fit=crop" 
                     alt="Our Story" class="img-fluid rounded-4 shadow-lg">
            </div>
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold text-gradient mb-4">Bizning hikoyamiz</h2>
                    <p class="text-muted mb-4">Uzbek madaniyati asoslarini saqlash va zamonaviy kishilik trendlarini qabul qilish bilan birga o'rnatilgan, Dimilliy ayrim xotirali xonalarda xotirali xonalarda xotirali xonalarda xotirali xonalarda xotirali xonalarda xotirali xonalarda xotirali xonalarda xotirali xonalarda xotirali xonalarda xotirali xonalarda xotirali xonalarda xotirali xonalarda xotirali xonalarda xotirali xonalarda xotirali xonalarda xotirali xonalarda xotirali xonalarda xotirali xonalarda xotirali	xonalarda	xotirali	xonalarda	xotirali	xonalarda	xotirali	xonalarda	xotirali	xonalarda	xotirali	xonalarda	xotirali	xonalarda	xotirали	xонарда	хотирали	хонарда	хотирали	хонарда	хотирали	хонарда	хотирали	хонарда	хотирали	хонарда	хотирали	хонарда	хотирали	хонарда	хотирали	хонарда	хотирали	хонарда	хотирали	хонарда	хотирали	хонарда	хотирали	хонарда	хотирали	хонарда	хотирали	хонарда	хотирали	хонарда	хотирали	хонарда	хотирали	хонарда	хотирали	хонарда	хотирали	хонарда	 хо ти ра ли хо на р да хо ти ра ли хо на р да хо ти ра ли хо на р да хо ти ра ли хо на р да хо ти ра ли хо на р да хо ти ра ли хо на р да хо ти ра ли хо на р да хо ти ра ли хо на р да хо ти ра ли хо на р да хо ти ра ли хo нa p дa хo тi p дa ho t i r a l i h o n a r d a h o t i r a l i h o n a r d a h o t i r a l i h o n a r d a h o t i r a l i h o n a r d a h o t i r a l i h o n a r d a h o t i r a l i h o n a r d a h o t i r a l i h o n a r d a h o t i r a l i h o n a r d a h o t i r а л и	h о н а	r д	a	h о т	i	r а	l и	h о н	a	r д	a	h о т	i	r а	l и	h о н	a	r д	a	h о т	i	r а	l и	h о н	a	r д	a	h о т	i	r а	l и	h о н	a	r д	a	h о т	i	r а	l и	h о н	a	r д	a	h о т	i	r а	l и	h о н	a	r д	a	h о т	i	r а	l и	h о н<a href="{{ route('products.index') }}" class="btn btn-primary-custom px-5 py-3">
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
                    <p class="text-muted small mb-0">100% Xavfsiz checkout</p>
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
                    <p class="text-muted small mb-0">Yordam Xizmati 24 soat davomida</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding" style="background: linear-gradient(135deg, #fff5f7, #ffffff);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-gradient">Bizning qadriyatlarimiz</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="card-custom p-4 text-center h-100">
                    <div class="mb-3">
                        <i class="fas fa-heart fa-3x" style="color: var(--primary-pink);"></i>
                    </div>
                    <h5 class="fw-bold">Haqiqiylik</h5>
                    <p class="text-muted">Biz an'anaviy hunarmandchilikni qadrlaymiz va ishonchli hunarmandlardan asl mahsulotlarni sotib olamiz.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-custom p-4 text-center h-100">
                    <div class="mb-3">
                        <i class="fas fa-gem fa-3x" style="color: var(--primary-pink);"></i>
                    </div>
                    <h5 class="fw-bold">Sifat</h5>
                    <p class="text-muted">Har bir mahsulot bizning yuqori standartlarimizga javob beradigan qat'iy sifat tekshiruvlaridan o'tkaziladi.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-custom p-4 text-center h-100">
                    <div class="mb-3">
                        <i class="fas fa-users fa-3x" style="color: var(--primary-pink);"></i>
                    </div>
                    <h5 class="fw-bold">Jamiyat</h5>
                    <p class="text-muted">Biz mahalliy hunarmandlarni qo'llab-quvvatlaymiz va madaniy erkinlikni saqlashda his qo'shamiz.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
