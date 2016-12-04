<?php
require_once CLASS_DIR . 'Model.php';

class PageModel extends Model{

    public function getPageText($page){
		$columns = array('text, category');
		return $this->db->select($this->table, $columns, 'category', $page);
	}

    public function savePageText($page){
        $text = $_POST['text'];
        return $this->db->update($this->table, array('text' => $text), 'category', $page);
    }
    
}