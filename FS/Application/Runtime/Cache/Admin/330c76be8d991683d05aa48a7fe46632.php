<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>未来之星后台管理系统</title>
    <link rel="stylesheet" href="/FS/Public/end/css/bootstrap.css">
    <link href="/FS/Public/end/css/jquery-ui.css" rel="stylesheet">
    <link href="/FS/Public/end/css/mystyle.css" rel="stylesheet">
    <script src="/FS/Public/end/js/jquery.js"></script>
    <script src="/FS/Public/end/js/bootstrap.min.js"></script>
    <script charset="utf-8" src="/FS/Public/end/js/editor/kindeditor.js"></script>
    <script charset="utf-8" src="/FS/Public/end/js/editor/lang/zh_CN.js"></script>
    <script>
    KindEditor.ready(function(K) {
        window.editor = K.create('#editor_id');
    });
    </script>
    <style type="text/css">
    .page a,.page span{
          padding: 15px;
          border:1px solid red;position: relative;
        float: left;
        padding: 6px 12px;
        line-height: 1.42857143;
        text-decoration: none;
        color: #20bdf0;
        background-color: #ffffff;
        border: 1px solid #dddddd;
        margin-left: -1px;
    }
    .page a:hover{
          background: #DDDDDD;
    }
    .page span{
          z-index: 2;
        color: #ffffff;
        background-color: #20bdf0;
        border-color: #20bdf0;
        cursor: default;
    }
</style>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <span class="navbar-logo"> 未来之星后台管理系统</span>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right mr">
                <li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-star"></span>欢迎：Administrator</a></li>
                <li><a href="/FS/index.php/Admin/A/logout" class="navbar-brand"><span class="glyphicon glyphicon-log-out"></span>退出系统</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
    <div class="row">
        <div class=" col-md-2 sidebar">
            <div id="accordion">
                <h3><a href="#"><span class="glyphicon glyphicon-user"></span>教师管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
                <ul>
                    <li><a href="/FS/index.php/Admin/T/edit.html">修改教师</a></li>
                    <li><a href="/FS/index.php/Admin/T/lists.html">管理教师</a></li>
                </ul>
                <h3 aria-selected="true" aria-expanded="true"><a href="#"><span class="glyphicon glyphicon-file"></span>资源管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
                <ul>
                    <li><a href="/FS/index.php/Admin/R/add.html">添加资源</a></li>
                    <li><a href="/FS/index.php/Admin/R/lists.html">列表资源</a></li>
                </ul>
                <h3 aria-selected="true" aria-expanded="true"><a href="#"><span class="glyphicon glyphicon-file"></span>作业管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
                <ul>
                    <li><a href="/FS/index.php/Admin/S/add.html">添加作业</a></li>
                    <li><a href="/FS/index.php/Admin/S/lists.html">列表作业</a></li>
                </ul>
            </div>
        </div>
        
        <div class="col-md-10 col-md-offset-2 ">
            <ol class="breadcrumb">
                <li><a href="/FS/index.php/Admin/index">首页</a></li>
                <li><a href="/FS/index.php/Admin/R/lists">作业管理</a></li>
                <li class="active">作业列表</li>
            </ol>
            <div class="table-responsive">
                <h3>作业管理列表 <small>Subject List</small></h3>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table  table-striped table-hover ">
                    <tr>
                        <th width="4%">
                            <input type="checkbox" name="checkbox10" id="checkbox10">
                        </th>
                        <th width="10%">作业名称</th>
                        <th width="8%">发布人</th>
                        <th width="13%">简述</th>
                        <th width="8%">发布时间</th>
                        <th width="11%">操作</th>
                    </tr>
                    <?php if(is_array($subject)): $i = 0; $__LIST__ = $subject;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><tr>
                            <td>
                                <input type="checkbox" name="checkbox" id="checkbox">
                            </td>
                            <td><?php echo ($s["title"]); ?></td>
                            <td><?php echo ($s["publisher"]); ?></td>
                            <td><?php echo ($s["summary"]); ?></td>
                            <td><?php echo ($s["publishtime"]); ?></td>
                            <td><a href="/FS/index.php/Admin/S/edit/id/<?php echo ($s["id"]); ?>">修改</a>
                                <a href="#"></a> <a href="/FS/index.php/Admin/S/del/id/<?php echo ($s["id"]); ?>">删除</a></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
            </div>
            <div class="input-group pull-left form">
                <button type="submit" class="btn btn-danger "> 删 除</button>
            </div>
            <ul class="pagination pull-right">
            <div class="page"><?php echo ($page); ?></div>
            </ul>
        </div>
    </div>
    
        </div>
    <script src="/FS/Public/end/js/jquery-ui.js"></script>
    <script>
    $("#accordion").accordion({
        heightStyle: "content"
    });
    </script>
</body>

</html>