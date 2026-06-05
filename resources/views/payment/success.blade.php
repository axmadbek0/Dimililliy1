@extends('layouts.app')

@section('title', 'Payment Successful - Dimilliy')

@section('content')
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="mb-4">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3" 
                         style="width: 100px; height: 100px; background: linear-gradient(135deg, #28a745, #20c997);">
                        <i class="fas fa-check fa-3x text-white"></i>
                    </div>
                    <h1 class="display-4 fw-bold text-success">To'lov muvaffaqiyatli!</h1>
                    <p class="text-muted">Xarid uchun tashakkur</p>
                </div>
                
                <div class="card-custom p-4 mb-4 text-start">
                    <h5 class="fw-bold mb-3">Buyurtma Tafsilotlari</h5>
                    <table class="table table-borderless">
                        <tr>
                            <td class="text-muted">Buyurtma raqami</td>
                            <td class="text-end fw-bold">#{{ $order->id }}</td>
                        </tr>
                        <tr>
                            <td class="text-muted">Jami miqdor</td>
                            <td class="text-end fw-bold" style="color: var(--primary-pink);">
                                {{ number_format($order->total_amount, 0, ',', ' ') }} UZS
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">To'lov holati</td>
                            <td class="text-end">
                                <span class="badge bg-success">Muvaffaqiyatli</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">Buyurtma holati</td>
                            <td class="text-end">
                                <span class="badge bg-info">Jarayonda</span>
                            </td>
                        </tr>
                    </table>
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <a href="{{ route('orders.show', $order) }}" class="btn btn-primary-custom btn-lg px-5">
                        Buyurtmani ko'rish <i class="fas fa-eye ms-2"></i>
                    </a>
                    <a href="{{ route('products.index') }}" class="btn btn-outline-dark btn-lg px-5">
                        Savdo davom etish <i class="fas fa-shopping-cart ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
