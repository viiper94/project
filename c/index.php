<?php
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/c/');
define('CLASS_DIR', ROOT . 'classes/');
include(ROOT . 'header.php');
require_once (CLASS_DIR . 'Router.php');
Router::start();
include(ROOT . 'footer.php');