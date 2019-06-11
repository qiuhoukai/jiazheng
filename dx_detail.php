<?php
session_start();
include_once 'conn.php';
$lb=$_GET["lb"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>新闻中心详细页</title>
<link rel="stylesheet" type="text/css" href="qtimages/css/fxke.css"/>
<link rel="stylesheet" href="qtimages/hsgbanner.css">
<script type="text/javascript" src="qtimages/jquery.js"></script>
<script type="text/javascript" src="qtimages/inc.js"></script>
<style type="text/css">
<!--
.STYLE2 {
	font-size: 20px;
	font-weight: bold;
	color: #078548;
}
-->
</style>
</head>

<body>

<!--新头部的开始-->
<?php include_once 'qttop.php';?>

<!--新头部的结束--> <!--产品中心ban开始-->
<div class="cpzxban"></div>

<!--产品中心ban结束-->

<!--主体内容的开始-->
<div class="fxmain">
  <!--顶部类别开始-->
  <div class="fx_fenlei">
     <div class="leibei fl">
       <ul>
         <li><a class="diyi" ><?php echo $lb?></a></li>
         <!--<li><a href="#">行业动态</a></li>
         <li><a href="#">保养常识</a></li>
         <li><a href="#">技术支持</a></li>-->
       </ul>
     </div>
     <div class="dqwz fr">
     当前位置：<a href="index.php">网站首页</a> &gt; <?php echo $lb?>     </div> 
  </div>
  <!--顶部类别结束-->
  <!--详细内容的开始-->
  <div class="fxmain_nr">
    
	 <?php 
					$sql="select * from dx where leibie='".$lb."'";
					$query=mysql_query($sql);
					 $rowscount=mysql_num_rows($query);
					  if($rowscount==0)
					  {}
					  else
					  {
					?>
</p>
                      <table width="97%" border="0" align="center" cellpadding="3" cellspacing="1" bordercolor="#67B41A" style="border-collapse:collapse" class="newsline">
                        <tr>
                          <td height="104"><?php echo mysql_result($query,0,"content");?></td>
                        </tr>
                        <tr>
                          <td align="right"><input type="button" onclick="javaScript:history.back();" value="返回" /></td>
                        </tr>
                      </table>
                      <?php
					}
					?>
					
  </div>
  
  <!--详细内容的结束-->
  
</div>

<!--主体内容的结束-->





<!--底部的开始-->
<?php include_once 'qtdown.php';?>
<!--底部的结束-->

</body>
</html>

