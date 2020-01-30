<?php 
require_once  $_SERVER['DOCUMENT_ROOT']."/models/Stuff_model.php";
require_once $_SERVER['DOCUMENT_ROOT']."/controllers/Controller_main.php";
		
		$action = "delete";
		$controller = new main;
		$controller->$action();

 ?>