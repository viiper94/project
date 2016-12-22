<?php
require_once ROOT . 'lib/Twig/Autoloader.php';

class View{

    static private function prepareView($view, $data){
        // Twig init
        Twig_Autoloader::register();
        $loader = new Twig_Loader_Filesystem(TEMPLATE_DIR);
        $twig = new Twig_Environment($loader, array(
            'cache' => 'compilation_cache',
            'auto_reload' => true,
        ));

        // loading and rendering
        $template = $twig->loadTemplate($view . '.html');
        $data['controller'] = isset($_GET['controller']) ? $_GET['controller'] : 'news';
        //Kint::dump($data);
        $view = $template->render($data);
        return $view;
    }

	static public function generateView($view, $data = array()){
		echo self::prepareView($view, $data);
	}

    static public function returnView($view, $data = array()){
        return self::prepareView($view, $data);
    }
	
}