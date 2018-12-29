<?php
namespace Admin\Controller;
/***
 * Class OrganizationController
 * @package Admin\Controller
 */
class OrganizationController extends BaseController {
    /***
     * 展示所有组织
     */
    public function showOrg(){
    	$model=D('organization');
        $count=$model->count();//获得总的记录数
        $page=new\Think\Page($count,5);//每页显示
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('last','末页');//当分页页码数少于rollPage时不会显示首页和末页
        $page->setConfig('firest','首页');
        $show=$page->show();//通过show方法生成url
    	$data=$model ->limit($page->firstRow,$page->listRows)->select();
    	$this-> assign('data',$data);
        $this->assign('show',$show);
        $this-> show();
    }//system end

    /***
     * 修改
     */
    public function edit(){
 
    	if(IS_POST){
    		$post=I('post.');
    		$model=D('organization');
    		$res=$model->save($post);
    		if($res !==false){
    			$this->success('修改成功');
    		}else{
    			$this->error('修改失败');
    		}
    	}else{
    	$id=I('get.id');
    	$model=D('System');
    	$data=$model->find($id);
    	$this->assign('data',$data);
    	$this->show();
     }
    }//edit end

    /***
     * 删除
     */
    public function del(){
    	$id=I('get.id');
    	$data=D('organization')->where("org_id="."'".$id."'")->delete();
    	if($data){
    		$this->success('删除成功',U('showOrg'),1);
    	}else{
    		$this->error('删除失败');
    	}
    }//del end

    /***
     * 导入组织
     */
    public function intoOrg(){
        if(IS_POST){
        $fileInfo=$_FILES['file_stu'];
        $newName=uploadFile(1,$fileInfo);//上传文件 返回文件位置
        vendor("PHPExcel.PHPExcel");
        $file_name=$newName;
        $extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));//判断导入表格后缀格式
        if ($extension == 'xlsx') {
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
        $data['org_id'] =trim($objPHPExcel->getActiveSheet()->getCell("A" . $i)->getValue());
        $data['org_name'] =trim($objPHPExcel->getActiveSheet()->getCell("B" .$i)->getValue());
        $data['org_describe'] =trim($objPHPExcel->getActiveSheet()->getCell("C" .$i)->getValue());
        //看这里看这里,这个位置写数据库中的表名
        $arr[]=$data;
        $d=D('organization');
        $er=$d->add($data);
        }
        unlink($newName);
        $this->assign('data',$arr);
        $this->show();
        }//echo $newName;
        else{
            $this->show();
        }
    }// into end
}