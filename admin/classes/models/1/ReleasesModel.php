<?php
require_once CLASS_DIR . 'Model.php';

class ReleasesModel extends Model{

	public $table = 'releases';

	public function getAllReleases(){
        $query = "SELECT releases_id, release_title, release_cover, sort, release_artist FROM $this->table ORDER BY sort DESC";
        return $this->db->safeQuery($query);
	}
	
    public function getAllRelatedReleases(){
        return $this->db->select($this->table, array('releases_id', 'release_title'));
    }

    public function getReleasesById(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $result =  $this->db->select($this->table, null, 'releases_id', $id);
            $data = $result[0];
            $data['release_related'] = unserialize($result[0]['release_related']);
            return $data;
        }
    }
    
    public function saveRelease(){
        if(!empty($_POST['title'])) $data['release_title'] = $_POST['title'];
        else return false;
        $data['release_artist'] = $_POST['artist'];
        $data['release_date'] =  $_POST['date'];
        $data['release_number'] = $_POST['number'];
        $data['release_itunes'] = $_POST['itunes'];
        $data['release_gplay'] = $_POST['gplay'];
        $data['release_spotify'] = $_POST['spotify'];
        $data['release_deezer'] = $_POST['deezer'];
        $data['release_description'] = $_POST['description'];
        $data['release_tracklist'] = $_POST['tracklist'];
        $data['release_related'] = empty($_POST['related']) ? '' : serialize($_POST['related']);
        $data = array_filter($data, function($el){ return !empty($el);});
        if(isset($_FILES['picture']['tmp_name'])){
            $this->db->insert($this->table, $data);
            $lastId = $this->db->getLastId();
            switch($_FILES['picture']['type']){
                case 'image/jpeg': $mime = 'jpg';break;
                case 'image/png': $mime = 'png';break;
            }
            $fileName = $lastId.'.'.$mime;
            $filePath = ROOT . '../images/releases/'.$fileName;
            move_uploaded_file($_FILES['picture']['tmp_name'], $filePath);
            $path['release_cover'] = $fileName;
            if(!$this->db->update($this->table, $path, 'releases_id', $lastId)) return false;
            $sort['sort'] = $lastId;
            return $this->db->update($this->table, $sort, 'releases_id', $sort['sort']);
        } else{
            return false;
        }
    }

    public function updateRelease(){
        $id = $_POST['id'];
        if(!empty($_POST['title'])) $data['release_title'] = $_POST['title'];
        else return false;
        $data['release_artist'] = $_POST['artist'];
        $data['release_date'] = $_POST['date'];
        $data['release_number'] = $_POST['number'];
        $data['release_itunes'] = $_POST['itunes'];
        $data['release_gplay'] = $_POST['gplay'];
        $data['release_spotify'] = $_POST['spotify'];
        $data['release_deezer'] = $_POST['deezer'];
        $data['release_description'] = $_POST['description'];
        $data['release_tracklist'] = $_POST['tracklist'];
        $data['release_related'] = empty($_POST['related']) ? '' : serialize($_POST['related']);
        if(isset($_FILES['picture']['tmp_name'])){
            if(!$this->db->update($this->table, $data, 'releases_id', $id)) return false;
            $mime = 'none';
            switch($_FILES['picture']['type']){
                case 'image/jpeg': $mime = 'jpg';break;
                case 'image/png': $mime = 'png';break;
            }
            $fileName = $id.'.'.$mime;
            $filePath = ROOT . '../images/releases/'.$fileName;
            move_uploaded_file($_FILES['picture']['tmp_name'], $filePath);
            return true;
        } else{
            if(!$this->db->update($this->table, $data, 'releases_id', $id)) return false;
            else return true;
        }
    }

    public function deleteRelease(){
        $pic = $this->db->select($this->table, array('release_cover'), 'releases_id', $_GET['id']);
        if(!unlink(ROOT .'../images/releases/'.$pic[0]['release_cover'])) return false;
        return $this->db->delete($this->table, 'releases_id', $_GET['id']);
    }

}