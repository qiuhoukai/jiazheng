<?php
//���԰��б�����ɸѡ��
session_start();
if($_SESSION["username"]=="")
{
	echo "<script>javascript:alert('�Բ��������ȵ�½��');location.href='index.php';</script>";
	exit;
}
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>����������ϸҳ</title>
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
         <li><a class="diyi" >���԰�</a></li>
         <!--<li><a href="#">��ҵ��̬</a></li>
         <li><a href="#">������ʶ</a></li>
         <li><a href="#">����֧��</a></li>-->
       </ul>
     </div>
     <div class="dqwz fr">
     ��ǰλ�ã�<a href="index.php">��վ��ҳ</a> &gt; ���԰�     </div> 
  </div>
  <!--����������-->
  <!--��ϸ���ݵĿ�ʼ-->
  <div class="fxmain_nr">
    
	 <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#67B41A" class="tb">
     <?php
		$zhanghao=$_SESSION["username"];
		if($zhanghao==admin)
		{
			$sql="select * from liuyanban where 1=1";
		}
		else
		{
			$sql="select * from liuyanban where zhanghao='$zhanghao'";	
		}
		
		$sql=$sql." order by id desc";
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		if($rowscount==0)
  {}
  else
  {
  $pagelarge=5;//ÿҳ������
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
                        <td width="11" rowspan="3" valign="top" bgcolor="#FFFFFF"><!--DWLayoutEmptyCell-->&nbsp;</td>
                        <td width="85" rowspan="3" align="center" valign="middle" bgcolor="#FFFFFF"><img width='70'height='70' src=<?php echo mysql_result($query,$i,"zhaopian");?> border=0> </td>
                        <td height="20" colspan="2" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp; &nbsp; ������:<?php echo mysql_result($query,$i,"addtime");?> &nbsp;</td>
                        <td width="12" rowspan="3" valign="top" bgcolor="#FFFFFF" style="width: 10px"><!--DWLayoutEmptyCell-->&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="78" align="left" valign="top" bgcolor="#FFFFFF">&nbsp;<?php echo mysql_result($query,$i,"liuyan");?></td>
                        <td align="left" valign="top" bgcolor="#FFFFFF"><p>�ظ���</p>
                            <p><?php echo mysql_result($query,$i,"huifu");?></p></td>
                      </tr>
                      <tr>
                        <td colspan="2" align="left" valign="middle" bgcolor="#FFFFFF" style="height: 25px">&nbsp; &nbsp;�˺ţ�<?php echo mysql_result($query,$i,"zhanghao");?> &nbsp; &nbsp;������<?php echo mysql_result($query,$i,"xingming");?>&nbsp;&nbsp;</td>
                      </tr>
                      <?php
						  }
  	}
  ?>
                    </table>
                     <div class="fy"><a href="lyblist.php?pagecurrent=1">��ҳ</a> <a href="lyblist.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> <a href="lyblist.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a> <a href="lyblist.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a> ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ �������ݹ�
                        <?php
		echo $rowscount;
	?>
                        ��,
  <input type="button" name="Submit2" onClick="javascript:window.print();" value="��ӡ��ҳ"   />
                      </div>
					
  </div>
  
  <!--��ϸ���ݵĽ���-->
  
</div>

<!--�������ݵĽ���-->





<!--�ײ��Ŀ�ʼ-->
<?php include_once 'qtdown.php';?>
<!--�ײ��Ľ���-->

</body>
</html>

