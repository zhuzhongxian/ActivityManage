<?php
namespace Admin\Controller;
use Leader\Model\BaseModel;
use Think\Controller;

/***
 * Class LoginController
 * @package Admin\Controller
 */
class LoginController extends Controller {
	public function index(){
		$this->display();
	}
    /***
     * 验证密码
     */
	public function Login_check( ) {
		$username = I('username');
		$password = md5(I('password'));
		$model = M('admin');
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