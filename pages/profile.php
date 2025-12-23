<?php
require_once __DIR__ . '/../templates/header.php';

// Проверка авторизации (на всякий случай — роутер уже должен был это сделать)
if (!isset($_SESSION['uid'])) {
    $_SESSION['alert']['error'] = 'Требуется авторизация';
    header('Location: /auth');
    exit;
}

// Получаем данные пользователя
require_once __DIR__ . '/../app/boot.php';

$stmt = pdo()->prepare("SELECT login, email, number, birthdate FROM users WHERE id = ?");
$stmt->execute([$_SESSION['uid']]);
$user = $stmt->fetch();

if (!$user) {
    session_destroy();
    $_SESSION['alert']['error'] = 'Пользователь не найден';
    header('Location: /auth');
    exit;
}

// Форматируем дату рождения и возраст
$birthdate = $user['birthdate'] ? new DateTime($user['birthdate']) : null;
$age = $birthdate ? $birthdate->diff(new DateTime())->y : null;
$formattedBirthdate = $birthdate ? $birthdate->format('d.m.Y') : 'не указано';

?>

<link rel="stylesheet" href="/css/profile.css">

<main class="container">
    <!-- Профиль -->
    <div class="profile">
        <div class="profile-head">
            <span class="logo">👑</span>
        </div>
        <div class="profile-body">
            <div class="avatar">👤</div>
            <h1><?= htmlspecialchars($user['login']) ?></h1>
            <ul class="info">
                <li>📧 <?= htmlspecialchars($user['email']) ?></li>
                <li>📱 <?= htmlspecialchars($user['number']) ?></li>
                <?php if ($age !== null): ?>
                    <li>🎂 <?= $age ?> лет (<?= htmlspecialchars($formattedBirthdate) ?>)</li>
                <?php else: ?>
                    <li>🎂 Не указано</li>
                <?php endif; ?>
                <li>📍 Камышин</li> <!-- или добавь поле city в БД позже -->
            </ul>
            <a href="edit" class="edit-btn">Редактировать</a>
        </div>
    </div>

    <!-- Заказы (временно заглушка) -->
    <div class="orders">
        <h2>МОИ ЗАКАЗЫ</h2>
        <div class="empty">История заказов пока недоступна</div>
    </div>
</main>

<?php
require_once __DIR__ . '/../templates/footer.php';
?>