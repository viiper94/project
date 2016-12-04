<?php
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
define('CLASS_DIR', $_SERVER['DOCUMENT_ROOT'] . '/classes/');
define('TEMPLATE_DIR', $_SERVER['DOCUMENT_ROOT'] . '/views/');
define('DEV_EMAIL','viiper94@gmail.com');
$headers = 'FROM: Damage Records <info@damagerecords.com>' . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/html; charset="utf-8"' . "\r\n";

// Kint init
require ROOT . 'kint/Kint.class.php';

// router init
require_once CLASS_DIR . 'Router.php';
Router::start();