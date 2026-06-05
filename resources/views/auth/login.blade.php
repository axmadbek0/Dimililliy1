@extends('layouts.app')

@section('title', 'Login - Dimilliy')

@section('content')
<section class="section-padding">
    <div class="container">
           <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card-custom p-5 shadow-lg">
                    <div class="text-center mb-4">
                        <div class="mb-3">
                            <i class="fas fa-user-circle fa-4x" style="color: var(--primary-pink);"></i>
                        </div>
                        <h2 class="fw-bold text-gradient">Xush kelibsiz</h2>
                        <p class="text-muted">Shopping davom etish uchun tizimga kiring</p>
                    </div>
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="fas fa-envelope text-muted"></i></span>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                       id="email" name="email" value="{{ old('email') }}" required autofocus
                                       placeholder="your@email.com">
                            </div>
                            @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">Parol</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="fas fa-lock text-muted"></i></span>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                       id="password" name="password" required placeholder="••••••••">
                            </div>
                            @error('password')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-4 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Meni eslab qol</label>
                            </div>
                            <a href="#" class="text-decoration-none small" style="color: var(--primary-pink);">Parolingizni unutdingizmi?</a>
                        </div>
                        
                        <button type="submit" class="btn btn-primary-custom w-100 py-3 fw-semibold shadow-sm">
                            Sign In <i class="fas fa-sign-in-alt ms-2"></i>
                        </button>
                    </form>
                    
                    <div class="text-center mt-4">
                        <p class="text-muted mb-2">Hisobingiz yo'qmi?</p>
                        <a href="{{ route('register') }}" class="text-decoration-none fw-semibold" style="color: var(--primary-pink);">
                            Hisob yaratish <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
