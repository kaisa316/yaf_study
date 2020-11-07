<?php 
class IndexController extends Yaf\Controller_Abstract {
   // default action name
   public function indexAction() {  
//		$this->getView()->content = "Hello World";
		echo 'hello world,yaf';
		exit;
   }
}
