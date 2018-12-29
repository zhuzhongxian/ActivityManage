<?php
header('content-type:text/html;charset=utf-8');
function uploadFile($return,$fileInfo,$filename,$allowExt=array('xlsx','xls'),$uploadPath='./Public/upload'){//fileInfo获取到的上传文件信息
	if($fileInfo['error']>0){
            switch ($fileInfo) {
                case 1:
                    $mes='文件上传过大';
                    break;
                case 4:
                    $mes='没有选择上传文件';
                    break;
                default:
                    $mes='文件上传失败';
                    break;
            }
            exit($mes);
        }
        //检测文件上传类型
        $ext=pathinfo($fileInfo['name'],PATHINFO_EXTENSION);
        /*$allowExt=array('xlsx','xls');*/
        if(!in_array($ext, $allowExt)){
           exit('不是该类型文件，重新上传');
        }
        //检测文件是否是通过HTTP传来的
        if (!is_uploaded_file($fileInfo['tmp_name'])) {
           exit('文件不是通过HTTP POST传过来的');
        }
       /* $uploadPath='./Public/upload/';*/
        if(!file_exists($uploadPath)){//如果没有这个文件夹则创建一个
            mkdir($uploadPath,0777,true);
            chmod($uploadPath, 0777);
        }
    if($filename=='') {
        $uniName = md5(uniqid(microtime(true), true)) . '.' . $ext;//随机生成一个文件名 防止同名替换
        //$uniName='1630090136'.'.'.$ext;
        $destination = $uploadPath . '/' . $uniName;
    }else{
        $destination = $uploadPath . '/' . $filename .'.' . $ext;
    }
        if (!@move_uploaded_file($fileInfo['tmp_name'], $destination)) {
            exit('文件移动失败');
        }
        if($return==1){
            return $destination;
        }
        else return $filename.'.'.$ext;//上传成功返回路径和文件名

}//uploadFile end




