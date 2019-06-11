<?php
session_start();
include_once 'conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>家政服务平台网站首页</title>
<link rel="stylesheet" type="text/css" href="qtimages/css/fxke.css"/>
<link rel="stylesheet" href="qtimages/hsgbanner.css">
<script type="text/javascript" src="qtimages/jquery.js"></script>
<script type="text/javascript" src="qtimages/inc.js"></script>
</head>

<body>

<!--新头部的开始-->
<?php include_once 'qttop.php';?>

<!--新头部的结束--> 

<!--ban图片切换开始-->
<?php include_once 'bht.php';?>

<!--ban图片切换结束--> 

<!--视频和关于我们的开始-->
<div class="spgy"> 
  <!--视频的开始-->
  <div class="sspzx">
    <div class="sspzx1"> <strong class="bt1">视频中心</strong><span class="bt2">Video Introduction</span></div>
    <div class="sspzx2"> 
      
      <embed pluginspage="http://www.macromedia.com/go/getflashplayer" src="http://player.youku.com/player.php/sid/XNDA5MjYxOTEy/v.swf" type="application/x-shockwave-flash" name="ssss" allowfullscreen="true" allowscriptaccess="always" width="340" height="245"> 
    </div>
  </div>
  <!--视频的结束--> 
  <!--关于我们的开始-->
  <div class="gywm">
    <div class="gywm1"> <strong class="bt1">关于我们</strong><span class="bt2">About Us</span><a class="gd" href="dx_detail.php?lb=关于我们"
                    target="_blank">更多&gt;&gt;</a></div>
    <div class="gywm2"> <img src="qtimages/damen.jpg" width="244" height="240" />
      <h2> 中国家政服务平台</h2>
      <p>  本公司坚持走:以质量求生存,以科技求发展,重合同守信用的道路,生产经营得到迅速发展。我们将以优质的产品和最完善的售后服务来真诚与各界朋友开展广泛的合作,共同创造一个美好的未来!公司的软、硬环境的设计和管理都应满足人性化的要求，让人性化的关怀触手可及!诚信为本，稳健经营! </p>
      <div style="clear: both;"> </div>
    </div>
  </div>
  <!--关于我们的结束-->
  <div style="clear: both;"> </div>
</div>
<!--视频和关于我们的结束--> 

<!--产品中心的开始-->
<!--产品中心的结束-->
<!--广告的开始-->
<div class="fxgg"></div>
<!--广告的结束--> 

<?php include_once 'qtdown.php';?>
<!--底部的结束-->
</body>

<!--图片切换-->


</html>

