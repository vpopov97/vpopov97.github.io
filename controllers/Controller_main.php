<?php

class Main {
public $link;
public function __construct() {
		$this->model = new Stuff_model();
    	$this->link=mysqli_connect("localhost", "root", "", "integratest");
	}

	public function index() {
		 
		session_start();
		$workers = $this->model->getStuff($this->link);
		
		require_once $_SERVER['DOCUMENT_ROOT'].'/views/stuff.php';
		

		?> 
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script  src="/js/buttonTable.js"></script>
	
	
				<?php
       
  		

	}

		public function add() {
		
		$ids = $this->model->getId($this->link);
		
		$name = $_POST['jname'];
		$birth = $_POST['jbirth'];
		$gender = $_POST['jgender'];
		$fio = explode(" ", $name);
		$surname=$fio[0];
		$name=$fio[1];
		$patronymic=$fio[2];

		
		
		
		$this->model->addStuff($this->link, $name, $surname, $patronymic, $birth, $gender);

		
		

	}



	public function edit() {
		
		$id=$_POST['jid'];
		$name = $_POST['jname'];
		$birth = $_POST['jbirth'];
		$gender = $_POST['jgender'];
		$fio = explode(" ", $name);
		$surname=$fio[0];
		$name=$fio[1];
		$patronymic=$fio[2];

		//echo $id;
		$this->model->updateStuff($this->link, $name, $surname, $patronymic, $birth, $gender,$id);



	}

	public function delete() {
		
		$id=$_POST['jid'];

		//echo $id;
		$this->model->deleteStuff($this->link, $id);

	}
}
 ?>