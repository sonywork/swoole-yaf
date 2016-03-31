<?php
/**
 * @Author: KuleYang
 * @Date:   16/03/11 11:20
 * @Email:  kulenet@gmail.com
 * @File:   Index.php
 * @Desc:   ...
 */
class IndexController extends Base_Controllers
{
    /**
     * Method  indexAction
     * @desc   ......
     *
     * @author KuleYang <kulenet@gmail.com>
     *
     * @return void
     */
    public function indexAction()
    {
        var_dump($this->getServer());
        var_dump($this->getHeader());
        var_dump($this->getQuery());
        var_dump($this->getPost());
        var_dump($this->getCookie());
        var_dump($this->getFiles());
        var_dump($this->getRawContent());

        $this->getView()->display('index.phtml');
    }
}