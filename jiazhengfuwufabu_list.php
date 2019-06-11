<?php 
//全部的
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

<p>已有家政服务发布列表：</p>
<form id="form1" name="form1" method="post" action="">
  搜索: 订单号：<input name="dingdanhao" type="text" id="dingdanhao" style='border:solid 1px #000000; color:#666666;width:80px' /> 联系人：<input name="lianxiren" type="text" id="lianxiren" style='border:solid 1px #000000; color:#666666;width:80px' /> 联系人手机：<input name="lianxirenshouji" type="text" id="lianxirenshouji" style='border:solid 1px #000000; color:#666666;width:80px' /> 服务类型：<select name='fuwuleixing' id='fuwuleixing' style='border:solid 1px #000000; color:#666666;'><option value="">所有</option><?php getoption("fuwuleixingxinxi","fuwuleixing")?></select></select> 时间：<input name="shijian" type="text" id="shijian" style='border:solid 1px #000000; color:#666666;width:80px' /> 内容：<input name="neirong" type="text" id="neirong" style='border:solid 1px #000000; color:#666666;width:80px' /> 薪水：<input name="xinshui1" type="text" id="xinshui1"  value='' style='border:solid 1px #000000; color:#666666;width:30px' />-<input name="xinshui2" type="text" id="xinshui2"  value='' style='border:solid 1px #000000; color:#666666;width:30px' /> 发布人：<input name="faburen" type="text" id="faburen" style='border:solid 1px #000000; color:#666666;width:80px' /> 排序
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
    <td bgcolor='#CCFFFF'>发布人</td>
    <td bgcolor='#CCFFFF' width='80' align='center'>是否已接单</td>
    
	
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
    <td width="120" align="center" bgcolor="#CCFFFF">操作</td>
  </tr>
  <?php 
    $sql="select * from jiazhengfuwufabu where 1=1";
  
if ($_POST["dingdanhao"]!=""){$nreqdingdanhao=$_POST["dingdanhao"];$sql=$sql." and dingdanhao like '%$nreqdingdanhao%'";}
if ($_POST["lianxiren"]!=""){$nreqlianxiren=$_POST["lianxiren"];$sql=$sql." and lianxiren like '%$nreqlianxiren%'";}
if ($_POST["lianxirenshouji"]!=""){$nreqlianxirenshouji=$_POST["lianxirenshouji"];$sql=$sql." and lianxirenshouji like '%$nreqlianxirenshouji%'";}
if ($_POST["fuwuleixing"]!=""){$nreqfuwuleixing=$_POST["fuwuleixing"];$sql=$sql." and fuwuleixing like '%$nreqfuwuleixing%'";}
if ($_POST["shijian"]!=""){$nreqshijian=$_POST["shijian"];$sql=$sql." and shijian like '%$nreqshijian%'";}
if ($_POST["neirong"]!=""){$nreqneirong=$_POST["neirong"];$sql=$sql." and neirong like '%$nreqneirong%'";}
if ($_POST["xinshui1"]!=""){$nreqxinshui1=$_POST["xinshui1"];$sql=$sql." and xinshui >= $nreqxinshui1";}
if ($_POST["xinshui2"]!=""){$nreqxinshui2=$_POST["xinshui2"];$sql=$sql." and xinshui <= $nreqxinshui2";}
if ($_POST["faburen"]!=""){$nreqfaburen=$_POST["faburen"];$sql=$sql." and faburen like '%$nreqfaburen%'";}
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
    <td><?php echo mysql_result($query,$i,faburen);?></td>
    <td align='center'>
	<a href="sh.php?id=<?php echo mysql_result($query,$i,"id") ?>&yuan=<?php echo mysql_result($query,$i,"issh")?>&tablename=jiazhengfuwufabu" onclick="return confirm('您确定要执行此操作？')"><?php echo mysql_result($query,$i,"issh")?></a></td>
    
	<td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    
	<td width="120" align="center">
	<a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=jiazhengfuwufabu" onclick="return confirm('真的要删除？')">删除</a> 
	<a href="jiazhengfuwufabu_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">修改</a> 
	<a href="jiazhengfuwufabudetail.php?id=<?php echo mysql_result($query,$i,"id");?>" target="_blank">详细</a> </td>
  
  </tr>
  	<?php
	}
}
?>
</table>
<p>以上数据共<?php echo $rowscount;?>条, 
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" style='border:solid 1px #000000; color:#666666' /> <input type="button" name="Submit3" onclick="javascript:location.href='jiazhengfuwufabu_listxls.php';" value="导出EXCEL" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="jiazhengfuwufabu_list.php?pagecurrent=1">首页</a>, <a href="jiazhengfuwufabu_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="jiazhengfuwufabu_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="jiazhengfuwufabu_list.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>

</body>
</html>

