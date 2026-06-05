<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yangi xabar qabul qilindi</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #fff5f7 0%, #ffe4ec 100%);
            padding: 20px;
            margin: 0;
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
            padding: 40px 30px;
            text-align: center;
        }
        .header h1 {
            color: white;
            font-size: 24px;
            font-weight: 600;
            margin: 0;
        }
        .content {
            padding: 40px 30px;
        }
        .info-block {
            background: #fff5f7;
            border-left: 4px solid #ff6b81;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 0 10px 10px 0;
        }
        .info-label {
            color: #888;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }
        .info-value {
            color: #333;
            font-size: 16px;
            font-weight: 500;
        }
        .message-block {
            background: #fff9fb;
            border: 1px solid #ffe4ec;
            border-radius: 15px;
            padding: 25px;
            margin-top: 25px;
        }
        .message-label {
            color: #ff6b81;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 15px;
        }
        .message-text {
            color: #555;
            font-size: 15px;
            line-height: 1.8;
            white-space: pre-wrap;
        }
        .footer {
            background: #fafafa;
            padding: 25px 30px;
            text-align: center;
            border-top: 1px solid #f0f0f0;
        }
        .footer-logo {
            color: #ff6b81;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .footer-text {
            color: #888;
            font-size: 13px;
        }
        .date-stamp {
            color: #aaa;
            font-size: 12px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>💌 Yangi xabar qabul qilindi</h1>
        </div>
        
        <div class="content">
            <div class="info-block">
                <div class="info-label">Xabar yuboruvchisi</div>
                <div class="info-value">{{ $data['name'] }} &lt;{{ $data['email'] }}&gt;</div>
            </div>
            
            <div class="info-block">
                <div class="info-label">Mavzu</div>
                <div class="info-value">{{ $data['subject'] }}</div>
            </div>
            
            <div class="message-block">
                <div class="message-label">📝 Xabar matni</div>
                <div class="message-text">{{ $data['message'] }}</div>
            </div>
            
            <div class="date-stamp">
                Qabul qilingan sana {{ now()->format('F j, Y \a\t g:i A') }}
            </div>
        </div>
        
        <div class="footer">
            <div class="footer-logo">✨ Dimilliy</div>
            <div class="footer-text">Sizning go'zalligingiz, bizning ehtirosimiz</div>
        </div>
    </div>
</body>
</html>
