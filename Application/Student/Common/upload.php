<?php
/*
*$fileInfo 传输文件的信息
* $uploadPath 传输文件的目标路径
* $allowExt1  论文报告文件类型 'wps','doc','docx'
* $allowExt2 ppt文件类型 'ppt','pptx'
* $maxSize 限制文件传输大小
* $type  用于判断传输的是ppt（1）还是文本(2)
* $flag判断文件是否为正确的文件类型
 */
function upload($fileInfo, $type ,$uploadPath = 'uploads',$flag=true,$allowExt1=array('ppt','pptx'),$allowExt2=array('wps','doc','docx'),$maxSize = 4194304){
	// 判断错误号
	if ($fileInfo ['error'] > 0) {
		switch ($fileInfo ['error']) {
			case 1 :
				$mes = '上传文件超过了PHP配置文件中upload_max_filesize选项的值';
				break;
			case 2 :
				$mes = '超过了表单MAX_FILE_SIZE限制的大小';
				break;
			case 3 :
				$mes = '文件部分被上传';
				break;
			case 4 :
				$mes = '没有选择上传文件';
				break;
			case 6 :
				$mes = '没有找到临时目录';
				break;
			case 7 :
			case 8 :
				$mes = '系统错误';
				break;
		}
		return $mes;
	}
				
	// 4M 
	//   
	// 检测上传文件大小是否符合规范
	if ($fileInfo ['size'] > $maxSize) {
		return '上传文件过大';
	}
	if(!is_array($allowExt1)){
		return '系统错误';
	}
	if(!is_array($allowExt2)){
		return '系统错误';
	}
	// 检测文件是否是通过HTTP POST方式上传上来
	if (! is_uploaded_file ( $fileInfo ['tmp_name'] )) {
		return '文件不是通过HTTP POST方式上传上来的';
	}

	$ext = pathinfo ( $fileInfo ['name'], PATHINFO_EXTENSION ); //获取文件拓展名
	if($type == 1) {
		if (! in_array ( $ext, $allowExt1 )) {
			return '上传的不是合法的PPT文件';
		}
		if (! file_exists ( $uploadPath )) {
			mkdir ( $uploadPath, 0777, true );
			chmod ( $uploadPath, 0777 );
		}
		
	} elseif ($type ==2) {
		if (! in_array ( $ext, $allowExt2 )) {
			return '上传的不是合法的文本文件';
		}
		if (! file_exists ( $uploadPath )) {
			mkdir ( $uploadPath, 0777, true );
			chmod ( $uploadPath, 0777 );
		}
	}
	
	/*文件传输
	*成功返回一个传输信息的数组 上传覆盖原同名文件
	*/
	$uniName = $fileInfo['name'];
	$destination = $uploadPath . '/' . $uniName;
	if (! @move_uploaded_file ( $fileInfo ['tmp_name'], $destination )) {
		return '文件上传失败';
	}
	else{
		return array(
			'destination' => $destination,
			'type'		  => $type,
			'name'		  => $fileInfo['name'],
		);
	}

}
/*Public --|----upload |----student|----answer--------|--page 答辩论文
													            |--ppt  答辩PPT
									         |----opening_report--------|--report  开题报告
													  		            |--ppt     开题PPT
*/