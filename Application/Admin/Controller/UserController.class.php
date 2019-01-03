<?php
namespace Admin\Controller;
/***
 * Class UserController
 * @package Admin\Controller
 */
class UserController extends BaseController {
    /***
     *显示所有用户
     */
	public function showUser(){
		$model=D('users');
        $count=$model->count();
        $page=new\Think\Page($count,10);
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','末页');//当分页页码数少于rollPage时不会显示首页和末页
        $page->setConfig('firest','首页');
        $show=$page->show();//通过show方法生成url
        $data= $model->order("id asc" )->limit($page->firstRow,$page->listRows)->select();
        $m=D('department');    //二次查表找出系部ID对应的系部    前台显示
        foreach ($data as $key => $value) {
            if ($value['sid']) {
                $info = $m->find($value['sid']);
                $data[$key]['department']=$info['department'];
            }
        }
		$this->assign('data',$data);
        $this->assign('show',$show);
    	$this->show();

    }//shwoUser end

    /***
     * Excel插入用户数据
     */
    public function intoUser(){
    	if (IS_POST) {
    		$fileInfo=$_FILES['file_stu'];
    		$newName=uploadFile(1,$fileInfo);
    		 vendor("PHPExcel.PHPExcel");
        $file_name=$newName;
        //echo($file_name);die;
        $extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));//判断导入表格后缀格式
        //echo($extension);die;
        if ($extension == 'xlsx') { //判断是什么后缀
        $objReader =\PHPExcel_IOFactory::createReader('Excel2007');
        $objPHPExcel =$objReader->load($file_name, $encode = 'utf-8');
        } else if ($extension == 'xls'){
        $objReader =\PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel =$objReader->load($file_name, $encode = 'utf-8');
        }
        $sheet =$objPHPExcel->getSheet(0);
        $highestRow = $sheet->getHighestRow();//取得总行数
        $highestColumn =$sheet->getHighestColumn(); //取得总列数
        for ($i = 2; $i <= $highestRow; $i++) {
        //看这里看这里,前面小写的a是表中的字段名，后面的大写A是excel中位置
        $data['username'] =trim($objPHPExcel->getActiveSheet()->getCell("A" .$i)->getValue());
        $data['sid'] =trim($objPHPExcel->getActiveSheet()->getCell("B" .$i)->getValue());
        $data['tel'] =trim($objPHPExcel->getActiveSheet()->getCell("C" .$i)->getValue());
        $data['type'] =trim($objPHPExcel->getActiveSheet()->getCell("D" .$i)->getValue());
        switch ($data['type']) {
        	case 0:
        		$roll1=D('users')->add($data);
        		break;
        	case 1:
        		$roll2=D('teacher')->add($data);
        		break;
        }//switch end
        $arr[]=$data; //把所有数据存入数组中 前台显示
        unlink($newName);
        }//for end
        $this->assign('data',$arr);
        $this->show();
    	}else{
    		$this->show();
    	}
    }//intoUser end

    /***
     * 删除方法
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
     * 修改用户信息
     */
    public function editUser(){
        if(IS_POST){
            $post=I('post.');
            $model=D('users');
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
            $model=D('users');
            $data=$model->find($id);
            $this->assign('data',$data);
            $this->show();
        }
    }

}