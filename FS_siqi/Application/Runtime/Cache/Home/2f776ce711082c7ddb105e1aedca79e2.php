<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>老师主页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/FS/Public/front/teacher/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/FS/Public/front/teacher/css/index.css">
    <script src="/FS/Public/front/teacher/js/jquery.js"></script>
    <script src="/FS/Public/front/teacher/js/bootstrap.min.js"></script>
</head>

<body style="background-color:RGB(189,235,141);overflow-x:hidden;">
<!--导航栏-->
<div class="row clearfix" id="header">
    <div class="col-md-3 column" style="margin-top:8px;padding-left:145px">
        <img alt="35x35" src="/FS/Public/front/teacher/images/logo.png" />
    </div>
    <div class="col-md-9 column">
        <ul id="nav"  style="margin-top:8px;margin-left:445px">
            <li><a href="/FS/index.php/Home/Teacher/guestbook.html"><img src="/FS/Public/front/teacher/images/email.png" /></a></li>
            <li><a href="/FS/index.php/Home/Teacher/guestbook.html">消息</a></li>
            <li style="padding-top:2px"><img src="/FS/Public/front/teacher/images/circle.png" class="img-circle" /></li>
            <li style="padding:0 0 0 3px;margin:0 ">
            <li class="dropdown" >
                <a href="#" id="navbarDrop1" class="dropdown-toggle" data-toggle="dropdown" style="width:100px;border:solid 1px RGB(187,187,187); border-radius:4px;color:black;float:left;"><span style="padding:0 30px;padding-right:50px">1</span><span class="caret"></span></a>
                <ul class="dropdown-menu" style="min-width:0px;">
                    <li><a href="/FS/index.php/Home/Teacher/personCenter.html" >个人资料</a></li>
                    <li><a href="/FS/index.php/Home/Teacher/update.html" >修改资料</a></li>
                    <li><a href="#" >退出</a></li>
                </ul>
            </li>
            </li>
        </ul>
    </div>
</div>

