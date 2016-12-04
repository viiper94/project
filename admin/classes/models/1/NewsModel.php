<?php
require_once CLASS_DIR . 'Model.php';

class NewsModel extends Model{

	public $table = 'news';

    public function getAllNews(){
        $query = "SELECT news_id, news_title, DATE_FORMAT(news_date, '%e %M %Y') as news_date, sort, news_title_picture FROM $this->table ORDER BY sort DESC";
        return $this->db->safeQuery($query);
    }

    public function getAllRelatedNews(){
        return $this->db->select($this->table, array('news_id', 'news_title'));
    }

    public function getNewsById(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $result =  $this->db->select($this->table, null, 'news_id', $id);
            $data = $result[0];
            $data['news_related'] = unserialize($result[0]['news_related']);
            return $data;
        }
    }

    public function saveNews(){
        if(!empty($_POST['title'])) $data['news_title'] = $_POST['title'];
        else return false;
        $data['news_article'] = $_POST['text'];
        $data['news_date'] = date('Y-m-d');
        $data['news_related'] = empty($_POST['related']) ? '' : serialize($_POST['related']);
        $data = array_filter($data, function($el){ return !empty($el);});
        if(isset($_FILES['picture']['tmp_name'])){
            $this->db->insert($this->table, $data);
            $lastId = $this->db->getLastId();
            switch($_FILES['picture']['type']){
                case 'image/jpeg': $mime = 'jpg';break;
                case 'image/png': $mime = 'png';break;
            }
            $fileName = $lastId.'.'.$mime;
            $filePath = ROOT . '../images/news/'.$fileName;
            move_uploaded_file($_FILES['picture']['tmp_name'], $filePath);
            $path['news_title_picture'] = $fileName;
            if(!$this->db->update($this->table, $path, 'news_id', $lastId)) return false;
            $sort['sort'] = $lastId;
            return $this->db->update($this->table, $sort, 'news_id', $sort['sort']);
        } else{
            return false;
        }
    }

    public function updateNews(){
        $id = $_POST['id'];
        if(!empty($_POST['title'])) $data['news_title'] = $_POST['title'];
        else return false;
        $data['news_article'] = $_POST['text'];
        $data['news_related'] = empty($_POST['related']) ? '' : serialize($_POST['related']);
        if(isset($_FILES['picture']['tmp_name'])){
            if(!$this->db->update($this->table, $data, 'news_id', $id)) return false;
            $mime = 'none';
            switch($_FILES['picture']['type']){
                case 'image/png': $mime = 'png';break;
                case 'image/jpeg':
                default : $mime = 'jpg';break;
            }
            $fileName = $id.'.'.$mime;
            $filePath = ROOT . '../images/news/'.$fileName;
            move_uploaded_file($_FILES['picture']['tmp_name'], $filePath);
            return true;
        } else{
            if(!$this->db->update($this->table, $data, 'news_id', $id)) return false;
            else return true;
        }
    }

    public function deleteNews(){
        return $this->db->delete($this->table, 'news_id', $_GET['id']);
    }

}