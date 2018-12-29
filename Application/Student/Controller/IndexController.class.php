<?php
namespace Student\Controller;
/***
 * Class IndexController
 * @package Student\Controller
 */
class IndexController extends BaseController {
    public function index(){
        $this->display();
    }

    /***
     * 修改信息
     */
    public function edit(){
        if(IS_POST){
            $session=session();
            $post=I('post.');
            if($post['password']){//判断是否修改密码
                $post['password']=md5($post['password']);//加密后截取10位做为密码
            }else{//如果没有修改就获取隐藏域中的password1原密码
                $post['password']=$post['password1'];
            }
            $values=D('users')->where('id='.$session['id'])->save($post);
            if ($values!==false) {
                session(null);
                $this->success('修改成功');
            }else{
                $this->error('修改失败');
            }
        }else{
            $session=session();
            $model=D('users');
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
}