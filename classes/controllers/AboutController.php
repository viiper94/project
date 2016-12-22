<?php
require_once CLASS_DIR . 'Controller.php';

class AboutController extends Controller{

    function __construct(){
        $this->model = new MainModel('about');
    }

	function actionAbout(){
        if(isset($_POST['ajax'])) $this->actionSubscribe();
        else{
            $data['text'] = $this->model->getDataByColumn(array('text'), 'category', 'about');
            $data['title'] = 'About Damage';
            if(isset($_GET['ajax'])){
                $data['status'] = 'OK';
                echo json_encode($data);
            }else{
                View::generateView('about', $data);
            }
        }
	}
	
    private function actionSubscribe(){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $data['subscriber_email'] = $_POST['email'];
            $result = $this->model->db->select('subscribers', array('subscriber_email'), 'subscriber_email', $data['subscriber_email']);
            if($result){
                $response['status'] = 'Already exist';
            } else{
                $data['subscriber_name'] = $_POST['name'];
                $data['subscriber_date'] = date('Y-m-d');
                if($this->model->db->insert('subscribers', $data)) {
                    $response['status'] = 'OK';
                } else {
                    $response['status'] = 'Error!';
                }
            }
        } else{
            $response['status'] = 'E-Mail not valid!';
        }
        echo json_encode($response);
    }
    
}