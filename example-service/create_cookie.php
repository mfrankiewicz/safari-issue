<?php

require_once __DIR__ . '/constants.php';

setcookie(
    $name = 'test_cookie',
    $value = 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
    [
        'expires' => time() + 36000,
        'path' => '/',
        'domain' => COOKIE_DOMAIN,
        'secure' => COOKIE_SECURE,
        'httponly' => true,
        'samesite' => 'Strict',
    ]
);

if (isset($_GET['redirect'])) {
    header("Location: ${_GET['redirect']}");
}
