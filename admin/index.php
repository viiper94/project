<?php
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/admin/');
define('CLASS_DIR', $_SERVER['DOCUMENT_ROOT'] . '/admin/classes/');
define('TEMPLATE_DIR', $_SERVER['DOCUMENT_ROOT'] . '/admin/views/');
require ROOT . 'kint/Kint.class.php';
require_once (CLASS_DIR . 'Router.php');
Router::start();