<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/models/Job_model.php";
require_once $_SERVER['DOCUMENT_ROOT']."/controllers/Controller_job.php";
		
		$action = "send";
		$controller = new Job;
		$controller->$action();


 ?>