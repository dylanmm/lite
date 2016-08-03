<?php
// Including the engine of the MVC app
require_once('INC/config.php'); // global vars 
require_once('INC/Router.php');
require_once('INC/Controller.php');
require_once("INC/View.php");

$r = new Router;

if (isset($_GET['route'])) {
	$r->requestHandler($_GET['route']);
} else {
	$r->home();
}
?>