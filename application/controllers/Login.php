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
//        Yaf\Loader::autoload();
        $input = $this->getRequest();
//        var_dump($input->getQuery());
//        var_dump($input->getQuery("username"));
//        var_dump($input->getQuery("password"));
//        var_dump($input->getPost("password"));
        $loginService = new services\LoginService();
        $loginService->getAllUser();
        exit;
    }

    public function configAction() {
       $config = new Yaf\Config\Ini(APPLICATION_PATH . '/conf/redis.ini',ini_get("yaf.environ"));
       $config_arr = $config->toArray();
       $host = $config->get("cache")->port;

       print_r($config_arr);
       print_r($host);
    }

    public function phpinfoAction() {
       phpinfo();
    }
}
