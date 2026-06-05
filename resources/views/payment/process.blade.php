@extends('layouts.app')

@section('title', 'Payment - Dimilliy')

@section('content')
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-4">
                    <span class="badge bg-warning text-dark mb-2">TEST/QUV BOX REJIMI</span>
                    <h1 class="display-5 fw-bold text-gradient">To'lovni Tamomlash</h1>
                    <p class="text-muted">Buyurtma #{{ $order->id }}</p>
                </div>
                
                <div class="card-custom p-4">
                    <div class="text-center mb-4">
                        <h4 class="fw-bold">To'lov miqdori</h4>
                        <h2 class="fw-bold" style="color: var(--primary-pink);">
                            {{ number_format($order->total_amount, 0, ',', ' ') }} UZS
                        </h2>
                    </div>
                    
                    <div class="alert alert-warning mb-4">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        <strong>QUV BOX REJIMI:</strong> Istalgan 16 raqamli karta raqamini, kelajakki muddati va 3 raqamli CVV ni ishlatishingiz mumkin. Hech qanday haq to'lanmaydi.
                    </div>
                    
                    <form action="{{ route('payment.pay', $order) }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="card_number" class="form-label fw-semibold">Karta raqami</label>
                            <input type="text" class="form-control @error('card_number') is-invalid @enderror" 
                                   id="card_number" name="card_number" placeholder="1234 5678 9012 3456" 
                                   maxlength="16" required>
                            @error('card_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="card_holder" class="form-label fw-semibold">Karta egasi ismi</label>
                            <input type="text" class="form-control @error('card_holder') is-invalid @enderror" 
                                   id="card_holder" name="card_holder" placeholder="JOHN DOE" required>
                            @error('card_holder')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="expiry_date" class="form-label fw-semibold">Muddati</label>
                                <input type="text" class="form-control @error('expiry_date') is-invalid @enderror" 
                                       id="expiry_date" name="expiry_date" placeholder="MM/YY" maxlength="5" required>
                                @error('expiry_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6 mb-4">
                                <label for="cvv" class="form-label fw-semibold">CVV</label>
                                <input type="text" class="form-control @error('cvv') is-invalid @enderror" 
                                       id="cvv" name="cvv" placeholder="123" maxlength="3" required>
                                @error('cvv')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary-custom py-3 fw-semibold">
                                <i class="fas fa-lock me-2"></i>Pay {{ number_format($order->total_amount, 0, ',', ' ') }} UZS
                            </button>
                            <a href="{{ route('payment.cancel', $order) }}" class="btn btn-outline-secondary">
                                To'lovni bekor qilish
                            </a>
                        </div>
                    </form>
                    
                    <div class="mt-4 text-center">
                        <i class="fas fa-shield-alt text-success me-2"></i>
                        <small class="text-muted">Xavfsiz to'lovlarni qayta ishlash</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Format expiry date input
    document.getElementById('expiry_date').addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length >= 2) {
            value = value.substring(0, 2) + '/' + value.substring(2, 4);
        }
        e.target.value = value;
    });
    
    // Allow only numbers for card number and CVV
    document.getElementById('card_number').addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/\D/g, '');
    });
    
    document.getElementById('cvv').addEventListener('input', function(e) {
        e.target.value = e.target.value.replace(/\D/g, '');
    });
</script>
@endsection
