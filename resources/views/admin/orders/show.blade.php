@extends('layouts.app')

@section('title', 'Order Details #' . $order->id . ' - Dimilliy')

@section('content')
<section class="section-padding">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="display-5 fw-bold text-gradient">Order #{{ $order->id }}</h1>
            <a href="{{ route('admin.orders.index') }}" class="btn btn-outline-dark">
                <i class="fas fa-arrow-left me-2"></i>Back to Orders
            </a>
        </div>
        
        <div class="row g-4">
            <!-- Order Information -->
            <div class="col-lg-8">
                <!-- Order Items -->
                <div class="card-custom p-4 mb-4">
                    <h5 class="fw-bold mb-3">Order Items</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-light">
                                <tr>
                                    <th>Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Qty</th>
                                    <th class="text-end">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order->orderItems as $item)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="{{ $item->product->image_url }}" 
                                                 alt="{{ $item->product->name }}" 
                                                 class="rounded" style="width: 60px; height: 60px; object-fit: cover;">
                                            <div>
                                                <h6 class="mb-1">{{ $item->product->name }}</h6>
                                                <small class="text-muted">{{ $item->product->category }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">{{ number_format($item->price, 0, ',', ' ') }} UZS</td>
                                    <td class="text-center">{{ $item->quantity }}</td>
                                    <td class="text-end fw-bold">{{ number_format($item->subtotal, 0, ',', ' ') }} UZS</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot class="bg-light">
                                <tr>
                                    <td colspan="3" class="text-end fw-bold">Total:</td>
                                    <td class="text-end fw-bold" style="color: var(--primary-pink);">
                                        {{ number_format($order->total_amount, 0, ',', ' ') }} UZS
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                
                <!-- Customer Info -->
                <div class="card-custom p-4">
                    <h5 class="fw-bold mb-3">Customer Information</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-1"><strong>Name:</strong> {{ $order->user->name }}</p>
                            <p class="mb-1"><strong>Email:</strong> {{ $order->user->email }}</p>
                            <p class="mb-0"><strong>Phone:</strong> {{ $order->phone }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1"><strong>Shipping Address:</strong></p>
                            <p class="text-muted">{{ $order->shipping_address }}</p>
                        </div>
                    </div>
                    @if($order->notes)
                    <hr>
                    <p class="mb-0"><strong>Order Notes:</strong></p>
                    <p class="text-muted">{{ $order->notes }}</p>
                    @endif
                </div>
            </div>
            
            <!-- Order Status & Actions -->
            <div class="col-lg-4">
                <div class="card-custom p-4 mb-4">
                    <h5 class="fw-bold mb-3">Order Status</h5>
                    <table class="table table-borderless table-sm">
                        <tr>
                            <td class="text-muted">Order Date</td>
                            <td class="text-end">{{ $order->created_at->format('M d, Y H:i') }}</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Status</td>
                            <td class="text-end">
                                <span class="badge bg-{{ $order->status_color }}">{{ ucfirst($order->status) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">Payment</td>
                            <td class="text-end">
                                <span class="badge bg-{{ $order->payment_status == 'completed' ? 'success' : ($order->payment_status == 'pending' ? 'warning' : 'danger') }}">
                                    {{ ucfirst($order->payment_status) }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">Payment Method</td>
                            <td class="text-end">{{ ucfirst($order->payment_method) }}</td>
                        </tr>
                    </table>
                </div>
                
                <!-- Update Status -->
                <div class="card-custom p-4">
                    <h5 class="fw-bold mb-3">Update Status</h5>
                    <form action="{{ route('admin.orders.status', $order) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <select name="status" class="form-select">
                                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Processing</option>
                                <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary-custom w-100">
                            <i class="fas fa-sync me-2"></i>Update Status
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
