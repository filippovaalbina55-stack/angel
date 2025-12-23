<?php
session_start();

// 🔹 Обработка POST-запросов
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $path = trim($request_uri, '/');

    // Известные обработчики
    if ($path === 'do_register') {
        require_once __DIR__ . '/app/do_register.php';
        exit;
    }
    if ($path === 'do_login') {
        require_once __DIR__ . '/app/do_login.php';
        exit;
    }
    if ($path === 'profile/update') {
        require_once __DIR__ . '/app/profile_update.php';
        exit;
    }

    // Неизвестный POST — ошибка
    http_response_code(400);
    die('Bad Request');
}

// 🔹 Обработка GET-запросов (роутинг страниц)
try {
    // Определяем маршрут
    if (isset($_GET['route'])) {
        $route = trim($_GET['route']);
    } else {
        $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $route = trim($request_uri, '/');
        $route = $route === '' ? 'index' : $route;
    }

    // Защита от слеша в конце
    if (substr($route, -1) === '/') {
        $route .= 'index';
    }

    // Проверка разрешённых символов
    if (!preg_match('~^[-a-z0-9_/]+$~i', $route)) {
        throw new Exception('Not allowed route');
    }

    // Защищённые страницы
    $protectedPages = ['profile', 'profile/edit'];
    $isAuthenticated = isset($_SESSION['uid']);

    if (in_array($route, $protectedPages) && !$isAuthenticated) {
        header('Location: /auth');
        exit;
    }

    // Путь к файлу страницы
    $filePath = __DIR__ . '/pages/' . $route . '.php';

    // Попытка найти index.php внутри папки
    if (!file_exists($filePath)) {
        $route .= '/index';
        $filePath = __DIR__ . '/pages/' . $route . '.php';
    }

    if (!file_exists($filePath)) {
        throw new Exception('Route not found');
    }

    include $filePath;

} catch (Throwable $ex) {
    include __DIR__ . '/pages/404.php';
}

// 🔹 Обработка GET-запросов (твой текущий код)
try {
    // Если передан route — используем его
    if (isset($_GET['route'])) {
        $route = trim($_GET['route']);
    } else {
        // Иначе извлекаем из ЧПУ (чистого URL)
        $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $route = trim($request_uri, '/');
        $route = $route === '' ? 'index' : $route;
    }

    // Защита от слеша в конце
    if (substr($route, -1) === '/') {
        $route .= 'index';
    }

    // Проверка символов
    if (!preg_match('~^[-a-z0-9_/]+$~i', $route)) {
        throw new Exception('Not allowed route');
    }

    // Защищённые страницы
    $protectedPages = ['profile'];
    $isAuthenticated = isset($_SESSION['uid']);

    if (in_array($route, $protectedPages) && !$isAuthenticated) {
        header('Location: /auth');
        exit;
    }

    // Путь к файлу
    $filePath = __DIR__ . '/pages/' . $route . '.php';

    if (!file_exists($filePath)) {
        $route .= '/index';
        $filePath = __DIR__ . '/pages/' . $route . '.php';
    }

    if (!file_exists($filePath)) {
        throw new Exception('Route not found');
    }

    include $filePath;

} catch (Throwable $ex) {
    include __DIR__ . '/pages/404.php';
}