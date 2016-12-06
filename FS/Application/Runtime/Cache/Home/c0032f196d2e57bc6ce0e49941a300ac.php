<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>家长空间</title>
    <link rel="stylesheet" href="/FS/Public/front/student/css/bootstrap.min.css">
    <link href="/FS/Public/front/student/css/nav.css" rel="stylesheet" type="text/css" />
    <link href="/FS/Public/front/student/css/parentspace.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!--导航栏部分-->
    <div class="col-md-12 col-lg-8" id="nav">
        <ul>
            <li><a href="index.html">首页</a></li>
            <li><a href="chinese.html">学习中心</a></li>
            <li><a href="pk.html">竞技场</a></li>
            <li><a href="classspace.html">班级天地</a></li>
            <li><a href="parentspace.html">家长空间</a></li>
            <li><a href="gift.html">奖品</a></li>
            <li>
                <a href="#"><img src="/FS/Public/front/student/images/email.png" /></a>
            </li>
            <li><img src="/FS/Public/front/student/images/headpic.jpg" class="img-circle" />
                <!-- <ul>
                 <li><a href="#">个人信息</a></li>
                 <li><a href="#">上传</a></li>
                 <li><a href="#">退出</a></li>
             </ul>-->
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div class="row clearfix">
                    <div class="col-md-2 column">
                    </div>
                </div>
                <!--内容部分-->
                <div class="container">
                    <div class="row clearfix">
                        <div id="parenthead"><img src="/FS/Public/front/student/images/parenthead.png" class="img-circle" /></div>
                        <div id="name">
                            <h1>李晓</h1> 学号：12345678&nbsp;&nbsp;&nbsp;&nbsp;
                            <span>学校：某某某幼儿园</span>
                        </div>
                        <p>有什么心里话要告诉老师呢</p>
                        <!--<div id="chat">-->
                        <!--</div>-->
                        <div id="send">
                            <div id="seriesline">
                                <textarea type="text" style="width:1020px;height:230px"></textarea>
                            </div>
                            <div id="left">
                                <img src="/FS/Public/front/student/images/face.jpg" />&nbsp;&nbsp;表情<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/FS/Public/front/student/images/pic.jpg" />&nbsp;&nbsp;图片</span>
                            </div>
                            <div id="mid">
                                <div id="sendfor">
                                    <li class="dropdown">发送给：<a href="#" id="navbarDrop4" class="dropdown-toggle" data-toggle="dropdown" style="border:solid 1px RGB(187,187,187);width:70px;background-color:white; border-radius:4px;color:black;float:right;margin-right:356px"><span style="padding:0 15px;">&nbsp;</span><span class="caret"></span></a>
                                        <ul class="dropdown-menu" style="min-width:0px;">
                                            <li>
                                                <a href="#one"> </a>
                                            </li>
                                            <li><a href="#two">男</a></li>
                                            <li><a href="#three">女</a></li>
                                        </ul>
                                        <!--按钮-->
                                </div>
                            </div>
                            <div id="right">
                                <button type="button" class="btn btn-warning">发送</button>
                            </div>
                        </div>
                        <div id="p2">
                            <p>和老师的聊天记录全在这里啦</p>
                        </div>
                        ·
                        <div id="message">
                            <div id="jp-container" class="jp-container">
                                <div class="talk_recordboxme">
                                    <div class="user"><img src="/FS/Public/front/student/images/15.jpg" /></div>
                                    <div class="talk_recordtextbg">&nbsp;</div>
                                    <div class="talk_recordtext">
                                        <h3>你好，我是李晓同学的家长，想了解一下孩子在学校学习情况</h3>
                                        <span class="talk_time">2016-12-01 15:06</span>
                                    </div>
                                </div>
                                <div class="talk_recordbox">
                                    <div class="user"><img src="/FS/Public/front/student/images/14.jpg" /></div>
                                    <div class="talk_recordtextbg">&nbsp;</div>
                                    <div class="talk_recordtext">
                                        <h3>好的</h3>
                                        <span class="talk_time">2016-12-01 15:06</span>
                                    </div>
                                </div>
                                <div class="talk_recordboxme">
                                    <div class="user"><img src="/FS/Public/front/student/images/15.jpg" /></div>
                                    <div class="talk_recordtextbg">&nbsp;</div>
                                    <div class="talk_recordtext">
                                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </h3>
                                        <span class="talk_time">2016-12-01 15:06</span>
                                    </div>
                                </div>
                                <div class="talk_recordbox">
                                    <div class="user"><img src="/FS/Public/front/student/images/14.jpg" /></div>
                                    <div class="talk_recordtextbg">&nbsp;</div>
                                    <div class="talk_recordtext">
                                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </h3>
                                        <span class="talk_time">2016-12-01 15:06</span>
                                    </div>
                                </div>
                            </div>
                            <!--<img src="/FS/Public/front/student/images/parenthead.png" class="img-circle"/>-->
                            <!--<div id="chatwindow"><ul><li>聊天气泡</li></ul></div>-->
                            <!-- <img src="/FS/Public/front/student/images/chatcontent.png" /> -->
                            <div id="page">
                                <ul class="pagination">
                                    <li>
                                        <a href="#">&gt;</a>
                                    </li>
                                    <li>
                                        <a href="#">5</a>
                                    </li>
                                    <li>
                                        <a href="#">4</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">&lt;</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--家长任务模块-->
                        <div id="spect">
                            <p>&nbsp;家长完成任务宝宝拿奖励啦~~~</p>
                            <p><img src="/FS/Public/front/student/images/heartspect.png" /></p>
                        </div>
                        <!--二维码模块-->
                        <div id="write">
                            <p>详情扫描下方二维码填写心愿~~</p>
                            <img src="/FS/Public/front/student/images/code.jpg" />
                        </div>
                    </div>
                </div>
                <!--chatwindow的css样式-->
            </div>
        </div>
    </div>
    <!--页脚-->
    <div class="footer">
        <ul>
            <li>Copyright © 2011-2016 futurestar Corporation. All Rights Reserved.</li>
            <div>
                <li id="footerli">
                    <a href="#">后台管理</a>
                    <a href="#">关于我们</a>
                    <a href="#">各界声音</a>
                    <a href="#">加入我们</a>
                </li>
            </div>
        </ul>
    </div>
</body>

</html>