<?php 
session_start();
include_once 'conn.php';
$id=$_GET["id"];
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$dingdanhao=$_POST["dingdanhao"];    $lianxiren=$_POST["lianxiren"];    $lianxirenshouji=$_POST["lianxirenshouji"];    $fuwuleixing=$_POST["fuwuleixing"];    $shijian=$_POST["shijian"];    $neirong=$_POST["neirong"];    $xinshui=$_POST["xinshui"];    $faburen=$_POST["faburen"];    $jiedanren=$_POST["jiedanren"];    $zhuangtai=$_POST["zhuangtai"];    
	
	$sql="update jiedan set dingdanhao='$dingdanhao',lianxiren='$lianxiren',lianxirenshouji='$lianxirenshouji',fuwuleixing='$fuwuleixing',shijian='$shijian',neirong='$neirong',xinshui='$xinshui',faburen='$faburen',jiedanren='$jiedanren',zhuangtai='$zhuangtai' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('�޸ĳɹ�!');</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�޸Ľӵ�</title>

<link rel="stylesheet" href="css.css" type="text/css">
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
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
	function hsgxia2shxurxu(nstr,nwbk)
{
	if (eval("form1."+nwbk).value.indexOf(nstr)>=0)
	{
		eval("form1."+nwbk).value=eval("form1."+nwbk).value.replace(nstr+"��", "");
	}
	else
	{
		eval("form1."+nwbk).value=eval("form1."+nwbk).value+nstr+"��";
	}
}
</script>

<body>
<p>�޸Ľӵ��� ��ǰ���ڣ� <?php echo $ndate; ?></p>
<?php
$sql="select * from jiedan where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{

?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 

      <tr><td>�����ţ�</td><td><input name='dingdanhao' type='text' id='dingdanhao' value='<?php echo mysql_result($query,0,dingdanhao);?>' /></td></tr>      <tr><td>��ϵ�ˣ�</td><td><input name='lianxiren' type='text' id='lianxiren' value='<?php echo mysql_result($query,0,lianxiren);?>' /></td></tr>      <tr><td>��ϵ���ֻ���</td><td><input name='lianxirenshouji' type='text' id='lianxirenshouji' value='<?php echo mysql_result($query,0,lianxirenshouji);?>' /></td></tr>      <tr><td>�������ͣ�</td><td><input name='fuwuleixing' type='text' id='fuwuleixing' value='<?php echo mysql_result($query,0,fuwuleixing);?>' /></td></tr>      <tr><td>ʱ�䣺</td><td><input name='shijian' type='text' id='shijian' value='<?php echo mysql_result($query,0,shijian);?>' /></td></tr>      <tr><td>���ݣ�</td><td><input name='neirong' type='text' id='neirong' value='<?php echo mysql_result($query,0,neirong);?>' /></td></tr>      <tr><td>нˮ��</td><td><input name='xinshui' type='text' id='xinshui' value='<?php echo mysql_result($query,0,xinshui);?>' /></td></tr>      <tr><td>�����ˣ�</td><td><input name='faburen' type='text' id='faburen' value='<?php echo mysql_result($query,0,faburen);?>' /></td></tr>      <tr><td>�ӵ��ˣ�</td><td><input name='jiedanren' type='text' id='jiedanren' value='<?php echo mysql_result($query,0,jiedanren);?>' /></td></tr>      <tr><td>״̬��</td><td><select name='zhuangtai' id='zhuangtai'><option value="�ѽӵ�">�ѽӵ�</option><option value="������">������</option><option value="�ѽ���">�ѽ���</option></select></td></tr><script language="javascript">document.form1.zhuangtai.value='<?php echo mysql_result($query,0,zhuangtai);?>';</script>      
   
   
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="�޸�" style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="����" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

