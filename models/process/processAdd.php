<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/models/Stuff_model.php";
require_once $_SERVER['DOCUMENT_ROOT']."/controllers/Controller_main.php";
		
		$controller = new Main;
		$action = "Add";
		$controller->$action();
		//echo $_POST['jname']

 ?>