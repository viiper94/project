<?php

class View{
	
	function generateView($view, $data = array()){
		
		include(ROOT . 'inc/' . $view . '.php');
		
	}
	
}