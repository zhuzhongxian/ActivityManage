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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<div class="row" >
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><div class="col-sm-6 col-md-3" margin="100px 50px">
        <div class="thumbnail" >
            <img src="/ActivityManage/Public/activity/img/<?php echo ($vol["a_img_url"]); ?>">
            <div class="caption">
                <h3><?php echo ($vol["a_name"]); ?></h3>
                <p><?php echo ($vol["organization"]); ?></p>
                <p>
                    <a href="/ActivityManage/Public/client.html" class="btn btn-primary" role="button">
                        加入讨论
                    </a>
                    <a href="/ActivityManage/index.php/Student/Activity/join?a_id=<?php echo ($vol["a_id"]); ?>&&u_id=<?php echo (session('id')); ?>"  class="btn btn-default" role="button">
                        报名活动
                    </a>
                    <a href="/ActivityManage/index.php/Student/Activity/showDescribe?a_id=<?php echo ($vol["a_id"]); ?>" class="btn btn-primary" role="button">
                        查看
                    </a>
                </p>
            </div>
        </div>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
</body>
</html>