<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message - Dimilliy</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', 'Helvetica Neue', Arial, sans-serif;
            background: linear-gradient(135deg, #faf5f7 0%, #ffeef3 100%);
            padding: 20px;
            line-height: 1.6;
        }
        .email-wrapper {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(255, 105, 180, 0.15), 0 8px 25px rgba(0, 0, 0, 0.08);
        }
        .header {
            background: linear-gradient(135deg, #FF69B4 0%, #e1306b 50%, #FF1493 100%);
            padding: 50px 40px;
            text-align: center;
            position: relative;
        }
        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="0.5"/></svg>');
            background-size: 100px;
            opacity: 0.3;
        }
        .logo {
            font-size: 32px;
            font-weight: 800;
            color: #ffffff;
            letter-spacing: 2px;
            position: relative;
            z-index: 1;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        .logo span {
            color: #ffe4ec;
        }
        .header-title {
            color: #ffffff;
            font-size: 18px;
            font-weight: 500;
            margin-top: 15px;
            opacity: 0.95;
            position: relative;
            z-index: 1;
        }
        .content {
            padding: 45px 40px;
            background: #ffffff;
        }
        .intro-text {
            color: #666;
            font-size: 15px;
            margin-bottom: 30px;
            text-align: center;
        }
        .info-card {
            background: linear-gradient(135deg, #fff9fb 0%, #ffeef3 100%);
            border-left: 5px solid #FF69B4;
            padding: 25px;
            margin-bottom: 20px;
            border-radius: 0 16px 16px 0;
            box-shadow: 0 4px 15px rgba(255, 105, 180, 0.08);
        }
        .info-label {
            color: #FF69B4;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .info-value {
            color: #333;
            font-size: 16px;
            font-weight: 600;
        }
        .info-value a {
            color: #e1306b;
            text-decoration: none;
        }
        .message-section {
            background: #fff;
            border: 2px solid #ffe4ec;
            border-radius: 20px;
            padding: 30px;
            margin-top: 30px;
            box-shadow: 0 8px 30px rgba(255, 105, 180, 0.06);
        }
        .message-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px dashed #ffe4ec;
        }
        .message-icon {
            width: 44px;
            height: 44px;
            background: linear-gradient(135deg, #FF69B4 0%, #e1306b 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
        }
        .message-title {
            color: #e1306b;
            font-size: 18px;
            font-weight: 700;
        }
        .message-body {
            color: #555;
            font-size: 15px;
            line-height: 1.9;
            white-space: pre-wrap;
        }
        .timestamp {
            text-align: center;
            color: #999;
            font-size: 13px;
            margin-top: 35px;
            padding-top: 25px;
            border-top: 1px solid #f0f0f0;
        }
        .timestamp-icon {
            color: #FF69B4;
            margin-right: 5px;
        }
        .footer {
            background: linear-gradient(135deg, #faf5f7 0%, #ffeef3 100%);
            padding: 35px 40px;
            text-align: center;
            border-top: 1px solid #ffe4ec;
        }
        .footer-logo {
            font-size: 24px;
            font-weight: 800;
            background: linear-gradient(135deg, #FF69B4 0%, #e1306b 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 10px;
        }
        .footer-tagline {
            color: #888;
            font-size: 14px;
            font-style: italic;
            margin-bottom: 20px;
        }
        .footer-link {
            display: inline-block;
            background: linear-gradient(135deg, #FF69B4 0%, #e1306b 100%);
            color: #ffffff;
            text-decoration: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 14px;
            box-shadow: 0 4px 15px rgba(255, 105, 180, 0.3);
        }
        .copyright {
            color: #aaa;
            font-size: 12px;
            margin-top: 25px;
        }
        @media (max-width: 480px) {
            .content, .footer {
                padding: 30px 25px;
            }
            .header {
                padding: 40px 25px;
            }
            .logo {
                font-size: 26px;
            }
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="header">
            <div class="logo">✨ <span>Dimilliy</span></div>
            <div class="header-title">Yangi xabar qabul qilindi</div>
        </div>
        
        <div class="content">
            <p class="intro-text">
                Sizning veb-saytingiz orqali yangi kontakt xabar qabul qilindi. Quyida xabar tafsilotlari keltirilgan:
            </p>
            
            <div class="info-card">
                <div class="info-label">
                    <span>👤</span> From
                </div>
                <div class="info-value">{{ $data['name'] }}</div>
            </div>
            
            <div class="info-card">
                <div class="info-label">
                    <span>📧</span> Email Address
                </div>
                <div class="info-value">
                    <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a>
                </div>
            </div>
            
            <div class="info-card">
                <div class="info-label">
                    <span>📝</span> Mavzu
                </div>
                <div class="info-value">{{ $data['subject'] }}</div>
            </div>
            
            <div class="message-section">
                <div class="message-header">
                    <div class="message-icon">💬</div>
                    <div class="message-title">Xabar matni</div>
                </div>
                <div class="message-body">{{ $data['message'] }}</div>
            </div>
            
            <div class="timestamp">
                <span class="timestamp-icon">📅</span>
                Qabul qilingan sana {{ now()->format('F j, Y \a\t g:i A') }}
            </div>
        </div>
        
        <div class="footer">
            <div class="footer-logo">✨ Dimilliy</div>
            <div class="footer-tagline">Sizning go'zalligingiz, bizning ehtirosimiz</div>
            <a href="http://dimilliy.uz" class="footer-link">Veb-saytga tashrif buyurish →</a>
            <div class="copyright">
                © {{ date('Y') }} Dimilliy. Barcha huquqlar himoyalangan.<br>
                Tashkent, Uzbekistan
            </div>
        </div>
    </div>
</body>
</html>
