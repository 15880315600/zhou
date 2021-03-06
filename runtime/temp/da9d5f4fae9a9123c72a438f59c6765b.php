<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:92:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\public/../application/index\view\user\registered.html";i:1575454252;s:81:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\header2.html";i:1575454218;s:80:"D:\phpStudy\PHPTutorial\WWW\zhouzhuang\application\index\view\layout\footer.html";i:1575614033;}*/ ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--适应手机窗口大小-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, use-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>周庄旅游官方网站</title>
    <link rel="shortcut icon" href="/static/index/static/images/favicon.png">


    <link rel="stylesheet" href="/static/index/static/lib/bootstrap.css">
    <link rel="stylesheet" href="/static/index/static/css/tail.css">
    <link rel="stylesheet" href="/static/index/static/css/initial.css">
    <link rel="stylesheet" href="/static/index/static/css/tickets.css">
    <link rel="stylesheet" href="/static/index/static/css/booking.css">
    <link rel="stylesheet" href="/static/index/static/css/login.css">
    <link rel="stylesheet" href="/static/index/static/css/registered.css">
    <link rel="stylesheet" href="/static/index/static/css/personal.css">
    <link rel="stylesheet" href="/static/index/static/css/bookedit.css">


</head>

<body>
    <!------------------------ 顶部  -->
    <header>
        <div class="hd-c center">
            <div class="hd-logo">
                <a href="<?php echo url('Index/index'); ?>"></a>
            </div>
            <ul class="hd-nav">
                <li class="a_hover">
                    <a href="<?php echo url('Index/index'); ?>">首页<span>Home</span></a>
                </li>
                <li class="a_hover">
                    <a href="<?php echo url('General/general'); ?>">概况<span>Introduction</span></a>

                </li class="a_hover">
                <li class="a_hover">
                    <a href="<?php echo url('Navigation/live'); ?>">住宿<span>Lodging</span></a>

                </li>
                <li class="a_hover">
                    <a href="<?php echo url('Navigation/food'); ?>">美食<span>Delicious</span></a>

                </li>
                <li class="a_hover">
                    <a href="<?php echo url('Navigation/scenery'); ?>">景点<span>Scenic spot</span></a>

                </li>
                <li class="a_hover">
                    <a href="<?php echo url('Navigation/entertainment'); ?>">娱乐<span>Recreation</span></a>

                </li>
                <li class="a_hover">
                    <a href="<?php echo url('Navigation/ceremony'); ?>">周庄有礼<span>Specialty</span></a>

                </li>

            </ul>

            <div class="hd-gz">
                <a href="" target="_blank">EN</a>
                <a href="<?php echo url('Navigation/tickets'); ?>">即刻预订</a>
            </div>

            <div class="search">
                <form action="" method="get" class="ser_frame">
                    <input type="sumbit" id="ser_btn">
                    <input type="text" name="word" id="ser_word" placeholder="请输入搜索关键词...">
                </form>
            </div>
        </div>
    </header>

<!--------------------------- 版心 -->
<div class="headerbgd"></div>
<div class="main" style="height: 100%;">
    <table></table>
    <div class="zhuce_form">
        <form id="registeredform" action="<?php echo url('registered'); ?>" method="post">
            <table></table>
            <p>注册</p>
            <p>已有账号？&nbsp;&nbsp;<a href="<?php echo url('User/login'); ?>">去登录</a></p>
            <p>用户名<input type="text" name="user_name" id="name" placeholder="请输入4-16位字符（字母，数字，下划线）"></p>
            <p>密码<input type="password" name="user_password" id="password" placeholder="最少6位，包括至少1个小写字母，1个数字"></p>
            <p>确认密码<input type="password" name="user_password2" id="password2"></p>
            <p>邮箱<input type="email" name="user_email" id="email"></p>
            <p>验证码</br><input type="text" name="ca_code" id="yanzhengma"><a href="javascript:;" id="test" onclick="getemailyzm()">获取邮箱验证码</a></p>
            <div>
                <a href="javascript:zhuce();">立即注册</a>
            </div>
        </form>
    </div>
</div>

</div>
<!--------------------------- 尾部 -->

<!--------------------------- 尾部 -->
<a href="javascript:;" id="up" style="display: none;">
    <img src="/static/index/static/images/index/floatbtn2.png" alt="">
