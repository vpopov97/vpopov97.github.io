<?php 
class Stuff_model {

	public function __construct() {
		
		global $link;
		require_once 'connection.php';
		$link = mysqli_connect($servername, $username, $password, $database) 
    	or die("Ошибка " . mysqli_error($link));
	}

	public function getStuff($link) {
		
		
		$result = mysqli_query($link, "SELECT * FROM workers") ;
		    
		    
	return $result;
}
public function getId($link) {
		
		
		$result = mysqli_query($link, "SELECT `id` FROM `workers` ORDER BY `id` DESC LIMIT 1") ;

		    
	return $result;
}

	public function addStuff($link, $name, $surname, $patronymic, $birth, $gender) {
		//$name = mb_convert_encoding($name,'cp1251', 'utf-8' );
		$result = mysqli_query($link, "INSERT INTO `workers` (`id`, `name`, `surname`, `patronymic`, `birth`, `gender`) VALUES (NULL, '$name', '$surname', '$patronymic', '$birth', '$gender')") or die("Ошибка " . mysqli_error($link)) ;
		    
		    
	return $result;

	}

	public function updateStuff($link, $name, $surname, $patronymic, $birth, $gender, $id) {
		//$name = mb_convert_encoding($name,'cp1251', 'utf-8' );
		$result = mysqli_query($link, "UPDATE workers SET `name`='$name', `surname`='$surname', `patronymic`='$patronymic', `birth`='$birth', `gender`='$gender' WHERE `id`='$id'") or die("Ошибка " . mysqli_error($link)) ;
		  
		    
	return $result;

	}

	public function deleteStuff($link, $id) {
		$result = mysqli_query($link, "DELETE FROM `workers` WHERE `workers`.`id` = '$id'") or die("Ошибка " . mysqli_error($link)) ;
		    
		    
	return $result;
	}

}