<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Бронирование стола - Сапфир</title>
    <style>
        body { font-family: Arial; margin: 0; padding: 20px; background: #f5f5f5; }
        .container { max-width: 600px; margin: 0 auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, select, textarea { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px; }
        .btn { background: #e74c3c; color: white; padding: 12px 30px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; }
        .btn:hover { background: #c0392b; }
        .success { background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🍣 Забронировать стол</h1>
        
        @if(session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('reservation.store') }}">
            @csrf
            
            <div class="form-group">
                <label for="customer_name">Ваше имя *</label>
                <input type="text" id="customer_name" name="customer_name" required>
            </div>

            <div class="form-group">
                <label for="phone">Телефон *</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="reservation_date">Дата *</label>
                <input type="date" id="reservation_date" name="reservation_date" required>
            </div>

            <div class="form-group">
                <label for="reservation_time">Время *</label>
                <input type="time" id="reservation_time" name="reservation_time" required>
            </div>

            <div class="form-group">
                <label for="guests">Количество гостей *</label>
                <select id="guests" name="guests" required>
                    <option value="1">1 человек</option>
                    <option value="2">2 человека</option>
                    <option value="3">3 человека</option>
                    <option value="4">4 человека</option>
                    <option value="5">5+ человек</option>
                </select>
            </div>

            <div class="form-group">
                <label for="comments">Дополнительные пожелания</label>
                <textarea id="comments" name="comments" rows="4"></textarea>
            </div>

            <button type="submit" class="btn">Забронировать стол</button>
        </form>

        <p style="margin-top: 20px;">
            <a href="/">← На главную</a> | 
            <a href="/test-db">🧪 Проверить базу данных</a>
        </p>
    </div>
</body>
</html>