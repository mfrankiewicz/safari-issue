<?php

require_once __DIR__ . '/constants.php';

setcookie(
    $name = 'test_cookie',
    $value = 'test',
    $expire = time() - 36000,
    $path = '/',
    COOKIE_DOMAIN,
    COOKIE_SECURE,
    $httpOnly = true
);
unset($_COOKIE['test_cookie']);
