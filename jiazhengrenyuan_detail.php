<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>家政人员详细</title><link rel="stylesheet" href="css.css" type="text/css">
</head>
<body>
<p>家政人员详细：</p>
					<?php
$sql="select * from jiazhengrenyuan where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="90%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <tr>
	  <td width='11%' height=44>家政编号：</td><td width='39%'><?php echo mysql_result($query,0,jiazhengbianhao);?></td><td  rowspan=7 align=center><a href=<?php echo mysql_result($query,0,zhaopian);?> target=_blank><img src=<?php echo mysql_result($query,0,zhaopian);?> width=228 height=215 border=0></a></td></tr><tr>
      <td width='11%' height=44>密码：</td><td width='39%'><?php echo mysql_result($query,0,mima);?></td></tr><tr>
      <td width='11%' height=44>家政姓名：</td><td width='39%'><?php echo mysql_result($query,0,jiazhengxingming);?></td></tr><tr>
      <td width='11%' height=44>家政性别：</td><td width='39%'><?php echo mysql_result($query,0,jiazhengxingbie);?></td></tr><tr>
      <td width='11%' height=44>服务类型：</td><td width='39%'><?php echo mysql_result($query,0,fuwuleixing);?></td></tr><tr>
      <td width='11%' height=44>出生日期：</td><td width='39%'><?php echo mysql_result($query,0,chushengriqi);?></td></tr><tr>
      <td width='11%' height=44>家政手机：</td><td width='39%'><?php echo mysql_result($query,0,jiazhengshouji);?></td></tr><tr>
      <td colspan=3 align=center><input type=button name=Submit5 value=返回 onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666'  /> <input type="button" name="Submit2" onclick="javascript:window.print();" value='打印本页' style='border:solid 1px #000000; color:#666666' /></td></tr>
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

