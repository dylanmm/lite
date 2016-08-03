<?php
session_start();

function sayhey(){
	echo "hey";
}

function isloggedin() {
	if ($_SESSION['loggedin'] == true) {
		return 1;
	} else {
		return 0;
	}
}
function logout() {
	$_SESSION['loggedin'] = false;
	redirect("home");
}

function redirect($url){
	header("Location: ?route=".$url);
	exit();
}

?>