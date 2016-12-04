<?php
require_once CLASS_DIR . '/Controller.php';

class ErrorController extends Controller{

    function __construct() {
        $this->model = new NewsModel();
    }
	function actionError(){
        $data['news'] = $this->model->getAllNews();
		View::renderPage('news', $data);
	}
	
}