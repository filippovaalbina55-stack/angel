<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Forbidden');
}

require_once __DIR__ . '/boot.php';

$login = trim($_POST['login'] ?? '');
$password = $_POST['password'] ?? '';

if (empty($login) || empty($password)) {
    $_SESSION['alert']['error'] = "Заполните все поля";
    header('Location: /auth');
    exit;
}

// 👇 Используем ФУНКЦИЮ pdo()
$stmt = pdo()->prepare("SELECT id, login, password FROM users WHERE login = ?");
$stmt->execute([$login]);
$user = $stmt->fetch();

if (!$user || !password_verify($password, $user['password'])) {
    $_SESSION['alert']['error'] = "Неверный логин или пароль!";
    header('Location: /auth');
    exit;
}

$_SESSION['uid'] = $user['id'];
$_SESSION['login'] = $user['login'];
$_SESSION['alert']['success'] = "Вы успешно вошли!";

header('Location: /');
exit;   