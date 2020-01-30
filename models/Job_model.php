<?php 
class Job_model {
public $link;
	public function __construct() {
		global $link;
		$link = mysqli_connect("localhost","root", "", "integratest") 
    	or die("Ошибка " . mysqli_error($link));
		
    	
	}

	public function getJobs($link,$slug) {
		
		
		$result = mysqli_query($link, "SELECT * FROM jobs WHERE `slug`='$slug'") ;
		    
		    
	return $result;
}
public function getId($link) {
		
		
		$result = mysqli_query($link, "SELECT `id` FROM `jobs` ORDER BY `id` DESC LIMIT 1") ;
		    
		    
	return $result;
}

	public function addJobs($link,$slug, $start, $finish, $company) {
		//$name = mb_convert_encoding($name,'cp1251', 'utf-8' );
		$result = mysqli_query($link, "INSERT INTO jobs (slug, start, finish, company) VALUES ('$slug', '$start', '$finish', '$company')") or die("Ошибка " . mysqli_error($link)) ;
		    
		    
	return $result;

	}

	public function sendJobs($link,$id, $start, $finish, $company) {
		//$name = mb_convert_encoding($name,'cp1251', 'utf-8' );
		
		$result = mysqli_query($link, "UPDATE jobs SET `start`='$start', `finish`='$finish', `company`='$company' WHERE `id`='$id'") or die("Ошибка " . mysqli_error($link)) ;    
		    
	return $result;

	}


	public function updateJobs($link, $start, $finish, $company) {
		//$name = mb_convert_encoding($name,'cp1251', 'utf-8' );
		$result = mysqli_query($link, "UPDATE jobs SET `start`='$start', `finish`='$finish', `company`='$company' WHERE `id`='$id'") or die("Ошибка " . mysqli_error($link)) ;
		    
		    
	return $result;

	}

	public function deleteJobs($link, $id) {
		$result = mysqli_query($link, "DELETE FROM `jobs` WHERE `id`='$id'") or die("Ошибка " . mysqli_error($link)) ;
		    
		    
	return $result;
	}

}