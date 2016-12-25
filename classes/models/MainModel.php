<?php
require_once CLASS_DIR . 'Model.php';

class MainModel extends Model{
	
	public function getDataById($id){
        $result = $this->db->select($this->table, null, $this->columns['id'], $id);
        return $result[0];
	}

    public function getSortedData($fields = array('*'), $itemsPerPage = 10){
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1 ;
        //Kint::dump($itemsPerPage);
        $startFrom = ($page - 1)*$itemsPerPage;
        $rows = implode(',', $fields);
        $data[$this->table] = $this->db->query('SELECT '.$rows.' FROM '.$this->table.' ORDER BY sort 
            DESC LIMIT '.$startFrom.', '.$itemsPerPage);
        $result = $this->db->query('SELECT COUNT('.$this->columns['id'].') AS total_items FROM '.$this->table);
        $data['pgn']['total_pages'] = intval(ceil(intval($result[0]['total_items']) / $itemsPerPage));
        $data['pgn']['current_page'] = $page;
        return $data;
    }

    public function getRelatedData($id){
        $result = $this->db->select($this->table, array($this->columns['related']), $this->columns['id'], $id);
        $result = unserialize($result[0][$this->columns['related']]);
        if(!empty($result)){
            $i = 0;
            $data = array();
            foreach($result as $id){
                $i++;
                $array = $this->db->select($this->table, array(
                    $this->columns['id'],
                    $this->columns['title'],
                    $this->columns['picture']), $this->columns['id'], $id);
                $data[$i] = $array[0];
            }
            return $data;
        } else{
            return false;
        }
    }
    
    public function getDataByColumn($out, $column, $value){
        $result = $this->db->query("SELECT ".implode(',', $out)." FROM ".$this->table." WHERE ".$column." = '".$value."'");
        return $result[0];
    }
    
    public function getNextData($id){
        $result = $this->db->query('SELECT '.$this->columns['id'].' FROM '.$this->table.
            ' WHERE sort > (SELECT sort FROM '.$this->table.' WHERE '.$this->columns['id'].' = '.$id.') ORDER BY sort ASC');
        return $result[0];
    }
    
    public function getPrevData($id){
        $result = $this->db->query('SELECT '.$this->columns['id'].' FROM '.$this->table.
            ' WHERE sort < (SELECT sort FROM '.$this->table.' WHERE '.$this->columns['id'].' = '.$id.') ORDER BY sort DESC');
        return $result[0];
    }
}