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
            View::generateView('artist', $data);
        } else{
            $data = $this->model->getSortedData(array(
                'artist_id',
                'artist_name',
                'artist_picture',
                'sort'
            ), 20);
            $data['title'] = 'Damage Artists';
            View::generateView('artists', $data);
        }
    }
	
}