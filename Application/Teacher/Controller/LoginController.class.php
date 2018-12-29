<?php
namespace Teacher\Controller;
use Think\Controller;

/***
 * Class LoginController
 * @package Teacher\Controller
 */
class LoginController extends Controller {
	public function index(){
		$this->display();
	}

    /***
     * 登陆验证
     */
	public function Login_check( ) {
		$username = I('username');
		$password = md5(I('password'));
		$model = M('teacher');
		$category  = $model ->where(array('username' => $username)) -> find();
		// 判断密码
		if ($password == $category['password'])
		{
			//登录成功写入session
			session('id',$category['id']);
			session('name',$category['username']);
			/*此地方需要改成相应的登录位置switch*/
			$this -> success("登录成功",U('Index/index'));
		}
		else{
			$this -> error('账号或密码错误');
		}
	}		
	
}