<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$dingdanhao=$_POST["dingdanhao"];    $lianxiren=$_POST["lianxiren"];    $lianxirenshouji=$_POST["lianxirenshouji"];    $fuwuleixing=$_POST["fuwuleixing"];    $shijian=$_POST["shijian"];    $neirong=$_POST["neirong"];    $xinshui=$_POST["xinshui"];    $faburen=$_POST["faburen"];    
	
	
	
	
	
	$sql="insert into jiazhengfuwufabu(dingdanhao,lianxiren,lianxirenshouji,fuwuleixing,shijian,neirong,xinshui,faburen) values('$dingdanhao','$lianxiren','$lianxirenshouji','$fuwuleixing','$shijian','$neirong','$xinshui','$faburen') ";
	mysql_query($sql);
	
	echo "<script>javascript:alert('操作成功!');location.href='jiazhengfuwufabu_list2.php';</script>";  



}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>家政服务发布</title>

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
<p>添加家政服务发布： 当前日期： <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.lianxiren.value==""){alert("请输入联系人");document.form1.lianxiren.focus();return false;}    if(document.form1.lianxirenshouji.value==""){alert("请输入联系人手机");document.form1.lianxirenshouji.focus();return false;}    if(!(/^1[3|4|5|6|7|8|9][0-9]\d{8,8}$/.test(document.form1.lianxirenshouji.value))){alert("联系人手机必需手机格式");document.form1.lianxirenshouji.focus();return false;}    if(document.form1.fuwuleixing.value==""){alert("请输入服务类型");document.form1.fuwuleixing.focus();return false;}    if(document.form1.shijian.value==""){alert("请输入时间");document.form1.shijian.focus();return false;}    if(document.form1.neirong.value==""){alert("请输入内容");document.form1.neirong.focus();return false;}    if(document.form1.xinshui.value==""){alert("请输入薪水");document.form1.xinshui.focus();return false;}    if((/^[0-9]+.?[0-9]*$/.test(document.form1.xinshui.value))){}else{alert("薪水必需数字型");document.form1.xinshui.focus();return false;}    
}
	function gow()
	{
		location.href='jiazhengfuwufabu_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
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



<form id="form1" name="form1" method="post" action="?id=<?php echo $_GET["id"]?>">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>订单号：</td><td><input name='dingdanhao' type='text' readonly="readonly" id='dingdanhao' value='<?php echo makefilename2()?>' style='border:solid 1px #000000; color:#666666' /></td></tr>    <tr><td>联系人：</td><td><input name='lianxiren' type='text' id='lianxiren' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>    <tr><td>联系人手机：</td><td><input name='lianxirenshouji' type='text' id='lianxirenshouji' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*&nbsp;必需手机格式</td></tr>    <tr><td>服务类型：</td><td><select name='fuwuleixing' id='fuwuleixing'><?php getoption("fuwuleixingxinxi","fuwuleixing")?></select>&nbsp;*</td></tr>    <tr><td>时间：</td><td><input name='shijian' type='text' id='shijian' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>    <tr><td>内容：</td><td><input name='neirong' type='text' id='neirong' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;*</td></tr>    <tr><td>薪水：</td><td><input name='xinshui' type='text' id='xinshui' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*&nbsp;必需数字型</td></tr>    <tr><td>发布人：</td><td><input name='faburen' type='text' id='faburen' value='<?php echo $_SESSION['username'];?>' style='border:solid 1px #000000; color:#666666' readonly='readonly' /></td></tr>    

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

