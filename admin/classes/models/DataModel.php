<?php
require_once CLASS_DIR . 'Model.php';

class DataModel extends Model{

    public function getAllData($fields = array()){
        $cols = empty($fields) ? '*' : implode(',', $fields);
        $query = 'SELECT '.$cols.' FROM '.$this->table.' ORDER BY sort DESC';
        //Kint::dump($query);
        return $this->db->safeQuery($query);
    }

    public function getAllRelatedData(){
        return $this->db->select($this->table, array(
            $this->columns['id'], 
            $this->columns['title']
        ));
    }

    public function getDataById(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $result =  $this->db->select($this->table, null, $this->columns['id'], $id);
            $data = $result[0];
            $data[$this->columns['related']] = unserialize($result[0][$this->columns['related']]);
            return $data;
        }
    }

    public function saveData($data){
        $data = array_filter($data, function($el){ return !empty($el);});
        if(isset($_FILES['picture']['tmp_name'])){
            $result = $this->db->query('SELECT MAX(sort)+1 AS nextsort FROM '.$this->table);
            $data['sort'] = $result[0]['nextsort'];
            $this->db->insert($this->table, $data);
            $lastId = $this->db->getLastId();
            $mime = $_FILES['picture']['type'] == 'image/png' ? $mime = '.png' : $mime = '.jpg';
            $fileName = $lastId.$mime;
            $filePath = ROOT . '../images/'.$this->section.'/'.$fileName;
            move_uploaded_file($_FILES['picture']['tmp_name'], $filePath);
            $path[$this->columns['picture']] = $fileName;
            return $this->db->update($this->table, $path, $this->columns['id'], $lastId);
        } else{
            return false;
        }
    }

    public function updateData($data){
        $id = $_POST['id'];
        if(isset($_FILES['picture']['tmp_name'])){
            if(!$this->db->update($this->table, $data, $this->columns['id'], $id)) return false;
            $mime = $_FILES['picture']['type'] == 'image/png' ? $mime = '.png' : $mime = '.jpg';
            $fileName = $id.$mime;
            $filePath = ROOT . '../images/'.$this->section.'/'.$fileName;
            move_uploaded_file($_FILES['picture']['tmp_name'], $filePath);
            return true;
        } else{
            if(!$this->db->update($this->table, $data, $this->columns['id'], $id)) return false;
            else return true;
        }
    }

    public function deleteData(){
        $pic = $this->db->select($this->table, array($this->columns['picture']), $this->columns['id'], $_GET['id']);
        if(!unlink(ROOT .'../images/'.$this->section.'/'.$pic[0][$this->columns['picture']])) return false;
        return $this->db->delete($this->table, $this->columns['id'], intval($_GET['id']));
    }
    
}