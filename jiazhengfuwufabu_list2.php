<?php
//�û� �ѷ������б�
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�������񷢲�</title>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>���м������񷢲���</p>
<form id="form1" name="form1" method="post" action="">
  ����: �����ţ�<input name="dingdanhao" type="text" id="dingdanhao" style='border:solid 1px #000000; color:#666666;width:80px' /> ��ϵ�ˣ�<input name="lianxiren" type="text" id="lianxiren" style='border:solid 1px #000000; color:#666666;width:80px' /> ��ϵ���ֻ���<input name="lianxirenshouji" type="text" id="lianxirenshouji" style='border:solid 1px #000000; color:#666666;width:80px' /> �������ͣ�<select name='fuwuleixing' id='fuwuleixing' style='border:solid 1px #000000; color:#666666;'><option value="">����</option><?php getoption("fuwuleixingxinxi","fuwuleixing")?></select></select> ʱ�䣺<input name="shijian" type="text" id="shijian" style='border:solid 1px #000000; color:#666666;width:80px' /> ���ݣ�<input name="neirong" type="text" id="neirong" style='border:solid 1px #000000; color:#666666;width:80px' /> нˮ��<input name="xinshui1" type="text" id="xinshui1"  value='' style='border:solid 1px #000000; color:#666666;width:30px' />-<input name="xinshui2" type="text" id="xinshui2"  value='' style='border:solid 1px #000000; color:#666666;width:30px' /> <!--�����ˣ�<input name="faburen" type="text" id="faburen" style='border:solid 1px #000000; color:#666666;width:80px' />--> ����
  <select name="paixu" id="paixu">
    <option value="addtime">����ʱ��</option>
    
  </select>
  <select name="px" id="px">
    <option value="desc">����</option>
    <option value="asc">����</option>
  </select>
  <input type="submit" name="Submit" value="����" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">���</td>
    <td bgcolor='#CCFFFF'>������</td>
    <td bgcolor='#CCFFFF'>��ϵ��</td>
    <td bgcolor='#CCFFFF'>��ϵ���ֻ�</td>
    <td bgcolor='#CCFFFF'>��������</td>
    <td bgcolor='#CCFFFF'>ʱ��</td>
    <td bgcolor='#CCFFFF'>����</td>
    <td bgcolor='#CCFFFF'>нˮ</td>
  <!--   <td bgcolor='#CCFFFF'>������</td>    -->
    <td bgcolor='#CCFFFF' width='90' align='center'>����״̬</td>
    <td width="120" align="center" bgcolor="#CCFFFF">����ʱ��</td>
    <td width="70" align="center" bgcolor="#CCFFFF">����</td>
  </tr>
  <?php 
    $sql="select * from jiazhengfuwufabu where faburen='".$_SESSION['username']."'";
  
if ($_POST["dingdanhao"]!=""){$nreqdingdanhao=$_POST["dingdanhao"];$sql=$sql." and dingdanhao like '%$nreqdingdanhao%'";}
if ($_POST["lianxiren"]!=""){$nreqlianxiren=$_POST["lianxiren"];$sql=$sql." and lianxiren like '%$nreqlianxiren%'";}
if ($_POST["lianxirenshouji"]!=""){$nreqlianxirenshouji=$_POST["lianxirenshouji"];$sql=$sql." and lianxirenshouji like '%$nreqlianxirenshouji%'";}
if ($_POST["fuwuleixing"]!=""){$nreqfuwuleixing=$_POST["fuwuleixing"];$sql=$sql." and fuwuleixing like '%$nreqfuwuleixing%'";}
if ($_POST["shijian"]!=""){$nreqshijian=$_POST["shijian"];$sql=$sql." and shijian like '%$nreqshijian%'";}
if ($_POST["neirong"]!=""){$nreqneirong=$_POST["neirong"];$sql=$sql." and neirong like '%$nreqneirong%'";}
if ($_POST["xinshui1"]!=""){$nreqxinshui1=$_POST["xinshui1"];$sql=$sql." and xinshui >= $nreqxinshui1";}
if ($_POST["xinshui2"]!=""){$nreqxinshui2=$_POST["xinshui2"];$sql=$sql." and xinshui <= $nreqxinshui2";}
//if ($_POST["faburen"]!=""){$nreqfaburen=$_POST["faburen"];$sql=$sql." and faburen like '%$nreqfaburen%'";}
   if($_POST["paixu"]!="")
  {
  	$sql=$sql." order by ".$_POST["paixu"]." ".$_POST["px"]."";
  }
  else
  {
  	$sql=$sql." order by id desc";
  }
  
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
    <td><?php echo mysql_result($query,$i,dingdanhao);?></td>
    <td><?php echo mysql_result($query,$i,lianxiren);?></td>
    <td><?php echo mysql_result($query,$i,lianxirenshouji);?></td>
    <td><?php echo mysql_result($query,$i,fuwuleixing);?></td>
    <td><?php echo mysql_result($query,$i,shijian);?></td>
    <td><?php echo mysql_result($query,$i,neirong);?></td>
    <td><?php echo mysql_result($query,$i,xinshui);?></td>
	<!--<td><?php echo mysql_result($query,$i,faburen);?></td> -->
    <td align='center'><?php echo mysql_result($query,$i,"issh")?></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="70" align="center">

	<!--�·���Ķ���ȡ�����޸�-->
	<?php if(mysql_result($query,$i,issh)=="��"){?>
	<a href="del.php?dingdanhao=<?php echo mysql_result($query,$i,"dingdanhao");?>&tablename=jiazhengfuwufabu" onclick="return confirm('���Ҫȡ����')">����ȡ������</a><br>
	<?php } ?>
	<!--�ѽӵ�ȡ��-->
	<?php if(mysql_result($query,$i,issh)=="��"){?>
	<a href="del.php?dingdanhao=<?php echo mysql_result($query,$i,"dingdanhao");?>&tablename=jiazhengfuwufabu" onclick="return confirm('ȷ��Ҫ����ȡ��������')">����ȡ������</a> 
	<?php } ?>
	<!--�����ѹر��������·���-->
	<?php if(mysql_result($query,$i,issh)=="�����ѹر�"){?>
	<a href="del.php?dingdanhao=<?php echo mysql_result($query,$i,"dingdanhao");?>&tablename=jiazhengfuwufabu" onclick="return confirm('ȷ��Ҫ���·��𶩵���')">�����ط�����</a>
	
	<?php } ?>
	<!--ͬ�ⱻ���볷������-->
	<?php if(mysql_result($query,$i,issh)=="���볷������"){?>
	<a href="del.php?dingdanhao=<?php echo mysql_result($query,$i,"dingdanhao");?>&tablename=jiazhengfuwufabu" onclick="return confirm('ȷ�Ϲرմ˶�����')">ͬ��رմ˶���</a>
	<?php } ?>
	</td>
  </tr>
<?php

		}
  }
	?>
</table>
<p>�������ݹ�<?php echo $rowscount;?>��, 
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="��ӡ��ҳ" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="jiazhengfuwufabu_list2.php?pagecurrent=1">��ҳ</a>, <a href="jiazhengfuwufabu_list2.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="jiazhengfuwufabu_list2.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="jiazhengfuwufabu_list2.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>

</body>
</html>