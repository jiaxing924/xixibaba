<?php
session_start();
require_once './database.php';
@$username = $_SESSION['user_name'];
$my_db = new database();

$result_course = $my_db->database_get("select id,name,time,play_count,approve,disapprove,type from course limit 4");

$html_A = <<<HTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>茜茜爸爸儿童家庭学堂课程中心</title>
<link href="css/whir_common.css" rel="stylesheet" type="text/css" />
<link href="css/whir_home.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="script/jquery1.42.min.js"></script>
<script type="text/javascript" src="script/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="script/index_solid.js"></script>
<script type="text/javascript" src="script/column.js"></script>

<!--[if IE 6]>
<script type="text/javascript" src="script/iepng.js"></script>
<script type="text/javascript">
EvPNG.fix('img,.content,.svc-payment,.svc-gathering,.svc-weg,.svc-tx,.svc-credit,.svc-aa,.svc-donate,.svc-mobile,.svc-escore,.svc-rent,.svc-cashgift,.con,.aoff,'); </script>
<![endif]-->
<script language="javascript" type="text/javascript">
        window.moveTo(-4,-4);
        window.resizeTo(screen.availWidth,screen.availHeight);
    </script>
</head>
<body>
<!--头部-->
<div class="head">
<div class="headm">
<!--登陆后显示会员-->
  <script>
    function logout(){
      if (confirm("确认退出？")){
        top.location = "logout.php";
      }
      return false;
    }
  </script>
<div class="member"><div class="huiyuan"><ul><li class="hy1"><a href="#" onclick="logout();">注销</a></li><li class="hy2"><a href="javascript:void(0);" onclick="showA();">注册</a></li></ul>		  				  <!--注册登录隐藏--->
	  <div id="pop" class="pop" style="display:none">
<div class="pop_head"><a href="javascript:void(0);" onclick="hideA()">关闭</a></div>
<div class="pop_body">
<h1>用户注册</h1>
<div class="zhuce">
  <form method="get" action="register.php" name="form1">
    <input type="text" class="inputl" id="register_email" name="register_email" value="请输入真实邮箱" onFocus="this.value='';" onBlur="if(this.value==''){this.value='请输入真实邮箱';}" />
    <input type="text" class="inputr" id="register_username" name="register_username" value="请输入用户名" onFocus="this.value='';" onBlur="if(this.value==''){this.value='请输入用户名';}" />
    <input type="password" class="inputb" id="register__password" name="register_password"value="请输入密码" onFocus="this.value='';" onBlur="if(this.value==''){this.value='请输入密码';}" />
    <div class="dlk"><a href="#" class="regist" onclick="submit()">注册</a><a href="index.php" class="login">返回登录</a></div>
  </form>
</div>
</div>
</div> </div></div>

<script>
  function submit() {
    document.form1.submit();
  }
  </script>
<!--快捷导航-->
<div class="kjnav">
<ul>
  <!--添加进收藏夹功能-->
  <script>
  function addToFavorite(sTitle,sURL)
  {
    try
    {
      window.external.addFavorite(sURL, sTitle);
    }
    catch (e)
    {
      try
      {
        window.sidebar.addPanel(sTitle, sURL, "");
      }
      catch (e)
      {
        alert("您的浏览器不支持自动加入收藏夹，请使用Ctrl+D进行手动添加");
      }
    }
  }
  </script>
  <li class="navli2"><a href="javascript:void(0)" onclick="addToFavorite(document.title,window.location)">收藏我们</a></li>
