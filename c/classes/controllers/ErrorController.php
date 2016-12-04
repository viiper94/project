<?php
require_once CLASS_DIR . 'Controller.php';

class ErrorController extends Controller{
	
	function actionError(){
		
		include(ROOT . 'inc/all_goods.php');
		
	}
	
}