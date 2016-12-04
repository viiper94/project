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
            View::generateView('news', $data);
        } else{
            $data = $this->model->getSortedData(array(
                'news_id',
                'news_title',
                'news_title_picture',
                "DATE_FORMAT(news_date, '%e %M %Y') as news_date",
                'sort'
            ), 10);
            $data['title'] = 'Damage News';
            View::generateView('main', $data);
        }
    }

}