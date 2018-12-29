<?php
/**
 * Created by PhpStorm.
 * User: T
 * Date: 2018/12/24
 * Time: 18:41
 */

namespace Teacher\Controller;
/***
 * Class ActivityController
 * @package Teacher\Controller
 */
class ActivityController extends BaseController{
    /***
     * 展示所有没审核的活动
     */
    public function showUnpassActivity(){
        $model=D('activity');
        $data= $model->order("a_id asc" )->where(array('a_status' =>0))->select();
        $m=D('organization');
        foreach ($data as $key => $value) {
            if ($value['a_org_id']) {
                $info = $m->find($value['a_org_id']);
                $data[$key]['organization']=$info['org_name'];
            }
        }
        $this->assign('data',$data);
        $this->show();
    }
    /***
     * 提交申请信息
     */
    public function pass(){
        $data['a_status']='1';
        $id=I('get.id');
        $m=D('activity');
        $m->where(Array('a_id' =>$id))->save($data);
        $this->success('审核通过',U('showUnpassActivity'),1);
    }
    /***
     * 下载申请活动文档
     */
    public function downloads(){
        $name=I('get.url');
        $url='Public/upload/'.$name;
        import('Org.Net.Http');
        $http = new \Org\Net\Http;
        $http->download($url,$path);
    }//download

    /***
     * 审核不通过
     */
    public function reject(){
        $data['a_status']='2';//a_status状态为2代表审核不合格
        $id=I('get.id');
        $m=D('activity');
        $m->where(Array('a_id' =>$id))->save($data);
        $this->success('操作成功',U('showUnpassActivity'),1);
    }
}