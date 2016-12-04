<?php
require_once CLASS_DIR . 'Controller.php';

class CategoriesController extends Controller{
	
	public $table = 'c_categories';
	
	function actionCategories(){
		$data = $this->model->getData($this->table);
		$this->view->generateView('all_categories', $data);
	}
	
	public function actionNew(){
		if(isset($_POST['add_category'])){
			$data['title'] = $_POST['new_category'];
			$result = $this->model->addData($this->table, $data);
			print_r($result);
			if($result){
				$this->view->okMsg('Успішно додано!');
				$this->actionCategories();
			} else {
				$this->view->errMsg('Помилка!');
				$this->actionCategories();
			}
		}		
	}
	
	public function actionEdit(){
		if(isset($_POST['title'])){
			$data['title'] = $_POST['new_cat'];
			if($this->model->updateDataById($this->table, $data, intval($_GET['id']))){
				$this->view->okMsg('Успішно додано!');
				$this->actionCategories();
			}
		}	
	}
	
	public function actionDelete(){
		if(isset($_GET['id'])){
			if($this->model->deleteDataById($this->table, $_GET['id'])){
				$this->view->okMsg('Успішно видалено!');
				$this->actionCategories();
			}
		}
	}
	
}