<?php
require_once __DIR__ . '/../templates/header.php';
?>

<link rel="stylesheet" href="/css/auth.css">

<main>
    <div class="auth-container">
        <h2>Вход в аккаунт</h2>

        <?php if (!empty($_SESSION['alert']['error'])): ?>
            <div class="alert alert-error"><?= htmlspecialchars($_SESSION['alert']['error']) ?></div>
            <?php unset($_SESSION['alert']); ?>
        <?php endif; ?>

        <form method="POST" action="/do_login">
            <div class="auth-input-group">
                <label for="login">Логин</label>
                <input type="text" id="login" name="login" required>
            </div>

            <div class="auth-input-group">
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" class="auth-btn">Войти</button>
        </form>

        <p class="auth-footer">Нет аккаунта? <a href="/reg">Зарегистрироваться</a></p>
        <p class="auth-footer"><a href="/recovery">Забыли пароль?</a></p>
    </div>
</main>

<?php
require_once __DIR__ . '/../templates/footer.php';
?>