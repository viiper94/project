<?php
require_once CLASS_DIR . '/Controller.php';

class SchoolController extends Controller{
	
	function actionSchool(){
        if(isset($_POST['ajax'])){
            $this->sendEmail();
        }else{
            $data['title'] = 'Школа Damage Records';
            if(isset($_GET['ajax'])){
                $data['status'] = 'OK';
                $data['html'] = View::returnView('school-root', $data);
                echo json_encode($data);
            }else{
                View::generateView('school', $data);
            }
        }
	}

    private function sendEmail(){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST['email'];
            $name = $_POST['name'];
            $secondname = isset($_POST['second-name']) ? $_POST['second-name'] : '';
            $message = $name . $secondname . ' (' . $email . ') пише: <br><br>';
            $message .= $_POST['message'];
            $headers = 'FROM: Damage Records<info@damage-records.com>' . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/html; charset="utf-8"' . "\r\n";
            $subject = 'Зворотній зв\'язок на Damage Records';
            if(mail(DEV_EMAIL, $subject,$message, $headers)){
                $response['status'] = 'OK';
            }else{
                $response['status'] = 'Виникла помилка, спробуйте пізніше';
            }
        }else{
            $response['status'] = 'E-Mail не коректний!';
        }
        echo json_encode($response);
    }

}