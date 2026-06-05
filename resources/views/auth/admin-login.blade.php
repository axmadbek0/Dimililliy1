@extends('layouts.app')

@section('title', 'Admin Login - Dimilliy')

@section('content')
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card-custom p-5 border-2" style="border-color: var(--primary-pink);">
                    <div class="text-center mb-4">
                        <div class="mb-3">
                            <i class="fas fa-shield-alt fa-3x" style="color: var(--primary-pink);"></i>
                        </div>
                        <h2 class="fw-bold text-gradient">Admin Portal</h2>
                        <p class="text-muted">Authorized personnel only</p>
                    </div>
                    
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Admin Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                   id="email" name="email" value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="password" class="form-label fw-semibold">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                   id="password" name="password" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary-custom w-100 py-3 fw-semibold">
                            <i class="fas fa-lock me-2"></i>Admin Sign In
                        </button>
                    </form>
                    
                    <div class="text-center mt-4">
                        <a href="{{ route('home') }}" class="text-decoration-none text-muted">
                            <i class="fas fa-arrow-left me-1"></i>Back to Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
