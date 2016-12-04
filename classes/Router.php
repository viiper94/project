<?php
class Router{
	
	static function start(){
		
		// default controller
		$controllerName = 'News';

		// controller init
        !isset($_GET['controller']) ? : $controllerName = ucfirst($_GET['controller']);
		
		//form names
		$actionName = 'action' . $controllerName;
		$modelName = $controllerName . 'Model';
		$controllerName .= 'Controller';
		
		// form filenames
		$modelFile = $modelName . 'php';
		$controllerFile = $controllerName . '.php';
		
		// form pathes
		$modelPath = CLASS_DIR . 'models/' . $modelFile;
		if(file_exists($modelPath)){
			include $modelPath;
		}
		//Kint::dump($controllerName);
		//Kint::dump($actionName);
		//Kint::dump($_GET['id']);

		$controllerPath = CLASS_DIR . 'controllers/' . $controllerFile;
		if(file_exists($controllerPath)){
			include $controllerPath;
			
			$controller = new $controllerName;
			$action = $actionName;
			if(method_exists($controller, $action)){
				$controller->$action();
			} else {
				Router::errorPage();
			}
		} else {
			Router::errorPage();
		}	
		
	}
	
	static function errorPage(){
		include CLASS_DIR . 'controllers/ErrorController.php';
		ErrorController::actionError();
	}
	
}