<?php 
class LoginController extends Yaf\Controller_Abstract {
   // default action name
   public function indexAction() {  
//		$this->getView()->content = "Hello World";
       $input = $this->getRequest();
       var_dump($input);
		echo 'hello world,login';
		exit;
   }

    public function loginAction() {
        $input = $this->getRequest();
        $params = $input->getParams();
        var_dump($params);
        echo 'hello world,'.__METHOD__;
        exit;
    }

    public function configAction() {
       $config = new Yaf\Config\Ini(APPLICATION_PATH . '/conf/redis.ini',ini_get("yaf.environ"));
       $config_arr = $config->toArray();
       $host = $config->get("cache")->port;

       print_r($config_arr);
       print_r($host);
    }
}
