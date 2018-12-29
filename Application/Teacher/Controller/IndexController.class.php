<?php
namespace Teacher\Controller;
/***
 * Class IndexController
 * @package Teacher\Controller
 */
class IndexController extends BaseController {
    public function index(){
        $this->show();
    }// index end

    /***
     * 修改信息
     */
    public function edit(){
    	if(IS_POST){
            $session=session();
    		$post=I('post.');
    		//var_dump($post);die;
    		if($post['password']){//判断是否修改密码
    			$post['password']=md5($post['password']);
    		}else{//如果没有修改就获取隐藏域中的password1原密码
    			$post['password']=$post['password1'];
    		}
    		$values=D('teacher')->where('id='.$session['id'])->save($post);
    		if ($values!==false) {
                session(null);
    			$this->success('修改成功');
    		}else{
    			$this->error('修改失败');
    		}
    	}else{
    	$session=session();
    	$model=D('teacher');
    	$data=$model->where('id='.$session['id'])->find();
    	$this->assign('data',$data);
    	$this->show();
    }//else end
    }//edit end

    /***
     * 退出登陆
     */
    public function logout(){
    	//清除session
    	session(null);
    	//跳转到登录界面
    	$this->success('退出成功');
    }//logOut end

    /***
     * 下载活动文档
     */
    public function downloads(){
        $name=$_GET['name'].'.xlsx';
        $url='Public/model/'.$name;
        import('Org.Net.Http');
            $http = new \Org\Net\Http;
            $http->download($url,$path);
    }//download
}