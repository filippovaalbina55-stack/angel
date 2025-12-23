<?php
require_once __DIR__ . '/../templates/header.php';
?>
<head>
    <title>Оформление заказа | Angel</title>
    <style>
        .checkout-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
        }
        
        .checkout-form {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .form-section {
            margin-bottom: 2rem;
        }
        
        .form-section h3 {
            margin-bottom: 1rem;
            color: #333;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 1rem;
        }
        
        .form-group {
            margin-bottom: 1rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.3rem;
            font-weight: 500;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 0.6rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: 'Inter', sans-serif;
        }
        
        .form-group.full-width {
            grid-column: 1 / -1;
        }
        
        .order-summary {
            background: white;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            height: fit-content;
        }
        
        .order-items {
            margin-bottom: 1rem;
        }
        
        .order-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #eee;
        }
        
        .order-summary-total {
            display: flex;
            justify-content: space-between;
            font-weight: bold;
            font-size: 1.2rem;
            margin: 1rem 0;
            padding-top: 1rem;
            border-top: 1px solid #ddd;
        }
        
        .place-order-btn {
            width: 100%;
            background-color: #a07a9c;
            color: white;
            border: none;
            padding: 1rem;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            margin-top: 1rem;
        }
        
        .place-order-btn:hover {
            background-color: #8a6a85;
        }
        
        @media (max-width: 768px) {
            .checkout-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <main>
        <div class="checkout-container">
            <div class="checkout-form">
                <h2>Оформление заказа</h2>
                
                <div class="form-section">
                    <h3>Контактная информация</h3>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first-name">Имя</label>
                            <input type="text" id="first-name" name="first-name" required>
                        </div>
                        <div class="form-group">
                            <label for="last-name">Фамилия</label>
                            <input type="text" id="last-name" name="last-name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                </div>
                
                <div class="form-section">
                    <h3>Адрес доставки</h3>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="city">Город</label>
                            <input type="text" id="city" name="city" required>
                        </div>
                        <div class="form-group">
                            <label for="zip">Индекс</label>
                            <input type="text" id="zip" name="zip" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Адрес</label>
                        <input type="text" id="address" name="address" placeholder="Улица, дом, квартира" required>
                    </div>
                </div>
                
                <div class="form-section">
                    <h3>Способ доставки</h3>
                    <div class="form-group">
                        <select id="delivery-method" name="delivery-method" required>
                            <option value="">Выберите способ доставки</option>
                            <option value="courier">Курьером (300 ₽)</option>
                            <option value="pickup">Самовывоз (бесплатно)</option>
                            <option value="post">Почта России (250 ₽)</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-section">
                    <h3>Способ оплаты</h3>
                    <div class="form-group">
                        <select id="payment-method" name="payment-method" required>
                            <option value="">Выберите способ оплаты</option>
                            <option value="card">Банковской картой</option>
                            <option value="cash">Наличными при получении</option>
                            <option value="online">Онлайн-оплата</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-section">
                    <h3>Комментарии к заказу</h3>
                    <div class="form-group">
                        <textarea id="comments" name="comments" rows="4" placeholder="Особые пожелания, уточнения"></textarea>
                    </div>
                </div>
            </div>
            
            <div class="order-summary">
                <h3>Ваш заказ</h3>
                
                <div class="order-items">
                    <div class="order-item">
                        <span>Утренний крем x1</span>
                        <span>1 500 ₽</span>
                    </div>
                    <div class="order-item">
                        <span>Сыворотка x2</span>
                        <span>4 400 ₽</span>
                    </div>
                </div>
                
                <div class="order-item">
                    <span>Доставка</span>
                    <span id="delivery-cost">300 ₽</span>
                </div>
                
                <div class="order-summary-total">
                    <span>Итого</span>
                    <span id="total-cost">6 200 ₽</span>
                </div>
                
                <button class="place-order-btn" onclick="placeOrder()">Оформить заказ</button>
                <a href="cart.html" style="display: block; text-align: center; margin-top: 1rem; color: #a07a9c;">← Назад в корзину</a>
            </div>
        </div>
    </main>

    <?php
require_once __DIR__ . '/../templates/footer.php';
?>

    <script>
        document.getElementById('delivery-method').addEventListener('change', function() {
            updateDeliveryCost();
        });
        
        function updateDeliveryCost() {
            const deliveryMethod = document.getElementById('delivery-method').value;
            let cost = 0;
            
            switch(deliveryMethod) {
                case 'courier':
                    cost = 300;
                    break;
                case 'post':
                    cost = 250;
                    break;
                case 'pickup':
                    cost = 0;
                    break;
            }
            
            document.getElementById('delivery-cost').textContent = cost + ' ₽';
            updateTotalCost(cost);
        }
        
        function updateTotalCost(deliveryCost) {
            // In a real implementation, this would calculate from cart data
            const itemsCost = 5900; // Sum of items (1500 + 4400)
            const total = itemsCost + deliveryCost;
            document.getElementById('total-cost').textContent = total.toLocaleString() + ' ₽';
        }
        
        function placeOrder() {
            const firstName = document.getElementById('first-name').value;
            const lastName = document.getElementById('last-name').value;
            const email = document.getElementById('email').value;
            
            if (!firstName || !lastName || !email) {
                alert('Пожалуйста, заполните все обязательные поля');
                return;
            }
            
            console.log('Заказ оформлен:', {
                firstName,
                lastName,
                email,
                deliveryMethod: document.getElementById('delivery-method').value,
                paymentMethod: document.getElementById('payment-method').value
            });
            
            // In real implementation, this would send data to backend
            alert('Заказ успешно оформлен! Мы свяжемся с вами для подтверждения.');
            window.location.href = 'order-confirmation.html';
        }
    </script>
</body>

</html>