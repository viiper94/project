<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Інтернет-Магазин "VILKA"</title>
	<link rel="stylesheet" href="/c/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/c/css/style.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
	    	<!-- Brand and toggle get grouped for better mobile display -->
	    	<div class="navbar-header">
	      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
	      		</button>
	      		<a class="navbar-brand" href="/c">Інтернет-магазин "VILKA"</a>
	    	</div>
	    	<!-- Collect the nav links, forms, and other content for toggling -->
	    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      		<ul class="nav navbar-nav">
					<?php
					if(isset($_GET['controller'])) $controller = $_GET['controller'];
					else $controller = 'goods';					
					?>
	        		<li<?php if($controller=='goods') echo ' class="active"';?>><a href="/c/goods">Товари</a></li>
	        		<li<?php if($controller=='stores') echo ' class="active"';?>><a href="/c/stores">Магазини</a></li>
	        		<li<?php if($controller=='employees') echo ' class="active"';?>><a href="/c/employees">Працівники</a></li>
	        		<li<?php if($controller=='dealers') echo ' class="active"';?>><a href="/c/dealers">Постачальники</a></li>
	        		<li<?php if($controller=='categories') echo ' class="active"';?>><a href="/c/categories">Категорії</a></li>
	      		</ul>
	      		<form action="/c/goods/search" method="POST" class="navbar-form navbar-right">	      			
	        		<div class="form-group">
	          			<input type="text" name="query" class="form-control" placeholder="Пошук товарів">
	        		</div>
	        		<button type="submit" name="search" class="btn btn-default">Шукати</button>
	      		</form>
	    	</div><!-- /.navbar-collapse -->
	  	</div><!-- /.container-fluid -->
	</nav>