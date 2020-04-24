<?php

require_once __DIR__ . '/constants.php';

setcookie(
    $name = 'test_cookie',
    $value = 'test',
    $expire = time() - 36000,
    $path = '/',
    COOKIE_DOMAIN,
    $secure = $_['SERVER_PORT'] == 443,
    $httpOnly = true
);
unset($_COOKIE['test_cookie']);
