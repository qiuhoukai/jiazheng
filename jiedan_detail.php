<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ӵ���ϸ</title><link rel="stylesheet" href="css.css" type="text/css">
</head>
<body>
<p>�ӵ���ϸ��</p>
					<?php
$sql="select * from jiedan where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="90%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <tr>
	  <td width='11%'>�����ţ�</td><td width='39%'><?php echo mysql_result($query,0,dingdanhao);?></td>
    
     
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>
