<?php
session_start();
include_once 'conn.php';

$id=$_GET["id"];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�������񷢲�</title>
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
         <li><a class="diyi" >�������񷢲�</a></li>
         <!--<li><a href="#">��ҵ��̬</a></li>
         <li><a href="#">������ʶ</a></li>
         <li><a href="#">����֧��</a></li>-->
       </ul>
     </div>
     <div class="dqwz fr">
     ��ǰλ�ã�<a href="index.php">��վ��ҳ</a> &gt; �������񷢲�     </div> 
  </div>
  <!--����������-->
  <!--��ϸ���ݵĿ�ʼ-->
  <div class="fxmain_nr">
    
	 						 <?php
$sql="select id,dingdanhao,lianxiren,fuwuleixing,shijian,neirong,xinshui,faburen from jiazhengfuwufabu where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="98%" border="0"  align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse" class="newsline"> 
      <tr>
	  <td width='11%'>�����ţ�</td><td width='39%'><?php echo mysql_result($query,0,dingdanhao);?></td>
    <td width='11%'>��ϵ�ˣ�</td><td width='39%'><?php echo mysql_result($query,0,lianxiren);?></td></tr><tr>
  
    <td width='11%'>�������ͣ�</td><td width='39%'><?php echo mysql_result($query,0,fuwuleixing);?></td></tr><tr>
    <td width='11%'>ʱ�䣺</td><td width='39%'><?php echo mysql_result($query,0,shijian);?></td>
    <td width='11%'>���ݣ�</td><td width='39%'><?php echo mysql_result($query,0,neirong);?></td></tr><tr>
    <td width='11%'>нˮ��</td><td width='39%'><?php echo mysql_result($query,0,xinshui);?></td>
    <td width='11%'>�����ˣ�</td><td width='39%'><?php echo mysql_result($query,0,faburen);?></td>
    </tr>
	<tr><td colspan=4 align=center>
	<input type="button" name="Submit5" value="����" onClick="javascript:history.back()"   /> 
	<input type="button" name="Submit52" value="��ӡ" onClick="javascript:window.print()"  /> <!--jixaaxnnxiu-->
	<input type="button" name="Submit522" value="�ӵ�" onclick="javascript:location.href='jiedanadd.php?id=<?php echo $id;?>';">
	</td>
	</tr>
    
     
  </table>

<?php
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

