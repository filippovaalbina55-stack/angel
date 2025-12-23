<?php
require_once __DIR__ . '/../templates/header.php';
?>
<body>

    <main class="contacts-page">
        <div class="container">
            <h1>Контакты</h1>
            <div class="contacts-info">
                <div class="contact-details">
                    <h2>Свяжитесь с нами</h2>
                    <p>Телефон: <strong>+7 (XXX) XXX-XX-XX</strong></p>
                    <p>Email: <strong>hello@angel.cosmetics</strong></p>
                    <p>Режим работы:</p>
                    <ul>
                        <li>Пн–Пт: 9:00 – 19:00</li>
                        <li>Сб: 10:00 – 16:00</li>
                        <li>Вс: выходной</li>
                    </ul>
                </div>
                <div class="contact-address">
                    <h2>Адрес</h2>
                    <p><strong>г. Камышин,</strong><br>ул. Косметическая, д. 5</p>
                    <div class="map-placeholder">
                        <!-- Здесь можно вставить iframe карты позже -->
                        <p>📍 На карте: Google Maps / 2ГИС</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php
require_once __DIR__ . '/../templates/footer.php';
?>

    <script src="js/script.js"></script>
</body>
</html>