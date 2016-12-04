<?php
//require_once CLASS_DIR . 'Db/Database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/Twig/Autoloader.php';

class View{
	
	static function renderPage($view, $data = array()){
        
		// Twig init
		Twig_Autoloader::register();
		$loader = new Twig_Loader_Filesystem(TEMPLATE_DIR);
		$twig = new Twig_Environment($loader, array(
			'cache' => 'compilation_cache',
			'auto_reload' => true,
		));
		
		// loadind and rendering
		$template = $twig->loadTemplate($view . '.html');
        $data['controller'] = isset($_GET['controller']) ? $_GET['controller'] : 'news';
        //Kint::dump($data);
		echo $template->render($data);
        //closing mysql connection
        //Database::closeConnection();
	}

    static function okMsg($msg){
        return "<div class='alert alert-success col-md-10 col-md-offset-1'>$msg</div>";
    }

    static function errMsg($msg){
        return "<div class='alert alert-danger col-md-10 col-md-offset-1'>$msg</div>";
    }
    
}