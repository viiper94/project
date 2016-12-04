<?php
require_once (CLASS_DIR . 'Db/Db.php');

class Model{
	
	public $db;
	
	function __construct(){
		$this->db = new Db();
	}
	
	public function addData($table, $data){
		if(isset($_FILES["cover"]["tmp_name"])){
			$this->db->insert($table, $data);
			$lastId = $this->db->getLastId();
			switch($_FILES['cover']['type']){
				case 'image/jpeg': $mime = 'jpg';break;
				case 'image/png': $mime = 'png';break;
			}
			$filePath = 'img/'.$lastId.'.'.$mime;
			move_uploaded_file($_FILES['cover']['tmp_name'], $filePath);
			$data['picture'] = $filePath;
			return $this->updateDataById($table, $data, $lastId);
		} else{
			return $this->db->insert($table, $data);
		}		
	}
	
	public function searchData($table, $column, $query, $rows = null){
		return $this->db->search($table, $column, $query, $rows);
	}
	
	public function getData($table, $data=null){
		return $this->db->select($table, $data);
	}
	
	public function getDataByColumn($table, $data=null, $col, $val){
		return $this->db->select($table, $data, $col, $val);
	}
	
	public function getDataById($table, $id){
		$column = substr($table, 2) . '_id';
		return $this->db->select($table, null, $column, $id);
		
	}
	
	public function updateDataById($table, $data, $id){
		$column = substr($table, 2) . '_id';
		return $this->db->update($table, $data, $column, $id);
	}
	
	public function deleteDataById($table, $id){
		$column = substr($table, 2) . '_id';
		return $this->db->delete($table, $column, $id);
	}
		
}