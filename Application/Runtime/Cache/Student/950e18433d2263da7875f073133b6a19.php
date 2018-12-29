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
	<title>更改密码</title>
</head>
<body>
	<!DOCTYPE html>
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
	<title>修改</title>
</head>
<body>
<div class="page-header" style=" padding: 30px 100px 0px 325px">
   <h2>修改信息</h2>
</div>

	<form class="form-horizontal"  role="form" style="padding: 100px 400px 10px 0px"  method="post" action="/ActivityManage/index.php/Student/Index/edit/">
  <div class="form-group" style=" padding: 0px 0px 10px 0px">
    <label for="firstname" class="col-sm-2 control-label">用户ID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="disabledTextInput" placeholder="<?php echo ($data["id"]); ?>"  >
    </div>
  </div>

  <input type="hidden" name="password1" value="<?php echo ($data["password"]); ?>">
  
  <div class="form-group" style=" padding: 0px 0px 10px 00px">
    <label for="lastname" class="col-sm-2 control-label">修改密码</label>
    <div class="col-sm-10">
      <input type="password" class="form-control"  name="password" />
    </div>
  </div>
  
  <div class="form-group" style="padding: 10px 100px 10px 220px">
    <div class="col-sm-offset-2 col-sm-10">
       <button type="submit" class="btn btn-primary btn-lg">确定</button>
       <button type="reset" class="btn btn-default btn-lg">还原修改</button>
    </div>
  </div>
</form>
</body>
<script type="text/javascript">
  $(function () {
    $('.btn btn btn-primary btn-lg').on('click',function(){
      $('form').submit();
    });
    $('.btn btn-default btn-lg').on('click',function(){
      $('form')[0].reset();
    });
  });
</script>
</html>
</body>
</html>