<?php
require_once CLASS_DIR . 'Db/Database.php';

class Model{

	public $db;
	public $table;
	public $columns;
	public $section;

	function __construct($table, $columns = null){
		$this->db = new Database();
		$this->table = $table;
		$this->columns = $columns;
		$this->section = $table;
	}

}