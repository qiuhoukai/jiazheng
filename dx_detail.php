<?php
session_start();
include_once 'conn.php';
$lb=$_GET["lb"];
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
         <li><a class="diyi" ><?php echo $lb?></a></li>
         <!--<li><a href="#">��ҵ��̬</a></li>
         <li><a href="#">������ʶ</a></li>
         <li><a href="#">����֧��</a></li>-->
       </ul>
     </div>
     <div class="dqwz fr">
     ��ǰλ�ã�<a href="index.php">��վ��ҳ</a> &gt; <?php echo $lb?>     </div> 
  </div>
  <!--����������-->
  <!--��ϸ���ݵĿ�ʼ-->
  <div class="fxmain_nr">
    
	 <?php 
					$sql="select * from dx where leibie='".$lb."'";
					$query=mysql_query($sql);
					 $rowscount=mysql_num_rows($query);
					  if($rowscount==0)
					  {}
					  else
					  {
					?>
</p>
                      <table width="97%" border="0" align="center" cellpadding="3" cellspacing="1" bordercolor="#67B41A" style="border-collapse:collapse" class="newsline">
                        <tr>
                          <td height="104"><?php echo mysql_result($query,0,"content");?></td>
                        </tr>
                        <tr>
                          <td align="right"><input type="button" onclick="javaScript:history.back();" value="����" /></td>
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

