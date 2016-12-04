<?php
require_once CLASS_DIR . 'Controller.php';

class EmployeesController extends Controller{
	
	public $table = 'c_employees';
	
	public function actionEmployees(){
		$data = $this->model->getData($this->table);
		$this->view->generateView('all_employees', $data);
	}
	
	public function actionNew(){
		if(isset($_POST['add_new'])){
			if(isset($_POST['first_name'])) 	$data['first_name'] 	= $_POST['first_name'];
			if(isset($_POST['second_name'])) 	$data['second_name'] 	= $_POST['second_name'];
			if(isset($_POST['city'])) 			$data['city'] 			= $_POST['city'];
			if(isset($_POST['address'])) 		$data['address'] 		= $_POST['address'];
			if(isset($_POST['tel'])) 			$data['tel'] 			= $_POST['tel'];
			if(isset($_POST['stores_id'])) 		$data['stores_id'] 		= $_POST['stores_id'];
			if(isset($_POST['position'])) 		$data['position'] 		= $_POST['position'];
			if(isset($_POST['salary'])) 		$data['salary'] 		= $_POST['salary'];
			$data = array_filter($data, function($el){ return !empty($el);});
			if($this->model->addData($this->table, $data)){
				$this->view->okMsg('Успішно додано!');
				$this->actionEmployees();
			} else {
				$this->view->errMsg('Помилка!');
				$this->view->generateView('add_employees');
			}
		} else {
			$data = $this->model->getData('c_stores', array('stores_id', 'city', 'address'));
			$this->view->generateView('add_employees', $data);
		}
	}
	
	public function actionEdit(){
		if(isset($_POST['edit'])) $this->saveEmployee();
		else if(isset($_POST['delete'])) $this->deleteEmployee();
		else if(isset($_GET['id'])) $this->editEmployee();
		else $this->actionEmployees();
	}
	
	public function actionDelete(){
		if(isset($_GET['id'])) $this->deleteEmployee();
	}
	
	private function saveEmployee(){
		$id						= intval($_POST['id']);
		$data['first_name'] 	= $_POST['first_name'];
		$data['second_name'] 	= $_POST['second_name'];
		$data['city'] 			= $_POST['city'];
		$data['address'] 		= $_POST['address'];
		$data['tel'] 			= $_POST['tel'];
		$data['stores_id'] 		= $_POST['stores_id'];
		$data['position'] 		= $_POST['position'];
		$data['salary'] 		= $_POST['salary'];
		if($this->model->updateDataById($this->table, $data, $id)){
			$this->view->okMsg('Успішно відредаговано!');
			$this->actionEmployees();
		}else {
			$this->view->generateView('edit_employees', $data);
		}
		
	}
	
	private function editEmployee(){
		$id = intval($_GET['id']);
		$result = $this->model->getDataById($this->table, $id);
		$data['employee'] = $result[0];
		$result = $this->model->getData('c_stores', array('stores_id', 'city', 'address'));
		$data['stores'] = $result;
		$this->view->generateView('edit_employees', $data);
	}
	
	private function deleteEmployee(){
		if(isset($_POST['id']))$id = $_POST['id'];
		else $id = $_GET['id'];
		$this->model->deleteDataById($this->table, $id);
		$this->actionEmployees();
	}
	
}