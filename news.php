<?php
//վ������
session_start();
include_once 'conn.php';
$lb=$_GET["lb"];
if($lb=="")
{
	$lb=$_POST["lb"];
}
$biaoti=$_POST["biaoti"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��������ƽ̨</title>
<link rel="stylesheet" type="text/css" href="qtimages/css/fxke.css"/>
<link rel="stylesheet" href="qtimages/hsgbanner.css">
<script type="text/javascript" src="qtimages/jquery.js"></script>
<script type="text/javascript" src="qtimages/inc.js"></script>
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
         <li><a class="diyi" ><?php echo $lb?></a></li>
         <!--<li><a href="#">��ҵ��̬</a></li>
         <li><a href="#">������ʶ</a></li>
         <li><a href="#">����֧��</a></li>-->
       </ul>
     </div>
     <div class="dqwz fr">
     ��ǰλ�ã�<a href="#">��վ��ҳ</a> &gt; ��˾����     </div> 
  </div>
  <!--����������-->
  <!--��ϸ���ݵĿ�ʼ-->
  <div class="fxmain_nr">
   
   <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="newsline">
                      <?php 
    $sql="select * from xinwentongzhi where 1=1";
  
if ($biaoti!=""){$sql=$sql." and biaoti like '%$biaoti%'";}
if($lb!=""){$sql=$sql." and leibie='$lb'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=20;//ÿҳ������
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
                      <tr height="25">
                        <td width="2%" height="43" align="center" class="newsline"><img height="7" src="qtimages/tongtai_23-07.gif"  /></td>
                        <td width="65%" class="newsline"><a href="gg_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><?php echo mysql_result($query,$i,"biaoti");?></a></td>
                        <td width="11%" class="newsline">�����<?php echo mysql_result($query,$i,"dianjilv");?>��</td>
                        <td width="22%" class="newsline"><?php echo mysql_result($query,$i,"addtime");?></td>
                      </tr>
                      <?php
						}
					  }
					  ?>
                    </table>
                      <div class="fy"><a href="news.php?pagecurrent=1&lb=<?php echo $lb;?>">��ҳ</a>  <a href="news.php?pagecurrent=<?php echo $pagecurrent-1;?>&lb=<?php echo $lb;?>">ǰһҳ</a>  <a href="news.php?pagecurrent=<?php echo $pagecurrent+1;?>&lb=<?php echo $lb;?>">��һҳ</a>  <a href="news.php?pagecurrent=<?php echo $pagecount;?>&lb=<?php echo $lb;?>">ĩҳ</a> ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ �������ݹ�
                        <?php
		echo $rowscount;
	?>
                        ��,
  <input type="button" name="Submit22" onClick="javascript:window.print();" value="��ӡ��ҳ" />
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

