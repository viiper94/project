<?php
require_once CLASS_DIR . 'Controller.php';

class ReleasesController extends Controller{

    function __construct() {
        $columns = array(
            'id' => 'releases_id',
            'title' => 'release_title',
            'picture' => 'release_cover',
            'related' => 'release_related',
        );
        $this->model = new DataModel('releases', $columns);
        $this->sort = new SortModel('releases', $columns);
    }

    function actionReleases($msg = null){
        if(isset($_POST['edit_release'])){
            $this->actionEdit();
        } else if(isset($_POST['add_release'])){
            $this->actionAdd();
        } else if(isset($_POST['resort'])) {
            $this->actionResort();
        } else {
            if($msg != null) $data['msg'] = $msg;
            $data['releases'] = $this->model->getAllData(array(
                'releases_id',
                'release_title',
                'release_cover',
                'sort',
                'release_artist'
            ));
            View::renderPage('releases', $data);
        }
	}

    function actionAdd(){
        if(isset($_POST['add_release'])){
            $_POST['add_release'] = null;
            if(!empty($_POST['title'])){
                $data['release_title'] = $_POST['title'];
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
                if($this->model->saveData($data)){
                    $this->actionReleases(View::okMsg('Успішно додано!'));
                }else{
                    $data['msg'] = View::errMsg('Сталась помилка!');
                    $data['related'] = $this->model->getAllRelatedData();
                    View::renderPage('add_release', $data);
                }
            }
            else{
                $data['msg'] = View::errMsg('Сталась помилка!');
                $data['related'] = $this->model->getAllRelatedData();
                View::renderPage('add_release', $data);
            }
        } else{
            $data['related'] = $this->model->getAllRelatedData();
            View::renderPage('add_release', $data);
        }
    }

    function actionDelete(){
        if($_GET['action'] == 'delete' && intval($_GET['id']) > 0){
            if($this->model->deleteData()){
                $this->actionReleases(View::okMsg('Успішно видалено!'));
            } else{
                $this->actionReleases(View::errMsg('Сталась помилка!'));
            }
        } else{
            $this->actionReleases();
        }
    }

    function actionEdit(){
        if(isset($_POST['edit_release'])){
            $_POST['edit_release'] = null;
            if(!empty($_POST['title'])){
                $data['release_title'] = $_POST['title'];
                $data['release_artist'] = $_POST['artist'];
                $data['release_date'] = empty($_POST['date']) ? '0000-00-00' : $_POST['date'];
                $data['release_number'] = $_POST['number'];
                $data['release_itunes'] = $_POST['itunes'];
                $data['release_gplay'] = $_POST['gplay'];
                $data['release_spotify'] = $_POST['spotify'];
                $data['release_deezer'] = $_POST['deezer'];
                $data['release_description'] = $_POST['description'];
                $data['release_tracklist'] = $_POST['tracklist'];
                $data['release_related'] = empty($_POST['related']) ? '' : serialize($_POST['related']);
                if($this->model->updateData($data)){
                    $this->actionReleases(View::okMsg('Успішно відредаговано!'));
                } else{
                    $data['msg'] = View::errMsg('Сталась помилка!');
                    $data['related'] = $this->model->getAllRelatedData();
                    $data['releases'] = $this->model->getDataById();
                    View::renderPage('edit_release', $data);
                }
            } else{
                $data['msg'] = View::errMsg('Сталась помилка!');
                $data['related'] = $this->model->getAllRelatedData();
                $data['releases'] = $this->model->getDataById();
                View::renderPage('edit_release', $data);
            }
        } else{
            $data['related'] = $this->model->getAllRelatedData();
            $data['releases'] = $this->model->getDataById();
            View::renderPage('edit_release', $data);
        }
    }

    function actionResort(){
        $_POST['resort'] = null;
        if($this->sort->resort()){
            $this->actionReleases(View::okMsg('Успішно відсортовано!'));
        } else{
            $this->actionReleases(View::errMsg('Сталась помилка!'));
        }
    }

    function actionSortup(){
        if($this->sort->sortUp()){
            $this->actionReleases(View::okMsg('Успішно відсортовано!'));
        } else{
            $this->actionReleases(View::errMsg('Сталась помилка!'));
        }
    }

    function actionSortdown(){
        if($this->sort->sortDown()){
            $this->actionReleases(View::okMsg('Успішно відсортовано!'));
        } else{
            $this->actionReleases(View::errMsg('Сталась помилка!'));
        }
    }

    function actionAjax(){
        if(intval($_GET['related'])){
            if($response['data'] = $this->model->searchRelatedData($_GET['query'])){
                if(intval($_GET['related']) > 0){
                    $query = 'SELECT release_related FROM releases';
                    $result = $this->model->db->safeQuery($query, 'releases_id', intval($_GET['related']));
                    $response['related'] = unserialize($result[0]['release_related']);
                }
                $response['status'] = 'OK';
            }else{
                $response['status'] = 'No result';
            }
        } else{
            if($response['data'] = $this->model->searchData($_GET['query'], array(
                'release_title',
                'release_cover',
                'release_artist',
                'releases_id',
                'sort'
            ))){
                $response['status'] = 'OK';
            } else{
                $response['status'] = 'No result';
            }
        }
        echo json_encode($response);
    }

}