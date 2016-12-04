<?php
require_once CLASS_DIR . 'Controller.php';

class ErrorController extends Controller{
	
	static public function actionError(){
        $data['title'] = 'Error - Page not found';
		View::generateView('404', $data);
	}
	
}