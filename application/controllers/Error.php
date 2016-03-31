<?php
/**
 * @Author: KuleYang
 * @Date:   16/03/11 11:16
 * @Email:  kulenet@gmail.com
 * @File:   Error.php
 * @Desc:   ...
 */
class ErrorController extends Base_Controllers
{
    /**
     * Method  errorAction
     * @desc   ......
     *
     * @author KuleYang <kulenet@gmail.com>
     * @param null $exception
     *
     * @return void
     */
    public function errorAction($exception = null)
    {
        header("HTTP/1.1 404 Not Found");
        //3秒后跳去首页
        header("refresh:3;url=/");

        $this->getView()->display('error.phtml');
    }
}