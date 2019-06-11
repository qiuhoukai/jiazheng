<?php 
session_start();
include_once 'conn.php';
$id=$_GET["id"];
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$jiazhengbianhao=$_POST["jiazhengbianhao"];
    $mima=$_POST["mima"];
    $jiazhengxingming=$_POST["jiazhengxingming"];
    $jiazhengxingbie=$_POST["jiazhengxingbie"];
    $fuwuleixing=$_POST["fuwuleixing"];
    $chushengriqi=$_POST["chushengriqi"];
    $jiazhengshouji=$_POST["jiazhengshouji"];
    $zhaopian=$_POST["zhaopian"];
    $jiazhengjianjie=$_POST["jiazhengjianjie"];
    
	
	$sql="update jiazhengrenyuan set jiazhengbianhao='$jiazhengbianhao',mima='$mima',jiazhengxingming='$jiazhengxingming',jiazhengxingbie='$jiazhengxingbie',fuwuleixing='$fuwuleixing',chushengriqi='$chushengriqi',jiazhengshouji='$jiazhengshouji',zhaopian='$zhaopian',jiazhengjianjie='$jiazhengjianjie' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');history.go(-2)</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改家政人员</title>
<link rel="stylesheet" href="kindeditor-4.1.10/themes/default/default.css" />
	<link rel="stylesheet" href="kindeditor-4.1.10/plugins/code/prettify.css" />
	<script charset="utf-8" src="kindeditor-4.1.10/kindeditor.js"></script>
	<script charset="utf-8" src="kindeditor-4.1.10/lang/zh_CN.js"></script>
	<script charset="utf-8" src="kindeditor-4.1.10/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="jiazhengjianjie"]', {
				cssPath : 'kindeditor-4.1.10/plugins/code/prettify.css',
				uploadJson : 'kindeditor-4.1.10/php/upload_json.php',
				fileManagerJson : 'kindeditor-4.1.10/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
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
		eval("form1."+nwbk).value=eval("form1."+nwbk).value.replace(nstr+"；", "");
	}
	else
	{
		eval("form1."+nwbk).value=eval("form1."+nwbk).value+nstr+"；";
	}
}
</script>

<body>
<p>修改家政人员： 当前日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from jiazhengrenyuan where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{

?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 

      <tr><td>家政编号：</td><td><input name='jiazhengbianhao' type='text' id='jiazhengbianhao' value='<?php echo mysql_result($query,0,jiazhengbianhao);?>' /></td></tr>
      <tr><td>密码：</td><td><input name='mima' type='text' id='mima' value='<?php echo mysql_result($query,0,mima);?>' /></td></tr>
      <tr><td>家政姓名：</td><td><input name='jiazhengxingming' type='text' id='jiazhengxingming' value='<?php echo mysql_result($query,0,jiazhengxingming);?>' /></td></tr>
      <tr><td>家政性别：</td><td><select name='jiazhengxingbie' id='jiazhengxingbie'><option value="男">男</option><option value="女">女</option></select></td></tr><script language="javascript">document.form1.jiazhengxingbie.value='<?php echo mysql_result($query,0,jiazhengxingbie);?>';</script>
      <tr><td>服务类型：</td><td><select name='fuwuleixing' id='fuwuleixing'><?php getoption("fuwuleixingxinxi","fuwuleixing")?></select></td></tr><script language="javascript">document.form1.fuwuleixing.value='<?php echo mysql_result($query,0,fuwuleixing);?>';</script>
      <tr><td>出生日期：</td><td><input name='chushengriqi' type='text' id='chushengriqi' value='<?php echo mysql_result($query,0,chushengriqi);?>' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})" style='border:solid 1px #000000; color:#666666;  width:90px;' /></td></tr>
      <tr><td>家政手机：</td><td><input name='jiazhengshouji' type='text' id='jiazhengshouji' value='<?php echo mysql_result($query,0,jiazhengshouji);?>' /></td></tr>
      <tr><td>照片：</td><td><input name='zhaopian' type='text' id='zhaopian' size='50'  value='<?php echo mysql_result($query,0,zhaopian);?>' /> &nbsp;<a href="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr>
      
   
   
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="修改" style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="重置" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

