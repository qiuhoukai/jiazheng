<?php
session_start();
include_once 'conn.php';

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
  &nbsp;����: ������ţ�<input name="jiazhengbianhao" type="text" id="jiazhengbianhao" style='border:solid 1px #000000; color:#666666;width:80px' /> ����������<input name="jiazhengxingming" type="text" id="jiazhengxingming" style='border:solid 1px #000000; color:#666666;width:80px' /> �����Ա�<select name='jiazhengxingbie' id='jiazhengxingbie' style='border:solid 1px #000000; color:#666666;'><option value="">����</option><option value="��">��</option><option value="Ů">Ů</option></select> �������ڣ�<input name="chushengriqi1" type="text" id="chushengriqi1"  value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})"  style='border:solid 1px #000000; color:#666666; width:80px;' />-<input name="chushengriqi2" type="text" id="chushengriqi2"  value='' onclick="WdatePicker({'dateFmt':'yyyy-MM-dd'})"  style='border:solid 1px #000000; color:#666666; width:80px;' />
    <input type="submit" name="Submit" value="����"  />&nbsp;<input type="button" name="Submit3" value="�л���ͼ" onClick="location.href='jiazhengrenyuanlist.php';" />
</form>

                          <table width="98%" height="7%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                             <?php 
    $sql="select * from jiazhengrenyuan where  issh='��'";
if ($_POST["jiazhengbianhao"]!=""){$nreqjiazhengbianhao=$_POST["jiazhengbianhao"];$sql=$sql." and jiazhengbianhao like '%$nreqjiazhengbianhao%'";}if ($_POST["jiazhengxingming"]!=""){$nreqjiazhengxingming=$_POST["jiazhengxingming"];$sql=$sql." and jiazhengxingming like '%$nreqjiazhengxingming%'";}if ($_POST["jiazhengxingbie"]!=""){$nreqjiazhengxingbie=$_POST["jiazhengxingbie"];$sql=$sql." and jiazhengxingbie like '%$nreqjiazhengxingbie%'";}if ($_POST["chushengriqi1"]!=""){$nreqchushengriqi1=$_POST["chushengriqi1"];$sql=$sql." and chushengriqi >= '$nreqchushengriqi1'";}if ($_POST["chushengriqi2"]!=""){$nreqchushengriqi2=$_POST["chushengriqi2"];$sql=$sql." and chushengriqi <= '$nreqchushengriqi2'";}
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
$k=0;
	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
$k=$k+1;
  ?>
                            <td height="165" align="center"><table width="150" height="160" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td height="123" align="center"><a href="jiazhengrenyuandetail.php?id=<?php echo mysql_result($query,$i,id);?>"><img src="<?php echo mysql_result($query,$i,zhaopian);?>" width="133" height="135" border="0" /></a></td>
                                </tr>
                                <tr>
                                  <td height="25" align="center"><?php echo mysql_result($query,$i,jiazhengxingming);?></td>
                                </tr>
                            </table></td>
                             	<?php
								if ($k==4)
									{
										echo "</tr><tr>";
										$k=0;
									}
	}
}
?>
                          </tr>
                        </table>
						<p>
</p>
<div class="fy"><a href="jiazhengrenyuanlisttp.php?pagecurrent=1">��ҳ</a> <a href="jiazhengrenyuanlisttp.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> <a href="jiazhengrenyuanlisttp.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a> <a href="jiazhengrenyuanlisttp.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a> �������ݹ�<?php echo $pagecount;?>ҳ,��ǰ��<?php echo $pagecurrent;?>ҳ,<?php echo $pagelarge;?>��ÿҳ
<input type="button" name="Submit2" onClick="javascript:window.print();" value="��ӡ��ҳ"  />                
</div>
					
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

