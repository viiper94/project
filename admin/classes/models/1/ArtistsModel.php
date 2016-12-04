<?php
require_once CLASS_DIR . 'Model.php';

class ArtistsModel extends Model{

	public $table = 'artists';

	public function getAllArtists(){
        $query = "SELECT artist_id, artist_name, artist_picture, sort FROM $this->table ORDER BY sort DESC";
		return $this->db->safeQuery($query);
	}
	
    public function getAllRelatedArtists(){
        return $this->db->select($this->table, array('artist_id', 'artist_name'));
    }

    public function getArtistById(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $result = $this->db->select($this->table, null, 'artist_id', $id);
            $data = $result[0];
            $data['artist_related'] = unserialize($result[0]['artist_related']);
            return $data;
        }
    }

    public function saveArtist(){
        if(isset($_POST['name'])) $data['artist_name'] = $_POST['name'];
        if(isset($_POST['text'])) $data['artist_bio'] = $_POST['text'];
        if(isset($_POST['related'])) $data['artist_related'] = serialize($_POST['related']);
        $data = array_filter($data, function($el){ return !empty($el);});
        if(isset($_FILES['picture']['tmp_name'])){
            $this->db->insert($this->table, $data);
            $lastId = $this->db->getLastId();
            switch($_FILES['picture']['type']){
                case 'image/jpeg': $mime = 'jpg';break;
                case 'image/png': $mime = 'png';break;
            }
            $fileName = $lastId.'.'.$mime;
            $filePath = ROOT . '../images/artists/'.$fileName;
            move_uploaded_file($_FILES['picture']['tmp_name'], $filePath);
            $path['artist_picture'] = $fileName;
            if(!$this->db->update($this->table, $path, 'artist_id', $lastId)) return false;
            $sort['sort'] = $lastId;
            return $this->db->update($this->table, $sort, 'artist_id', $sort['sort']);
        } else{
            return false;
        }
    }

    public function updateArtist(){
        $id = $_POST['id'];
        if(isset($_POST['name'])) $data['artist_name'] = $_POST['name'];
        else return false;
        $data['artist_bio'] = $_POST['text'];
        $data['artist_related'] = serialize($_POST['related']);
        if(isset($_FILES['picture']['tmp_name'])){
            if(!$this->db->update($this->table, $data, 'artist_id', $id)) return false;
            $mime = 'none';
            switch($_FILES['picture']['type']){
                case 'image/jpeg': $mime = 'jpg';break;
                case 'image/png': $mime = 'png';break;
            }
            $fileName = $id.'.'.$mime;
            $filePath = ROOT . '../images/artists/'.$fileName;
            move_uploaded_file($_FILES['picture']['tmp_name'], $filePath);
            return true;
        } else{
            if(!$this->db->update($this->table, $data, 'artist_id', $id)) return false;
            else return true;
        }
    }

    public function deleteArtist(){
        return $this->db->delete($this->table, 'artist_id', $_GET['id']);
    }
    
}