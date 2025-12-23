<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Восстановление пароля | Angel</title>
    <link rel="stylesheet" href="css/auth.css">
    <link rel="stylesheet" href="css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Inter:wght@300;400;500&display=swap"
        rel="stylesheet">
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
                    <li><a href="#about">О нас</a></li>
                    <li><a href="#reviews">Отзывы</a></li>
                    <li><a href="auth.html">Войти</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="auth-container">
            <h2>Восстановление пароля</h2>
            <p>Введите ваш email, и мы отправим вам ссылку для восстановления пароля</p>
            <form id="recovery-form">
                <div class="auth-input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <button type="submit" class="auth-btn">Отправить</button>
            </form>

            <p class="auth-footer"><a href="auth.html">← Назад к входу</a></p>
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
        document.getElementById('recovery-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('email').value;
            console.log('Запрос восстановления пароля для:', email);
            alert('Ссылка для восстановления пароля отправлена на ваш email');
        });
    </script>
</body>

</html>