</ul>
</div>
</div>
</div>
<div id="header">
  <div class="top">
    <div class="topmain">
      <div class="searchbox">
        <div class="so_so">
          <div class="logo"><a href="#" title="茜茜爸爸"><img src="images/logo.jpg" / alt="茜茜爸爸"></a></div>
          <div class="mk_so">
            <form id =form name="form" method="get" action="search_course.php">
              <input type="text" class="input"  id="search_content" name="search_content"/>
              <input type="image" src="images/btn.jpg" class="btn" onclick="this.form.submit()"/>
            </form>
          </div>
        </div>

      </div>
      <!--菜单导航-->
      <div class="topnavmenu">
        <div class="nav">
          <ul>
            <li><a href="index.php" class="on">首页</a></li>
            <li><a href="user/user.php">个人中心</a></li>
            <li><a href="search_course.php">课程中心</a></li>
            <li><a href="community/community.php">社区中心</a></li>
          </ul>
        </div>
        <div class="question">
          <ul>
            <li class="li6"><a href="个人中心-我的提问.html">我要提问</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--底部-->
<div class="clear"></div>
<!--公告-->
<div class="notice">
  <h1>公告栏：</h1>
  <div class="txtMarquee-left">
    <div class="bd">
      <ul class="infoList">
        <li><a href="#" target="_blank">这是一条公告</a><span>[11-11]</span></li>
        <li><a href="#" target="_blank">这是一条公告</a><span>[11-11]</span></li>
        <li><a href="#" target="_blank">这是一条公告</a><span>[11-11]</span></li>
        <li><a href="#" target="_blank">这是一条公告</a><span>[11-11]</span></li>
        <li><a href="#" target="_blank">这是一条公告</a><span>[11-11]</span></li>
        <li><a href="#" target="_blank">这是一条公告</a><span>[11-11]</span></li>
      </ul>
    </div>
    <div class="hd"> <a class="next"></a> <a class="prev"></a> </div>
  </div>
  <script type="text/javascript">
		jQuery(".txtMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:2,interTime:50});
		</script>
</div>
<!--专题and图片切换-->
<div class="clear"></div>
<div class="topics">
  <!--图片切切换-->
  <div id="banner">
    <div id="ifocus">
      <div style="overflow:hidden" id="ifocus_pic">
        <div style="overflow:hidden; top: 0px; left: 0px" id="ifocus_piclist">
          <ul>
            <!--大图_start -->
            <li><a href="./course/course.php?course_id=1" target=_blank><img border=0 alt=茜茜爸爸儿童家庭学堂课程平台 src="/course/1/1.jpg"></a> </li>
            <li><a href="./course/course.php?course_id=2" target=_blank><img border=0 alt=茜茜爸爸儿童家庭学堂课程平台 src="/course/2/2.jpg"></a> </li>
            <li><a href="./course/course.php?course_id=3" target=_blank><img border=0 alt=茜茜爸爸儿童家庭学堂课程平台 src="/course/3/3.jpg"></a> </li>
            <li><a href="./course/course.php?course_id=4" target=_blank><img border=0 alt=茜茜爸爸儿童家庭学堂课程平台 src="/course/4/4.jpg"></a> </li>
            <li><a href="./course/course.php?course_id=5" target=_blank><img border=0 alt=茜茜爸爸儿童家庭学堂课程平台 src="/course/5/5.jpg"></a>
              <!--大图_end -->
            </li>
          </ul>
        </div>
        <div id="ifocus_opdiv"></div>
        <div id="ifocus_tx">
          <ul>
            <!--小图列表_start -->
            <li class="current">
            <li class="normal">
            <li class="normal">
            <li class="normal">
            <li class="normal">
              <!--小图列表_end -->
            </li>
          </ul>
        </div>
        <div id="ifocus_btn">
          <!--小图_start -->
          <ul>
            <li class="current"><img border=0 alt=茜茜爸爸儿童家庭学堂课程平台 src="/course/1/1.jpg"> </li>
            <li class="normal"><img border=0 alt=茜茜爸爸儿童家庭学堂课程平台 src="/course/2/2.jpg"> </li>
            <li class="normal"><img border=0 alt=茜茜爸爸儿童家庭学堂课程平台 src="/course/3/3.jpg"> </li>
            <li class="normal"><img border=0 alt=茜茜爸爸儿童家庭学堂课程平台 src="/course/4/4.jpg"> </li>
            <li class="normal"><img border=0 alt=茜茜爸爸儿童家庭学堂课程平台 src="/course/5/5.jpg"></li>
          </ul>
          <!--小图_end -->
        </div>
      </div>
    </div>
  </div>
  <!--专题栏目-->
  <div class="ztzl">
    <div><a href="#"><img border=0 alt=茜茜爸爸儿童家庭学堂课程平台 src="images/zt1.jpg" /></a></div>
    <div><a href="#"><img border=0 alt=茜茜爸爸儿童家庭学堂课程平台 src="images/zt2.jpg" /></a></div>
    <div><a href="#"><img border=0 alt=茜茜爸爸儿童家庭学堂课程平台 src="images/zt3.jpg" /></a></div>
    <div><a href="#"><img border=0 alt=茜茜爸爸儿童家庭学堂课程平台 src="images/zt4.jpg" /></a></div>
  </div>
</div>
<!--猜你喜欢 and 用户登录-->
<div class="column">
  <!--猜你喜欢-->
  <div class="like">
    <div class="likecolumn">
      <div class="title">
        <h1>猜你喜欢</h1>
        <div class="change"><a href="#">换一组</a></div>
      </div>
      <div class="likelist" id="con_one_1">
HTML;

$html_B = <<<HTML
      </div>
    </div>
    <!--用户登录-->
    <div class="right269">
      <div class="title1">
        <h1>用户登录</h1>
      </div>
      <div class="login">
        <form method="get" action="login.php">
	      <div class="user">用户名：<input type="text" id="username" name="username" value="请输入用户名"  onFocus="this.value='';" onBlur="if(this.value==''){this.value='请输入用户名';}" class="text"/></div>
		  <div class="password">密&nbsp;&nbsp;&nbsp;码 ：<input type="password" id="password" name="password" value="请输入密码"  onFocus="this.value='';" onBlur="if(this.value==''){this.value='请输入密码';}" class="text"/></div>
          <div class="tiyan"><input type="submit" value="登录" class="tiyan"></div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--原创精品 and 推荐排行-->
<div class="column1">
  <div class="original">
    <!--原创精品-->
    <div class="oricolumn">
      <div class="title2">
        <h1>人气课程</h1>
        <h2><a href="原创列表页.html"></a></h2>
      </div>
      <div class="clear"></div>
      <div class="orilist">
        <div class="topvideo"> <img src="course/1/1.jpg "height="333" width="419" />
          <div class="titleinfo">
            <h1><a href="./course/course.php?course_id=1">少儿英语教学视频系列之很高兴认识你</a></h1>
            <div class="spxx"><a href="./course/course.php?course_id=1">1000次播放</a> | <a href="./course/course.php?course_id=1">90 %好评</a></div>
            <div class="price"><a href="./course/course.php?course_id=1"></a></div>
          </div>
          <span class="sptime">1:07:20</span> <span class="play"><a href="#" target="_blank" title="播放">播放</a></span> </div>
        <div class="splist">
          <div class="myvideo mb15">
            <div class="myvideoimg"><img src="course/2/2.jpg "height="118" width="212" />
              <h3><a href="./course/course.php?course_id=2">少儿英语教学视频系列之苹果香蕉橘子</a></h3>
              <span class="play1"><a href="./course/course.php?course_id=2" title="播放">播放</a></span></div>
            <div class="title3">
              <div class="jiage"><a href="./course/course.php?course_id=2">71%好评</a></div>
              <div class="playtime"><a href="./course/course.php?course_id=2">500次播放</a> | <a href="./course/course.php?course_id=2">50 个好评</a></div>
            </div>
          </div>
          <div class="myvideo ml20 mb15">
            <div class="myvideoimg"><img src="course/5/5.jpg "height="118" width="212"  />
              <h3><a href="./course/course.php?course_id=5">一分钟趣味数学_个位数和十位数相同</a></h3>
              <span class="play1"><a href="./course/course.php?course_id=5" title="播放">播放</a></span></div>
            <div class="title3">
              <div class="jiage"><a href="./course/course.php?course_id=5">66%好评</a></div>
              <div class="playtime"><a href="./course/course.php?course_id=5">400次播放</a> | <a href="./course/course.php?course_id=5">120 个好评</a></div>
            </div>
          </div>
          <div class="myvideo">
            <div class="myvideoimg"><img src="course/4/4.jpg "height="118" width="212"  />
              <h3><a href="./course/course.php?course_id=4">小猪佩奇绘画变形警车珀利玩具-国语</a></h3>
              <span class="play1"><a href="./course/course.php?course_id=4" title="播放">播放</a></span></div>
            <div class="title3">
              <div class="jiage"><a href="./course/course.php?course_id=4">90%好评</a></div>
              <div class="playtime"><a href="./course/course.php?course_id=4">300次播放</a> | <a href="./course/course.php?course_id=4">180 个好评</a></div>
            </div>
          </div>
          <div class="myvideo ml20">
            <div class="myvideoimg"><img src="course/3/3.jpg "height="118" width="212"  />
              <h3><a href="./course/course.php?course_id=3">昆虫小世界-国语流畅</a></h3>
              <span class="play1"><a href="./course/course.php?course_id=3" title="播放">播放</a></span></div>
            <div class="title3">
              <div class="jiage"><a href="./course/course.php?course_id=3">93%好评</a></div>
              <div class="playtime"><a href="./course/course.php?course_id=3">200次播放</a> | <a href="./course/course.php?course_id=3">300 个好评</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--推荐排行-->
    <div class="right269">
      <div class="title4">
        <h1>推荐排行</h1>
        <h2>TOP</h2>
      </div>
      <div class="paihang">
        <ul class="list">
          <li><span class="dig">1</span><a href="./course/course.php?course_id=1">少儿英语教学视频系列之很高兴认识你</a></li>
          <li><span class="dig">2</span><a href="./course/course.php?course_id=2">少儿英语教学视频系列之苹果香蕉橘子</a></li>
          <li><span class="dig">3</span><a href="./course/course.php?course_id=5">一分钟趣味数学_个位数和十位数相同</a><</li>
          <li><span class="dig1">4</span><a href="./course/course.php?course_id=4">小猪佩奇绘画变形警车珀利玩具-国语</a></li>
          <li><span class="dig1">5</span><a href="./course/course.php?course_id=3">昆虫小世界-国语流畅</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--人气班级-->
<div class="classes">
  <div class="picScroll-left">
    <div class="hd">
      <h1>人气社区</h1>
	  <div class="change"><a href="班级.html">换一组</a></div>
    </div>
    <div class="bd">
      <ul class="picList">
        <li>
          <div class="pic"><a href="班级.html" target="_blank"><img src="images/pic4.jpg" /></a></div>
          <div class="titlei"><span class="classtitle"><a href="视频播放详细页.html" target="_blank">MBA备考班</a></span><span class="classinfo">学生数：<a href="班级.html">10255</a>人  开班讲师：<a href="视频播放详细页.html">Class01</a></span></div>
        </li>
        <li>
          <div class="pic"><a href="班级.html" target="_blank"><img src="images/pic4.jpg" /></a></div>
          <div class="titlei"><span class="classtitle"><a href="视频播放详细页.html" target="_blank">MBA备考班</a></span><span class="classinfo">学生数：<a href="班级.html">10255</a>人  开班讲师：<a href="#">Class01</a></span></div>
        </li>
        <li>
          <div class="pic"><a href="班级.html" target="_blank"><img src="images/pic4.jpg" /></a></div>
          <div class="titlei"><span class="classtitle"><a href="班级.html" target="_blank">MBA备考班</a></span><span class="classinfo">学生数：<a href="班级.html">10255</a>人  开班讲师：<a href="班级.html">Class01</a></span></div>
        </li>
        <li>
          <div class="pic"><a href="班级.html" target="_blank"><img src="images/pic4.jpg" /></a></div>
          <div class="titlei"><span class="classtitle"><a href="班级.html" target="_blank">MBA备考班</a></span><span class="classinfo">学生数：<a href="班级.html">10255</a>人  开班讲师：<a href="#">Class01</a></span></div>
        </li>
        <li>
          <div class="pic"><a href="班级.html" target="_blank"><img src="images/pic4.jpg" /></a></div>
          <div class="titlei"><span class="classtitle"><a href="#" target="_blank">MBA备考班</a></span><span class="classinfo">学生数：<a href="班级.html">10255</a>人  开班讲师：<a href="班级.html">Class01</a></span></div>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="clear"></div>
<div id="footer">
  <div class="copyright">
    <div class="copy">Copyright © 2017 茜茜爸爸儿童家庭学堂课程平台</a><br />
      <font class="f_red">当前在线人数：<b>154588</b> 人</font></div>
  </div>
</div>
<!--浮动导航-->
<DIV id=xixi onmouseover=toBig() onmouseout=toSmall()>
  <TABLE style="FLOAT: left" border=0 cellSpacing=0 cellPadding=0 width=57>
  <TR>
    <TD>
<div class="to_top">
  <div class="tt_hd"><a href="#" class="wcup" target="_blank"><img src="images/nav1.jpg"></a></div>
  <div class="tt_cont">
  <a href="Member.aspx?mid=0" class="mt0" target="_blank">用户</a>
  <a href="classList.aspx" class="mt1" target="_blank">班级</a>
  <a href="#" class="mt2" target="_blank">课程</a>
  <a href="#" class="mt3" target="_blank">收藏</a>
  <a href="#" class="mt4" target="_blank">记录</a>
  <a href="#" class="mt5" target="_blank">通知</a>
  <a href="#" class="mt6" target="_blank">咨询</a>
  <a id="scrollto" href="#"><img src="images/topn.jpg" /></a> </div>
</div>
<script type="text/javascript">
    window.onscroll = function () {
        if (document.documentElement.scrollTop + document.body.scrollTop > 500) {
            document.getElementById("scrollto").style.display = "block";
        }
        else {
            document.getElementById("scrollto").style.display = "none";
        }
    }
</script>
</TD></TR>
</TABLE>
<DIV class=Obtn></DIV></DIV>
<SCRIPT language=javascript src="script/index_left_nav.js"></SCRIPT>
<!--浮动导航-->

</body>
<script type="text/javascript" src="script/zhuce.js"></script>
</html>



HTML;
echo $html_A;
for($i=0;$i<4;$i++)
{
    $course_id = $result_course[$i]['id'];
    $course_play_count = $result_course[$i]['play_count'];
    $course_name = substr(($result_course[$i]['name']), 0, 45);//课程名字取前15个字显示
    $course_approve = $result_course[$i]['approve'];
    $course_disapprove = $result_course[$i]['disapprove'];
    $course_approve_rate = substr(($course_approve / ($course_approve + $course_disapprove) * 100), 0, 2);//好评率取前两位整数
    $course_time = $result_course[$i]['time'];
    $path = "./course/$course_id/";
    $image_path = $path . $course_id . ".jpg";//视频封面图片的path
    $html_course = <<<HTML
        <div class="likevideo fl">
          <div class="videoimg"><img src="{$image_path}" height="115" width="206"/></div>
          <div class="videotitle"><a href="./course/course.php?course_id=$course_id" target="_blank">$course_name</a></div>
          <div class="videoinfo"><a href="./course/course.php?course_id=$course_id">$course_play_count 次播放</a> | <a href="#">$course_approve_rate %好评</a></div>
        </div>
HTML;
    echo $html_course;
}
echo $html_B;
?>