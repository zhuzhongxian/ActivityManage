<?php
namespace Teacher\Controller;
use Think\Controller;

/***
 * Class BaseController
 * @package Teacher\Controller
 */
class BaseController extends Controller{


    public $sign;
	 public function _initialize(){
        //判断用户是否登录
        $isLogin = $this->isLogin();
        if(!$isLogin){
            return $this->redirect('login/index');
        }
     }

     //判断用户是否登录
     public function isLogin(){
        //获取session
        $user = $this->getLoginUser();
        if($user){
            return true;
        }
        return false;
     }

    //获取session
     public function getLoginUser(){
        if(!$this->sign){
            $this->sign = session('id');

        }
        return $this->sign;
     }

}

?>