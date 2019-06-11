<?php
session_start();
include_once 'conn.php';

$id=$_GET["id"];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>家政人员</title>
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
	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
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
         <li><a class="diyi" >家政人员</a></li>
         <!--<li><a href="#">行业动态</a></li>
         <li><a href="#">保养常识</a></li>
         <li><a href="#">技术支持</a></li>-->
       </ul>
     </div>
     <div class="dqwz fr">
     当前位置：<a href="index.php">网站首页</a> &gt; 家政人员     </div> 
  </div>
  <!--顶部类别结束-->
  <!--详细内容的开始-->
  <div class="fxmain_nr">
    
	 						 <?php
$sql="select * from jiazhengrenyuan where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="98%" border="0"  align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse" class="newsline"> 
      <tr>
	  <td width='11%' height=44>家政编号：</td><td width='39%'><?php echo mysql_result($query,0,jiazhengbianhao);?></td><td  rowspan=7 align=center><a href=<?php echo mysql_result($query,0,zhaopian);?> target=_blank><img src=<?php echo mysql_result($query,0,zhaopian);?> width=228 height=215 border=0></a></td></tr><tr>
    <td width='11%' height=44>密码：</td><td width='39%'>******</td></tr><tr>
    <td width='11%' height=44>家政姓名：</td><td width='39%'><?php echo mysql_result($query,0,jiazhengxingming);?></td></tr><tr>
    <td width='11%' height=44>家政性别：</td><td width='39%'><?php echo mysql_result($query,0,jiazhengxingbie);?></td></tr><tr>
    <td width='11%' height=44>服务类型：</td><td width='39%'><?php echo mysql_result($query,0,fuwuleixing);?></td></tr><tr>
    <td width='11%' height=44>出生日期：</td><td width='39%'><?php echo mysql_result($query,0,chushengriqi);?></td></tr><tr>
    <td width='11%' height=44>家政手机：</td><td width='39%'><?php echo mysql_result($query,0,jiazhengshouji);?></td></tr>
	<tr><td colspan=3 align=center> <input type=button name=Submit52 value=打印 onClick="javascript:window.print()"  /></td></tr>
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

