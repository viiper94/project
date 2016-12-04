<?php
require_once CLASS_DIR . 'Model.php';

class SortModel extends Model{


    public function resort(){
        $data = $_POST['sort'];
        foreach($data as $id => $sort){
            if(!$this->db->update($this->table, array('sort' => $sort), $this->columns['id'], $id)) return false;
        }
        return true;
    }

    public function sortUp(){
        if(isset($_GET['id'])){
            $id = intval($_GET['id']);
            $result = $this->db->select($this->table, array('sort'), $this->columns['id'], $id);
            $sort = intval($result[0]['sort']);
            $result = $this->db->query("SELECT sort, ".$this->columns['id']." FROM " . $this->table . " WHERE sort > '$sort' ORDER BY sort ASC LIMIT 0, 1");
            //Kint::dump($result);
            $topsort = $result[0]['sort'];
            $top_id = $result[0][$this->columns['id']];
            if($topsort == null) return false;
            $sort_tmp = $topsort;
            $topsort = $sort;
            $sort = $sort_tmp;
            if($this->db->update($this->table, array('sort' => $sort), $this->columns['id'], $id)){
                if($this->db->update($this->table, array('sort' => $topsort), $this->columns['id'], $top_id)){
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }

    }

    public function sortDown(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $result = $this->db->select($this->table, array('sort'), $this->columns['id'], $id);
            $sort = $result[0]['sort'];
            $result = $this->db->query("SELECT sort, ".$this->columns['id']." FROM " . $this->table . " WHERE sort < '$sort' ORDER BY sort DESC LIMIT 0, 1");
            $lowsort = $result[0]['sort'];
            $low_id = $result[0][$this->columns['id']];
            if($lowsort == null) return false;
            $sort_tmp = $lowsort;
            $lowsort = $sort;
            $sort = $sort_tmp;
            if($this->db->update($this->table, array('sort' => $sort), $this->columns['id'], $id)){
                if($this->db->update($this->table, array('sort' => $lowsort), $this->columns['id'], $low_id)){
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }
    }
    
}