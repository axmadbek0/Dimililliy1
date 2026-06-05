<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To'lov muvaffaqiyatli amalga oshirildi - Buyurtma #{{ $order->id }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #fff5f7 0%, #ffe4ec 100%);
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(255, 107, 129, 0.15);
        }
        .header {
            background: linear-gradient(135deg, #ff6b81 0%, #ff8fa3 100%);
            padding: 50px 30px;
            text-align: center;
        }
        .success-icon {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 40px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        .header h1 {
            color: white;
            font-size: 28px;
            font-weight: 600;
            margin: 0 0 10px 0;
        }
        .header p {
            color: rgba(255,255,255,0.9);
            font-size: 16px;
        }
        .content {
            padding: 40px 30px;
        }
        .greeting {
            font-size: 18px;
            color: #333;
            margin-bottom: 25px;
        }
        .greeting strong {
            color: #ff6b81;
        }
        .order-details {
            background: #fff5f7;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 25px;
        }
        .order-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px dashed #ffe4ec;
        }
        .order-number {
            font-size: 20px;
            font-weight: 700;
            color: #ff6b81;
        }
        .order-date {
            color: #888;
            font-size: 14px;
        }
        .detail-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #ffe4ec;
        }
        .detail-row:last-child {
            border-bottom: none;
            padding-top: 15px;
            margin-top: 10px;
            border-top: 2px solid #ff6b81;
        }
        .detail-label {
            color: #666;
            font-size: 14px;
        }
        .detail-value {
            color: #333;
            font-weight: 500;
            font-size: 14px;
        }
        .total-row .detail-label,
        .total-row .detail-value {
            font-size: 18px;
            font-weight: 700;
            color: #ff6b81;
        }
        .items-section {
            margin-top: 25px;
        }
        .items-title {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .item {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #f0f0f0;
        }
        .item:last-child {
            border-bottom: none;
        }
        .item-info {
            flex: 1;
        }
        .item-name {
            color: #333;
            font-weight: 500;
            font-size: 14px;
        }
        .item-qty {
            color: #888;
            font-size: 13px;
            margin-top: 2px;
        }
        .item-price {
            color: #ff6b81;
            font-weight: 600;
            font-size: 14px;
        }
        .status-badge {
            display: inline-block;
            background: #d4edda;
            color: #155724;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            margin: 25px 0;
            text-align: center;
        }
        .cta-button {
            display: block;
            background: linear-gradient(135deg, #ff6b81 0%, #ff8fa3 100%);
            color: white;
            text-decoration: none;
            padding: 15px 30px;
            border-radius: 30px;
            text-align: center;
            font-weight: 600;
            font-size: 16px;
            margin: 25px 0;
            box-shadow: 0 5px 15px rgba(255, 107, 129, 0.3);
        }
        .support-section {
            background: #fff9fb;
            border: 1px solid #ffe4ec;
            border-radius: 12px;
            padding: 20px;
            margin-top: 25px;
            text-align: center;
        }
        .support-title {
            color: #ff6b81;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .support-text {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
        }
        .footer {
            background: #fafafa;
            padding: 30px;
            text-align: center;
            border-top: 1px solid #f0f0f0;
        }
        .footer-logo {
            font-size: 24px;
            font-weight: 700;
            background: linear-gradient(135deg, #ff6b81 0%, #ff8fa3 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 10px;
        }
        .footer-tagline {
            color: #888;
            font-size: 14px;
            font-style: italic;
        }
        .social-links {
            margin-top: 20px;
        }
        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 50%;
            line-height: 40px;
            text-align: center;
            margin: 0 5px;
            color: #ff6b81;
            text-decoration: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: all 0.3s;
        }
        .copyright {
            color: #aaa;
            font-size: 12px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="success-icon">✓</div>
            <h1>To'lov muvaffaqiyatli amalga oshirildi!</h1>
            <p>Haridingiz uchun tashakkur</p>
        </div>
        
        <div class="content">
            <div class="greeting">
                Salom <strong>{{ $user->name ?? 'Valued Customer' }}</strong>,
            </div>
            
            <p style="color: #666; line-height: 1.6; margin-bottom: 25px;">
                Ajoyib yangilik! To'lovingiz muvaffaqiyatli amalga oshirildi. Buyurtmangiz endi jo'natishga tayyorlanmoqda.
            </p>
            
            <div class="order-details">
                <div class="order-header">
                    <div class="order-number">Buyurtma #{{ $order->id }}</div>
                    <div class="order-date">{{ $order->created_at->format('M d, Y') }}</div>
                </div>
                
                <div class="detail-row">
                    <span class="detail-label">To'lov usuli</span>
                    <span class="detail-value">{{ ucfirst($order->payment_method) }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">To'lov holati</span>
                    <span class="detail-value" style="color: #28a745; font-weight: 600;">Completed ✓</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Buyurtma holati</span>
                    <span class="detail-value">{{ ucfirst($order->status) }}</span>
                </div>
                
                @if($order->orderItems->count() > 0)
                <div class="items-section">
                    <div class="items-title">
                        <span>🛍️</span> Buyurtma elementlari
                    </div>
                    @foreach($order->orderItems as $item)
                    <div class="item">
                        <div class="item-info">
                            <div class="item-name">{{ $item->product->name ?? 'Product' }}</div>
                            <div class="item-qty">Qty: {{ $item->quantity }}</div>
                        </div>
                        <div class="item-price">
                            {{ number_format($item->price * $item->quantity, 0, ',', ' ') }} UZS
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
                
                <div class="detail-row total-row">
                    <span class="detail-label">Jami miqdor</span>
                    <span class="detail-value">{{ number_format($order->total_amount, 0, ',', ' ') }} UZS</span>
                </div>
            </div>
            
            <div class="status-badge">
                🚚 Buyurtmangiz qayta ishlanmoqda
            </div>
            
            <a href="{{ url('/orders/' . $order->id) }}" class="cta-button">
                Buyurtma tafsilotlarini ko'rish →
            </a>
            
            <div class="support-section">
                <div class="support-title">📞 Yordam kerakmi?</div>
                <div class="support-text">
                    Agar buyurtmangiz bo'yicha biron bir savolingiz bo'lsa, bizning qo'llab-quvvatlash guruhimiz sizga yordam berishga tayyor!<br>
                    Bizga elektron pochta orqali xabar yuboring <strong>support@dimilliy.uz</strong> yoki telefon orqali <strong>+998 90 123 45 67</strong>
                </div>
            </div>
        </div>
        
        <div class="footer">
            <div class="footer-logo">✨ Dimilliy</div>
            <div class="footer-tagline">Sizning go'zalligingiz, bizning ehtirosimiz</div>
            
            <div class="social-links">
                <a href="#">f</a>
                <a href="#">t</a>
                <a href="#">i</a>
            </div>
            
            <div class="copyright">
                © {{ date('Y') }} Dimilliy. Barcha huquqlar himoyalangan.<br>
                Tashkent, Uzbekistan
            </div>
        </div>
    </div>
</body>
</html>
