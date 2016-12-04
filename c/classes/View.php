<?php

class View{
	
	function __construct(){		
		echo '<div class="clearfix"></div>';
	}
	
	function generateView($view, $data = array()){
		include(ROOT . 'inc/' . $view . '.php');
	}
	
	function okMsg($msg){		
		echo "<div class='alert alert-success col-md-10 col-md-offset-1' role='alert'>$msg</div>";		
	}
	
	function errMsg($msg) {
		echo "<div class='alert alert-danger col-md-10 col-md-offset-1' role='alert'>$msg</div>";
	}
	
	function warnMsg($msg) {
		echo "<div class='alert alert-warning col-md-10 col-md-offset-1' role='alert'>$msg</div>";
	}
		
}