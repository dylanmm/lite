<?php
class NotFound extends Controller {
   function default() {
      $data = array();
      $this->view->template['content'] = "notfound.tpl";
      $this->view->output($data);
   }
}
?>