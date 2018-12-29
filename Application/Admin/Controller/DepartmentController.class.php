<?php
namespace Admin\Controller;
/***
 * Class DepartmentController
 * @package Admin\Controller
 */
class DepartmentController extends BaseController {
    /***
     * Excel操作数据库
     */
    public function into(){

        if(IS_POST){
            $fileInfo=$_FILES['file_stu'];
            $newName=uploadFile(1,$fileInfo);//上传文件 返回文件位置

            vendor("PHPExcel.PHPExcel");
            $file_name=$newName;
            //echo($file_name);die;
            $extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));//判断导入表格后缀格式
            //echo($extension);die;
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
                $data['sid'] =trim($objPHPExcel->getActiveSheet()->getCell("A" . $i)->getValue());
                $data['department'] =trim($objPHPExcel->getActiveSheet()->getCell("B" .$i)->getValue());
                //看这里看这里,这个位置写数据库中的表名
                $arr[]=$data;
                $d=D('department');
                $er=$d->add($data);
            }
            unlink($newName);
            $this->assign('data',$arr);
            $this->show();
        }//echo $newName;
        else
            $this->show();
        }
    // into end
}