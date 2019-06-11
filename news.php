<?php
//站内新闻
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
<title>家政服务平台</title>
<link rel="stylesheet" type="text/css" href="qtimages/css/fxke.css"/>
<link rel="stylesheet" href="qtimages/hsgbanner.css">
<script type="text/javascript" src="qtimages/jquery.js"></script>
<script type="text/javascript" src="qtimages/inc.js"></script>
</head>

<body>

<!--新头部的开始-->
<?php include_once 'qttop.php';?>

<!--新头部的结束--> <!--产品中心ban开始-->
<div class="cpzxban"></div>

<!--产品中心ban结束-->

<!--主体内容的开始-->
<div class="fxmain">
  <!--顶部类别开始-->
  <div class="fx_fenlei">
     <div class="leibei fl">
       <ul>
         <li><a class="diyi" ><?php echo $lb?></a></li>
         <!--<li><a href="#">行业动态</a></li>
         <li><a href="#">保养常识</a></li>
         <li><a href="#">技术支持</a></li>-->
       </ul>
     </div>
     <div class="dqwz fr">
     当前位置：<a href="#">网站首页</a> &gt; 公司新闻     </div> 
  </div>
  <!--顶部类别结束-->
  <!--详细内容的开始-->
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
  $pagelarge=20;//每页行数；
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
                        <td width="11%" class="newsline">被点击<?php echo mysql_result($query,$i,"dianjilv");?>次</td>
                        <td width="22%" class="newsline"><?php echo mysql_result($query,$i,"addtime");?></td>
                      </tr>
                      <?php
						}
					  }
					  ?>
                    </table>
                      <div class="fy"><a href="news.php?pagecurrent=1&lb=<?php echo $lb;?>">首页</a>  <a href="news.php?pagecurrent=<?php echo $pagecurrent-1;?>&lb=<?php echo $lb;?>">前一页</a>  <a href="news.php?pagecurrent=<?php echo $pagecurrent+1;?>&lb=<?php echo $lb;?>">后一页</a>  <a href="news.php?pagecurrent=<?php echo $pagecount;?>&lb=<?php echo $lb;?>">末页</a> 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 以上数据共
                        <?php
		echo $rowscount;
	?>
                        条,
  <input type="button" name="Submit22" onClick="javascript:window.print();" value="打印本页" />
                      </div>
					  
  </div>
  
  <!--详细内容的结束-->
  
</div>

<!--主体内容的结束-->





<!--底部的开始-->
<?php include_once 'qtdown.php';?>
<!--底部的结束-->

</body>
</html>

