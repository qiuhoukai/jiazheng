<?php
session_start();
//xuxyxaodenxglxxu
include_once 'conn.php';
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
    
	
	
	ischongfu("select id from jiazhengrenyuan where  jiazhengbianhao='$jiazhengbianhao'");
	if(empty($zhaopian))
	{
		$zhaopian="uploadfile/null.jpg";
	}
	$sql="insert into jiazhengrenyuan(jiazhengbianhao,mima,jiazhengxingming,jiazhengxingbie,fuwuleixing,chushengriqi,jiazhengshouji,zhaopian,jiazhengjianjie) values('$jiazhengbianhao','$mima','$jiazhengxingming','$jiazhengxingbie','$fuwuleixing','$chushengriqi','$jiazhengshouji','$zhaopian','$jiazhengjianjie') ";
	mysql_query($sql);
	
	echo "<script>javascript:alert('ע��ɹ�!�������Ա��˺󷽿�������½��');location.href='index.php';</script>";  



}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������Ա</title>
<link rel="stylesheet" type="text/css" href="qtimages/css/fxke.css"/>
<link rel="stylesheet" href="qtimages/hsgbanner.css">
<script type="text/javascript" src="qtimages/jquery.js"></script>
<script type="text/javascript" src="qtimages/inc.js"></script>
<style type="text/css">
<!--
.STYLE2 {
	font-size: 20px;
	font-weight: bold;
	color: #078548;
}
-->
</style>
</head>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
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
	function check()
{
	if(document.form1.jiazhengbianhao.value==""){alert("������������");document.form1.jiazhengbianhao.focus();return false;}
    if(document.form1.jiazhengxingming.value==""){alert("�������������");document.form1.jiazhengxingming.focus();return false;}
    if(!(/^1[3|4|5|6|7|8|9][0-9]\d{8,8}$/.test(document.form1.jiazhengshouji.value))){alert("�����ֻ������ֻ���ʽ");document.form1.jiazhengshouji.focus();return false;}
    
}
	function gow()
	{
		location.href='jiazhengrenyuanadd.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
	}
</script>

<body>

<!--��ͷ���Ŀ�ʼ-->
<?php include_once 'qttop.php';?>

<!--��ͷ���Ľ���--> <!--��Ʒ����ban��ʼ-->
<div class="cpzxban"></div>

<!--��Ʒ����ban����-->

<!--�������ݵĿ�ʼ-->
<div class="fxmain">
  <!--�������ʼ-->
  <div class="fx_fenlei">
     <div class="leibei fl">
       <ul>
         <li><a class="diyi" >������Ա</a></li>
         <!--<li><a href="#">��ҵ��̬</a></li>
         <li><a href="#">������ʶ</a></li>
         <li><a href="#">����֧��</a></li>-->
       </ul>
     </div>
     <div class="dqwz fr">
     ��ǰλ�ã�<a href="index.php">��վ��ҳ</a> &gt; ������Ա     </div> 
  </div>
  <!--����������-->
  <!--��ϸ���ݵĿ�ʼ-->
  <div class="fxmain_nr">
    
	 

<form id="form1" name="form1" method="post" action="">
<table width="98%" border="0"  align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse" class="newsline">    
	<tr><td>������ţ�</td><td><input name='jiazhengbianhao' type='text' id='jiazhengbianhao' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>
    <tr><td>���룺</td><td><input name='mima' type='text' id='mima' value='' style='border:solid 1px #000000; color:#666666' /></td></tr>
    <tr><td>����������</td><td><input name='jiazhengxingming' type='text' id='jiazhengxingming' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>
    <tr><td>�����Ա�</td><td><select name='jiazhengxingbie' id='jiazhengxingbie'><option value="��">��</option><option value="Ů">Ů</option></select></td></tr>
    <tr><td>�������ͣ�</td><td><select name='fuwuleixing' id='fuwuleixing'><?php getoption("fuwuleixingxinxi","fuwuleixing")?></select></td></tr>
    <tr><td>�������ڣ�</td><td><input name='chushengriqi' type='text' id='chushengriqi' value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})" style='border:solid 1px #000000; color:#666666;  width:90px;' /></td></tr>
    <tr><td>�����ֻ���</td><td><input name='jiazhengshouji' type='text' id='jiazhengshouji' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;�����ֻ���ʽ</td></tr>
    <tr><td>��Ƭ��</td><td><input name='zhaopian' type='text' id='zhaopian' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr>
    
    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="ȷ��" onclick="return check();"   />
      <input type="reset" name="Submit2" value="����"  /></td>
    </tr>
  </table>
</form>

<?php
	function ischongfu($sql)
	{
		$query=mysql_query($sql);
 		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			echo "<script>javascript:alert('�Բ���������ļ�������Ѿ����ڣ�������!');history.back();</script>";
			exit;
		}
		
	}
?>
					
  </div>
  
  <!--��ϸ���ݵĽ���-->
  
</div>

<!--�������ݵĽ���-->





<!--�ײ��Ŀ�ʼ-->
<?php include_once 'qtdown.php';?>
<!--�ײ��Ľ���-->

</body>
</html>
