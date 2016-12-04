<?php
require_once CLASS_DIR . 'View.php';
require_once CLASS_DIR . 'Model.php';

class Controller{
	
	public $model;
	public $view;
	public $table;
	
	function __construct(){
		$this->view = new View();
		$this->model = new Model();
	}
	
}