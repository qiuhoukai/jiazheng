<?php 
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$zhanghao=$_POST["zhanghao"];$mima=$_POST["mima"];$xingming=$_POST["xingming"];$xingbie=$_POST["xingbie"];$diqu=$_POST["diqu"];$Email=$_POST["Email"];$zhaopian=$_POST["zhaopian"];
	$sql="select id from yonghuzhuce where zhanghao='".$zhanghao."'";
	$query=mysql_query($sql);
	if(empty($zhaopian))
	{
		$zhaopian="uploadfile/null.jpg";
	}
	$rowscount=mysql_num_rows($query);
	if($rowscount>0)
	{
		echo "<script>javascript:alert('对不起，该账号已经存在，请换其他账号再试！！');history.back();</script>";
	}
	else
	{
		$sql="insert into yonghuzhuce(zhanghao,mima,xingming,xingbie,diqu,Email,zhaopian) values('$zhanghao','$mima','$xingming','$xingbie','$diqu','$Email','$zhaopian') ";
		mysql_query($sql);
		echo "<script>javascript:alert('注册成功!请待管理员审核后方可正常登陆！');location.href='index.php';</script>";	
	}
}
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
<script language="javascript">
	function check()
{
	if(document.form1.zhanghao.value==""){alert("请输入账号");document.form1.zhanghao.focus();return false;}
	if(document.form1.mima.value==""){alert("请输入密码");document.form1.mima.focus();return false;}
	if(document.form1.mima.value!=document.form1.mima2.value){alert("对不起，两次密码不一致，请重试");document.form1.mima.focus();return false;}
	if(document.form1.xingming.value==""){alert("请输入姓名");document.form1.xingming.focus();return false;}
	if(document.form1.Email.value==""){alert("请输入Email");document.form1.Email.focus();return false;}
	//if(document.form1.zhaopian.value==""){alert("请输入照片");document.form1.zhaopian.focus();return false;}
	var strEmail = document.getElementById("Email").value;  
  var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
  var email_Flag = reg.test(strEmail);
  if(email_Flag){
  
  }
  else{
   alert("对不起，您输入的邮箱地址格式错误。");
   return false;
  }

}
	
</script>
<script language="javascript">
	
	
	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
</script>
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
         <li><a class="diyi" >用户注册</a></li>
         <!--<li><a href="#">行业动态</a></li>
         <li><a href="#">保养常识</a></li>
         <li><a href="#">技术支持</a></li>-->
       </ul>
     </div>
     <div class="dqwz fr">
     当前位置：<a href="index.php">网站首页</a> &gt; 用户注册     </div> 
  </div>
  <!--顶部类别结束-->
  <!--详细内容的开始-->
  <div class="fxmain_nr">
    
	 <table width="100%" height=550  align="center" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" class="newsline" >
                           <form name="form1" method="post" action=""> 
						   
							<tr>
                              <td align="right">账号：</td>
                              <td><input name='zhanghao' type='text' id='zhanghao' value='' placeholder="请输入账号" style="width:260px; height:30px; border:solid 1px #000000; color:#666666;" />
                                &nbsp;*</td>
                            </tr>
                            <tr>
                              <td align="right">密码：</td>
                              <td><input name='mima' type='password' id='mima' value='' placeholder="请输入密码" style="width:260px; height:30px; border:solid 1px #000000; color:#666666;"  />
                                &nbsp;* 确认密码： 
                                <input name='mima2' type='password' id='mima2' value='' placeholder="请输入确认密码" style="width:260px; height:30px; border:solid 1px #000000; color:#666666;" /></td>
                            </tr>
                            <tr>
                              <td align="right">姓名：</td>
                              <td><input name='xingming' type='text' id='xingming' value='' placeholder="请输入姓名" style="width:260px; height:30px; border:solid 1px #000000; color:#666666;" />
                                &nbsp;*</td>
                            </tr>
                            <tr>
                              <td align="right">性别：</td>
                              <td><select name='xingbie' id='xingbie' style="width:260px; height:30px; border:solid 1px #000000; color:#666666;">
                                  <option value="男">男</option>
                                  <option value="女">女</option>
                              </select></td>
                            </tr>
                            <tr>
                              <td align="right">地区：</td>
                              <td><select name='diqu' id='diqu' style="width:260px; height:30px; border:solid 1px #000000; color:#666666;" >
                                  <option value="浙江">浙江</option>
                                  <option value="湖北">湖北</option>
                                  <option value="河南">河南</option>
                                  <option value="北京">北京</option>
                              </select></td>
                            </tr>
                            <tr>
                              <td align="right">Email：</td>
                              <td><input name='Email' type='text' id='Email' value='' style="width:260px; height:30px; border:solid 1px #000000; color:#666666;"  placeholder="请输入Email"/>
                                &nbsp;*</td>
                            </tr>
                            <tr>
                              <td align="right">照片：</td>
                              <td><input name='zhaopian' type='text' id='zhaopian' value=''  style="width:460px; height:30px; border:solid 1px #000000; color:#666666;" />
                                &nbsp; <input type="button" onclick="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)" value="上传" /></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td><input type="hidden" name="addnew" value="1" />
                                  <input type="submit" name="Submit" value="注册" onClick="return check();" />
                                  <input type="reset" name="Submit2" value="重置"  /></td>
                            </tr></form>
                          </table>
					
  </div>
  
  <!--详细内容的结束-->
  
</div>

<!--主体内容的结束-->





<!--底部的开始-->
<?php include_once 'qtdown.php';?>
<!--底部的结束-->

</body>
</html>
