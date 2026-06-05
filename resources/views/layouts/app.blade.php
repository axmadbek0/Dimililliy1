<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dimilliy - Women\'s Fashion & Cosmetics')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-pink: #ff6b9d;
            --soft-pink: #ffe4ec;
            --deep-rose: #c44569;
            --warm-gold: #d4a574;
            --soft-cream: #faf7f2;
            --elegant-gray: #6c5b7b;
        }
        
        * {
            font-family: 'Poppins', sans-serif;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }
        
        body {
            background-color: var(--soft-cream);
            overflow-x: hidden;
        }
        
        .btn-primary-custom {
            background: linear-gradient(135deg, var(--primary-pink), var(--deep-rose));
            border: none;
            color: white;
            transition: all 0.3s ease;
        }
        
        .btn-primary-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 107, 157, 0.3);
            color: white;
        }
        
        .card-custom {
            background: white;
            border-radius: 16px;
            border: none;
            transition: all 0.3s ease;
        }
        
        .card-custom:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px hsla(0, 0%, 0%, 0.00);
        }
        
        .navbar-custom {
            background: #ffffff !important;
            border-bottom: 2px solid var(--soft-pink) !important;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15) !important;
        }
        
        .navbar-custom .nav-link {
            font-weight: 600 !important;
            color: #222222 !important;
            padding: 0.75rem 1rem !important;
            transition: all 0.3s ease;
            position: relative;
            font-size: 0.95rem;
        }
        
        .navbar-custom .nav-link:hover {
            color: var(--primary-pink) !important;
        }
        
        .navbar-custom .nav-link.active {
            color: var(--primary-pink) !important;
        }
        
        .navbar-custom .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 1rem;
            right: 1rem;
            height: 3px;
            background: var(--primary-pink);
            border-radius: 2px;
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, var(--soft-pink) 0%, var(--primary-pink) 50%, var(--deep-rose) 100%);
        }
        
        .section-padding {
            padding: 80px 0;
        }
        
        .footer-custom {
            background: linear-gradient(135deg, #2d3436, var(--elegant-gray));
        }
        
        .text-gradient {
            background: linear-gradient(135deg, var(--primary-pink), var(--deep-rose));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .badge-special {
            background: linear-gradient(135deg, var(--warm-gold), #e8a87c);
        }
        
        .badge-top {
            background: linear-gradient(135deg, var(--primary-pink), var(--deep-rose));
        }
        
        @media (max-width: 768px) {
            .section-padding {
                padding: 40px 0;
            }
            
            .navbar-custom .navbar-collapse {
                background: #ffffff !important;
                padding: 1rem;
                border-radius: 0 0 16px 16px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.15);
                border: 2px solid var(--soft-pink);
                border-top: none;
            }
            
            .navbar-custom .nav-link {
                font-weight: 600 !important;
                color: #222222 !important;
                padding: 0.75rem 1rem !important;
                border-bottom: 1px solid var(--soft-pink);
            }
            
            .navbar-custom .nav-link:last-child {
                border-bottom: none;
            }
        }
        
        .product-image {
            height: 250px;
            object-fit: cover;
            border-radius: 12px 12px 0 0;
        }
        
        .search-input {
            border: 2px solid var(--soft-pink);
            border-radius: 50px;
            padding: 12px 25px;
        }
        
        .search-input:focus {
            border-color: var(--primary-pink);
            box-shadow: 0 0 0 3px rgba(255, 107, 157, 0.1);
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 16px;
            width: 100%;
        }
        
        @media (min-width: 1400px) {
            .container {
                max-width: 1320px;
            }
        }
    </style>
    
    @yield('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <div class="navbar-content" style="display:flex; justify-content:space-around; align-items:center; text-align:center;">
                <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <span class="fs-2 fw-bold text-gradient">Dimilliy</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="navbar-links" style="display:flex; justify-content:space-between; align-items:center;">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('products.special') ? 'active' : '' }}" href="{{ route('products.special') }}">Special Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('products.top') ? 'active' : '' }}" href="{{ route('products.top') }}">Top Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('products.index') ? 'active' : '' }}" href="{{ route('products.index') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">Abouts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center gap-3">
                    @auth
                        <a href="{{ route('cart.index') }}" class="btn btn-outline-dark position-relative">
                            <i class="fas fa-shopping-cart"></i>
                            @if(auth()->user()->cart_count > 0)
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{ auth()->user()->cart_count }}
                                </span>
                            @endif
                        </a>
                        
                        <div class="dropdown">
                            <button class="btn btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                <i class="fas fa-user"></i> {{ auth()->user()->name }}
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('orders.index') }}"><i class="fas fa-box me-2"></i>My Orders</a></li>
                                @if(auth()->user()->isAdmin())
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}"><i class="fas fa-cog me-2"></i>Admin Panel</a></li>
                                @endif
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt me-2"></i>Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-dark">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-primary-custom">Register</a>
                    @endauth
                </div>
            </div>
            </div>
        </div>
    </nav>
    
    <!-- Spacer for fixed navbar -->
    <div style="height: 76px;"></div>
    
    <!-- Flash Messages -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    
    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="footer-custom text-white py-5 mt-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h4 class="fw-bold mb-3">Dimilliy</h4>
                    <p class="mb-3">Your destination for elegant women's fashion and premium cosmetics. We bring tradition and modern style together.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-white fs-5"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white fs-5"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white fs-5"><i class="fab fa-telegram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h6 class="fw-bold mb-3">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}" class="text-white-50 text-decoration-none">Home</a></li>
                        <li><a href="{{ route('products.index') }}" class="text-white-50 text-decoration-none">Products</a></li>
                        <li><a href="{{ route('about') }}" class="text-white-50 text-decoration-none">About</a></li>
                        <li><a href="{{ route('contact') }}" class="text-white-50 text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h6 class="fw-bold mb-3">Categories</h6>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('products.index', ['category' => 'Shim']) }}" class="text-white-50 text-decoration-none">Shim</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'Kastyum']) }}" class="text-white-50 text-decoration-none">Kastyum</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'Atlas Ko\'ylak']) }}" class="text-white-50 text-decoration-none">Atlas Ko'ylak</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'Cosmetics']) }}" class="text-white-50 text-decoration-none">Cosmetics</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h6 class="fw-bold mb-3">Contact Us</h6>
                    <ul class="list-unstyled text-white-50">
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i>Tashkent, Uzbekistan</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i>+998 90 123 45 67</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i>info@dimilliy.uz</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 border-secondary">
            <div class="text-center text-white-50">
                <p class="mb-0">&copy; {{ date('Y') }} Dimilliy. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    @yield('scripts')
</body>
</html>
