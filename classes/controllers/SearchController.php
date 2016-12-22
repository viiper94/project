<?php
require_once CLASS_DIR . 'Controller.php';
require_once CLASS_DIR . 'controllers/NewsController.php';

class SearchController extends Controller{

    function __construct(){
        $this->model = new MainModel('artists', array(
            'id' => 'artist_id',
            'title' => 'artist_name',
            'picture' => 'artist_picture',
            'related' => 'artist_related',
        ));
    }
	
	public function actionSearch(){
        if(isset($_GET['q']) && strlen($_GET['q']) > 2){
            $q =  $_GET['q'];
            $data['title'] = $q . ' - Damage Search';
            $data['news'] = $this->model->db->search('news', 'news_title', $q, array(
                'news_id',
                'news_title',
                'news_title_picture',
                "DATE_FORMAT(news_date, '%e %M %Y') as news_date",
                'sort'
            ));
            $data['releases']['title'] = $this->model->db->search('releases', 'release_title', $q, array(
                'releases_id',
                'release_title',
                'release_artist',
                'release_cover',
                'sort'
            ));
            $data['releases']['artist'] = $this->model->db->search('releases', 'release_artist', $q, array(
                'releases_id',
                'release_title',
                'release_artist',
                'release_cover',
                'sort'
            ));
            $data['artists'] = $this->model->db->search('artists', 'artist_name', $q, array(
                'artist_id',
                'artist_name',
                'artist_picture',
                'sort'
            ));
            //Kint::dump($data);
            if(isset($_GET['ajax'])){
                $data['status'] = 'OK';
                echo json_encode($data);
            }else{
                View::generateView('search', $data);
            }
        } else{
            $news = new NewsController();
            $news->actionNews();
        }
	}
	
}