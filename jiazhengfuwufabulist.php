<?php
session_start();
include_once 'conn.php';
//全部订单列表，未被接的
//验证登陆者身份，若非管理员或家政人员，则无法进入此页面；

//if($_SESSION['cx']=="用户"||$_SESSION['cx']=="")
//{
//	echo "<script>javascript:alert('您没有权限!');history.back();</script>";
//}
if($_SESSION['cx']=="用户"||$_SESSION['cx']=="")
{
	if($_SESSION['cx']=="")
	{
		echo "<script>javascript:alert('禁止游客浏览!');history.back();</script>";
	}
	else
	{
		echo "<script>javascript:alert('您没有权限!');history.back();</script>";
	}
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>家政服务发布</title>
<link rel="stylesheet" type="text/css" href="qtimages/css/fxke.css"/>
<link rel="stylesheet" href="qtimages/hsgbanner.css">
<script type="text/javascript" src="qtimages/jquery.js"></script>
<script type="text/javascript" src="qtimages/inc.js"></script>
<style type="text/css">
</style>
</head>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<!--hxsglxiangdxongjxs-->
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
         <li><a class="diyi" >家政服务发布</a></li>
         <!--<li><a href="#">行业动态</a></li>
         <li><a href="#">保养常识</a></li>
         <li><a href="#">技术支持</a></li>-->
       </ul>
     </div>
     <div class="dqwz fr">
     当前位置：<a href="index.php">网站首页</a> &gt; 家政服务发布     </div> 
  </div>
  <!--顶部类别结束-->
  <!--详细内容的开始-->
  <div class="fxmain_nr">
    
	 <form id="form1" name="form1" method="post" action="">
  订单号：<input name="dingdanhao" type="text" id="dingdanhao" style='border:solid 1px #000000; color:#666666;width:80px' /> 联系人：<input name="lianxiren" type="text" id="lianxiren" style='border:solid 1px #000000; color:#666666;width:80px' /> 联系人手机：<input name="lianxirenshouji" type="text" id="lianxirenshouji" style='border:solid 1px #000000; color:#666666;width:80px' /> 服务类型：<select name='fuwuleixing' id='fuwuleixing' style='border:solid 1px #000000; color:#666666;'><option value="">所有</option><?php getoption("fuwuleixingxinxi","fuwuleixing")?></select></select> 内容：<input name="neirong" type="text" id="neirong" style='border:solid 1px #000000; color:#666666;width:80px' /> 薪水：<input name="xinshui1" type="text" id="xinshui1"  value='' style='border:solid 1px #000000; color:#666666;width:30px' />-<input name="xinshui2" type="text" id="xinshui2"  value='' style='border:solid 1px #000000; color:#666666;width:30px' /> 发布人：<input name="faburen" type="text" id="faburen" style='border:solid 1px #000000; color:#666666;width:80px' />
  <input type="submit" name="Submit" value="查找"  />
</form>
<table width="98%" border="0"  align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse" class="newsline">  
  <tr>
    <td   width="25" bgcolor="#CCFFFF">序号</td>
    <td bgcolor='#CCFFFF'>订单号</td><td bgcolor='#CCFFFF'>联系人</td><td bgcolor='#CCFFFF'>服务类型</td><td bgcolor='#CCFFFF'>时间</td><td bgcolor='#CCFFFF'>内容</td><td bgcolor='#CCFFFF'>薪水</td><td bgcolor='#CCFFFF'>发布人</td>
    
    <td width="30" align="center" bgcolor="#CCFFFF">操作</td>
  </tr>
  <?php 
    
	
	//未接单的全显示
	
	$sql="select id,dingdanhao,lianxiren,fuwuleixing,shijian,neirong,xinshui,faburen from jiazhengfuwufabu where issh='否'";
  
  
  
  
  
  
  
if ($_POST["dingdanhao"]!=""){$nreqdingdanhao=$_POST["dingdanhao"];$sql=$sql." and dingdanhao like '%$nreqdingdanhao%'";}
if ($_POST["lianxiren"]!=""){$nreqlianxiren=$_POST["lianxiren"];$sql=$sql." and lianxiren like '%$nreqlianxiren%'";}
//if ($_POST["lianxirenshouji"]!=""){$nreqlianxirenshouji=$_POST["lianxirenshouji"];$sql=$sql." and lianxirenshouji like '%$nreqlianxirenshouji%'";}
if ($_POST["fuwuleixing"]!=""){$nreqfuwuleixing=$_POST["fuwuleixing"];$sql=$sql." and fuwuleixing like '%$nreqfuwuleixing%'";}
if ($_POST["shijian"]!=""){$nreqshijian=$_POST["shijian"];$sql=$sql." and shijian like '%$nreqshijian%'";}
if ($_POST["neirong"]!=""){$nreqneirong=$_POST["neirong"];$sql=$sql." and neirong like '%$nreqneirong%'";}
if ($_POST["xinshui1"]!=""){$nreqxinshui1=$_POST["xinshui1"];$sql=$sql." and xinshui >= $nreqxinshui1";}
if ($_POST["xinshui2"]!=""){$nreqxinshui2=$_POST["xinshui2"];$sql=$sql." and xinshui <= $nreqxinshui2";}
if ($_POST["faburen"]!=""){$nreqfaburen=$_POST["faburen"];$sql=$sql." and faburen like '%$nreqfaburen%'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//每页行数；
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}

	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
  ?>
  <tr>
    <td width="25"><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,dingdanhao);?></td><td><?php echo mysql_result($query,$i,lianxiren);?></td></td><td><?php echo mysql_result($query,$i,fuwuleixing);?></td><td><?php echo mysql_result($query,$i,shijian);?></td><td><?php echo mysql_result($query,$i,neirong);?></td><td><?php echo mysql_result($query,$i,xinshui);?></td><td><?php echo mysql_result($query,$i,faburen);?></td>
    
    <td width="30" align="center"><a href="jiazhengfuwufabudetail.php?id=<?php echo mysql_result($query,$i,"id");?>">详细</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>以上数据共<?php echo $rowscount;?>条,
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页"  />
</p>
<div class="fy"><a href="jiazhengfuwufabulist.php?pagecurrent=1">首页</a> <a href="jiazhengfuwufabulist.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> <a href="jiazhengfuwufabulist.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a> <a href="jiazhengfuwufabulist.php?pagecurrent=<?php echo $pagecount;?>">末页</a> 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </div>

					
  </div>
  
  <!--详细内容的结束-->
  
</div>

<!--主体内容的结束-->





<!--底部的开始-->
<?php include_once 'qtdown.php';?>
<!--底部的结束-->
<!-- dfexnxxiaxng -->
</body>
</html>
-->
