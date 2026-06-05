@extends('layouts.app')

@section('title', 'Manage Orders - Dimilliy')

@section('content')
<section class="section-padding">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="display-5 fw-bold text-gradient">Orders</h1>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-dark">
                <i class="fas fa-arrow-left me-2"></i>Back to Dashboard
            </a>
        </div>
        
        <!-- Filters -->
        <div class="card-custom p-4 mb-4">
            <form action="{{ route('admin.orders.index') }}" method="GET">
                <div class="row g-3 align-items-end">
                    <div class="col-lg-3">
                        <label class="form-label fw-semibold">Status Filter</label>
                        <select name="status" class="form-select" onchange="this.form.submit()">
                            <option value="">All Statuses</option>
                            <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="processing" {{ request('status') == 'processing' ? 'selected' : '' }}>Processing</option>
                            <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                            <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                    </div>
                    <div class="col-lg-9 text-lg-end">
                        @if(request('status'))
                            <a href="{{ route('admin.orders.index') }}" class="btn btn-outline-secondary">
                                <i class="fas fa-times me-1"></i>Clear Filter
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
        
        <!-- Orders Table -->
        <div class="card-custom p-4">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="bg-light">
                        <tr>
                            <th>Order #</th>
                            <th>Customer</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Payment</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>#{{ $order->id }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td style="color: var(--primary-pink);">{{ number_format($order->total_amount, 0, ',', ' ') }} UZS</td>
                            <td>
                                <span class="badge bg-{{ $order->status_color }}">{{ ucfirst($order->status) }}</span>
                            </td>
                            <td>
                                <span class="badge bg-{{ $order->payment_status == 'completed' ? 'success' : ($order->payment_status == 'pending' ? 'warning' : 'danger') }}">
                                    {{ ucfirst($order->payment_status) }}
                                </span>
                            </td>
                            <td>{{ $order->created_at->format('M d, Y') }}</td>
                            <td>
                                <a href="{{ route('admin.orders.show', $order) }}" 
                                   class="btn btn-sm btn-primary-custom">View</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="mt-4">
                {{ $orders->withQueryString()->links() }}
            </div>
        </div>
    </div>
</section>
@endsection
