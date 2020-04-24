<?php

require_once __DIR__ . '/constants.php';

setcookie(
    $name = 'test_cookie',
    $value = 'test',
    [
        'expires' => time() - 36000,
        'path' => '/',
        'domain' => COOKIE_DOMAIN,
        'secure' => COOKIE_SECURE,
        'httponly' => true,
        'samesite' => 'Strict',
    ]
);
unset($_COOKIE['test_cookie']);
