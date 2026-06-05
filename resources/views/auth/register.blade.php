@extends('layouts.app')

@section('title', 'Register - Dimilliy')

@section('content')
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card-custom p-5">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold text-gradient">Akkaunt yaratish</h2>
                        <p class="text-muted">Maxfiylik siyosati bilan tanishib chiqing</p>
                    </div>
                    
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="first_name" class="form-label fw-semibold">First Name *</label>
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" 
                                       id="first_name" name="first_name" value="{{ old('first_name') }}" required autofocus
                                       placeholder="John">
                                @error('first_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="last_name" class="form-label fw-semibold">Last Name *</label>
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror" 
                                       id="last_name" name="last_name" value="{{ old('last_name') }}" required
                                       placeholder="Doe">
                                @error('last_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email Address *</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                   id="email" name="email" value="{{ old('email') }}" required
                                   placeholder="example@email.com">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label fw-semibold">Password *</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                       id="password" name="password" required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="password_confirmation" class="form-label fw-semibold">Confirm Password *</label>
                                <input type="password" class="form-control" 
                                       id="password_confirmation" name="password_confirmation" required>
                            </div>
                        </div>
                        
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                            <label class="form-check-label" for="terms">
                                I agree to the <a href="#" style="color: var(--primary-pink);">Terms & Conditions</a>
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary-custom w-100 py-3 fw-semibold">
                            Create Account <i class="fas fa-user-plus ms-2"></i>
                        </button>
                    </form>
                    
                    <div class="text-center mt-4">
                        <p class="text-muted mb-2">Already have an account?</p>
                        <a href="{{ route('login') }}" class="text-decoration-none fw-semibold" style="color: var(--primary-pink);">
                            Sign In
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@section('scripts')
<script>
    // Form validation
    document.querySelector('form').addEventListener('submit', function(e) {
        const password = document.getElementById('password').value;
        const confirm = document.getElementById('password_confirmation').value;
        
        if (password !== confirm) {
            e.preventDefault();
            alert('Passwords do not match!');
        }
    });
</script>
@endsection
@endsection
