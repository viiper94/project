<?php
require_once CLASS_DIR . 'Controller.php';

class NewsController extends Controller{
	
	function __construct() {
        $columns = array(
            'id' => 'news_id',
            'title' => 'news_title',
            'picture' => 'news_title_picture',
            'related' => 'news_related',
        );
		$this->model = new DataModel('news', $columns);
		$this->sort = new SortModel('news', $columns);
	}

    function actionNews($msg = null){
        if(isset($_POST['edit_news'])){
            $this->actionEdit();
        } else if(isset($_POST['add_news'])){
            $this->actionAdd();
        } else if(isset($_POST['resort'])){
            $this->actionResort();
        } else{
            if($msg != null) $data['msg'] = $msg;
            $data['news'] = $this->model->getAllData(array(
                "news_id",
                "news_title",
                "DATE_FORMAT(news_date, '%e %M %Y') as news_date",
                "sort",
                "news_title_picture"
            ));
            View::renderPage('news', $data);
        }
    }

    function actionAdd(){
        if(isset($_POST['add_news'])){
            $_POST['add_news'] = null;
            if(!empty($_POST['title'])){
                $data['news_title'] = $_POST['title'];
                $data['news_article'] = $_POST['text'];
                $data['news_date'] = date('Y-m-d');
                $data['news_related'] = empty($_POST['related']) ? '' : serialize($_POST['related']);
                if($this->model->saveData($data)){
                    $this->actionNews(View::okMsg('Успішно додано!'));
                }else{
                    $data['msg'] = View::errMsg('Сталась помилка!');
                    $data['related'] = $this->model->getAllRelatedData();
                    View::renderPage('add_news', $data);
                }
            } else{
                $data['msg'] = View::errMsg('Сталась помилка!');
                $data['related'] = $this->model->getAllRelatedData();
                View::renderPage('add_news', $data);
            }
        } else{
            $data['related'] = $this->model->getAllRelatedData();
            View::renderPage('add_news', $data);
        }
    }

    function actionDelete(){
        if($_GET['action'] == 'delete' && intval($_GET['id']) > 0){
            if($this->model->deleteData()){
                $this->actionNews(View::okMsg('Успішно видалено!'));
            } else{
                $this->actionNews(View::errMsg('Сталась помилка!'));
            }
        } else{
            $this->actionNews();
        }
    }

    function actionEdit(){
        if(!empty($_POST['edit_news'])){
            $_POST['edit_news'] = null;
            if(isset($_POST['title'])){
                $data['news_title'] = $_POST['title'];
                $data['news_article'] = $_POST['text'];
                $data['news_related'] = empty($_POST['related']) ? '' : serialize($_POST['related']);
                if($this->model->updateData($data)){
                    $this->actionNews(View::okMsg('Успішно відредаговано!'));
                } else{
                    $data['msg'] = View::errMsg('Сталась помилка!');
                    $data['related'] = $this->model->getAllRelatedData();
                    $data['news'] = $this->model->getDataById();
                    View::renderPage('edit_news', $data);
                }
            } else{
                $data['msg'] = View::errMsg('Сталась помилка!');
                $data['related'] = $this->model->getAllRelatedData();
                $data['news'] = $this->model->getDataById();
                View::renderPage('edit_news', $data);
            }
        } else{
            $data['related'] = $this->model->getAllRelatedData();
            $data['news'] = $this->model->getDataById();
            View::renderPage('edit_news', $data);
        }
    }

    function actionResort(){
        $_POST['resort'] = null;
        if($this->sort->resort()){
            $this->actionNews(View::okMsg('Успішно відсортовано!'));
        } else{
            $this->actionNews(View::errMsg('Сталась помилка!'));
        }
    }

    function actionSortup(){
        if($this->sort->sortUp('news', 'news_id')){
            $this->actionNews(View::okMsg('Успішно відсортовано!'));
        } else{
            $this->actionNews(View::errMsg('Сталась помилка!'));
        }
    }

    function actionSortdown(){
        if($this->sort->sortDown('news', 'news_id')){
            $this->actionNews(View::okMsg('Успішно відсортовано!'));
        } else{
            $this->actionNews(View::errMsg('Сталась помилка!'));
        }
    }
    
}