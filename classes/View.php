<?php
require_once ROOT . 'lib/Twig/Autoloader.php';

class View{
	
	static public function generateView($view, $data = array()){
		
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
		
	}
	
}