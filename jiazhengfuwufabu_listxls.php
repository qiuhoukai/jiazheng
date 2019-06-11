<?php 
include_once 'conn.php';
header("Content-Type: application/vnd.ms-execl");   
header("Content-Disposition: attachment; filename=家政服务发布.xls");   
header("Pragma: no-cache");   
header("Expires: 0");  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>家政服务发布</title>
</head>

<body>

<p>已有家政服务发布列表：</p>
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
  </tr>
  <?php 
    $sql="select * from jiazhengfuwufabu order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  

for($i=0;$i<$rowscount;$i++)
{
  ?>
  <tr>
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,dingdanhao);?></td>
    <td><?php echo mysql_result($query,$i,lianxiren);?></td>
    <td><?php echo mysql_result($query,$i,lianxirenshouji);?></td>
    <td><?php echo mysql_result($query,$i,fuwuleixing);?></td>
    <td><?php echo mysql_result($query,$i,shijian);?></td>
    <td><?php echo mysql_result($query,$i,neirong);?></td>
    <td><?php echo mysql_result($query,$i,xinshui);?></td>
    <td><?php echo mysql_result($query,$i,faburen);?></td>
    <td align='center'><a href="sh.php?id=<?php echo mysql_result($query,$i,"id") ?>&yuan=<?php echo mysql_result($query,$i,"issh")?>&tablename=jiazhengfuwufabu" onclick="return confirm('您确定要执行此操作？')"><?php echo mysql_result($query,$i,"issh")?></a></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    
  </tr>
  	<?php
}
?>
</table>

</body>
</html>

