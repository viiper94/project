<?php
require_once CLASS_DIR . '/Controller.php';

class ContactsController extends Controller{

    function __construct(){
        $this->model = new MainModel('about');
    }

    function actionContacts(){
        $data['text'] = $this->model->getDataByColumn(array('text'), 'category', 'contacts');
        $data['title'] = 'About Contacts';
        if(isset($_GET['ajax'])){
            $data['status'] = 'OK';
            echo json_encode($data);
        }else{
            View::generateView('contacts', $data);
        }
    }
	
}