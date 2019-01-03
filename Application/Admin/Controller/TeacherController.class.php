<?php
namespace Admin\Controller;
use Think\Controller;
class TeacherController extends BaseController{
    /***
     * 显示所有教师
     */
    public function showTeacher(){
        $model=D('teacher');
        $count=$model->count();
        $page=new\Think\Page($count,10);
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','末页');//当分页页码数少于rollPage时不会显示首页和末页
        $page->setConfig('firest','首页');
        $show=$page->show();//通过show方法生成url
        $data= $model->order("id asc" )->limit($page->firstRow,$page->listRows)->select();
        //var_dump($data);die;
        $this->assign('data',$data);
        $this->assign('show',$show);
        $this->show();
    }//showTaeacher end

    /***
     * 删除
     */
    public function del(){
        $get=I('get.');
        switch ($get['type']) {//判断用户类型 选择操作的表
            case 0:
                $values=D('users')->where('id='.$get['id'])->delete();
                break;
            case 1:
                $values=D('teacher')->where('id='.$get['id'])->delete();
                break;
            default:
                break;
        }
        if ($values) {
            if($get['type']==0){
                $this->success('删除成功',U('showUser'),1);
            }
            else{
                $this->success('删除成功',U('showTeacher'),1);
            }
        }else{
            $this->error('删除失败');
        }
    }//delete end
    /***
     * 修改教师信息
     */
    public function editTeacher(){
        if(IS_POST){
            $post=I('post.');
            $model=D('teacher');
            if($post['password']){//判断是否修改密码
                $post['password']=md5($post['password']);
            }else{//如果没有修改就获取隐藏域中的password1原密码
                $post['password']=$post['password1'];
            }
            $res=$model->save($post);
            if($res !==false){
                $this->success('修改成功');
            }else{
                $this->error('修改失败');
            }
        }else{
            $id=I('get.id');
            $model=D('teacher');
            $data=$model->find($id);
            $this->assign('data',$data);
            $this->show();
        }
    }
}