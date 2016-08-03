<?php
abstract class Controller {
   public $view = '';
   public $data = array();
   public $self_route = 'index.php?route=';//.get_class($this);
   function __construct() {
      $this->view = new View;
      $this->self_route .= get_class($this);
   	  $this->data['self_route'] = $this->self_route;
   }

   function sayhi(){
      print "hi";
   }

}
?>