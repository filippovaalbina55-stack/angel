<?php
require_once __DIR__ . '/../templates/header.php';
?>

<link rel="stylesheet" href="/css/auth.css">

<main>
    <div class="auth-container">
        <h2>Создать аккаунт</h2>

        <?php if (!empty($_SESSION['alert']['error'])): ?>
            <div class="alert alert-error"><?= htmlspecialchars($_SESSION['alert']['error']) ?></div>
            <?php unset($_SESSION['alert']); ?>
        <?php endif; ?>

        <form method="POST" action="/do_register">
            <div class="auth-input-group">
                <label for="login">Логин</label>
                <input type="text" id="login" name="login" required>
            </div>

            <div class="auth-input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="auth-input-group">
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="auth-input-group">
                <label for="phone">Телефон</label>
                <input type="tel" id="phone" name="number" placeholder="+7 (___) ___-__-__" required>
            </div>

            <div class="auth-input-group">
                <label for="birthdate">Дата рождения</label>
                <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <button type="submit" class="auth-btn">Зарегистрироваться</button>
        </form>

        <p class="auth-footer">Есть аккаунт? <a href="/auth">Войти</a></p>
    </div>
</main>
<script src="/js/auth.js"></script>
<?php
require_once __DIR__ . '/../templates/footer.php';
?>