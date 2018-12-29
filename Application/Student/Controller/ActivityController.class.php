<?php
/**
 * Created by PhpStorm.
 * User: T
 * Date: 2018/12/24
 * Time: 18:41
 */

namespace Student\Controller;
class ActivityController extends BaseController{
    /***
     * 展示所有活动
     */
    public function showActivity(){
        $model=D('activity');
        $data= $model->order("a_id asc" )->where(array('a_status' =>1))->select();
        $m=D('organization');
        foreach ($data as $key => $value) {
            if ($value['a_org_id']) {
                $info = $m->find($value['a_org_id']);
                $data[$key]['organization']=$info['org_name'];
            }
        }
        //var_dump($data);die;
        $this->assign('data',$data);
        $this->show();
    }

    /***
     * 提交申请信息
     */
    public function applyActivity(){
        $m=D('organization');
        $data= $m->select();
        $this->assign('data',$data);
        $this->show();
    }

    /***
     * 活动申请
     */
    public function apply(){
        $post=I('post.');
        $m=D('activity');
        $a_id=$m->add($post);
        $imgInfo=$_FILES['a_img_url'];
        $wordInfo=$_FILES['a_application_url'];
        $data['a_img_url']=uploadFile(0,$imgInfo,$a_id,['bmp','jpg','jpeg','png','gif'],'./Public/activity/img');//上传文件 返回文件位置
        $data['a_application_url']=uploadFile(0,$wordInfo,$a_id,['doc','docx'],'./Public/upload');
        $return=$m->where(array('a_id' =>$a_id))->save($data);
        if($return>0){
            $this -> success("提交成功,");
        }
    }

    /***
     * 查看参加的活动
     */
    public function showJoin(){
        $get=I('get.');
        $m=D('join');
        $data=$m->order("a_id asc" )->where(array('u_id' =>$get['id']))->select();
        $modle=D('activity');
        foreach ($data as $key => $value) {
            $info = $modle->where(array('a_id'=>$value['a_id']))->field('a_id,a_name,a_place,a_describe')->find();
            $data[$key]=$info;
        }
        $this->assign('data',$data);
        $this->show();
    }
    /***
     * 报名活动
     */
    public function join(){
        $get=I('get.');
        $m=D('join');
        $return=$m->add($get);
        if($return){
            $this -> success("报名成功,");
        }
    }

    /***
     * 展示详细信息
     */
    public function showDescribe(){
        $a_id=I('get.a_id');
        $m=D('activity');
        $data=$m->where(array('a_id' =>$a_id))->find();
        $modle=D('organization');
        $info = $modle->find($data['a_org_id']);
        $data['organization']=$info['org_name'];
        $this->assign('data',$data);
        $this->show();
    }

    /***
     *展示未通过审核的活动
     */
    public function showUnpassActivity(){
        $id=I('get.id');
        $model=D('activity');
        $data= $model->order("a_id asc" )->where(array('a_status' =>2,'u_id' =>$id))->select();
        $m=D('teacher');
        foreach ($data as $key => $value) {
            if ($value['a_teacher_id']) {
                $info = $m->find($value['a_teacher_id']);
                $data[$key]['teacher']=$info['username'];
            }
        }
        $this->assign('data',$data);
        $this->show();
    }
}