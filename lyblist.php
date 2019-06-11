<?php
//留言板列表，按人筛选；
session_start();
if($_SESSION["username"]=="")
{
	echo "<script>javascript:alert('对不起，请您先登陆！');location.href='index.php';</script>";
	exit;
}
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>新闻中心详细页</title>
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
         <li><a class="diyi" >留言板</a></li>
         <!--<li><a href="#">行业动态</a></li>
         <li><a href="#">保养常识</a></li>
         <li><a href="#">技术支持</a></li>-->
       </ul>
     </div>
     <div class="dqwz fr">
     当前位置：<a href="index.php">网站首页</a> &gt; 留言板     </div> 
  </div>
  <!--顶部类别结束-->
  <!--详细内容的开始-->
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
  $pagelarge=5;//每页行数；
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
                        <td height="20" colspan="2" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp; &nbsp; 留言于:<?php echo mysql_result($query,$i,"addtime");?> &nbsp;</td>
                        <td width="12" rowspan="3" valign="top" bgcolor="#FFFFFF" style="width: 10px"><!--DWLayoutEmptyCell-->&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="78" align="left" valign="top" bgcolor="#FFFFFF">&nbsp;<?php echo mysql_result($query,$i,"liuyan");?></td>
                        <td align="left" valign="top" bgcolor="#FFFFFF"><p>回复：</p>
                            <p><?php echo mysql_result($query,$i,"huifu");?></p></td>
                      </tr>
                      <tr>
                        <td colspan="2" align="left" valign="middle" bgcolor="#FFFFFF" style="height: 25px">&nbsp; &nbsp;账号：<?php echo mysql_result($query,$i,"zhanghao");?> &nbsp; &nbsp;姓名：<?php echo mysql_result($query,$i,"xingming");?>&nbsp;&nbsp;</td>
                      </tr>
                      <?php
						  }
  	}
  ?>
                    </table>
                     <div class="fy"><a href="lyblist.php?pagecurrent=1">首页</a> <a href="lyblist.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> <a href="lyblist.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a> <a href="lyblist.php?pagecurrent=<?php echo $pagecount;?>">末页</a> 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 以上数据共
                        <?php
		echo $rowscount;
	?>
                        条,
  <input type="button" name="Submit2" onClick="javascript:window.print();" value="打印本页"   />
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

