<?php
require_once CLASS_DIR . 'Controller.php';

class ArtistsController extends Controller{

    function __construct(){
        $this->model = new MainModel('artists', array(
            'id' => 'artist_id',
            'title' => 'artist_name',
            'picture' => 'artist_picture',
            'related' => 'artist_related',
        ));
    }

    function actionArtists(){
        if(!empty($_GET['id'])){
            $id = $_GET['id'];
            $data['artist'] = $this->model->getDataById($id);
            $data['related'] = $this->model->getRelatedData($id);
            $data['title'] = $data['artist']['artist_name'].' - Damage';
            $view = 'artist';
        } else{
            $data = $this->model->getSortedData(array(
                'artist_id',
                'artist_name',
                'artist_picture',
                'sort'
            ), 20);
            $data['title'] = 'Damage Artists';
            $view = 'artists';
        }
        if(isset($_GET['ajax'])){
            $data['status'] = 'OK';
            echo json_encode($data);
        }else{
            View::generateView($view, $data);
        }
    }
	
}