<?php
//用户的 被接单信息
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>接单</title>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>已有接单列表：</p>
<form id="form1" name="form1" method="post" action="">
  搜索: 订单号：<input name="dingdanhao" type="text" id="dingdanhao" style='border:solid 1px #000000; color:#666666;width:80px' /> 联系人：<input name="lianxiren" type="text" id="lianxiren" style='border:solid 1px #000000; color:#666666;width:80px' /> 联系人手机：<input name="lianxirenshouji" type="text" id="lianxirenshouji" style='border:solid 1px #000000; color:#666666;width:80px' /> 状态：<select name='zhuangtai' id='zhuangtai' style='border:solid 1px #000000; color:#666666;'><option value="">所有</option><option value="已接单">已接单</option><option value="工作中">工作中</option><option value="已结算">已结算</option></select> 排序
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
    <td bgcolor='#CCFFFF'>订单号</td>    <td bgcolor='#CCFFFF'>联系人</td>    <td bgcolor='#CCFFFF'>联系人手机</td>    <td bgcolor='#CCFFFF'>服务类型</td>    <td bgcolor='#CCFFFF'>时间</td>    <td bgcolor='#CCFFFF'>内容</td>    <td bgcolor='#CCFFFF'>薪水</td>    <td bgcolor='#CCFFFF'>发布人</td>    <td bgcolor='#CCFFFF'>接单人</td>    <td bgcolor='#CCFFFF'>状态</td>    
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
    <td width="120" align="center" bgcolor="#CCFFFF">操作</td>
  </tr>
  <?php
     $sql="select * from jiedan where faburen='".$_SESSION['username']."'";
	// and zhuangtai ='申请撤销订单'||'已接单'||'已结算'if ($_POST["dingdanhao"]!=""){$nreqdingdanhao=$_POST["dingdanhao"];$sql=$sql." and dingdanhao like '%$nreqdingdanhao%'";}if ($_POST["lianxiren"]!=""){$nreqlianxiren=$_POST["lianxiren"];$sql=$sql." and lianxiren like '%$nreqlianxiren%'";}if ($_POST["lianxirenshouji"]!=""){$nreqlianxirenshouji=$_POST["lianxirenshouji"];$sql=$sql." and lianxirenshouji like '%$nreqlianxirenshouji%'";}if ($_POST["zhuangtai"]!=""){$nreqzhuangtai=$_POST["zhuangtai"];$sql=$sql." and zhuangtai like '%$nreqzhuangtai%'";}
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
    <td><?php echo mysql_result($query,$i,dingdanhao);?></td>    <td><?php echo mysql_result($query,$i,lianxiren);?></td>    <td><?php echo mysql_result($query,$i,lianxirenshouji);?></td>    <td><?php echo mysql_result($query,$i,fuwuleixing);?></td>    <td><?php echo mysql_result($query,$i,shijian);?></td>    <td><?php echo mysql_result($query,$i,neirong);?></td>    <td><?php echo mysql_result($query,$i,xinshui);?></td>    <td><?php echo mysql_result($query,$i,faburen);?></td>    <td><?php echo mysql_result($query,$i,jiedanren);?></td>    <td><?php echo mysql_result($query,$i,zhuangtai);?></td>    
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="70" align="center">
	
	<?php if(mysql_result($query,$i,zhuangtai)=="已接单"){?>
	<a href="jiedan_detail.php?id=<?php echo mysql_result($query,$i,"id");?>">详细</a><br>
	<a href="jiedan_ed_chexiao.php?dingdanhao=<?php echo mysql_result($query,$i,"dingdanhao");?>">申请取消订单</a></td>
  	<?php }?>
	<?php if(mysql_result($query,$i,zhuangtai)=="已结算"){?>
	<a href="jiedan_detail.php?id=<?php echo mysql_result($query,$i,"id");?>">详细</a>
  	<?php }?>
	<?php if(mysql_result($query,$i,zhuangtai)=="申请撤销订单"){?>
	<a href="jiedan_ed_chongfa.php?dingdanhao=<?php echo mysql_result($query,$i,"dingdanhao");?>&tablename=jiedan" onclick="return confirm('真的要重新发起订单？')">重新发起订单</a> <br>
	<a href="jiedan_detail.php?id=<?php echo mysql_result($query,$i,"id");?>">详细</a>
  	<?php }?>
  
  
  
  </tr>
  	<?php
	}
}
?>
</table>
<p>以上数据共<?php echo $rowscount;?>条, 
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="jiedan_list3.php?pagecurrent=1">首页</a>, <a href="jiedan_list3.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="jiedan_list3.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="jiedan_list3.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>

</body>
</html>

