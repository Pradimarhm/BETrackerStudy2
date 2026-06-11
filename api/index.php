<?php

// Set path info agar Laravel bisa baca URL dengan benar
if (isset($_SERVER['REQUEST_URI'])) {
    $_SERVER['SCRIPT_NAME'] = '/index.php';
}

require __DIR__ . '/../public/index.php';
