<?php
require_once('../INC/config.php');
require_once('../INC/Router.php');
require_once('../INC/Controller.php');
require_once("../INC/View.php");


require_once("INC/util.php");

$r = new Router();

if (isset($_GET['route'])) {
	$r->requestHandler($_GET['route']);
} else {
	$r->home();
}
?>