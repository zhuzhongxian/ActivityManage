<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - SB Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="/Public/Admin/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/Public/Admin/css/sb-admin.css" rel="stylesheet">
    <link href="/Public/Admin/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/Public/Admin/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="/Public/Admin/css/morris-0.4.3.min.css">

    <style type="text/css">
    *{ padding: 0; margin: 0; }
    body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 6px; }
    .message{width: 400px;height: 150px;margin:auto;border:1px solid #1B8F24;margin-top: 30px;}
    .head{width: 100%;height: 30px;background: rgb(222,245,194);text-align: center;padding-top: 5px;}
    .content{height: 120px;width: 100%;}
    .success ,.error{text-align: center;margin-top: 30px;}
    .jump{text-align: center;margin-top: 20px;}
    </style>

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
          <a class="navbar-brand" href="index.html">系主任</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="<?php echo U('Index/index');?>"><i class="fa fa-dashboard"></i> 系主任管理</a></li>
            <li><a href="<?php echo U('Title/title');?>"><i class="fa fa-edit"></i>论文题目</a></li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 学生管理<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo U('Student/auditingtitle');?>"><i class="fa fa-sign-out"></i>审核题目</a></li>
                <li><a href="<?php echo U('Student/download');?>"><i class="fa fa-book fa-fw"></i>资料下载</a></li>
                <li><a href="<?php echo U('Student/look');?>"><i class="fa fa-eye"></i>查看成绩及状态</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> 导出分组 <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo U('Group/opentopic');?>"><i class="fa fa-sign-out"></i>导出开题答辩分组</a></li>
                <li><a href="<?php echo U('Group/selecttopic');?>"><i class="fa fa-sign-out"></i>导出选题答辩分组</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 用户名<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo U('User/revise');?>"><i class="fa fa-gear"></i> 修改密码</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-power-off"></i> 退出 </a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
  
  <div class="message">
    <div class="head"><span>Ace Admin提示信息:</span></div>
    <div class="content">
    <?php if(isset($message)) {?>
    <p class="success">:) <?php echo($message); ?></p>
    <?php }else{?>
    <p class="error">:( <?php echo($error); ?></p>
    <?php }?>
    <p class="detail"></p>
    <p class="jump">
    <a id="href" href="<?php echo($jumpUrl); ?>">如果你的浏览器没有自动跳转，请点击这里...</a>
    <br />
    等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
    </p>
    </div>
    </div>
   
    <script type="text/javascript">
    (function(){
    var wait = document.getElementById('wait'),href = document.getElementById('href').href;
    var interval = setInterval(function(){
    var time = --wait.innerHTML;
    if(time <= 0) {
    location.href = href;
    clearInterval(interval);
    };
    }, 1000);
    })();
    </script>
 <!-- JavaScript -->
    <script src="/Public/Admin/js/jquery-1.10.2.js"></script>
    <script src="/Public/Admin/js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->    <script src="/Public/Admin/js/raphael-min.js"></script>
    <script src="/Public/Admin/js/morris-0.4.3.min.js"></script>
    <script src="/Public/Admin/js/morris/chart-data-morris.js"></script>
    <script src="/Public/Admin/js/tablesorter/jquery.tablesorter.js"></script>
    <script src="/Public/Admin/js/tablesorter/tables.js"></script>
     

  </body>
</html>