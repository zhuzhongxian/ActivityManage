<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>校园活动管理系统</title>

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
          <a class="navbar-brand" href="/ActivityManage/index.php/Student/Index/index">校园活动管理系统</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="/ActivityManage/index.php/Student/Activity/showActivity"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="/ActivityManage/index.php/Student/Activity/showActivity"><i class="fa fa-bar-chart-o"></i> 校园活动</a></li>
            <li><a href="/ActivityManage/index.php/Student/Activity/showJoin?id=<?php echo (session('id')); ?>"><i class="fa fa-bar-chart-o"></i> 已报名的活动</a></li>
            <li><a href="/ActivityManage/index.php/Student/Activity/applyActivity"><i class="fa fa-bar-chart-o"></i> 活动申请</a></li>
            <li><a href="/ActivityManage/index.php/Student/Activity/showUnpassActivity?id=<?php echo (session('id')); ?>"><i class="fa fa-bar-chart-o"></i> 未通过审核的活动</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">

            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 欢迎您 , <?php echo (session('name')); ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/ActivityManage/index.php/Student/Index/edit"><i class="fa fa-gear"></i> 修改密码</a></li>
                <li class="divider"></li>
                <li><a href="/ActivityManage/index.php/Student/Index/logout"><i class="fa fa-power-off"></i> 退出登录</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
    <!-- JavaScript -->
    <script src="/ActivityManage/Public/js/jquery-1.10.2.js"></script>
    <script src="/ActivityManage/Public/js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->    <script src="js/raphael-min.js"></script>
    <script src="/ActivityManage/Public/js/morris-0.4.3.min.js"></script>
    <script src="/ActivityManage/Public/js/morris/chart-data-morris.js"></script>
    <script src="/ActivityManage/Public/js/tablesorter/jquery.tablesorter.js"></script>
    <script src="/ActivityManage/Public/js/tablesorter/tables.js"></script>
      </body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>首页</title>
</head>
<body>
<!-- <span class="glyphicon glyphicon-home" style="color: rgb(117, 51, 89); font-size: 30px; padding: 90px 0px 0px 50px">上传Excel文件的顺序为，先上传系部数据，再上传用户数据，最后上传导师关系！</span> -->


<div class="panel panel-success" style="padding: 60px 50px 10px;">
    <div class="panel-heading" >
        <h1 class="panel-title" style="padding: 60px 50px 10px;"  font-size: 30px;> <span  style="color: rgb(74, 0, 0); font-size: 30px; padding: 90px 0px 0px -5px">校园活动管理</span> </h1>
    </div>
    <span class="glyphicon glyphicon-home" style=" rgb(169, 236, 216); font-size:20px; padding: 90px 0px 0px 50px">点击左侧导航栏进行操作</span>
</div>




<div class="container" style="padding: 100px 50px 10px;" >


    <button type="button" class="btn btn-warning popover-toggle"
            title="系统使用说明" data-container="body"
            data-toggle="popover" data-placement="right"
            data-content="">
        系统使用说明
    </button><br><br><br><br><br><br>

    <script>
        $(function () { $('.popover-show').popover('show');});
        $(function () { $('.popover-hide').popover('hide');});
        $(function () { $('.popover-destroy').popover('destroy');});
        $(function () { $('.popover-toggle').popover('toggle');});
        $(function () { $(".popover-options a").popover({html : true });});
    </script>
</div>




</body>
</html>