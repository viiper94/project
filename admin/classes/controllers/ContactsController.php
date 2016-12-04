<?php
require_once CLASS_DIR . '/Controller.php';

class ContactsController extends Controller{
    
    function __construct() {
        $this->model = new PageModel('about');
    }

    function actionContacts($msg = null){
        if($msg != null) $data['msg'] = $msg;
        $result = $this->model->getPageText($_GET['controller']);
        $data['page'] = $result[0];
		View::renderPage('page', $data);
	}

    function actionSave(){
        if($this->model->savePageText($_GET['controller'])){
            $this->actionContacts(View::okMsg('Успішно збережено'));
        }
        else $this->actionContacts(View::errMsg('Помилка'));
    }
    
}