<?php 
//����Ա��̨
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������Ա</title>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>���м�����Ա�б�</p>
<form id="form1" name="form1" method="post" action="">
  ����: ������ţ�<input name="jiazhengbianhao" type="text" id="jiazhengbianhao" style='border:solid 1px #000000; color:#666666;width:80px' /> ����������<input name="jiazhengxingming" type="text" id="jiazhengxingming" style='border:solid 1px #000000; color:#666666;width:80px' /> �����Ա�<select name='jiazhengxingbie' id='jiazhengxingbie' style='border:solid 1px #000000; color:#666666;'><option value="">����</option><option value="��">��</option><option value="Ů">Ů</option></select> �������ڣ�<input name="chushengriqi1" type="text" id="chushengriqi1"  value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})"  style='border:solid 1px #000000; color:#666666; width:80px;' />-<input name="chushengriqi2" type="text" id="chushengriqi2"  value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})"  style='border:solid 1px #000000; color:#666666; width:80px;' /> ����
  <select name="paixu" id="paixu">
    <option value="addtime">���ʱ��</option>
	<option value="chushengriqi">��������</option>
    
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
    <td bgcolor='#CCFFFF'>�������</td>    <td bgcolor='#CCFFFF'>����</td>    <td bgcolor='#CCFFFF'>��������</td>    <td bgcolor='#CCFFFF'>�����Ա�</td>    <td bgcolor='#CCFFFF'>��������</td>    <td bgcolor='#CCFFFF'>��������</td>    <td bgcolor='#CCFFFF'>�����ֻ�</td>    <td bgcolor='#CCFFFF'>��Ƭ</td>    <td bgcolor='#CCFFFF' width='80' align='center'>�Ƿ����</td>    
	
    <td width="120" align="center" bgcolor="#CCFFFF">���ʱ��</td>
    <td width="120" align="center" bgcolor="#CCFFFF">����</td>
  </tr>
  <?php 
    $sql="select * from jiazhengrenyuan where 1=1";
  if ($_POST["jiazhengbianhao"]!=""){$nreqjiazhengbianhao=$_POST["jiazhengbianhao"];$sql=$sql." and jiazhengbianhao like '%$nreqjiazhengbianhao%'";}if ($_POST["jiazhengxingming"]!=""){$nreqjiazhengxingming=$_POST["jiazhengxingming"];$sql=$sql." and jiazhengxingming like '%$nreqjiazhengxingming%'";}if ($_POST["jiazhengxingbie"]!=""){$nreqjiazhengxingbie=$_POST["jiazhengxingbie"];$sql=$sql." and jiazhengxingbie like '%$nreqjiazhengxingbie%'";}if ($_POST["chushengriqi1"]!=""){$nreqchushengriqi1=$_POST["chushengriqi1"];$sql=$sql." and chushengriqi >= '$nreqchushengriqi1'";}if ($_POST["chushengriqi2"]!=""){$nreqchushengriqi2=$_POST["chushengriqi2"];$sql=$sql." and chushengriqi <= '$nreqchushengriqi2'";}
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
    <td><?php echo mysql_result($query,$i,jiazhengbianhao);?></td>    <td><?php echo mysql_result($query,$i,mima);?></td>    <td><?php echo mysql_result($query,$i,jiazhengxingming);?></td>    <td><?php echo mysql_result($query,$i,jiazhengxingbie);?></td>    <td><?php echo mysql_result($query,$i,fuwuleixing);?></td>    <td><?php echo mysql_result($query,$i,chushengriqi);?></td>    <td><?php echo mysql_result($query,$i,jiazhengshouji);?></td>    <td width='80'><a href="<?php echo mysql_result($query,$i,zhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,zhaopian) ?>' width='80' height='88' border='0'></a></td>        <td align='center'><a href="sh.php?id=<?php echo mysql_result($query,$i,"id") ?>&yuan=<?php echo mysql_result($query,$i,"issh")?>&tablename=jiazhengrenyuan" onclick="return confirm('��ȷ��Ҫִ�д˲�����')"><?php echo mysql_result($query,$i,"issh")?></a></td>
	
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="120" align="center"><a href="del_g_j.php?jiazhengbianhao=<?php echo mysql_result($query,$i,"jiazhengbianhao");?>&tablename=jiazhengrenyuan" onclick="return confirm('ȷ��ɾ����')">ɾ��</a> <a href="jiazhengrenyuan_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">�޸�</a> <a href="jiazhengrenyuandetail.php?id=<?php echo mysql_result($query,$i,"id");?>" target="_blank">��ϸ</a> </td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>�������ݹ�<?php echo $rowscount;?>��, 
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="��ӡ��ҳ" style='border:solid 1px #000000; color:#666666' /> <input type="button" name="Submit3" onclick="javascript:location.href='jiazhengrenyuan_listxls.php';" value="����EXCEL" style='border:solid 1px #000000; color:#666666' />
</p>
<p align="center"><a href="jiazhengrenyuan_list.php?pagecurrent=1">��ҳ</a>, <a href="jiazhengrenyuan_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="jiazhengrenyuan_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="jiazhengrenyuan_list.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>

</body>
</html>

