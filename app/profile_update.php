<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Forbidden');
}

if (!isset($_SESSION['uid'])) {
    $_SESSION['alert']['error'] = 'Требуется авторизация';
    header('Location: /auth');
    exit;
}

require_once __DIR__ . '/boot.php';

$email = trim($_POST['email'] ?? '');
$number = trim($_POST['number'] ?? '');
$birthdate = $_POST['birthdate'] ?? null;

if (empty($email) || empty($number)) {
    $_SESSION['alert']['error'] = 'Email и телефон обязательны';
    header('Location: /profile/edit');
    exit;
}

// Проверяем, не занят ли email другим пользователем
$stmt = pdo()->prepare("SELECT id FROM users WHERE email = ? AND id != ?");
$stmt->execute([$email, $_SESSION['uid']]);
if ($stmt->fetch()) {
    $_SESSION['alert']['error'] = 'Этот email уже используется другим аккаунтом';
    header('Location: /profile/edit');
    exit;
}

// Обновляем профиль
$stmt = pdo()->prepare("UPDATE users SET email = ?, number = ?, birthdate = ? WHERE id = ?");
$stmt->execute([$email, $number, $birthdate, $_SESSION['uid']]);

$_SESSION['alert']['success'] = 'Профиль успешно обновлён';
header('Location: /profile');
exit;