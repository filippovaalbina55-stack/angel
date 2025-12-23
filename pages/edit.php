<?php
require_once __DIR__ . '/../templates/header.php';

if (!isset($_SESSION['uid'])) {
    $_SESSION['alert']['error'] = 'Требуется авторизация';
    header('Location: /auth');
    exit;
}

require_once __DIR__ . '/../app/boot.php';

// Получаем текущие данные
$stmt = pdo()->prepare("SELECT login, email, number, birthdate FROM users WHERE id = ?");
$stmt->execute([$_SESSION['uid']]);
$user = $stmt->fetch();

if (!$user) {
    session_destroy();
    header('Location: /auth');
    exit;
}

// Формат даты для input[type="date"]
$birthdateInput = $user['birthdate'] ? (new DateTime($user['birthdate']))->format('Y-m-d') : '';

?>

<link rel="stylesheet" href="/../css/profile.css">

<main class="container">
    <div class="profile-edit">
        <h2>Редактировать профиль</h2>

        <?php if (!empty($_SESSION['alert']['error'])): ?>
            <div class="alert alert-error"><?= htmlspecialchars($_SESSION['alert']['error']) ?></div>
            <?php unset($_SESSION['alert']); ?>
        <?php endif; ?>

        <form method="POST" action="/profile/update">
            <div class="auth-input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
            </div>

            <div class="auth-input-group">
                <label for="number">Телефон</label>
                <input type="tel" id="number" name="number" value="<?= htmlspecialchars($user['number']) ?>" placeholder="+7 (___) ___-__-__" required>
            </div>

            <div class="auth-input-group">
                <label for="birthdate">Дата рождения</label>
                <input type="date" id="birthdate" name="birthdate" value="<?= htmlspecialchars($birthdateInput) ?>">
            </div>

            <button type="submit" class="auth-btn">Сохранить</button>
            <a href="/profile" class="cancel-link">Отмена</a>
        </form>
    </div>
</main>

<?php
require_once __DIR__ . '/../templates/footer.php';
?>