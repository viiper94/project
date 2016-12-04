<?php
require_once CLASS_DIR . 'Db/Production.php';

class Database extends Production{

    public $link;

    function __construct(){
        $this->link = new mysqli($this->host, $this->user, $this->password, $this->db_name);
        $this->link->set_charset('utf8');
        if (!$this->link) {
            $this->fail($this->link->connect_errno . PHP_EOL);
        }
    }

    private function fail($errorMsg) {
        print 'Error: ' . $errorMsg;
        exit;
    }

    public function select($table, $columns = null, $column = null, $val = null){
        $columns != null ? $columns = implode(', ', $columns) : $columns = '*';
        $where = $column . ' = ?';
        $query = "SELECT $columns FROM $table";
        if($column != null) $query .= ' WHERE ' . $where;
        //Kint::dump($query);
        $stmt = $this->link->prepare($query);
        if(!empty($this->link->error)){
            $this->fail($this->link->error);
            return false;
        }
        if($column != null){
            $type = substr(gettype($val), 0, 1);
            $stmt->bind_param($type, $val);
        }
        $stmt->execute();
        if(!empty($this->link->error)){
            $this->fail($this->link->error);
            return false;
        }
        $result = $this->fetchAssoc($stmt);
        return $result;
    }

    public function insert($table, $data){
        $rows = implode(',', array_keys($data));
        $values = implode(',', $data);
        $valuesCount = '';
        for($i = 0; $i < count($data); $i++){
            if($i != 0)$valuesCount .= ',';
            $valuesCount .= '?';
        }
        $query = "INSERT INTO $table ($rows) VALUES ($valuesCount)";
        //Kint::dump($query);
        $stmt = $this->link->prepare($query);
        $this->bindParamArray($stmt, $data);
        $stmt->execute();
        if(!empty($this->link->error)){
            echo $this->link->error;
            return false;
        }
        return true;
    }

    public function search($table, $column, $q, $rows = array('*')){
        $rows = implode(', ', $rows);
        $query = "SELECT $rows FROM $table WHERE $column LIKE ? ORDER BY sort DESC";
        $stmt = $this->link->prepare($query);
        if(!empty($this->link->error)){
            $this->fail($this->link->error);
            return false;
        }
        $param = '%'.$q.'%';
        $stmt->bind_param('s', $param);
        $stmt->execute();
        if(!empty($this->link->error)){
            $this->fail($this->link->error);
            return false;
        }
        $result = $this->fetchAssoc($stmt);
        return $result;
    }

    public function safeQuery($query, $col = null, $val = null){
        if($col != null && $val != null){
            $query .= " WHERE $col = ?";
            $stmt = $this->link->prepare($query);
            $type = substr(gettype($val), 0, 1);
            $stmt->bind_param($type, $val);
        } else {
            $stmt = $this->link->prepare($query);
        }
        $stmt->execute();
        if(!empty($this->link->error)){
            $this->fail($this->link->error);
            return false;
        }
        return $this->fetchAssoc($stmt);
    }

    public function query($query){
        //Kint::dump($query);
        $stmt = $this->link->prepare($query);
        $stmt->execute();
        if(!empty($this->link->error)){
            $this->fail($this->link->error);
            return false;
        }
        $qw = $this->fetchAssoc($stmt);
        //Kint::dump($qw);
        return $qw;
    }

    private function fetchAssoc($stmt){
        $meta = $stmt->result_metadata();
        while($field = $meta->fetch_field()){
            $fields[] = &$row[$field->name];
        }
        call_user_func_array(array($stmt, 'bind_result'), $fields);
        while($stmt->fetch()){
            foreach($row as $key => $value){
                $result_row[$key] = $value;
            }
            $result[] = $result_row;
        }
        if(!isset($result) || count($result) == 0){
            return false;
        }
        return $result;
    }

    private function bindParamArray($stmt, $data){
        foreach($data as $key => $value){
            $types[] = substr(gettype($value), 0, 1);
        }
        $params = array_values($data);
        $ref_params = array();
        foreach($params as $key => $value){
            $ref_params[$key] = &$params[$key];
        }
        $ref_params = array_merge(array(implode($types)), $ref_params);
        //Kint::dump($ref_params);
        call_user_func_array(array($stmt, 'bind_param'), $ref_params);
    }

}