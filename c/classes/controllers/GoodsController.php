<?php
require_once CLASS_DIR . 'Controller.php';
require_once (CLASS_DIR . 'Db/Db.php');

class GoodsController extends Controller{
	
	public $table = 'c_goods';
	
	public function actionGoods(){
		$rows = array('goods_id', 'title', 'picture', 'price');
		$data['goods'] = $this->model->getData($this->table, $rows);
		$data['cats'] = $this->model->getData('c_categories');
		$this->view->generateView('all_goods', $data);
	}
	
	public function actionShow(){
		$id = intval($_GET['id']);
		$result = $this->model->db->safeQuery("SELECT c_goods.goods_id, c_goods.title, c_goods.price, c_goods.subcategory, c_goods.code, c_goods.description, c_goods.techs, c_goods.picture, c_categories.title AS cat_title FROM c_goods JOIN c_categories ON c_goods.categories_id = c_categories.categories_id", 'goods_id', $id);
		$data = $result[0];
		$this->view->generateView('show_goods', $data);
	}
	
	public function actionCategory(){
		if(isset($_GET['id'])){
			$rows = array('goods_id', 'title', 'picture', 'price');
			$data['goods'] = $this->model->getDataByColumn($this->table, $rows, 'categories_id', $_GET['id']);
			$data['cats'] = $this->model->getData('c_categories');
			$this->view->generateView('all_goods', $data);
		}
	}
	
	public function actionNew(){
		if(isset($_POST['add_goods'])){
			if(isset($_POST['title'])) 			$data['title'] 			= $_POST['title'];
			if(isset($_POST['price'])) 			$data['price'] 			= $_POST['price'];
			if(isset($_POST['categories_id'])) 	$data['categories_id']	= $_POST['categories_id'];
			if(isset($_POST['subcat'])) 		$data['subcategory']	= $_POST['subcat'];
			if(isset($_POST['code'])) 			$data['code'] 			= $_POST['code'];
			if(isset($_POST['description']))	$data['description']	= nl2br($_POST['description']);
			if(isset($_POST['techs'])) 			$data['techs'] 			= nl2br($_POST['techs']);
			$data = array_filter($data, function($el){ return !empty($el);});
			if($this->model->addData($this->table, $data)){
				$this->view->okMsg('Успішно додано!');
				$this->actionGoods();
			} else {
				$this->view->errMsg('Помилка!');
				$cats = $this->model->getData('c_categories');
				$this->view->generateView('add_goods', $cats);
			}
		} else {
			$data = $this->model->getData('c_categories');
			$this->view->generateView('add_goods', $data);
		}
	}
	
	public function actionEdit(){
		if(isset($_POST['edit_goods'])) $this->saveProduct();
		else if(isset($_POST['delete_goods'])) $this->deleteProduct();
		else if(isset($_GET['id'])) $this->editProduct();
		else $this->actionGoods();
	}
	
	public function actionDelete(){
		if(isset($_GET['id'])) $this->deleteProduct();
	}
	
	public function actionSearch(){
		if(isset($_POST['search'])){
			$query = $_POST['query'];
			$rows = array('goods_id', 'title', 'picture', 'price');
			$data['goods'] = $this->model->searchData($this->table, 'title', $query, $rows);
			$data['cats'] = $this->model->getData('c_categories');
			$this->view->generateView('all_goods', $data);
		}
	}
	
	private function saveProduct(){
		$id						= intval($_POST['id']);
		$data['title'] 			= $_POST['title'];
		$data['price'] 			= $_POST['price'];
		$data['categories_id'] 	= $_POST['categories_id'];
		$data['subcategory'] 	= $_POST['subcategory'];
		$data['code'] 			= $_POST['code'];
		$data['description'] 	= nl2br($_POST['description']);
		$data['techs'] 			= nl2br($_POST['techs']);		
		if($this->model->updateDataById($this->table, $data, intval($id))){
			$this->view->okMsg('Успішно відредаговано!');
			$this->actionGoods();
		}else {
			$this->view->generateView('edit_goods', $data);
		}
		
	}
	
	private function editProduct(){
		$id = intval($_GET['id']);
		$result = $this->model->getDataById($this->table, $id);
		$data['data'] = $result[0];
		$result = $this->model->getData('c_categories');
		$data['cats'] = $result;
		$br = array('<br>', '<br />', '<br/>');
		$data['data']['description'] = str_ireplace($br, '', $data['data']['description']);
		$data['data']['techs'] = str_ireplace($br, '', $data['data']['techs']);
		$this->view->generateView('edit_goods', $data);
	}
	
	private function deleteProduct(){
		if(isset($_POST['id']))$id = $_POST['id'];
		else $id = $_GET['id'];
		if(isset($id)){
			$this->model->deleteDataById($this->table, $id);
			$this->view->okMsg('Успішно видалено!');
			$this->actionGoods();
		}		
	}
	
}