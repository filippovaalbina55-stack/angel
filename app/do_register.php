<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Forbidden');
}

require_once __DIR__ . '/boot.php';

$login = trim($_POST['login'] ?? '');
$email = trim($_POST['email'] ?? '');
$number = trim($_POST['number'] ?? '');
$password = $_POST['password'] ?? '';
$birthdate = $_POST['birthdate'] ?? null;

if (empty($login) || empty($email) || empty($number) || empty($password)) {
    $_SESSION['alert']['error'] = "Заполните все поля";
    header('Location: /reg');
    exit;
}

// 👇 Используем pdo()
$stmt = pdo()->prepare("SELECT id FROM users WHERE login = ? OR email = ?");
$stmt->execute([$login, $email]);

if ($stmt->fetch()) {
    $_SESSION['alert']['error'] = "Такой логин или почта уже зарегистрированы!";
    header('Location: /reg');
    exit;
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$stmt = pdo()->prepare("INSERT INTO users (login, email, number, birthdate, password) VALUES (?, ?, ?, ?, ?)");
$stmt->execute([$login, $email, $number, $birthdate, $hashedPassword]);

$userId = pdo()->lastInsertId();

$_SESSION['uid'] = $userId;
$_SESSION['login'] = $login;
$_SESSION['alert']['success'] = "Регистрация успешна!";

header('Location: /');
exit;