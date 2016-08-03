<?php
class home extends Controller {

   function default() {

   	if (!isloggedin()) {
   		redirect("login");
   	}

 	$this->view->template['content'] = "home.tpl";
    $this->view->output($data);
   }
   
   function logout() {
		logout();
   }
}
?>