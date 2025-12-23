<?php
require_once __DIR__ . '/../templates/header.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина | Angel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Inter:wght@300;400;500&display=swap"
        rel="stylesheet">
    <style>
        .cart-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .cart-header {
            margin-bottom: 2rem;
        }
        
        .cart-items {
            display: grid;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .cart-item {
            display: grid;
            grid-template-columns: 100px 1fr auto;
            gap: 1rem;
            padding: 1rem;
            border: 1px solid #eee;
            border-radius: 8px;
        }
        
        .cart-item-image {
            width: 100%;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
        }
        
        .cart-item-details {
            display: flex;
            flex-direction: column;
        }
        
        .cart-item-name {
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        
        .cart-item-price {
            color: #a07a9c;
            font-weight: bold;
        }
        
        .cart-item-actions {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: flex-end;
        }
        
        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .quantity-btn {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            border: none;
            background: #f0f0f0;
            cursor: pointer;
        }
        
        .quantity-input {
            width: 40px;
            text-align: center;
            border: 1px solid #ddd;
            padding: 0.2rem;
        }
        
        .remove-btn {
            background: none;
            border: none;
            color: #ff6b6b;
            cursor: pointer;
            font-size: 0.9rem;
        }
        
        .cart-summary {
            border: 1px solid #eee;
            border-radius: 8px;
            padding: 1.5rem;
            background: #f9f9f9;
        }
        
        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
        }
        
        .summary-total {
            font-weight: bold;
            font-size: 1.2rem;
            margin: 1rem 0;
            padding-top: 1rem;
            border-top: 1px solid #ddd;
        }
        
        .checkout-btn {
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
        
        .checkout-btn:hover {
            background-color: #8a6a85;
        }
        
        .continue-shopping {
            display: inline-block;
            margin-top: 1rem;
            color: #a07a9c;
            text-decoration: none;
        }
        
        .empty-cart {
            text-align: center;
            padding: 3rem;
            color: #777;
        }
        
        .empty-cart-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>

    <main>
        <div class="cart-container">
            <div class="cart-header">
                <h2>Корзина</h2>
            </div>
            
            <div class="cart-items" id="cart-items">
                <!-- Cart items will be populated by JavaScript -->
                <div class="cart-item">
                    <img src="https://placehold.co/100x100/e0c0a0/ffffff?text=Крем" alt="Утренний крем" class="cart-item-image">
                    <div class="cart-item-details">
                        <div class="cart-item-name">Утренний крем</div>
                        <div class="cart-item-price">1 500 ₽</div>
                    </div>
                    <div class="cart-item-actions">
                        <div class="quantity-controls">
                            <button class="quantity-btn" onclick="changeItemQuantity(0, -1)">-</button>
                            <input type="number" class="quantity-input" value="1" min="1" onchange="updateItemQuantity(0, this.value)" readonly>
                            <button class="quantity-btn" onclick="changeItemQuantity(0, 1)">+</button>
                        </div>
                        <button class="remove-btn" onclick="removeItem(0)">Удалить</button>
                    </div>
                </div>
                
                <div class="cart-item">
                    <img src="https://placehold.co/100x100/d0b0c0/ffffff?text=Сыворотка" alt="Сыворотка" class="cart-item-image">
                    <div class="cart-item-details">
                        <div class="cart-item-name">Сыворотка</div>
                        <div class="cart-item-price">2 200 ₽</div>
                    </div>
                    <div class="cart-item-actions">
                        <div class="quantity-controls">
                            <button class="quantity-btn" onclick="changeItemQuantity(1, -1)">-</button>
                            <input type="number" class="quantity-input" value="2" min="1" onchange="updateItemQuantity(1, this.value)" readonly>
                            <button class="quantity-btn" onclick="changeItemQuantity(1, 1)">+</button>
                        </div>
                        <button class="remove-btn" onclick="removeItem(1)">Удалить</button>
                    </div>
                </div>
            </div>
            
            <div class="cart-summary">
                <div class="summary-row">
                    <span>Товары (2)</span>
                    <span id="items-total">3 700 ₽</span>
                </div>
                <div class="summary-row">
                    <span>Доставка</span>
                    <span id="shipping-cost">300 ₽</span>
                </div>
                <div class="summary-row">
                    <span>Скидка</span>
                    <span id="discount">0 ₽</span>
                </div>
                <div class="summary-total">
                    <span>Итого</span>
                    <span id="total-cost">4 000 ₽</span>
                </div>
                
                <button class="checkout-btn" onclick="proceedToCheckout()">Оформить заказ</button>
                <a href="catalog.html" class="continue-shopping">← Продолжить покупки</a>
            </div>
        </div>
    </main>

<?php
require_once __DIR__ . '/../templates/footer.php';
?>

    <script>
        // Sample cart data
        let cart = [
            { id: 1, name: 'Утренний крем', price: 1500, quantity: 1, image: 'https://placehold.co/100x100/e0c0a0/ffffff?text=Крем' },
            { id: 2, name: 'Сыворотка', price: 2200, quantity: 2, image: 'https://placehold.co/100x100/d0b0c0/ffffff?text=Сыворотка' }
        ];
        
        function updateCart() {
            // Update UI with cart data
            updateTotals();
        }
        
        function changeItemQuantity(index, change) {
            cart[index].quantity = Math.max(1, cart[index].quantity + change);
            document.querySelectorAll('.quantity-input')[index].value = cart[index].quantity;
            updateTotals();
        }
        
        function updateItemQuantity(index, value) {
            cart[index].quantity = Math.max(1, parseInt(value));
            updateTotals();
        }
        
        function removeItem(index) {
            if (confirm('Вы действительно хотите удалить этот товар из корзины?')) {
                cart.splice(index, 1);
                // Re-render cart items
                location.reload(); // Simple approach for demo
            }
        }
        
        function updateTotals() {
            const itemsTotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const shipping = 300;
            const discount = 0;
            const total = itemsTotal + shipping - discount;
            
            document.getElementById('items-total').textContent = itemsTotal.toLocaleString() + ' ₽';
            document.getElementById('total-cost').textContent = total.toLocaleString() + ' ₽';
        }
        
        function proceedToCheckout() {
            console.log('Переход к оформлению заказа');
            alert('Переход к оформлению заказа');
            // In real implementation, this would redirect to checkout page
        }
        
        // Initialize cart
        document.addEventListener('DOMContentLoaded', updateCart);
    </script>
</body>

</html>