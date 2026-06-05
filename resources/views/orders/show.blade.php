@extends('layouts.app')

@section('title', 'Order Details #' . $order->id . ' - Dimilliy')

@section('content')
<section class="section-padding">
    <div class="container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Bosh sahifa</a></li>
                <li class="breadcrumb-item"><a href="{{ route('orders.index') }}">Mening buyurtmalarim</a></li>
                <li class="breadcrumb-item active">Buyurtma #{{ $order->id }}</li>
            </ol>
        </nav>
        
        <h1 class="display-5 fw-bold text-gradient mb-4">Buyurtma #{{ $order->id }}</h1>
        
        <div class="row g-4">
            <!-- Order Details -->
            <div class="col-lg-8">
                <div class="card-custom p-4 mb-4">
                    <h5 class="fw-bold mb-3">Buyurtma elementlari</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-light">
                                <tr>
                                    <th>Maxsulot</th>
                                    <th class="text-center">Narx</th>
                                    <th class="text-center">Miqdor</th>
                                    <th class="text-end">Jami</th>
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
                                    <td colspan="3" class="text-end fw-bold">Jami:</td>
                                    <td class="text-end">{{ number_format($order->total_amount, 0, ',', ' ') }} UZS</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-end fw-bold">Yetkazib berish:</td>
                                    <td class="text-end text-success">Bezat</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-end fw-bold fs-5">Jami:</td>
                                    <td class="text-end fw-bold fs-5" style="color: var(--primary-pink);">
                                        {{ number_format($order->total_amount, 0, ',', ' ') }} UZS
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Order Summary -->
            <div class="col-lg-4">
                <div class="card-custom p-4 mb-4">
                    <h5 class="fw-bold mb-3">Buyurtma ma'lumotlari</h5>
                    <table class="table table-borderless">
                        <tr>
                            <td class="text-muted">Buyurtma sanasi</td>
                            <td class="text-end">{{ $order->created_at->format('M d, Y H:i') }}</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Status</td>
                            <td class="text-end">
                                <span class="badge bg-{{ $order->status_color }}">{{ ucfirst($order->status) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">To'lov</td>
                            <td class="text-end">
                                <span class="badge bg-{{ $order->payment_status == 'completed' ? 'success' : 'warning' }}">
                                    {{ ucfirst($order->payment_status) }}
                                </span>
                            </td>
                        </tr>
                    </table>
                </div>
                
                <div class="card-custom p-4 mb-4">
                    <h5 class="fw-bold mb-3">Yetkazib berish manzili</h5>
                    <p class="mb-0">{{ $order->shipping_address }}</p>
                    <p class="mb-0 mt-2"><i class="fas fa-phone me-2"></i>{{ $order->phone }}</p>
                </div>
                
                @if($order->notes)
                <div class="card-custom p-4">
                    <h5 class="fw-bold mb-3">Buyurtma izohlari</h5>
                    <p class="mb-0 text-muted">{{ $order->notes }}</p>
                </div>
                @endif
            </div>
        </div>
        
        <div class="mt-4">
            <a href="{{ route('orders.index') }}" class="btn btn-outline-dark">
                <i class="fas fa-arrow-left me-2"></i>Mening buyurtmalarim
            </a>
        </div>
    </div>
</section>
@endsection
