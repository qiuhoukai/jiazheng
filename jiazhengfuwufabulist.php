<?php
session_start();
include_once 'conn.php';
//ȫ�������б�δ���ӵ�
//��֤��½����ݣ����ǹ���Ա�������Ա�����޷������ҳ�棻

//if($_SESSION['cx']=="�û�"||$_SESSION['cx']=="")
//{
//	echo "<script>javascript:alert('��û��Ȩ��!');history.back();</script>";
//}
if($_SESSION['cx']=="�û�"||$_SESSION['cx']=="")
{
	if($_SESSION['cx']=="")
	{
		echo "<script>javascript:alert('��ֹ�ο����!');history.back();</script>";
	}
	else
	{
		echo "<script>javascript:alert('��û��Ȩ��!');history.back();</script>";
	}
}


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
</style>
</head>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<!--hxsglxiangdxongjxs-->
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
    
	 <form id="form1" name="form1" method="post" action="">
  �����ţ�<input name="dingdanhao" type="text" id="dingdanhao" style='border:solid 1px #000000; color:#666666;width:80px' /> ��ϵ�ˣ�<input name="lianxiren" type="text" id="lianxiren" style='border:solid 1px #000000; color:#666666;width:80px' /> ��ϵ���ֻ���<input name="lianxirenshouji" type="text" id="lianxirenshouji" style='border:solid 1px #000000; color:#666666;width:80px' /> �������ͣ�<select name='fuwuleixing' id='fuwuleixing' style='border:solid 1px #000000; color:#666666;'><option value="">����</option><?php getoption("fuwuleixingxinxi","fuwuleixing")?></select></select> ���ݣ�<input name="neirong" type="text" id="neirong" style='border:solid 1px #000000; color:#666666;width:80px' /> нˮ��<input name="xinshui1" type="text" id="xinshui1"  value='' style='border:solid 1px #000000; color:#666666;width:30px' />-<input name="xinshui2" type="text" id="xinshui2"  value='' style='border:solid 1px #000000; color:#666666;width:30px' /> �����ˣ�<input name="faburen" type="text" id="faburen" style='border:solid 1px #000000; color:#666666;width:80px' />
  <input type="submit" name="Submit" value="����"  />
</form>
<table width="98%" border="0"  align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse" class="newsline">  
  <tr>
    <td   width="25" bgcolor="#CCFFFF">���</td>
    <td bgcolor='#CCFFFF'>������</td><td bgcolor='#CCFFFF'>��ϵ��</td><td bgcolor='#CCFFFF'>��������</td><td bgcolor='#CCFFFF'>ʱ��</td><td bgcolor='#CCFFFF'>����</td><td bgcolor='#CCFFFF'>нˮ</td><td bgcolor='#CCFFFF'>������</td>
    
    <td width="30" align="center" bgcolor="#CCFFFF">����</td>
  </tr>
  <?php 
    
	
	//δ�ӵ���ȫ��ʾ
	
	$sql="select id,dingdanhao,lianxiren,fuwuleixing,shijian,neirong,xinshui,faburen from jiazhengfuwufabu where issh='��'";
  
  
  
  
  
  
  
if ($_POST["dingdanhao"]!=""){$nreqdingdanhao=$_POST["dingdanhao"];$sql=$sql." and dingdanhao like '%$nreqdingdanhao%'";}
if ($_POST["lianxiren"]!=""){$nreqlianxiren=$_POST["lianxiren"];$sql=$sql." and lianxiren like '%$nreqlianxiren%'";}
//if ($_POST["lianxirenshouji"]!=""){$nreqlianxirenshouji=$_POST["lianxirenshouji"];$sql=$sql." and lianxirenshouji like '%$nreqlianxirenshouji%'";}
if ($_POST["fuwuleixing"]!=""){$nreqfuwuleixing=$_POST["fuwuleixing"];$sql=$sql." and fuwuleixing like '%$nreqfuwuleixing%'";}
if ($_POST["shijian"]!=""){$nreqshijian=$_POST["shijian"];$sql=$sql." and shijian like '%$nreqshijian%'";}
if ($_POST["neirong"]!=""){$nreqneirong=$_POST["neirong"];$sql=$sql." and neirong like '%$nreqneirong%'";}
if ($_POST["xinshui1"]!=""){$nreqxinshui1=$_POST["xinshui1"];$sql=$sql." and xinshui >= $nreqxinshui1";}
if ($_POST["xinshui2"]!=""){$nreqxinshui2=$_POST["xinshui2"];$sql=$sql." and xinshui <= $nreqxinshui2";}
if ($_POST["faburen"]!=""){$nreqfaburen=$_POST["faburen"];$sql=$sql." and faburen like '%$nreqfaburen%'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//ÿҳ������
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}

	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
  ?>
  <tr>
    <td width="25"><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,dingdanhao);?></td><td><?php echo mysql_result($query,$i,lianxiren);?></td></td><td><?php echo mysql_result($query,$i,fuwuleixing);?></td><td><?php echo mysql_result($query,$i,shijian);?></td><td><?php echo mysql_result($query,$i,neirong);?></td><td><?php echo mysql_result($query,$i,xinshui);?></td><td><?php echo mysql_result($query,$i,faburen);?></td>
    
    <td width="30" align="center"><a href="jiazhengfuwufabudetail.php?id=<?php echo mysql_result($query,$i,"id");?>">��ϸ</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>�������ݹ�<?php echo $rowscount;?>��,
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="��ӡ��ҳ"  />
</p>
<div class="fy"><a href="jiazhengfuwufabulist.php?pagecurrent=1">��ҳ</a> <a href="jiazhengfuwufabulist.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> <a href="jiazhengfuwufabulist.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a> <a href="jiazhengfuwufabulist.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a> ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </div>

					
  </div>
  
  <!--��ϸ���ݵĽ���-->
  
</div>

<!--�������ݵĽ���-->





<!--�ײ��Ŀ�ʼ-->
<?php include_once 'qtdown.php';?>
<!--�ײ��Ľ���-->
<!-- dfexnxxiaxng -->
</body>
</html>
-->
