<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>指导老师页面</title>

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

      <!-- 侧边栏 -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- 品牌和切换到更好的移动显示分组 -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">切换导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">指导老师页面</a>
        </div>

        <!-- 收集的导航链接，和其他形式的内容，锁定 -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">

            <li class="active"><a href="/paper/index.php/Teacher/Examine/lst"><i class="fa fa-dashboard"></i> 审查答辩题目</a></li>
            <li><a href="/paper/index.php/Teacher/Index/index"><i class="fa fa-file"></i> 下载指导学生开题PPT</a></li>
            <li><a href="/paper/index.php/Teacher/Presentation/lst"><i class="fa fa-bar-chart-o"></i> 下载指导学生开题报告</a></li>
            <li><a href="/paper/index.php/Teacher/Defense/lst"><i class="fa fa-table"></i> 下载指导学生答辩PPT</a></li>
            <li><a href="/paper/index.php/Teacher/Paper/lst"><i class="fa fa-edit"></i> 下载指导学生论文</a></li>
            <li><a href="/paper/index.php/Teacher/ResultsIndex/lst"><i class="fa fa-desktop"></i> 上传开题成绩</a></li>
            <li><a href="/paper/index.php/Teacher/ResultsDefense/lst"><i class="fa fa-font"></i> 上传答辩成绩</a></li>
            <li><a href="/paper/index.php/Teacher/Results/lst"><i class="fa fa-wrench"></i> 查看指导学生状态及成绩</a></li>
           
            
          </ul>  
           
           <ul class="nav navbar-nav navbar-right navbar-user">
            
            
              <li><a href="#"><i class="fa fa-user"></i> 欢迎您，<?php echo session('username');?></a></li>
                <li><a href="/paper/index.php/Teacher/Admin/edit/id/<?php echo session('id');?>"><i class="fa fa-gear"></i> 修改密码</a></li>
                <li><a href="/paper/index.php/Teacher/Admin/logout"><i class="fa fa-power-off"></i> 退出</a></li>
           
          </ul>
        </div>
        <!-- /.导航栏折叠 -->
      </nav>

		<div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
      <div id="page-wrapper">

        <div class="row">
          
           <div class="col-lg-12">
            <h1>下载<small>指导学生论文</small> </h1>
            <ol class="breadcrumb">
              <li class="active"></li>
            </ol>
            
          </div>
        </div><!-- /.行  -->

        
          
        </div><!-- /.row -->

        

        
          
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-money"></i> 指导学生论文</h3>
              </div>
              <div class="panel-body">

                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th>学号 </th>
                        <th>姓名 </th>
                        
                         <th>操作</th>
                      </tr>
                      
                    </thead>
                    <tbody>
                      <tbody>
                         <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($vo["id"]); ?></td>
                        <td><?php echo ($vo["name"]); ?></td>
                        
                        <td><div class="button-group"> <a class="button border-main" href="/paper/<?php echo ($vo["paper"]); ?>"> 下载</a></div></td>
                      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                    </tbody>
                  </table>
                </div>
                
              </div>
            </div>
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="/paper/Public/js/jquery-1.10.2.js"></script>
    <script src="/paper/Public/js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->    <script src="/paper/Public/js/raphael-min.js"></script>
    <script src="/paper/Public/js/morris-0.4.3.min.js"></script>
    <script src="/paper/Public/js/morris/chart-data-morris.js"></script>
    <script src="/paper/Public/js/tablesorter/jquery.tablesorter.js"></script>
    <script src="/paper/Public/js/tablesorter/tables.js"></script>

  </body>
</html>