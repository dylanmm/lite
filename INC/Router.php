<?php
class Router {
   function __construct() {}

   function requestHandler($request) {
   		$route = explode('/', $request);
   		$class = $route[0];
   		$method = $route[1];

   		$file = CONTOLLERDIR.$class.'.php';
         if (strstr(getcwd(), 'admin')) {
            $file = '../admin/'.$file;
         }
   		if (is_file($file)) {
   			require $file;
   			$controller = new $class;
   			if (isset($route[1])) {
   				if (method_exists($controller, $route[1])) {
                  //$controller::parent__construct();
	   				$controller->$method();
	   			} else {
   					$this->notFound();
	   			}
   			} else {
	   				$controller->default();
   			}
   		} else {
   			$this->notFound();
   		}
   }

   function notFound() {
   		require CONTOLLERDIR."NotFound.php";
         $controller = new NotFound;
         $controller->default();
   }
   function home() {
   		require CONTOLLERDIR."home.php";
         $controller = new Home;
         $controller->default();
   }
}
?>