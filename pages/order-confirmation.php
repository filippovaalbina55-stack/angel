<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заказ оформлен | Angel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Inter:wght@300;400;500&display=swap"
        rel="stylesheet">
    <style>
        .confirmation-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
            text-align: center;
        }
        
        .confirmation-icon {
            font-size: 4rem;
            color: #a07a9c;
            margin-bottom: 1rem;
        }
        
        .confirmation-title {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #333;
        }
        
        .confirmation-message {
            margin-bottom: 2rem;
            color: #666;
            line-height: 1.6;
        }
        
        .order-details {
            background: white;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            text-align: left;
            margin-bottom: 2rem;
        }
        
        .order-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 1rem;
        }
        
        .order-item {
            display: flex;
            justify-content: space-between;
            padding: 0.5rem 0;
            border-bottom: 1px solid #eee;
        }
        
        .order-total {
            display: flex;
            justify-content: space-between;
            font-weight: bold;
            font-size: 1.2rem;
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid #ddd;
        }
        
        .btn-container {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 2rem;
        }
        
        .btn {
            padding: 0.8rem 1.5rem;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-primary {
            background-color: #a07a9c;
            color: white;
        }
        
        .btn-primary:hover {
            background-color: #8a6a85;
        }
        
        .btn-secondary {
            background-color: #f0f0f0;
            color: #333;
        }
        
        .btn-secondary:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>

<body>
    <header>
        <div class="header-content">
            <div class="logo-container">
                <img src="assets/img/logo/SV.png" alt="">
                <a href="index.html">Angel</a>
            </div>
            <nav class="nav-menu">
                <ul>
                    <li><a href="index.html">Главная</a></li>
                    <li><a href="catalog.html">Каталог</a></li>
                    <li><a href="#about">О нас</a></li>
                    <li><a href="#reviews">Отзывы</a></li>
                    <li><a href="cart.html">Корзина <span class="cart-count">(3)</span></a></li>
                    <li><a href="profile.html">Профиль</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="confirmation-container">
            <div class="confirmation-icon">✓</div>
            <h1 class="confirmation-title">Заказ оформлен!</h1>
            <p class="confirmation-message">
                Благодарим вас за покупку! <br>
                Ваш заказ №ORD-2025-003 успешно оформлен. 
                В ближайшее время с вами свяжется наш менеджер для подтверждения.
            </p>
            
            <div class="order-details">
                <h3>Детали заказа</h3>
                
                <div class="order-info">
                    <div>
                        <p><strong>Дата:</strong> 01.12.2025</p>
                        <p><strong>Получатель:</strong> Иванова Анна</p>
                        <p><strong>Телефон:</strong> +7 (999) 123-45-67</p>
                    </div>
                    <div>
                        <p><strong>Доставка:</strong> Курьером</p>
                        <p><strong>Адрес:</strong> г. Москва, ул. Примерная, д. 1</p>
                        <p><strong>Статус:</strong> <span style="color: #a07a9c;">Обрабатывается</span></p>
                    </div>
                </div>
                
                <h4>Состав заказа:</h4>
                <div class="order-item">
                    <span>Утренний крем x1</span>
                    <span>1 500 ₽</span>
                </div>
                <div class="order-item">
                    <span>Сыворотка x2</span>
                    <span>4 400 ₽</span>
                </div>
                
                <div class="order-total">
                    <span>Итого:</span>
                    <span>6 200 ₽</span>
                </div>
            </div>
            
            <div class="btn-container">
                <a href="index.html" class="btn btn-primary">Продолжить покупки</a>
                <a href="profile.html" class="btn btn-secondary">Мои заказы</a>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-logo">
                <img src="assets/img/logo/SV.png" alt="">
                <h3>Angel</h3>
            </div>
            <div class="footer-contacts">
                <p>Телефон: +7 (XXX) XXX-XX-XX</p>
                <p>Email: hello@angel.cosmetics</p>
                <p>Адрес: г. Камышин, ул. Косметическая, д. 5</p>
            </div>
            <div class="social-links">
                <a href="#">VK</a>
                <a href="#">Telegram</a>
            </div>
        </div>
        <div class="copyright">
            <p>© 2025 Angel. Косметика с душой.</p>
        </div>
    </footer>
</body>

</html>