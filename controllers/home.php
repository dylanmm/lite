<?php
class home extends Controller {
   function default() {

      $data['testvar'] = 9999;
      $data['testvar2'] = 9999;
      $data['testvar3'] = 9999;
      $this->view->template['content'] = "home.tpl";
    
      $this->view->output($data);
   }
}
?>