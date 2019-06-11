<?php
//用户 已发订单列表
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>家政服务发布</title>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>已有家政服务发布：</p>
<form id="form1" name="form1" method="post" action="">
  搜索: 订单号：<input name="dingdanhao" type="text" id="dingdanhao" style='border:solid 1px #000000; color:#666666;width:80px' /> 联系人：<input name="lianxiren" type="text" id="lianxiren" style='border:solid 1px #000000; color:#666666;width:80px' /> 联系人手机：<input name="lianxirenshouji" type="text" id="lianxirenshouji" style='border:solid 1px #000000; color:#666666;width:80px' /> 服务类型：<select name='fuwuleixing' id='fuwuleixing' style='border:solid 1px #000000; color:#666666;'><option value="">所有</option><?php getoption("fuwuleixingxinxi","fuwuleixing")?></select></select> 时间：<input name="shijian" type="text" id="shijian" style='border:solid 1px #000000; color:#666666;width:80px' /> 内容：<input name="neirong" type="text" id="neirong" style='border:solid 1px #000000; color:#666666;width:80px' /> 薪水：<input name="xinshui1" type="text" id="xinshui1"  value='' style='border:solid 1px #000000; color:#666666;width:30px' />-<input name="xinshui2" type="text" id="xinshui2"  value='' style='border:solid 1px #000000; color:#666666;width:30px' /> <!--发布人：<input name="faburen" type="text" id="faburen" style='border:solid 1px #000000; color:#666666;width:80px' />--> 排序
  <select name="paixu" id="paixu">
    <option value="addtime">添加时间</option>
    
  </select>
  <select name="px" id="px">
    <option value="desc">降序</option>
    <option value="asc">升序</option>
  </select>
  <input type="submit" name="Submit" value="查找" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <td bgcolor='#CCFFFF'>订单号</td>
    <td bgcolor='#CCFFFF'>联系人</td>
    <td bgcolor='#CCFFFF'>联系人手机</td>
    <td bgcolor='#CCFFFF'>服务类型</td>
    <td bgcolor='#CCFFFF'>时间</td>
    <td bgcolor='#CCFFFF'>内容</td>
    <td bgcolor='#CCFFFF'>薪水</td>
  <!--   <td bgcolor='#CCFFFF'>发布人</td>    -->
    <td bgcolor='#CCFFFF' width='90' align='center'>订单状态</td>
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
    <td width="70" align="center" bgcolor="#CCFFFF">操作</td>
  </tr>
  <?php 
    $sql="select * from jiazhengfuwufabu where faburen='".$_SESSION['username']."'";
  
if ($_POST["dingdanhao"]!=""){$nreqdingdanhao=$_POST["dingdanhao"];$sql=$sql." and dingdanhao like '%$nreqdingdanhao%'";}
if ($_POST["lianxiren"]!=""){$nreqlianxiren=$_POST["lianxiren"];$sql=$sql." and lianxiren like '%$nreqlianxiren%'";}
if ($_POST["lianxirenshouji"]!=""){$nreqlianxirenshouji=$_POST["lianxirenshouji"];$sql=$sql." and lianxirenshouji like '%$nreqlianxirenshouji%'";}
if ($_POST["fuwuleixing"]!=""){$nreqfuwuleixing=$_POST["fuwuleixing"];$sql=$sql." and fuwuleixing like '%$nreqfuwuleixing%'";}
if ($_POST["shijian"]!=""){$nreqshijian=$_POST["shijian"];$sql=$sql." and shijian like '%$nreqshijian%'";}
if ($_POST["neirong"]!=""){$nreqneirong=$_POST["neirong"];$sql=$sql." and neirong like '%$nreqneirong%'";}
if ($_POST["xinshui1"]!=""){$nreqxinshui1=$_POST["xinshui1"];$sql=$sql." and xinshui >= $nreqxinshui1";}
if ($_POST["xinshui2"]!=""){$nreqxinshui2=$_POST["xinshui2"];$sql=$sql." and xinshui <= $nreqxinshui2";}
//if ($_POST["faburen"]!=""){$nreqfaburen=$_POST["faburen"];$sql=$sql." and faburen like '%$nreqfaburen%'";}
   if($_POST["paixu"]!="")
  {
  	$sql=$sql." order by ".$_POST["paixu"]." ".$_POST["px"]."";
  }
  else
  {
  	$sql=$sql." order by id desc";
  }
  
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
    <td><?php echo mysql_result($query,$i,dingdanhao);?></td>
    <td><?php echo mysql_result($query,$i,lianxiren);?></td>
    <td><?php echo mysql_result($query,$i,lianxirenshouji);?></td>
    <td><?php echo mysql_result($query,$i,fuwuleixing);?></td>
    <td><?php echo mysql_result($query,$i,shijian);?></td>
    <td><?php echo mysql_result($query,$i,neirong);?></td>
    <td><?php echo mysql_result($query,$i,xinshui);?></td>
	<!--<td><?php echo mysql_result($query,$i,faburen);?></td> -->
    <td align='center'><?php echo mysql_result($query,$i,"issh")?></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="70" align="center">

	<!--新发起的订单取消或修改-->
	<?php if(mysql_result($query,$i,issh)=="否"){?>
	<a href="del.php?dingdanhao=<?php echo mysql_result($query,$i,"dingdanhao");?>&tablename=jiazhengfuwufabu" onclick="return confirm('真的要取消？')">申请取消订单</a><br>
	<?php } ?>
	<!--已接单取消-->
	<?php if(mysql_result($query,$i,issh)=="是"){?>
	<a href="del.php?dingdanhao=<?php echo mysql_result($query,$i,"dingdanhao");?>&tablename=jiazhengfuwufabu" onclick="return confirm('确认要申请取消订单？')">申请取消订单</a> 
	<?php } ?>
	<!--订单已关闭申请重新发起-->
	<?php if(mysql_result($query,$i,issh)=="订单已关闭"){?>
	<a href="del.php?dingdanhao=<?php echo mysql_result($query,$i,"dingdanhao");?>&tablename=jiazhengfuwufabu" onclick="return confirm('确认要重新发起订单？')">申请重发订单</a>
	
	<?php } ?>
	<!--同意被申请撤销订单-->
	<?php if(mysql_result($query,$i,issh)=="申请撤销订单"){?>
	<a href="del.php?dingdanhao=<?php echo mysql_result($query,$i,"dingdanhao");?>&tablename=jiazhengfuwufabu" onclick="return confirm('确认关闭此订单？')">同意关闭此订单</a>
	<?php } ?>
	</td>
  </tr>
<?php

		}
  }
	?>
</table>
<p>以上数据共<?php echo $rowscount;?>条, 
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="jiazhengfuwufabu_list2.php?pagecurrent=1">首页</a>, <a href="jiazhengfuwufabu_list2.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="jiazhengfuwufabu_list2.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="jiazhengfuwufabu_list2.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>

</body>
</html>