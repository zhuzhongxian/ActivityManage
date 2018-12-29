<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>教务管理</title>

    <!-- Bootstrap core CSS -->
    <link href="/paper/Public/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/paper/Public/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/paper/Public/font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="/paper/Public/css/morris-0.4.3.min.css">
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
          <a class="navbar-brand" href="/paper/index.php/Admin/Index/index">教务管理</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="/paper/index.php/Admin/Index/index"><i class="fa fa-dashboard"></i> 首页</a></li>
            <!-- <li><a href="tables.html"><i class="fa fa-table"></i> Tables</a></li> -->
           <!--  <li><a href="forms.html"><i class="fa fa-edit"></i> Forms</a></li>
            <li><a href="typography.html"><i class="fa fa-font"></i> Typography</a></li> -->
           <!--  <li><a href="bootstrap-grid.html"><i class="fa fa-wrench"></i> Bootstrap Grid</a></li> -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-desktop"></i> 用户及系部管理 <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/paper/index.php/Admin/User/showAdmin">教务管理</a></li>                
                <li><a href="/paper/index.php/Admin/User/showLeader">系主任管理</a></li>
                <li><a href="/paper/index.php/Admin/User/showTeacher">教师管理</a></li>
                <li><a href="/paper/index.php/Admin/User/showStudent">学生管理</a></li>
                <li><a href="/paper/index.php/Admin/System/system">系部管理</a></li>
                <!-- <li><a href="#">Third Item</a></li>
                <li><a href="#">Last Item</a></li> -->
              </ul>
            </li>
            
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> 导入信息<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/paper/index.php/Admin/User/intoUser">导入用户列表</a></li>
                <li><a href="/paper/index.php/Admin/Teacher/intoRelation">导入导师关系</a></li>
                <li><a href="/paper/index.php/Admin/System/into"> 导入系部列表</a></li>
                <!-- <li><a href="#">Third Item</a></li>
                <li><a href="#">Last Item</a></li> -->
              </ul>
            </li>
            <!-- <li><a href="/paper/index.php/Admin/System/into"><i class="fa fa-bar-chart-o"></i> 导入系部列表</a></li> -->
            <li><a href="/paper/index.php/Admin/Student/showGrade"><i class="fa fa-bar-chart-o"></i> 学生成绩</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <!-- <li class="dropdown messages-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">7 New Messages</li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li><a href="#">View Inbox <span class="badge">7</span></a></li>
              </ul>
            </li>
            <li class="dropdown alerts-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Default <span class="label label-default">Default</span></a></li>
                <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
                <li><a href="#">Success <span class="label label-success">Success</span></a></li>
                <li><a href="#">Info <span class="label label-info">Info</span></a></li>
                <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
                <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
                <li class="divider"></li>
                <li><a href="#">View All</a></li>
              </ul>
            </li> -->
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 欢迎您 , <?php echo (session('name')); ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <!-- <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li> -->
                <li><a href="/paper/index.php/Admin/Index/edit"><i class="fa fa-gear"></i> 修改密码</a></li>
                <li class="divider"></li>
                <li><a href="/paper/index.php/Admin/Index/logout"><i class="fa fa-power-off"></i> 退出登录</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
    <!-- JavaScript -->
    <script src="/paper/Public/js/jquery-1.10.2.js"></script>
    <script src="/paper/Public/js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->    <script src="js/raphael-min.js"></script>
    <script src="/paper/Public/js/morris-0.4.3.min.js"></script>
    <script src="/paper/Public/js/morris/chart-data-morris.js"></script>
    <script src="/paper/Public/js/tablesorter/jquery.tablesorter.js"></script>
    <script src="/paper/Public/js/tablesorter/tables.js"></script>
      </body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>教务管理</title>
</head>
<body>
<table class="table table-striped">
  <caption><h2>教务管理</h2></caption>
  <thead>
    <tr>
      <th>       </th>
      <th>       </th>
      <th>用户ID</th>
      <th>用户姓名</th>
      <th>用户系部</th>
      <th>用户类型</th>
      <th>操作</th>
    </tr>
  </thead>
  <tbody>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
      <td>         </td>
      <td>         </td>
      <td><?php echo ($vol["id"]); ?></td>
      <td><?php echo ($vol["name"]); ?></td>
      <td><?php echo ($vol["systemname"]); ?></td>
      <td><?php switch($vol["type"]): case "1": ?>管理员<?php break;?>
        <?php case "2": ?>系主任<?php break;?>
        <?php case "3": ?>指导教师<?php break;?>
        <?php case "4": ?>学生<?php break;?>
        <?php default: endswitch;?>
      </td>
      <td><a class="btn btn-default" href="/paper/index.php/Admin/User/editUser/id/<?php echo ($vol["id"]); ?>/type/<?php echo ($vol["type"]); ?>" role="button">修改</a>
      <a class="btn btn-primary" href="/paper/index.php/Admin/User/del/id/<?php echo ($vol["id"]); ?>/type/<?php echo ($vol["type"]); ?>" role="button">删除</a></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    
  </tbody>
</table>

<center>
<ul class="pagination" >
    <a href="<?php echo ($show); ?>"></a>
    <li><a href="#">&laquo;</a></li>
    <li class="active"><a href="#">1</a></li>
    <li class="disabled"><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">&raquo;</a></li>
</ul>
</center>

</body>
</html>