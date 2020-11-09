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
        \Yaf\Loader::import(APPLICATION_PATH . '/vendor/autoload.php');

    }
}




