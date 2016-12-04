<?php
require_once CLASS_DIR . '/Controller.php';

class SchoolController extends Controller{
	
	function actionSchool(){
        $data['title'] = 'Школа Damage Records';
		View::generateView('school', $data);
	}
	
}