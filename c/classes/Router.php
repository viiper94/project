<?php

class Router{
	
	static function start(){
		
		$controllerName = 'Goods';
		$actionName = 'Goods';
		
		// get data from url
		if(isset($_GET['controller'])) $controllerName = ucfirst($_GET['controller']);
		if(isset($_GET['action'])) $actionName = ucfirst($_GET['action']);
		if($actionName === '') $actionName = $controllerName;
		if(isset($_GET['id'])) $id = $_GET['id'];
		
		//form names
		$actionName = 'action' . $actionName;
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
		
		$controllerPath = CLASS_DIR . 'controllers/' . $controllerFile;
		if(file_exists($controllerPath)){
			include $controllerPath;
			
			$controller = new $controllerName;
			if(method_exists($controller, $actionName)){
				$controller->$actionName();
			} else {
				Router::errorPage();
			}
		} else {
			Router::errorPage();
		}	
		
	}
	
	static function errorPage(){
		include CLASS_DIR . 'controllers/ErrorController.php';
		$error = new ErrorController();
		$error->actionError();
	}
	
}