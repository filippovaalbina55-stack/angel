<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Утренний крем | Angel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Inter:wght@300;400;500&display=swap"
        rel="stylesheet">
    <style>
        .product-detail {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }
        
        .product-images {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        .main-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
        }
        
        .thumbnails {
            display: flex;
            gap: 1rem;
        }
        
        .thumbnail {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
            cursor: pointer;
            border: 2px solid transparent;
        }
        
        .thumbnail.active {
            border-color: #a07a9c;
        }
        
        .product-info {
            display: flex;
            flex-direction: column;
        }
        
        .product-title {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #333;
        }
        
        .product-price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #a07a9c;
            margin-bottom: 1rem;
        }
        
        .product-description {
            margin-bottom: 2rem;
            line-height: 1.6;
        }
        
        .product-specs {
            margin-bottom: 2rem;
        }
        
        .product-specs table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .product-specs th, .product-specs td {
            padding: 0.5rem;
            border-bottom: 1px solid #eee;
            text-align: left;
        }
        
        .product-actions {
            display: flex;
            gap: 1rem;
            margin-top: auto;
        }
        
        .add-to-cart {
            background-color: #a07a9c;
            color: white;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            flex: 1;
        }
        
        .add-to-cart:hover {
            background-color: #8a6a85;
        }
        
        .quantity-selector {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .quantity-btn {
            background: #f0f0f0;
            border: none;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
        }
        
        .quantity-input {
            width: 50px;
            text-align: center;
            border: 1px solid #ddd;
            padding: 0.2rem;
        }
        
        @media (max-width: 768px) {
            .product-detail {
                grid-template-columns: 1fr;
            }
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
        <div class="product-detail">
            <div class="product-images">
                <img src="https://placehold.co/600x600/e0c0a0/ffffff?text=Утренний+крем" alt="Утренний крем" class="main-image" id="main-image">
                <div class="thumbnails">
                    <img src="https://placehold.co/100x100/e0c0a0/ffffff?text=Крем" alt="Утренний крем" class="thumbnail active" onclick="changeImage(this)">
                    <img src="https://placehold.co/100x100/d0b0c0/ffffff?text=Крем2" alt="Утренний крем - вид 2" class="thumbnail" onclick="changeImage(this)">
                    <img src="https://placehold.co/100x100/c0a0c0/ffffff?text=Крем3" alt="Утренний крем - вид 3" class="thumbnail" onclick="changeImage(this)">
                    <img src="https://placehold.co/100x100/a0c0e0/ffffff?text=Крем4" alt="Утренний крем - вид 4" class="thumbnail" onclick="changeImage(this)">
                </div>
            </div>
            
            <div class="product-info">
                <h1 class="product-title">Утренний крем</h1>
                <div class="product-price">1 500 ₽</div>
                
                <div class="product-description">
                    <p>Наш утренний крем с витамином С и гиалуроновой кислотой обеспечивает интенсивное увлажнение и защиту кожи на весь день. Легкая текстура быстро впитывается, не оставляя жирного блеска.</p>
                    <p>Подходит для всех типов кожи. Содержит натуральные компоненты, которые питают и увлажняют кожу.</p>
                </div>
                
                <div class="product-specs">
                    <h3>Характеристики:</h3>
                    <table>
                        <tr>
                            <th>Объем</th>
                            <td>50 мл</td>
                        </tr>
                        <tr>
                            <th>Тип кожи</th>
                            <td>Все типы</td>
                        </tr>
                        <tr>
                            <th>Эффект</th>
                            <td>Увлажнение, сияние</td>
                        </tr>
                        <tr>
                            <th>Срок годности</th>
                            <td>24 месяца</td>
                        </tr>
                    </table>
                </div>
                
                <div class="product-actions">
                    <div class="quantity-selector">
                        <button class="quantity-btn" onclick="changeQuantity(-1)">-</button>
                        <input type="number" class="quantity-input" id="quantity" value="1" min="1" readonly>
                        <button class="quantity-btn" onclick="changeQuantity(1)">+</button>
                    </div>
                    
                    <button class="add-to-cart" id="add-to-cart">В корзину</button>
                </div>
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

    <script>
        let currentQuantity = 1;
        
        function changeImage(element) {
            const thumbnails = document.querySelectorAll('.thumbnail');
            thumbnails.forEach(thumb => thumb.classList.remove('active'));
            element.classList.add('active');
            
            document.getElementById('main-image').src = element.src.replace('100x100', '600x600');
        }
        
        function changeQuantity(change) {
            currentQuantity = Math.max(1, currentQuantity + change);
            document.getElementById('quantity').value = currentQuantity;
        }
        
        document.getElementById('add-to-cart').addEventListener('click', function() {
            const productName = document.querySelector('.product-title').textContent;
            const quantity = document.getElementById('quantity').value;
            console.log(`Добавлено в корзину: ${productName}, количество: ${quantity}`);
            alert(`Товар "${productName}" добавлен в корзину в количестве ${quantity} шт.`);
        });
    </script>
</body>

</html>