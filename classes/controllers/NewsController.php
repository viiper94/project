<?php
require_once CLASS_DIR . 'Controller.php';

class NewsController extends Controller{

    function __construct(){
        $this->model = new MainModel('news', array(
            'id' => 'news_id',
            'title' => 'news_title',
            'picture' => 'news_title_picture',
            'related' => 'news_related',
        ));
    }

    function actionNews(){
        if(!empty($_GET['id'])){
            $id = $_GET['id'];
            $data['item'] = $this->model->getDataById($id);
            $data['related'] = $this->model->getRelatedData($id);
            $data['title'] = $data['item']['news_title'].' - Damage News';
            $view = 'news';
        } else{
            $data = $this->model->getSortedData(array(
                'news_id',
                'news_title',
                'news_title_picture',
                "DATE_FORMAT(news_date, '%e %M %Y') as news_date",
                'sort'
            ), 10);
            $data['title'] = 'Damage News';
            $view = 'main';
        }
        if(isset($_GET['ajax'])){
            $data['status'] = 'OK';
            echo json_encode($data);
        }else{
            View::generateView($view, $data);
        }
    }

}