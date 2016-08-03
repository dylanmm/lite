<?php
class login extends Controller {
   function default() {
   if (isset($_POST['user']) && isset($_POST['pw'])) {
   		if ($_POST['user'] == ADMINUSER && $_POST['pw'] == ADMINPW) {
   			$_SESSION['loggedin'] = true;
   			redirect("home");
   		}
   }

 	$this->view->template['content'] = "login.tpl";
    $this->view->output($this->data);
   }
}
?>