</a>
<footer>
    <div class="footer_middle center">
        <div class="ft_middle_top">
            <dl>
                <dt><a href="<?php echo url('General/general'); ?>">概况</a></dt>
                <dd><a href="<?php echo url('General/introduction'); ?>">周庄简介</a></dd>
                <dd><a href="<?php echo url('General/ancienttown'); ?>">古镇旅游</a></dd>
                <dd><a href="<?php echo url('General/wholedomain'); ?>">全域旅游</a></dd>
            </dl>
            <dl>
                <dt><a href="<?php echo url('Navigation/live'); ?>">住宿</a></dt>
                <dd><a href="<?php echo url('Navigation/live'); ?>#a1">度假酒店</a></dd>
                <dd><a href="<?php echo url('Navigation/live'); ?>#a2">精品客栈</a></dd>
                <dd><a href="<?php echo url('Navigation/live'); ?>#a3">特色乡居</a></dd>

            </dl>
            <dl>
                <dt><a href="<?php echo url('Navigation/food'); ?>">美食</a></dt>
                <dd><a href="<?php echo url('Navigation/food'); ?>#a1">名店推荐</a></dd>
                <dd><a href="<?php echo url('Navigation/food'); ?>#a2">美滋美味</a></dd>
            </dl>
            <dl>
                <dt><a href="<?php echo url('Navigation/scenery'); ?>">景点</a></dt>
                <dd><a href="<?php echo url('Navigation/scenery'); ?>#one">经典必游</a></dd>
                <dd><a href="<?php echo url('Navigation/scenery'); ?>#a2">原住民风体验点</a></dd>
                <dd><a href="<?php echo url('Navigation/scenery'); ?>#a3">主题街区</a></dd>
                <dd><a href="<?php echo url('Navigation/scenery'); ?>#a4">文化艺栈</a></dd>
            </dl>
            <dl>
                <dt><a href="<?php echo url('Navigation/entertainment'); ?>">娱乐</a></dt>
                <dd><a href="<?php echo url('Navigation/entertainment'); ?>#a1">精彩演出</a></dd>
                <dd><a href="<?php echo url('Navigation/entertainment'); ?>#a2">酒吧咖吧茶吧</a></dd>
            </dl>
            <dl>
                <dt><a href="<?php echo url('Navigation/ceremony'); ?>">周庄有礼</a></dt>
                <dd><a href="<?php echo url('Navigation/ceremony'); ?>#a1">手工艺品</a></dd>
                <dd><a href="<?php echo url('Navigation/ceremony'); ?>#a2">文化制品</a></dd>
                <dd><a href="<?php echo url('Navigation/ceremony'); ?>#a3">风味产品</a></dd>
            </dl>
        </div>
        <div class="ft_middle_bottom">
            <a href="">
                <img src="/static/index/static/images/index/bottom_logo.png" alt="">
            </a>
        </div>
    </div>
    <div class="ft_state center">

        <div class="ft_state_link">
            <a href="">版权声明</a> |
            <a href="">联系我们</a> |
            <a href="">友情链接</a> |
            <a href="">网络预订</a> |
            <a href="" class="ft_state_link_s">
                <span></span> 周庄微信服务号
            </a> |
            <a href="">周庄新浪微博</a>
        </div>
        <div class="ft_state_copyright">
            <span>Copyright © 2019  仅供学习交流，不作商业用途　网站建设:今日小组&nbsp&nbsp&nbsp&nbsp&nbsp</span>
            <a href="">ICP备案号xxxxxxxx号</a>
            <span id="ft_s_icon">
                    <a href="">
                        <img src="/static/index/static/images/index/index_42.gif" alt="">
                    </a>
                </span>
        </div>
    </div>
</footer>
<script src="/static/index/static/js/jquery-1.8.3.min.js"></script>
<script>
    function zhuce() {
        var name = document.getElementById("name").value;
        var password = document.getElementById("password").value;
        var password2 = document.getElementById("password2").value;
        var email = document.getElementById("email").value;
        var yanzhengma = document.getElementById("yanzhengma").value;

        var namereg = /^[a-zA-Z0-9_]{4,16}$/; //4-16位字母，数字，下划线
        var passwordreg = /^.*(?=.{6,})(?=.*\d)(?=.*[a-z]).*$/; //最少6位，包括至少1个小写字母，1个数字
        var emailreg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; //email正则

        if (name === null || name === "" || name === undefined) {
            alert("请输入用户名！");
            return;
        } else if (!namereg.test(name)) {
            alert("请输入正确格式的用户名！");
            return;
        }

        if (password === null || password === "" || password === undefined) {
            alert("请输入密码！");
            return;
        } else if (!passwordreg.test(password)) {
            alert("请输入正确格式的密码！");
            return;
        }
        if (password2 === null || password2 === "" || password2 === undefined) {
            alert("请再次输入密码！");
            return;
        } else if (password2 != password) {
            alert("两次密码输入不一致！");
            return;
        }

        if (email === null || email === "" || email === undefined) {
            alert("请输入邮箱！");
            return;
        } else if (!emailreg.test(email)) {
            alert("请输入正确的邮箱地址！");
        }

        if (yanzhengma === null || yanzhengma === "" || yanzhengma === undefined) {
            alert("请输入验证码！");
            return;
        }
        registeredform.submit(); //执行提交命令
    };
    var weiTime = 60;

    function getemailyzm() {

        var emailv = document.getElementById("email").value;
        var emailreg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; //email正则
        if (emailv === null || emailv === "" || emailv === undefined) {
            alert("请输入邮箱！");
            return;
        } else if (!emailreg.test(emailv)) {
            alert("请输入正确的邮箱地址！");
        }
        $.ajax({
            type: 'post',
            url: "<?php echo url('User/getemail'); ?>",
            data: {
                'email': emailv
            },
            dataType: 'json',

            success: function(res) {

                if (res.status == 1) {
                    alert('发送成功！');

                } else {
                    alert('发送失败！');
                }

            }

        });

        time();

    }

    function time() {
        var geta = document.getElementById("test");
        if (weiTime == 0) {
            // geta.disabled = false;
            // geta.onclick = "getemailyzm()";
            geta.style.pointerEvents = "";
            geta.innerHTML = "获取邮箱验证码";
            weiTime = 60;

        } else {
            // geta.disabled = ture;
            geta.style.pointerEvents = "none";
            geta.innerHTML = "重新发送" + weiTime;
            // geta.onclick = "";
            weiTime--;
            setTimeout(function() {
                time()
            }, 1000)
        }
    }
</script>

</body>

</html>