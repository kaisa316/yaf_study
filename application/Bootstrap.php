<?php
/**
 * Class Bootstrap
 * 全局启动，注册类
 */

class Bootstrap extends Yaf\Bootstrap_Abstract {

    /**
     * 使用composer自动加载
     */
    public function _init_autoload() {
//        require_once APPLICATION_PATH.'/vendor/autoload.php';//这是我的写法
        Yaf\Loader::import(APPLICATION_PATH . '/vendor/autoload.php');

    }

    public function _init_database() {
//        $config = new Yaf\Config\Ini(APPLICATION_PATH . '/conf/redis.ini',ini_get("yaf.environ"));
        $config = \Yaf\Application::app()->getConfig();
        $db = $config->database->toArray();
        //初始化 illuminate/database
        $capsule = new \Illuminate\Database\Capsule\Manager;
        $capsule->addConnection($db);
//        $capsule->setEventDispatcher(new \Illuminate\Events\Dispatcher(new \Illuminate\Container\Container));
        $capsule->setAsGlobal();
        //开启Eloquent ORM
        $capsule->bootEloquent();

        class_alias('\Illuminate\Database\Capsule\Manager', 'DB');
    }

}




