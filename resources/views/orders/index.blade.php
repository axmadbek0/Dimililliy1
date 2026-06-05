@extends('layouts.app')

@section('title', 'My Orders - Dimilliy')

@section('content')
    <section class="section-padding">
        <div class="container">
            <h1 class="display-5 fw-bold text-gradient mb-4">Mening buyurtmalarim</h1>

            @if($orders->count() > 0)
                <div class="row g-4">
                    @foreach($orders as $order)
                        <div class="col-12">
                            <div class="card-custom p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <small class="text-muted d-block">Buyurtma #</small>
                                        <strong>#{{ $order->id }}</strong>
                                    </div>
                                    <div class="col-md-2">
                                        <small class="text-muted d-block">Sana</small>
                                        <strong>{{ $order->created_at->format('M d, Y') }}</strong>
                                    </div>
                                    <div class="col-md-2">
                                        <small class="text-muted d-block">Jami</small>
                                        <strong style="color: var(--primary-pink);">
                                            {{ number_format($order->total_amount, 0, ',', ' ') }} UZS
                                        </strong>
                                    </div>
                                    <div class="col-md-2">
                                        <small class="text-muted d-block">Status</small>
                                        <span class="badge bg-{{ $order->status_color }}">{{ ucfirst($order->status) }}</span>
                                    </div>
                                    <div class="col-md-2">
                                        <small class="text-muted d-block">To'lov</small>
                                        <span class="badge bg-{{ $order->payment_status == 'completed' ? 'success' : 'warning' }}">
                                            {{ ucfirst($order->payment_status) }}
                                        </span>
                                    </div>
                                    <div class="col-md-2 text-end">
                                        <a href="{{ route('orders.show', $order) }}" class="btn btn-primary-custom btn-sm">
                                            Ko'rish <i class="fas fa-eye ms-1"></i>
                                        </a>
                                    </div>
                                </div>

                                <hr class="my-3">

                                <div class="d-flex gap-3 overflow-auto pb-2">
                                    @foreach($order->orderItems as $item)
                                        <div class="d-flex align-items-center gap-2 flex-shrink-0">
                                            <img src="{{ $item->product->image_url }}" alt="{{ $item->product->name }}" class="rounded"
                                                style="width: 50px; height: 50px; object-fit: cover;">
                                            <div>
                                                <small class="d-block fw-semibold">{{ Str::limit($item->product->name, 20) }}</small>
                                                <small class="text-muted">x{{ $item->quantity }}</small>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-4">
                    {{ $orders->links() }}
                </div>
            @else
                <div class="text-center py-5">
                    <i class="fas fa-box fa-4x text-muted mb-3"></i>
                    <h4 class="text-muted">No orders yet</h4>
                    <p class="text-muted">Start shopping to see your orders here</p>
                    <a href="{{ route('products.index') }}" class="btn btn-primary-custom btn-lg">
                        <i class="fas fa-shopping-bag me-2"></i>Shop Now
                    </a>
                </div>
            @endif
        </div>
    </section>
@endsection