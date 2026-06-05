@extends('layouts.app')

@section('title', 'Contact Us - Dimilliy')

@section('content')
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-gradient">Contact Us</h1>
            <p class="text-muted">We're here to help you</p>
        </div>
        
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="card-custom p-4 mb-4">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="bg-pink-100 rounded-3 p-3" style="background: var(--soft-pink);">
                            <i class="fas fa-map-marker-alt fs-4" style="color: var(--primary-pink);"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Address</h6>
                            <p class="text-muted mb-0">Tashkent, Uzbekistan</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="bg-pink-100 rounded-3 p-3" style="background: var(--soft-pink);">
                            <i class="fas fa-phone fs-4" style="color: var(--primary-pink);"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Phone</h6>
                            <p class="text-muted mb-0">+998 90 123 45 67</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-pink-100 rounded-3 p-3" style="background: var(--soft-pink);">
                            <i class="fas fa-envelope fs-4" style="color: var(--primary-pink);"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Email</h6>
                            <p class="text-muted mb-0">info@dimilliy.uz</p>
                        </div>
                    </div>
                </div>
                
                <div class="card-custom p-4">
                    <h6 class="fw-bold mb-3">Ish vaqti</h6>
                    <h4>24/7</h4>
                    <h5>Dushanbadan - Yakshanba</h5>
                </div>
            </div>
            
            <div class="col-lg-8">
                <div class="card-custom p-4">
                    <h5 class="fw-bold mb-4">Xabar yuborish</h5>
                    
                    @if(session('success'))
                        <div class="alert alert-success mb-4">
                            <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                        </div>
                    @endif
                    
                    @if($errors->any())
                        <div class="alert alert-danger mb-4">
                            @foreach($errors->all() as $error)
                                <div><i class="fas fa-exclamation-circle me-2"></i>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif
                    
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Ismingiz</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="John Doe" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="john@example.com" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Mavzu</label>
                            <input type="text" name="subject" class="form-control" value="{{ old('subject') }}" placeholder="How can we help?" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Xabar</label>
                            <textarea name="message" class="form-control" rows="5" placeholder="Your message..." required>{{ old('message') }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary-custom px-5 py-2">
                            Xabar yuborish <i class="fas fa-paper-plane ms-2"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
