<?php
session_start();
if($_SESSION["username"]=="")
{
	echo "<script>javascript:alert('对不起，请您先登陆！');location.href='index.php';</script>";
	exit;
}
include_once 'conn.php';
$id=$_GET["id"];
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$zhanghao=$_POST["zhanghao"];$zhaopian=$_POST["zhaopian"];$xingming=$_POST["xingming"];$liuyan=$_POST["liuyan"];
	$sql="insert into liuyanban(zhanghao,zhaopian,xingming,liuyan) values('$zhanghao','$zhaopian','$xingming','$liuyan') ";
	mysql_query($sql);
	echo "<script>javascript:alert('留言成功!');location.href='lyblist.php';</script>";
}
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
<script language="javascript">
	function check()
{
	if(document.form1.zhanghao.value==""){alert("请输入账号");document.form1.zhanghao.focus();return false;}if(document.form1.xingming.value==""){alert("请输入姓名");document.form1.xingming.focus();return false;}if(document.form1.liuyan.value==""){alert("请输入留言");document.form1.liuyan.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;

	}
</script>
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
         <li><a class="diyi" >留言板</a></li>
         <!--<li><a href="#">行业动态</a></li>
         <li><a href="#">保养常识</a></li>
         <li><a href="#">技术支持</a></li>-->
       </ul>
     </div>
     <div class="dqwz fr">
     当前位置：<a href="index.php">网站首页</a> &gt; 留言板     </div> 
  </div>
  <!--顶部类别结束-->
  <!--详细内容的开始-->
  <div class="fxmain_nr">
    
	
<form name="form1" method="post" action="">
                      <table width="96%" height="400" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#67B41A" style="border-collapse:collapse">
                        <tr>
                          <td>账号：</td>
                          <td><input name='zhanghao' type='text' readonly="readonly" id='zhanghao' value='<?php echo $_SESSION["username"];?>'  style="width:260px; height:30px; " />
                            &nbsp;*</td>
                        </tr>
                        <tr>
                          <td>照片：</td>
                          <td><input name='zhaopian' type='hidden' id='zhaopian' value='<?php echo $_SESSION["zp"];?>' />
                              <img src="<?php echo $_SESSION["zp"];?>" width="131" height="102"></td>
                        </tr>
                        <tr>
                          <td>姓名：</td>
                          <td><input name='xingming' type='text' readonly="readonly" id='xingming' value='<?php echo $_SESSION["xm"];?>' style="width:260px; height:30px; " />
                            &nbsp;*</td>
                        </tr>
                        <tr>
                          <td>留言：</td>
                          <td><textarea name='liuyan' cols='50' rows='8' id='liuyan'></textarea>
                            &nbsp;*</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><input type="hidden" name="addnew" value="1" />
                              <input type="submit" name="Submit" value="留言" onClick="return check();"  />
                              <input type="reset" name="Submit2" value="重置"  /></td>
                        </tr>
      </table>
    </form>                     
					
  </div>
  
  <!--详细内容的结束-->
  
</div>

<!--主体内容的结束-->





<!--底部的开始-->
<?php include_once 'qtdown.php';?>
<!--底部的结束-->

</body>
</html>

