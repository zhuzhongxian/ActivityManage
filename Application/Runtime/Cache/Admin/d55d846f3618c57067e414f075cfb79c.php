<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>活动管理</title>

    <!-- Bootstrap core CSS -->
    <link href="/ActivityManage/Public/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/ActivityManage/Public/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/ActivityManage/Public/font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="/ActivityManage/Public/css/morris-0.4.3.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/ActivityManage/index.php/Admin/Index/index">活动管理</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="/ActivityManage/index.php/Admin/Index/index"><i class="fa fa-dashboard"></i> 首页</a></li>
            <!-- <li><a href="tables.html"><i class="fa fa-table"></i> Tables</a></li> -->
           <!--  <li><a href="forms.html"><i class="fa fa-edit"></i> Forms</a></li>
            <li><a href="typography.html"><i class="fa fa-font"></i> Typography</a></li> -->
           <!--  <li><a href="bootstrap-grid.html"><i class="fa fa-wrench"></i> Bootstrap Grid</a></li> -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-desktop"></i> 用户及组织管理 <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/ActivityManage/index.php/Admin/Teacher/showTeacher">教师管理</a></li>
                <li><a href="/ActivityManage/index.php/Admin/User/showUser">学生管理</a></li>
                <li><a href="/ActivityManage/index.php/Admin/Organization/showOrg">组织管理</a></li>
                <!-- <li><a href="#">Third Item</a></li>
                <li><a href="#">Last Item</a></li> -->
              </ul>
            </li>
            
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> 导入信息<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/ActivityManage/index.php/Admin/User/intoUser">导入用户列表</a></li>
                <li><a href="/ActivityManage/index.php/Admin/Organization/intoOrg"> 导入组织列表</a></li>
                <li><a href="/ActivityManage/index.php/Admin/System/into"> 导入系部列表</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 欢迎您 , <?php echo (session('name')); ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/ActivityManage/index.php/Admin/Index/edit"><i class="fa fa-gear"></i> 修改密码</a></li>
                <li class="divider"></li>
                <li><a href="/ActivityManage/index.php/Admin/Index/logout"><i class="fa fa-power-off"></i> 退出登录</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    <!-- JavaScript -->
    <script src="/ActivityManage/Public/js/jquery-1.10.2.js"></script>
    <script src="/ActivityManage/Public/js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
      <script src="js/raphael-min.js"></script>
    <script src="/ActivityManage/Public/js/morris-0.4.3.min.js"></script>
    <script src="/ActivityManage/Public/js/morris/chart-data-morris.js"></script>
    <script src="/ActivityManage/Public/js/tablesorter/jquery.tablesorter.js"></script>
    <script src="/ActivityManage/Public/js/tablesorter/tables.js"></script>
      </body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>导入系部</title>
</head>
<body>
	<form action="/ActivityManage/index.php/Admin/System/into/" enctype="multipart/form-data" method="post" class="form-inline" role="form" style=" padding: 50px 80px 10px 350px" >
  <!-- <div class="form-group">
    <label class="sr-only" for="name">名称</label>
    <input type="text" class="form-control" id="name" placeholder="请输入名称">
  </div> -->
  <div class="form-group">
    <label class="sr-only" for="inputfile">文件输入</label>
    <input  type="file" name="file_stu" />
  </div>
  <input type="submit"  class="btn btn-default" value="导入" />
</form>

<p>
  <a href="/ActivityManage/index.php/Admin/Index/downloads/name/System" class="btn btn-primary btn-lg btn-block" role="button" >下载系部数据模版</a>
</p>

<table class="table table-striped">
  <caption><h2>本次导入信息</h2></caption>
  <thead>
    <tr>
      <th>       </th>
      <th>       </th>
      <th>       </th>
      <th>系部编号</th>
      <th>系部名称</th>
    
    </tr>
  </thead>
  <tbody>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
      <td>         </td>
      <td>         </td>
      <td>         </td>
      <td><?php echo ($vol["id"]); ?></td>
      <td><?php echo ($vol["name"]); ?></td>
      
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  </tbody>
</table>


</body>
</html>