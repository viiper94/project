<?php
require_once CLASS_DIR . 'Db/Database.php';

class Model{
	
	public $db;
    public $table;
    public $columns;
    
    function __construct($table, $columns = array()){
        $this->db = new Database();
        $this->table = $table;
        $this->columns = $columns;
    }

    public function directQuery($q){
        
    }

}