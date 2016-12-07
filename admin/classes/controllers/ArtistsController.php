<?php
require_once CLASS_DIR . '/Controller.php';

class ArtistsController extends Controller{

    function __construct() {
        $columns = array(
            'id' => 'artist_id',
            'title' => 'artist_name',
            'picture' => 'artist_picture',
            'related' => 'artist_related',
        );
        $this->model = new DataModel('artists', $columns);
        $this->sort = new SortModel('artists', $columns);
    }

    function actionArtists($msg = null){
        if(isset($_POST['edit_artist'])){
            $this->actionEdit();
        } else if(isset($_POST['add_artist'])){
            $this->actionAdd();
        } else if(isset($_POST['resort'])) {
            $this->actionResort();
        } else{
            if($msg != null) $data['msg'] = $msg;
            $data['artists'] = $this->model->getAllData(array(
                'artist_id',
                'artist_name',
                'artist_picture',
                'sort'
            ));
            View::renderPage('artists', $data);
        }
    }

    function actionAdd(){
        if(isset($_POST['add_artist'])){
            $_POST['add_artist'] = null;
            if(isset($_POST['name'])){
                $data['artist_name'] = $_POST['name'];
                $data['artist_bio'] = $_POST['text'];
                $data['artist_related'] = empty($_POST['related']) ? '' : serialize($_POST['related']);
                if($this->model->saveData($data)){
                    $this->actionArtists(View::okMsg('Успішно додано!'));
                }else{
                    $data['msg'] = View::errMsg('Сталась помилка!');
                    $data['related'] = $this->model->getAllRelatedData();
                    View::renderPage('add_artist', $data);
                }
            } else{
                $data['msg'] = View::errMsg('Сталась помилка!');
                $data['related'] = $this->model->getAllRelatedData();
                View::renderPage('add_artist', $data);
            }
        } else{
            $data['related'] = $this->model->getAllRelatedData();
            View::renderPage('add_artist', $data);
        }
    }

    function actionEdit(){
        if(isset($_POST['edit_artist'])){
            $_POST['edit_artist'] = null;
            if(isset($_POST['name'])){
                $data['artist_name'] = $_POST['name'];
                $data['artist_bio'] = $_POST['text'];
                $data['artist_related'] = empty($_POST['related']) ? '' : serialize($_POST['related']);
                if($this->model->updateData($data)){
                    $this->actionArtists(View::okMsg('Успішно відредаговано!'));
                } else{
                    $data['msg'] = View::errMsg('Сталась помилка!');
                    $data['artists'] = $this->model->getDataById();
                    $data['related'] = $this->model->getAllRelatedData();
                    View::renderPage('edit_artist', $data);
                }
            } else{
                $data['msg'] = View::errMsg('Сталась помилка!');
                $data['artists'] = $this->model->getDataById();
                $data['related'] = $this->model->getAllRelatedData();
                View::renderPage('edit_artist', $data);
            }
        } else {
            $data['artists'] = $this->model->getDataById();
            $data['related'] = $this->model->getAllRelatedData();
            View::renderPage('edit_artist', $data);
        }
        
    }
    
    function actionDelete(){
        if($_GET['action'] == 'delete' && intval($_GET['id']) > 0){
            if($this->model->deleteData()){
                $this->actionArtists(View::okMsg('Успішно видалено!'));
            } else{
                $this->actionArtists(View::errMsg('Сталась помилка!'));
            }
        } else{
            $this->actionArtists();
        }
    }

    function actionResort(){
        $_POST['resort'] = null;
        if($this->sort->resort()){
            $this->actionArtists(View::okMsg('Успішно відсортовано!'));
        } else{
            $this->actionArtists(View::errMsg('Сталась помилка!'));
        }
    }

    function actionSortup(){
        if($this->sort->sortUp()){
            $this->actionArtists(View::okMsg('Успішно відсортовано!'));
        } else{
            $this->actionArtists(View::errMsg('Сталась помилка!'));
        }
    }

    function actionSortdown(){
        if($this->sort->sortDown()){
            $this->actionArtists(View::okMsg('Успішно відсортовано!'));
        } else{
            $this->actionArtists(View::errMsg('Сталась помилка!'));
        }
    }

    function actionAjax(){
        if($response['data'] = $this->model->searchData($_GET['query'], array(
            'artist_name',
            'artist_picture',
            'artist_id',
            'sort'
        ))){
            $response['status'] = 'OK';
            echo json_encode($response);
        }else{
            $response['status'] = 'No result';
            echo json_encode($response);
        }
    }

}