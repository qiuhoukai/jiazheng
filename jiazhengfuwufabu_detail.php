<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�������񷢲���ϸ</title><link rel="stylesheet" href="css.css" type="text/css">
</head>
<body>
<p>�������񷢲���ϸ��</p>
					<?php
$sql="select * from jiazhengfuwufabu where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="90%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <tr>
	  <td width='11%'>�����ţ�</td><td width='39%'><?php echo mysql_result($query,0,dingdanhao);?></td>      <td width='11%'>��ϵ�ˣ�</td><td width='39%'><?php echo mysql_result($query,0,lianxiren);?></td></tr><tr>      <td width='11%'>��ϵ���ֻ���</td><td width='39%'><?php echo mysql_result($query,0,lianxirenshouji);?></td>      <td width='11%'>�������ͣ�</td><td width='39%'><?php echo mysql_result($query,0,fuwuleixing);?></td></tr><tr>      <td width='11%'>ʱ�䣺</td><td width='39%'><?php echo mysql_result($query,0,shijian);?></td>      <td width='11%'>���ݣ�</td><td width='39%'><?php echo mysql_result($query,0,neirong);?></td></tr><tr>      <td width='11%'>нˮ��</td><td width='39%'><?php echo mysql_result($query,0,xinshui);?></td>      <td width='11%'>�����ˣ�</td><td width='39%'><?php echo mysql_result($query,0,faburen);?></td>      </tr><tr>      <td colspan=4 align=center><input type=button name=Submit5 value=���� onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666'  /> <input type="button" name="Submit2" onclick="javascript:window.print();" value='��ӡ��ҳ' style='border:solid 1px #000000; color:#666666' /></td></tr>
    
     
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

