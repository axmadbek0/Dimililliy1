@extends('layouts.app')

@section('title', 'Admin Dashboard - Dimilliy')

@section('content')
<section class="section-padding">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="display-5 fw-bold text-gradient">Admin Dashboard</h1>
            <a href="{{ route('home') }}" class="btn btn-outline-dark">
                <i class="fas fa-home me-2"></i>Back to Site
            </a>
        </div>
        
        <!-- Stats Cards -->
        <div class="row g-4 mb-5">
            <div class="col-lg-3 col-md-6">
                <div class="card-custom p-4 text-center">
                    <div class="mb-3">
                        <i class="fas fa-box fa-3x" style="color: var(--primary-pink);"></i>
                    </div>
                    <h3 class="fw-bold">{{ $totalProducts }}</h3>
                    <p class="text-muted mb-0">Total Products</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card-custom p-4 text-center">
                    <div class="mb-3">
                        <i class="fas fa-star fa-3x" style="color: var(--warm-gold);"></i>
                    </div>
                    <h3 class="fw-bold">{{ $topProducts }}</h3>
                    <p class="text-muted mb-0">Top Products</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card-custom p-4 text-center">
                    <div class="mb-3">
                        <i class="fas fa-gem fa-3x" style="color: var(--deep-rose);"></i>
                    </div>
                    <h3 class="fw-bold">{{ $specialProducts }}</h3>
                    <p class="text-muted mb-0">Special Products</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card-custom p-4 text-center">
                    <div class="mb-3">
                        <i class="fas fa-shopping-cart fa-3x text-success"></i>
                    </div>
                    <h3 class="fw-bold">{{ $totalOrders }}</h3>
                    <p class="text-muted mb-0">Total Orders</p>
                </div>
            </div>
        </div>
        
        <!-- Quick Actions -->
        <div class="row g-4 mb-5">
            <div class="col-lg-6">
                <div class="card-custom p-4">
                    <h5 class="fw-bold mb-3">Quick Actions</h5>
                    <div class="d-flex gap-2 flex-wrap">
                        <a href="{{ route('admin.products.create') }}" class="btn btn-primary-custom">
                            <i class="fas fa-plus me-2"></i>Add Product
                        </a>
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-dark">
                            <i class="fas fa-folder me-2"></i>Manage Categories
                        </a>
                        <a href="{{ route('admin.products.index') }}" class="btn btn-outline-dark">
                            <i class="fas fa-box me-2"></i>Manage Products
                        </a>
                        <a href="{{ route('admin.orders.index') }}" class="btn btn-outline-dark">
                            <i class="fas fa-shopping-bag me-2"></i>View Orders
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card-custom p-4">
                    <h5 class="fw-bold mb-3">Store Overview</h5>
                    <div class="row g-3">
                        <div class="col-6">
                            <small class="text-muted">Registered Users</small>
                            <h4 class="fw-bold">{{ $totalUsers }}</h4>
                        </div>
                        <div class="col-6">
                            <small class="text-muted">Avg. Order Value</small>
                            <h4 class="fw-bold">{{ number_format($recentOrders->avg('total_amount') ?? 0, 0, ',', ' ') }} UZS</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Recent Orders -->
        <div class="card-custom p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-bold mb-0">Recent Orders</h5>
                <a href="{{ route('admin.orders.index') }}" class="btn btn-sm btn-outline-dark">View All</a>
            </div>
            
            @if($recentOrders->count() > 0)
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="bg-light">
                            <tr>
                                <th>Order #</th>
                                <th>Customer</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($recentOrders as $order)
                            <tr>
                                <td>#{{ $order->id }}</td>
                                <td>{{ $order->user->name }}</td>
                                <td style="color: var(--primary-pink);">{{ number_format($order->total_amount, 0, ',', ' ') }} UZS</td>
                                <td>
                                    <span class="badge bg-{{ $order->status_color }}">{{ ucfirst($order->status) }}</span>
                                </td>
                                <td>{{ $order->created_at->format('M d, Y') }}</td>
                                <td>
                                    <a href="{{ route('admin.orders.show', $order) }}" class="btn btn-sm btn-primary-custom">
                                        View
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="text-center py-4">
                    <p class="text-muted">No orders yet</p>
                </div>
            @endif
        </div>
    </div>
</section>
@endsection
