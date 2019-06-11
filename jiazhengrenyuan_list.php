<?php 
//管理员后台
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>家政人员</title>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>已有家政人员列表：</p>
<form id="form1" name="form1" method="post" action="">
  搜索: 家政编号：<input name="jiazhengbianhao" type="text" id="jiazhengbianhao" style='border:solid 1px #000000; color:#666666;width:80px' /> 家政姓名：<input name="jiazhengxingming" type="text" id="jiazhengxingming" style='border:solid 1px #000000; color:#666666;width:80px' /> 家政性别：<select name='jiazhengxingbie' id='jiazhengxingbie' style='border:solid 1px #000000; color:#666666;'><option value="">所有</option><option value="男">男</option><option value="女">女</option></select> 出生日期：<input name="chushengriqi1" type="text" id="chushengriqi1"  value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})"  style='border:solid 1px #000000; color:#666666; width:80px;' />-<input name="chushengriqi2" type="text" id="chushengriqi2"  value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})"  style='border:solid 1px #000000; color:#666666; width:80px;' /> 排序
  <select name="paixu" id="paixu">
    <option value="addtime">添加时间</option>
	<option value="chushengriqi">出生日期</option>
    
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
    <td bgcolor='#CCFFFF'>家政编号</td>    <td bgcolor='#CCFFFF'>密码</td>    <td bgcolor='#CCFFFF'>家政姓名</td>    <td bgcolor='#CCFFFF'>家政性别</td>    <td bgcolor='#CCFFFF'>服务类型</td>    <td bgcolor='#CCFFFF'>出生日期</td>    <td bgcolor='#CCFFFF'>家政手机</td>    <td bgcolor='#CCFFFF'>照片</td>    <td bgcolor='#CCFFFF' width='80' align='center'>是否审核</td>    
	
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
    <td width="120" align="center" bgcolor="#CCFFFF">操作</td>
  </tr>
  <?php 
    $sql="select * from jiazhengrenyuan where 1=1";
  if ($_POST["jiazhengbianhao"]!=""){$nreqjiazhengbianhao=$_POST["jiazhengbianhao"];$sql=$sql." and jiazhengbianhao like '%$nreqjiazhengbianhao%'";}if ($_POST["jiazhengxingming"]!=""){$nreqjiazhengxingming=$_POST["jiazhengxingming"];$sql=$sql." and jiazhengxingming like '%$nreqjiazhengxingming%'";}if ($_POST["jiazhengxingbie"]!=""){$nreqjiazhengxingbie=$_POST["jiazhengxingbie"];$sql=$sql." and jiazhengxingbie like '%$nreqjiazhengxingbie%'";}if ($_POST["chushengriqi1"]!=""){$nreqchushengriqi1=$_POST["chushengriqi1"];$sql=$sql." and chushengriqi >= '$nreqchushengriqi1'";}if ($_POST["chushengriqi2"]!=""){$nreqchushengriqi2=$_POST["chushengriqi2"];$sql=$sql." and chushengriqi <= '$nreqchushengriqi2'";}
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
    <td><?php echo mysql_result($query,$i,jiazhengbianhao);?></td>    <td><?php echo mysql_result($query,$i,mima);?></td>    <td><?php echo mysql_result($query,$i,jiazhengxingming);?></td>    <td><?php echo mysql_result($query,$i,jiazhengxingbie);?></td>    <td><?php echo mysql_result($query,$i,fuwuleixing);?></td>    <td><?php echo mysql_result($query,$i,chushengriqi);?></td>    <td><?php echo mysql_result($query,$i,jiazhengshouji);?></td>    <td width='80'><a href="<?php echo mysql_result($query,$i,zhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,zhaopian) ?>' width='80' height='88' border='0'></a></td>        <td align='center'><a href="sh.php?id=<?php echo mysql_result($query,$i,"id") ?>&yuan=<?php echo mysql_result($query,$i,"issh")?>&tablename=jiazhengrenyuan" onclick="return confirm('您确定要执行此操作？')"><?php echo mysql_result($query,$i,"issh")?></a></td>
	
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="120" align="center"><a href="del_g_j.php?jiazhengbianhao=<?php echo mysql_result($query,$i,"jiazhengbianhao");?>&tablename=jiazhengrenyuan" onclick="return confirm('确认删除？')">删除</a> <a href="jiazhengrenyuan_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">修改</a> <a href="jiazhengrenyuandetail.php?id=<?php echo mysql_result($query,$i,"id");?>" target="_blank">详细</a> </td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>以上数据共<?php echo $rowscount;?>条, 
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" style='border:solid 1px #000000; color:#666666' /> <input type="button" name="Submit3" onclick="javascript:location.href='jiazhengrenyuan_listxls.php';" value="导出EXCEL" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="jiazhengrenyuan_list.php?pagecurrent=1">首页</a>, <a href="jiazhengrenyuan_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="jiazhengrenyuan_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="jiazhengrenyuan_list.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>

</body>
</html>

