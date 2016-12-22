<?php
require_once CLASS_DIR . 'Controller.php';

class ErrorController extends Controller{
	
	static public function actionError(){
        $data['title'] = 'Error - Page not found';
        if(isset($_GET['ajax'])){
            $data['status'] = 'OK';
            echo json_encode($data);
        }else{
            View::generateView('404', $data);
        }
	}
	
}