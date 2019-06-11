<?php
session_start();
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
         <li><a class="diyi" >用户登陆</a></li>
         <!--<li><a href="#">行业动态</a></li>
         <li><a href="#">保养常识</a></li>
         <li><a href="#">技术支持</a></li>-->
       </ul>
     </div>
     <div class="dqwz fr">
     当前位置：<a href="index.php">网站首页</a> &gt; 用户登陆     </div> 
  </div>
  <!--顶部类别结束-->
  <!--详细内容的开始-->
  <div class="fxmain_nr">
    
	 <?php 
					if (empty($_SESSION['cx']))
					{
				?>
                          <form action="userlog_post.php" method="post" name="userlog" id="userlog">
                            <table width="100%" height="302" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="newsline">
                              <tr>
                                <td height="48" colspan="4" style="padding-left:30px; font-size:20px;"><strong>用户登陆</strong></td>
                              </tr>
                              <tr>
                                <td width="40" height="28">&nbsp;</td>
                                <td width="240" height="28">用户名:</td>
                                <td height="28" colspan="2"><input name="username" type="text" id="username" placeholder="请输入用户名" style="width:160px; height:40px; border:solid 1px #000000; color:#666666;"  /></td>
                              </tr>
                              <tr>
                                <td height="28">&nbsp;</td>
                                <td height="28">密码:</td>
                                <td height="28" colspan="2"><input name="pwd1" type="password" id="pwd1" placeholder="请输入密码" style="width:160px; height:40px; border:solid 1px #000000; color:#666666" /></td>
                              </tr>
                              <tr >
                                <td height="28">&nbsp;</td>
                                <td height="28">人员类别:</td>
                                <td height="28" colspan="2"><select name="cx" id="cx" style="width:160px; height:40px; border:solid 1px #000000; color:#666666" >
                                    <option value="用户">用户</option>
									<option value="家政人员">家政人员</option>
									<!--quxanxiaxndexnglxu-->
                                </select></td>
                              </tr>
                              <tr >
                                <td height="28">&nbsp;</td>
                                <td height="28">验证码:</td>
                                <td width="67" height="28"><input name="yzm" type="text" id="yzm" style=" height:20px; border:solid 1px #000000; color:#666666; width:50px" /></td>
                                <td width="653"><img alt="刷新验证码" onclick="this.src='code.php?time='+new Date().getTime();" src="code.php?time='+new Date().getTime();" style="cursor:pointer" /></td>
                              </tr>
                              <tr>
                                <td height="38" align="center">&nbsp;</td>
                                <td height="38" align="center">&nbsp;</td>
                                <td height="38" colspan="2"><input type="submit" name="Submit" value="登陆"  onclick="return checklog();" />
                                  <input type="reset" name="Submit2" value="重置"  /></td>
                              </tr>
                            </table>
                          </form><?php 
							}
				  else
				  {
				 ?>
                          <table width="100%" height="300" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                            <tr>
                              <td height="28" align="left" style="padding-left:20px; font-size:20px;">当前用户：<?php echo $_SESSION['username']?></td>
                            </tr>
							 <tr>
                              <td height="28" align="left" style="padding-left:20px; font-size:20px;">您的权限：<?php echo $_SESSION['cx']?></td>
                            </tr>
                            <tr>
                              <td height="28" align="left" style="padding-left:20px; font-size:20px;">欢迎您的到来!!!</td>
                            </tr>
                            <tr>
                              <td height="28" align="center"><input type="button" name="Submit3" value="退出" onclick="javascript:location.href='logout.php';"  />
                                  <input type="button" name="Submit22" value="个人后台" onclick="javascript:location.href='main.php';"  /></td>
                            </tr>
                          </table>
                          <?php } ?>
					
  </div>
  
  <!--详细内容的结束-->
  
</div>

<!--主体内容的结束-->





<!--底部的开始-->
<?php include_once 'qtdown.php';?>
<!--底部的结束-->

</body>
</html>
