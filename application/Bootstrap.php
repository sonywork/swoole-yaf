<?php
/**
 * @Author: KuleYang
 * @Date:   16/03/11 11:15
 * @Email:  kulenet@gmail.com
 * @File:   Cootstrap.php
 * @Desc:   ...
 */
class Bootstrap extends Yaf_Bootstrap_Abstract
{
    /**
     * Method  _initConfig
     * @desc   ......
     *
     * @author KuleYang <kulenet@gmail.com>
     * @param Yaf_Dispatcher $dispatcher
     *
     * @return void
     */
    public function _initConfig(Yaf_Dispatcher $dispatcher)
    {
        Yaf_Registry::set('config', Yaf_Application::app()->getConfig());

        $dispatcher->disableView();
    }

    /**
     * Method  _initLocalNamespace
     * @desc   ......
     *
     * @author KuleYang <kulenet@gmail.com>
     *
     * @return void
     */
    public function _initLocalNamespace()
    {
        $namespace = array(
            'Base',
        );
        Yaf_Loader::getInstance()->registerLocalNamespace($namespace);
    }

    /**
     * Method  _initRoute
     * @desc   ......
     *
     * @author KuleYang <kulenet@gmail.com>
     * @param Yaf_Dispatcher $dispatcher
     *
     * @return void
     */
    public function _initRoute(Yaf_Dispatcher $dispatcher)
    {
//        $oRouter = Yaf_Dispatcher::getInstance()->getRouter();
//        $result  = $oRouter->addConfig(Yaf_Registry::get('config')->routes);
    }
}