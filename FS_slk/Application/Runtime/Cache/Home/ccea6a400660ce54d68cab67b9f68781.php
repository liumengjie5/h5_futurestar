<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <title>未来之星-我们与你一起成长</title>
    <link rel="stylesheet" type="text/css" href="/FS/Public/front/css/common.css">
    <link rel="stylesheet" type="text/css" href="/FS/Public/front/css/modal.css">
    <link rel="stylesheet" type="text/css" href="/FS/Public/front/css/bgstretcher.css">
    <script type="text/javascript" src="/FS/Public/front/js/jquery-1.8.2.js"></script>
    <script type="text/javascript" src="/FS/Public/front/js/my.js"></script>
    <script type="text/javascript" src="/FS/Public/front/js/html5shiv.min.js"></script>
    <script type="text/javascript" src="/FS/Public/front/js/respond.min.js"></script>
    <script type="text/javascript" src="/FS/Public/front/js/bgstretcher.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#body').bgStretcher({
            images: ['/FS/Public/front/img/banner6.jpg', '/FS/Public/front/img/banner9.jpg', '/FS/Public/front/img/banner11.jpg', '/FS/Public/front/img/banner7.jpg'],
            imageWidth: 1024,
            imageHeight: 500,
            transitionEffect: 'fade',
            nextSlideDelay:'8000'
        });
    });
    </script>
</head>

<body>
    <div class="global-nav-inner">
        <div class="global-nav-container clearfloat">
            <ul class="nav js-global-actions" role="navigation" id="global-actions">
                <li id="global-nav-home" class="home">
                    <a class="js-nav js-tooltip js-dynamic-tooltip" href="/FS/index.php/Home/Index/index.html">
                        <span><img src="/FS/Public/front/img/header-logo.png"></span>
                    </a>
                </li>
                <li id="global-nav-about" class="about">
                    <a class="js-tooltip js-dynamic-tooltip" href="/about" target="_blank">
                        <span class="text">关于我们</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div id="body"></div>
    <div id="modal-overlay">
    <div class="loginPop-box loginBg">
        <p>
            <a href="index.html" class="index-close"></a>
        </p>
        <div class="lop-inner">
            <div class="loginPop-logo"><img src="/FS/Public/front/img/logo.png" width="88px" height="88px"></div>
            <h1>登录</h1>
            <form id="FormSubmitInit" class="JS-formSubmit" method="post" action="/FS/index.php/Home/Index/login">
                <!-- <input type="hidden" name="returnURL" value=""> -->
                <div class="lop-content">
                    <div class="c-text">
                        <span class="login-icon icon-5"></span>
                        <input type="text" value="" name="tel" tabindex="1" class="JS-inputEvent" id="index_login_username" placeholder="手机号">
                        <div class="errorTips"></div>
                    </div>
                    <div class="c-text">
                        <span class="login-icon icon-4"></span>
                        <input type="password" id="index_login_password" name="password" class="JS-inputEvent" tabindex="2" placeholder="输入密码">
                        <div class="errorTips"></div>
                    </div>
                    <div class="c-text">
                        <a href="javascript:void(0);" class="info active JS-rememberMe-btn">
                            <!-- <input name="_spring_security_remember_me" type="checkbox" checked="checked" style="display: none;"> -->
                            <span class="login-icon icon-6"></span>记住我
                        </a>
                        <a href="javascript:void(0)" target="_blank" class="info">忘记密码 ?</a><span class="line"> | </span><a href="res-stu.html" class="info JS-register-main">注册</a>
                    </div>
                </div>
                <div class="loginPop-footer">
                    <input type="submit" value="登录" class="login-btn" id="_a_loginForm" name="loginForm" tabindex="3">
                </div>
            </form>
        </div>
        <script type="text/javascript">
        $(document).ready(function() {
            var clicked = false;
            $(".icon-6").on('click', learnOneself);
            $("#index_login_username").on('blur', checktelephone);

            function checkPhone() {}
            // 记住我图片变化
            function learnOneself() {
                console.log("a");
                if (clicked == false) {
                    $(this).attr('class', 'login-icon icon-7');
                    clicked = true;
                } else {
                    $(this).attr('class', 'login-icon icon-6');
                    clicked = false;
                }
            }

            function checktelephone() { //判断手机号不符合要求，如果为空给出错误提示  
                if($(this).val()==''){
                    $(this).next(".errorTips").html("请输入手机号");
                }else{
                    var telPattern = /^(((1[3456789][0-9]{1})|(15[0-9]{1}))+\d{8})$/; //验证手机号
                    if(!telPattern.test($(this).val())){
                        $(this).next(".errorTips").html("手机号填写有误");
                        return false;
                    }else{
                        $(this).next(".errorTips").html("");
                    }
                }
            }
        });
        </script>
    </div>
</div>
</body>

</html>