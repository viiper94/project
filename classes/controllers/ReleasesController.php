<?php
require_once CLASS_DIR . 'Controller.php';

class ReleasesController extends Controller{

    function __construct(){
        $this->model = new MainModel('releases', array(
            'id' => 'releases_id',
            'title' => 'release_title',
            'picture' => 'release_cover',
            'related' => 'release_related',
        ));
    }

    function actionReleases(){
        if(!empty($_GET['id'])){
            $id = $_GET['id'];
            $data['item'] = $this->model->getDataById($id);
            $data['item']['release_tracklist'] = str_replace('\r\n', NULL, $data['item']['release_tracklist']);
            $data['related'] = $this->model->getRelatedData($id);
            $data['next'] = $this->model->getNextData($id);
            $data['prev'] = $this->model->getPrevData($id);
            $data['title'] = $data['item']['release_title'].' - Damage Release';
            $view = 'release';
        } else{
            $data = $this->model->getSortedData(array(
                'releases_id',
                'release_title',
                'release_artist',
                'release_cover',
                'sort'
            ), 20);
            $data['title'] = 'Damage Releases';
            $view = 'releases';
        }
        if(isset($_GET['ajax'])){
            $data['status'] = 'OK';
            echo json_encode($data);
        }else{
            View::generateView($view, $data);
        }
    }
	
}