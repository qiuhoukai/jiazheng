<?php
session_start();
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
         <li><a class="diyi" >�û���½</a></li>
         <!--<li><a href="#">��ҵ��̬</a></li>
         <li><a href="#">������ʶ</a></li>
         <li><a href="#">����֧��</a></li>-->
       </ul>
     </div>
     <div class="dqwz fr">
     ��ǰλ�ã�<a href="index.php">��վ��ҳ</a> &gt; �û���½     </div> 
  </div>
  <!--����������-->
  <!--��ϸ���ݵĿ�ʼ-->
  <div class="fxmain_nr">
    
	 <?php 
					if (empty($_SESSION['cx']))
					{
				?>
                          <form action="userlog_post.php" method="post" name="userlog" id="userlog">
                            <table width="100%" height="302" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="newsline">
                              <tr>
                                <td height="48" colspan="4" style="padding-left:30px; font-size:20px;"><strong>�û���½</strong></td>
                              </tr>
                              <tr>
                                <td width="40" height="28">&nbsp;</td>
                                <td width="240" height="28">�û���:</td>
                                <td height="28" colspan="2"><input name="username" type="text" id="username" placeholder="�������û���" style="width:160px; height:40px; border:solid 1px #000000; color:#666666;"  /></td>
                              </tr>
                              <tr>
                                <td height="28">&nbsp;</td>
                                <td height="28">����:</td>
                                <td height="28" colspan="2"><input name="pwd1" type="password" id="pwd1" placeholder="����������" style="width:160px; height:40px; border:solid 1px #000000; color:#666666" /></td>
                              </tr>
                              <tr >
                                <td height="28">&nbsp;</td>
                                <td height="28">��Ա���:</td>
                                <td height="28" colspan="2"><select name="cx" id="cx" style="width:160px; height:40px; border:solid 1px #000000; color:#666666" >
                                    <option value="�û�">�û�</option>
									<option value="������Ա">������Ա</option>
									<!--quxanxiaxndexnglxu-->
                                </select></td>
                              </tr>
                              <tr >
                                <td height="28">&nbsp;</td>
                                <td height="28">��֤��:</td>
                                <td width="67" height="28"><input name="yzm" type="text" id="yzm" style=" height:20px; border:solid 1px #000000; color:#666666; width:50px" /></td>
                                <td width="653"><img alt="ˢ����֤��" onclick="this.src='code.php?time='+new Date().getTime();" src="code.php?time='+new Date().getTime();" style="cursor:pointer" /></td>
                              </tr>
                              <tr>
                                <td height="38" align="center">&nbsp;</td>
                                <td height="38" align="center">&nbsp;</td>
                                <td height="38" colspan="2"><input type="submit" name="Submit" value="��½"  onclick="return checklog();" />
                                  <input type="reset" name="Submit2" value="����"  /></td>
                              </tr>
                            </table>
                          </form><?php 
							}
				  else
				  {
				 ?>
                          <table width="100%" height="300" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                            <tr>
                              <td height="28" align="left" style="padding-left:20px; font-size:20px;">��ǰ�û���<?php echo $_SESSION['username']?></td>
                            </tr>
							 <tr>
                              <td height="28" align="left" style="padding-left:20px; font-size:20px;">����Ȩ�ޣ�<?php echo $_SESSION['cx']?></td>
                            </tr>
                            <tr>
                              <td height="28" align="left" style="padding-left:20px; font-size:20px;">��ӭ���ĵ���!!!</td>
                            </tr>
                            <tr>
                              <td height="28" align="center"><input type="button" name="Submit3" value="�˳�" onclick="javascript:location.href='logout.php';"  />
                                  <input type="button" name="Submit22" value="���˺�̨" onclick="javascript:location.href='main.php';"  /></td>
                            </tr>
                          </table>
                          <?php } ?>
					
  </div>
  
  <!--��ϸ���ݵĽ���-->
  
</div>

<!--�������ݵĽ���-->





<!--�ײ��Ŀ�ʼ-->
<?php include_once 'qtdown.php';?>
<!--�ײ��Ľ���-->

</body>
</html>
