<?php

if (isset($_COOKIE['test_cookie'])) {
    return;
}

http_response_code(400);
