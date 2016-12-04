<?php
require_once CLASS_DIR . 'Controller.php';

class DealersController extends Controller{
	
	public $table = 'c_dealers';
	
	function actionDealers(){
		$data = $this->model->getData($this->table);
		$this->view->generateView('all_dealers', $data);
	}
	
	public function actionNew(){
		if(isset($_POST['add_new'])){
			if(isset($_POST['name'])) 		$data['title'] 		= $_POST['name'];
			if(isset($_POST['country'])) 	$data['country'] 	= $_POST['country'];
			if(isset($_POST['city'])) 		$data['city'] 		= $_POST['city'];
			if(isset($_POST['address'])) 	$data['address'] 	= $_POST['address'];
			if(isset($_POST['tel'])) 		$data['tel'] 		= $_POST['tel'];
			if(isset($_POST['ceo'])) 		$data['ceo'] 		= $_POST['ceo'];
			if(isset($_POST['rating'])) 	$data['rating'] 	= $_POST['rating'];
			$data = array_filter($data, function($el){ return !empty($el);});
			print_r($data);
			if($this->model->addData($this->table, $data)){
				$this->view->okMsg('Успішно додано!');
				$this->actionDealers();
			} else {
				$this->view->errMsg('Помилка!');
				$this->view->generateView('add_dealers');
			}
		} else {
			$this->view->generateView('add_dealers');
		}
	}
	
	public function actionEdit(){
		if(isset($_POST['edit'])) $this->saveDealer();
		else if(isset($_POST['delete'])) $this->deleteDealer();
		else if(isset($_GET['id'])) $this->editDealer();
		else $this->actionDealers();
	}
	
	public function actionDelete(){
		if(isset($_GET['id'])) $this->deleteDealer();
	}
	
	private function saveDealer(){
		$id					= $_POST['id'];
		$data['title'] 		= $_POST['title'];
		$data['country'] 	= $_POST['country'];
		$data['city'] 		= $_POST['city'];
		$data['address'] 	= $_POST['address'];
		$data['tel'] 		= $_POST['tel'];
		$data['ceo'] 		= $_POST['ceo'];
		$data['rating'] 	= $_POST['rating'];
		print_r($data);		
		if($this->model->updateDataById($this->table, $data, intval($id))){
			$this->view->okMsg('Успішно відредаговано!');
		}
		$this->view->generateView('edit_dealers', $data);
	}
	
	private function editDealer(){
		$id = $_GET['id'];
		$result = $this->model->getDataById($this->table, intval($id));
		$data = $result[0];
		print_r($data);
		$this->view->generateView('edit_dealers', $data);
	}
	
	private function deleteDealer(){
		if(isset($_POST['id']))$id = $_POST['id'];
		else $id = $_GET['id'];
		$this->model->deleteDataById($this->table, intval($id));
		$this->view->okMsg('Успішно видалено!');
		$this->actionDealers();
	}
	
}