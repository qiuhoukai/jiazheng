<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$dingdanhao=$_POST["dingdanhao"];    $lianxiren=$_POST["lianxiren"];    $lianxirenshouji=$_POST["lianxirenshouji"];    $fuwuleixing=$_POST["fuwuleixing"];    $shijian=$_POST["shijian"];    $neirong=$_POST["neirong"];    $xinshui=$_POST["xinshui"];    $faburen=$_POST["faburen"];    $jiedanren=$_POST["jiedanren"];    $zhuangtai=$_POST["zhuangtai"];    
	
	
	
	
	
	$sql="insert into jiedan(dingdanhao,lianxiren,lianxirenshouji,fuwuleixing,shijian,neirong,xinshui,faburen,jiedanren,zhuangtai) values('$dingdanhao','$lianxiren','$lianxirenshouji','$fuwuleixing','$shijian','$neirong','$xinshui','$faburen','$jiedanren','$zhuangtai') ";
	mysql_query($sql);
	
	//echo "<script>javascript:alert('操作成功!');history.go(-2);</script>";
echo "<script>javascript:alert('操作成功!');location.href='jiazhengfuwufabulist.php';</script>";  


}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>接单</title>

<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="css.css" type="text/css">
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
</script>
<body>
<p>添加接单： 当前日期： <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	
}
	function gow()
	{
		location.href='jiedan_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
	}
	function hsgxia2shxurxu(nstr,nwbk)
{
	if (eval("form1."+nwbk).value.indexOf(nstr)>=0)
	{
		eval("form1."+nwbk).value=eval("form1."+nwbk).value.replace(nstr+"；", "");
	}
	else
	{
		eval("form1."+nwbk).value=eval("form1."+nwbk).value+nstr+"；";
	}
}
</script>

 <?php
 $sql="select * from jiazhengfuwufabu where id=".$_GET["id"];
 $query=mysql_query($sql);
 $rowscount=mysql_num_rows($query);
 if($rowscount>0)
 {
 	$dingdanhao=mysql_result($query,0,dingdanhao); 	$lianxiren=mysql_result($query,0,lianxiren); 	$lianxirenshouji=mysql_result($query,0,lianxirenshouji); 	$fuwuleixing=mysql_result($query,0,fuwuleixing); 	$shijian=mysql_result($query,0,shijian); 	$neirong=mysql_result($query,0,neirong); 	$xinshui=mysql_result($query,0,xinshui); 	$faburen=mysql_result($query,0,faburen); 	
 }
?>

<form id="form1" name="form1" method="post" action="?id=<?php echo $_GET["id"]?>">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>订单号：</td><td><input name='dingdanhao' type='text' id='dingdanhao' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><script language="javascript">document.form1.dingdanhao.value='<?php echo $dingdanhao?>';document.form1.dingdanhao.setAttribute("readOnly",'true');</script>    <tr><td>联系人：</td><td><input name='lianxiren' type='text' id='lianxiren' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><script language="javascript">document.form1.lianxiren.value='<?php echo $lianxiren?>';document.form1.lianxiren.setAttribute("readOnly",'true');</script>    <tr><td>联系人手机：</td><td><input name='lianxirenshouji' type='text' id='lianxirenshouji' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><script language="javascript">document.form1.lianxirenshouji.value='<?php echo $lianxirenshouji?>';document.form1.lianxirenshouji.setAttribute("readOnly",'true');</script>    <tr><td>服务类型：</td><td><input name='fuwuleixing' type='text' id='fuwuleixing' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><script language="javascript">document.form1.fuwuleixing.value='<?php echo $fuwuleixing?>';document.form1.fuwuleixing.setAttribute("readOnly",'true');</script>    <tr><td>时间：</td><td><input name='shijian' type='text' id='shijian' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><script language="javascript">document.form1.shijian.value='<?php echo $shijian?>';document.form1.shijian.setAttribute("readOnly",'true');</script>    <tr><td>内容：</td><td><input name='neirong' type='text' id='neirong' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><script language="javascript">document.form1.neirong.value='<?php echo $neirong?>';document.form1.neirong.setAttribute("readOnly",'true');</script>    <tr><td>薪水：</td><td><input name='xinshui' type='text' id='xinshui' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><script language="javascript">document.form1.xinshui.value='<?php echo $xinshui?>';document.form1.xinshui.setAttribute("readOnly",'true');</script>    <tr><td>发布人：</td><td><input name='faburen' type='text' id='faburen' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><script language="javascript">document.form1.faburen.value='<?php echo $faburen?>';document.form1.faburen.setAttribute("readOnly",'true');</script>    <tr><td>接单人：</td><td><input name='jiedanren' type='text' id='jiedanren' value='<?php echo $_SESSION['username'];?>' style='border:solid 1px #000000; color:#666666' readonly='readonly' /></td></tr>    <tr><td>状态：</td><td><select name='zhuangtai' id='zhuangtai'><option value="已接单">已接单</option><option value="工作中">工作中</option><option value="已结算">已结算</option></select></td></tr>    

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="添加" onclick="return check();"  style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="重置" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>

</body>
</html>

