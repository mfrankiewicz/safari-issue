<?php

require_once __DIR__ . '/constants.php';

setcookie(
    $name = 'test_cookie',
    $value = 'test',
    $expire = time() + 3600,
    $path = '/',
    COOKIE_DOMAIN,
    $secure = $_['SERVER_PORT'] == 443,
    $httpOnly = true
);

if (isset($_GET['redirect'])) {
    header("Location: ${_GET['redirect']}");
}
