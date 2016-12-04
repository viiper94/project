<?php
require_once CLASS_DIR . 'Controller.php';

class StoresController extends Controller{
	
	public $table = 'c_stores';
	
	function actionStores(){
		$data = $this->model->getData($this->table);
		$this->view->generateView('all_stores', $data);		
	}
	
	public function actionNew(){
		if(isset($_POST['add_new'])){
			if(isset($_POST['city'])) 		$data['city'] 		= $_POST['city'];
			if(isset($_POST['address'])) 	$data['address'] 	= $_POST['address'];
			if(isset($_POST['tel'])) 		$data['tel'] 		= $_POST['tel'];
			if(isset($_POST['ceo'])) 		$data['ceo'] 		= $_POST['ceo'];
			if(isset($_POST['vacancies'])) 	$data['vacancies']	= $_POST['vacancies'];
			$data = array_filter($data, function($el){ return !empty($el);});
			if($this->model->addData($this->table, $data)){
				$this->view->okMsg('Успішно додано!');
				$this->actionStores();
			} else {
				$this->view->errMsg('Помилка!');
				$this->view->generateView('add_stores');
			}
		} else {
			$this->view->generateView('add_stores');
		}
	}
	
	public function actionDelete(){
		if(isset($_GET['id'])) $this->deleteStore();
	}
	
	public function actionEdit(){
		if(isset($_POST['edit'])) $this->saveStore();
		else if(isset($_POST['delete'])) $this->deleteStore();
		else if(isset($_GET['id'])) $this->editStore();
		else $this->actionStores();
	}
	
	private function saveStore(){
		$id						= $_POST['id'];
		$data['city'] 			= $_POST['city'];
		$data['address'] 		= $_POST['address'];
		$data['tel'] 			= $_POST['tel'];
		$data['ceo'] 			= $_POST['ceo'];
		$data['vacancies'] 		= $_POST['vacancies'];
		
		if($this->model->updateDataById($this->table, $data, intval($id))){
			$this->view->okMsg('Успішно відредаговано!');
			$this->actionStores();
		}else {
			$this->view->generateView('edit_stores', $data);
		}
	}
	
	private function editStore(){
		$id = $_GET['id'];
		$result = $this->model->getDataById($this->table, $id);
		$data = $result[0];
		$this->view->generateView('edit_stores', $data);
	}
	
	private function deleteStore(){
		if(isset($_POST['id']))$id = $_POST['id'];
		else $id = $_GET['id'];
		if($this->model->deleteDataById($this->table, $id)){			
			$this->view->okMsg('Успішно видалено!');
		} else {		
			$this->view->okMsg('Помилка!');			
		}
		$this->actionStores();
	}
	
}