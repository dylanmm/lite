<?php
class View {
	public $template = array();
	function __construct() {
		$this->template['header'] = "header.tpl";
		$this->template['footer'] = "footer.tpl";
		$this->template['content'] = "default.tpl";
	}
	function output($data){
		extract($data);
		require TEMPLATEDIR.$this->template['header'];
		require TEMPLATEDIR.$this->template['content'];
		require TEMPLATEDIR.$this->template['footer'];
	}
}
?>