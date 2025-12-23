<?php
require_once __DIR__ . '/../templates/header.php';
?>

<body>

    <main>
        <section class="products-section">
            <div class="section-header">
                <h2>Все товары</h2>
                <div class="filters">
                    <select id="category-filter">
                        <option value="all">Все категории</option>
                        <option value="cream">Кремы</option>
                        <option value="serum">Сыворотки</option>
                        <option value="mask">Маски</option>
                        <option value="combo">Комплекты</option>
                    </select>
                    <select id="price-sort">
                        <option value="default">Сортировка</option>
                        <option value="price-asc">Цена: по возрастанию</option>
                        <option value="price-desc">Цена: по убыванию</option>
                        <option value="name-asc">Название: А-Я</option>
                        <option value="name-desc">Название: Я-А</option>
                    </select>
                </div>
            </div>
            
            <div class="product-grid">
                <div class="product-card">
                    <img src="https://placehold.co/300x300/e0c0a0/ffffff?text=Крем" alt="Утренний крем">
                    <h3>Утренний крем</h3>
                    <p>С витамином С и гиалуроновой кислотой</p>
                    <p class="price">1 500 ₽</p>
                    <button class="add-to-cart" data-product-id="1">В корзину</button>
                    <a href="product.html?id=1" class="view-details">Подробнее</a>
                </div>
                
                <div class="product-card">
                    <img src="https://placehold.co/300x300/d0b0c0/ffffff?text=Сыворотка" alt="Сыворотка">
                    <h3>Сыворотка</h3>
                    <p>Антивозрастная с пептидами</p>
                    <p class="price">2 200 ₽</p>
                    <button class="add-to-cart" data-product-id="2">В корзину</button>
                    <a href="product.html?id=2" class="view-details">Подробнее</a>
                </div>
                
                <div class="product-card">
                    <img src="https://placehold.co/300x300/c0a0c0/ffffff?text=Маска" alt="Ночная маска">
                    <h3>Ночная маска</h3>
                    <p>С маслом ши и витаминами</p>
                    <p class="price">1 800 ₽</p>
                    <button class="add-to-cart" data-product-id="3">В корзину</button>
                    <a href="product.html?id=3" class="view-details">Подробнее</a>
                </div>
                
                <div class="product-card">
                    <img src="https://placehold.co/300x300/d0a0a0/ffffff?text=Комбо" alt="Набор косметики">
                    <h3>Комбо</h3>
                    <p>Шампуни, гели, бальзамы, кремы <br>и другие средства ухода</p>
                    <p class="price">8 800 ₽</p>
                    <button class="add-to-cart" data-product-id="4">В корзину</button>
                    <a href="product.html?id=4" class="view-details">Подробнее</a>
                </div>
                
                <div class="product-card">
                    <img src="https://placehold.co/300x300/a0c0e0/ffffff?text=Тоник" alt="Увлажняющий тоник">
                    <h3>Тоник</h3>
                    <p>Увлажняющий с экстрактом алоэ</p>
                    <p class="price">1 200 ₽</p>
                    <button class="add-to-cart" data-product-id="5">В корзину</button>
                    <a href="product.html?id=5" class="view-details">Подробнее</a>
                </div>
                
                <div class="product-card">
                    <img src="https://placehold.co/300x300/c0e0a0/ffffff?text=Скраб" alt="Скраб для лица">
                    <h3>Скраб</h3>
                    <p>Очищающий с мелкими гранулами</p>
                    <p class="price">1 400 ₽</p>
                    <button class="add-to-cart" data-product-id="6">В корзину</button>
                    <a href="product.html?id=6" class="view-details">Подробнее</a>
                </div>
            </div>
        </section>
    </main>

<?php
require_once __DIR__ . '/../templates/footer.php';
?>

    <script src="js/script.js"></script>
    <script>
        // Product filtering and sorting functionality
        document.addEventListener('DOMContentLoaded', function() {
            const categoryFilter = document.getElementById('category-filter');
            const priceSort = document.getElementById('price-sort');
            
            // Add to cart functionality
            document.querySelectorAll('.add-to-cart').forEach(button => {
                button.addEventListener('click', function() {
                    const productId = this.getAttribute('data-product-id');
                    console.log('Товар добавлен в корзину:', productId);
                    // Here would be the logic to add product to cart
                    alert('Товар добавлен в корзину');
                });
            });
            
            // Filter and sort functionality
            categoryFilter.addEventListener('change', function() {
                console.log('Фильтрация по категории:', this.value);
                // Here would be the actual filtering logic
            });
            
            priceSort.addEventListener('change', function() {
                console.log('Сортировка:', this.value);
                // Here would be the actual sorting logic
            });
        });
    </script>
</body>

</html>