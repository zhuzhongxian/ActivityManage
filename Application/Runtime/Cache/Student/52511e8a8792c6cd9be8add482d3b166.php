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
    <meta charset="utf-8">
    <title>Title</title>
</head>
<body>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <form role="form" action="/ActivityManage/index.php/Student/Activity/apply/" method="post"  enctype="multipart/form-data" >
                <h1>活动申请</h1>
                <div class="form-group">
                    <label for="exampleInputEmail1">活动名称</label><input  class="form-control" id="exampleInputEmail1" name="a_name"/>
                </div>
                <div class="form-group" role="form">
                    <label for="exampleInputPassword1">活动地点</label><input  class="form-control" id="exampleInputPassword1" name="a_place" />
                    <input type="hidden"  class="form-control"  value="<?php echo (session('id')); ?>" name="a_admin_id"/>
                </div>
                        <div class="form-group">
                            <label for="name">承办组织</label>
                            <select class="form-control" name="a_org_id">
                                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["org_id"]); ?>" ><?php echo ($vol["org_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                            <label for="name">活动简介</label>
                            <textarea class="form-control" rows="3" name="a_describe"></textarea>
                        </div>
                <div class="form-group">
                    <label >活动海报</label><input type="file"  name="a_img_url" id="a_img_url"/>
                    <label >提交活动申请书</label><input type="file"  name="a_application_url" id="a_application_url"/>

                </div>
                <button type="submit" class="btn btn-default">提交申请</button>
            </form>
        </div>
    </div>
</div>



</body>
</html>