<!--内容-->
 <div class="row clearfix" id="content">
        <div class="col-md-3 column" style="padding-left: 145px;padding-top:25px">
            <div class="row clearfix" style="background-color: white; width:146px; height:110px;">
                <div class="col-md-6 column" style="margin-top:2px; padding-top:15px">
                <img src="/FS/Public/front/teacher/images/1-2.png" class="img-rounded" />
                </div>
                <div class="col-md-6 column" style="font-size:12px; margin-top:2px">
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <p style="padding:15px 0 0 0;margin:0;float:left"><a href="personCenter.html">孙老师</a></p>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <a href="rank.html">
                            <div class="progress" style="height:8px; width:16px; float:right;padding:0;margin:0;margin-top:5px">
                                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                    <span class="sr-only">50%</span>
                                </div>
                            </div>
                            <p style="padding:0;margin:0">LVO</p>
                            </a>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <a href="#"><p style="padding:0;margin:0;float:left">鲜花:0</p></a>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <input type="button" style="background-color:white; border:solid 1px gray; border-radius:8px" value="证">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 column" style="padding:0">
                    <div class="panel-group" id="panel-493390">
                        <ul class="list-group">
                            <li>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="panel-title" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-682792"><a href="/FS/index.php/Home/Teacher/index.html">首页</a></a>
                                </div>
                            </div>
                            </li>
                            <li >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-749900">英语作业<span class="glyphicon glyphicon-chevron-down" style="color:white;padding-top:4px;padding-left:16px"></span></a>
                                </div>
                                <div id="panel-element-749900" class="panel-collapse collapse">
                                    <div class="panel-body" style="padding:0">
                                        <ul class="homeworkList_e" style="padding:0">
                                            <li class="list-group-item" style="margin-left:0"><a href="/FS/index.php/Home/Teacher/assignment.html">布置作业</a></li>
                                            <li class="list-group-item" style="margin-left:0"><a href="/FS/index.php/Home/Teacher/workpaper.html">作业情况</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            </li>
                            <li>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="panel-title" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-682792"><a href="/FS/index.php/Home/Teacher/myClass.html">我的班级</a></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="panel-title" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-682792"><a href="/FS/index.php/Home/Teacher/resource.html">资源箱</a></a>
                                    </div>
                                </div></li><li>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="panel-title" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-682792"><a href="/FS/index.php/Home/Teacher/guestbook.html">留言板</a></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--今日任务-->
        <div class="col-md-6 column" style="height:1200px;padding-left:30px">
            <h4 style="padding-top: 20px; font-weight:bold;">今日任务</h4>
            <div class="row clearfix">
                <div class="col-md-12 column" style="background-color: white; height:200px; border:solid 5px RGB(43,175,43); border-radius:10px">
                    <h4 style="padding-left:15px">
                       任务一 &nbsp;&nbsp;给学生布置作业
                    </h4>
                    <div class="col-md-4 column">
                        <ul style="list-style-type:none;padding-left:0">
                            <li><p>李小明</p></li>
                        </ul>
                    </div>
                    <div class="col-md-4 column">
                        <ul style="list-style-type:none;padding-left:25px">
                            <li><p style="padding-left:20px">数学1</p></li>
                        </ul>
                    </div>
                    <div class="col-md-4 column">
                      <a href="/FS/index.php/Home/Teacher/workpaper.html"><input type="button" style="background:RGB(156,204,101); color:white;margin-left:30px; padding:4px 20px 4px 20px; font-size:10px; border-radius:8px; border:solid 1px gray" value="查看" ></a>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 column" style="background-color: white; height:200px; border:solid 5px RGB(43,175,43); border-radius:10px; margin-top:5px">
                    <h4 style="padding-left:15px">
                       任务二 &nbsp;&nbsp;让小朋友来到这里吧
                    </h4>
                    <img style="padding-left:30px" alt="160x100" src="/FS/Public/front/teacher/images/1-4.png" />
                </div>
            </div>
            <div class="row clearfix">
                <h4 style="color:red; margin-top:10px">我的动态</h4>
                <div class="col-md-12 column" style="background-color: white; height:200px; border:solid 3px RGB(187,187,187); border-radius:10px">
                    <a href="guestbook.html">
                    <div class="bs-example bs-example-popover">
                    <div class="popover right">
                        <div class="arrow"></div>
                        <div class="popover-content">
                            <p>快告诉你的学生你的手机号</p>
                            <p>吧，让他们来加入班级中</p>
                        </div>
                    </div>
                    </div>
                    <img style="padding-top:10px" alt="70x70" src="/FS/Public/front/teacher/images/1-3.png" />
                    </a>
                </div>
            </div>
            <div class="row clearfix">
                <h4 style="color:#46b8da; margin-top:10px">认证</h4>
                <div class="col-md-12 column" style="background-color: white; height:200px; border:solid 3px RGB(187,187,187); border-radius:10px">
                    <h4 style="color:#46b8da; font-size:15px; padding:20px 0 20px 5px">请上传你的相关证件经工作人员审核即可通过认证</h4>
                    <a href="/FS/index.php/Home/Teacher/upload.html"><button type="button" class="btn btn-lg" style="background-color:RGB(43,175,43); color:white; float:right; margin-right:25px">点击上传</button></a>
                    <ol>
                        <li style="color:red">教师证</li>
                        <li style="color:orange">职业证</li>
                    </ol>
                </div>
            </div>
        </div>
        <!--完成作业-->
        <div class="col-md-3 column" id="homework">
            <p style="padding:35px 0 0 15px">完成作业</p>
            <div class="row clearfix">
                <div class="col-md-6 column">
                    <a href="#"><img alt="45x45" src="/FS/Public/front/teacher/images/1-1.png" /></a>
                    <a href="#"><p>名字</p></a>
                </div>
                <div class="col-md-6 column">
                    <a href="#"><img alt="45x45" src="/FS/Public/front/teacher/images/1-1.png" /></a>
                    <a href="#"><p>名字</p></a>
                </div>
                <div class="col-md-6 column">
                    <a href="#"><img alt="45x45" src="/FS/Public/front/teacher/images/1-1.png" /></a>
                    <a href="#"><p>名字</p></a>
                </div>
                <div class="col-md-6 column">
                    <a href="#"><img alt="45x45" src="/FS/Public/front/teacher/images/1-1.png" /></a>
                    <a href="#"><p>名字</p></a>
                </div>
                <div class="col-md-6 column">
                    <a href="#"><img alt="45x45" src="/FS/Public/front/teacher/images/1-1.png" /></a>
                    <a href="#"><p>名字</p></a>
                </div>
                <div class="col-md-6 column">
                    <a href="#"><img alt="45x45" src="/FS/Public/front/teacher/images/1-1.png" /></a>
                    <a href="#"><p>名字</p></a>
                </div>
            </div>
        </div>
</div>

<!--footer-->
<div class="row clearfix" id="footer">
    <div class="col-md-12 column" style="padding-top:15px">
        <p>Copyright @ 2011-2016 futurestar Corporation. All Rights Reserved.</p>
    </div>
    <div class="col-md-12 column">
        <div class="col-md-3 column">
        </div>
        <div class="col-md-5 column">
            <ul class="footer_nav">
                <li style="padding-left:45px">后台管理</li>
                <li>关于我们</li>
                <li>各界声音</li>
                <li>加入我们</li>
            </ul>
        </div>
        <div class="col-md-4 column">
        </div>
    </div>
</div>

</body>
</html>