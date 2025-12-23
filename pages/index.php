<?php
require_once __DIR__ . '/../templates/header.php';
?>

<body>
    <!-- Слайдер -->
    <section class="slider-section">
        <div class="slider-container">
            <div class="slide active">
                <img src="https://placehold.co/1200x600/e0c0a0/ffffff?text=Косметика+Angel" alt="Косметика">
            </div>
            <div class="slide">
                <img src="https://placehold.co/1200x600/d0b0c0/ffffff?text=Уход+за+лицом" alt="Косметика">
            </div>
            <div class="slide">
                <img src="https://placehold.co/1200x600/c0a0b0/ffffff?text=Натуральные+ингредиенты" alt="Косметика">
            </div>
            <div class="slide">
                <img src="https://placehold.co/1200x600/b0c0d0/ffffff?text=Красота+и+здоровье" alt="Косметика">
            </div>
            <button class="slider-btn prev">‹</button>
            <button class="slider-btn next">›</button>
            <div class="slider-dots">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
        <div class="cta">
            <p>Создайте свою красоту</p>
        </div>
    </section>

    <!-- Корзина -->
    <section class="products-section">
        <div class="section-header">
            <h2>Популярные продукты</h2>
            <a href="#">Все товары →</a>
        </div>
        <div class="products-grid">
            <div class="product-card">
                <img src="https://placehold.co/300x300/e0c0a0/ffffff?text=Крем" alt="Утренний крем">
                <h3>Утренний крем</h3>
                <p>С витамином С и гиалуроновой кислотой</p>
                <p class="price">1 500 ₽</p>
                <button class="add-to-cart">В корзину</button>
            </div>
            <div class="product-card">
                <img src="https://placehold.co/300x300/d0b0c0/ffffff?text=Сыворотка" alt="Сыворотка">
                <h3>Сыворотка</h3>
                <p>Антивозрастная с пептидами</p>
                <p class="price">2 200 ₽</p>
                <button class="add-to-cart">В корзину</button>
            </div>
            <div class="product-card">
                <img src="https://placehold.co/300x300/c0a0c0/ffffff?text=Маска" alt="Ночная маска">
                <h3>Ночная маска</h3>
                <p>С маслом ши и витаминами</p>
                <p class="price">1 800 ₽</p>
                <button class="add-to-cart">В корзину</button>
            </div>
            <div class="product-card">
                <img src="https://placehold.co/300x300/d0a0a0/ffffff?text=Комбо" alt="Ночная маска">
                <h3>Комбо</h3>
                <p>Шампуни, гели, бальзамы, кремы <br>и другие средства ухода</p>
                <p class="price">8 800 ₽</p>
                <button class="add-to-cart">В корзину</button>
            </div>
        </div>
    </section>

    <?php
        require_once __DIR__ . '/../templates/footer.php';
    ?>


    <script src="js/script.js"></script>
</body>

</html>