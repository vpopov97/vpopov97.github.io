<?php
class Route
{
 	
	static function start()
	{
		
		$action_name = 'index';
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		if ( !empty($routes[1]) )
		{
			$action_name = $routes[1];
		}
		require_once "models/Stuff_model.php";
		require_once "controllers/Controller_main.php";
		
		$controller = new main;
		$action = $action_name;
		$controller->$action();
	}    
}
Route::start();