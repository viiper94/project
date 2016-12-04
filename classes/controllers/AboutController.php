<?php
require_once CLASS_DIR . 'Controller.php';

class AboutController extends Controller{

    function __construct(){
        $this->model = new MainModel('about');
    }

	function actionAbout(){
        $data['text'] = $this->model->getDataByColumn(array('text'), 'category', 'about');
        $data['title'] = 'About Damage';
		View::generateView('about', $data);
	}
	
}