<?php
require_once CLASS_DIR . '/Controller.php';

class ContactsController extends Controller{

    function __construct(){
        $this->model = new MainModel('about');
    }

    function actionContacts(){
        $data['text'] = $this->model->getDataByColumn(array('text'), 'category', 'contacts');
        $data['title'] = 'About Contacts';
        View::generateView('contacts', $data);
    }
	
}