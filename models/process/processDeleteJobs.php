<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/models/Job_model.php";
require_once $_SERVER['DOCUMENT_ROOT']."/controllers/Controller_Job.php";
		
		$action = "delete";
		$controller = new Job;
		$controller->$action();

 ?>