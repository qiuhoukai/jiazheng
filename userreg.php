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
		echo "<script>javascript:alert('�Բ��𣬸��˺��Ѿ����ڣ��뻻�����˺����ԣ���');history.back();</script>";
	}
	else
	{
		$sql="insert into yonghuzhuce(zhanghao,mima,xingming,xingbie,diqu,Email,zhaopian) values('$zhanghao','$mima','$xingming','$xingbie','$diqu','$Email','$zhaopian') ";
		mysql_query($sql);
		echo "<script>javascript:alert('ע��ɹ�!�������Ա��˺󷽿�������½��');location.href='index.php';</script>";	
	}
}
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
<script language="javascript">
	function check()
{
	if(document.form1.zhanghao.value==""){alert("�������˺�");document.form1.zhanghao.focus();return false;}
	if(document.form1.mima.value==""){alert("����������");document.form1.mima.focus();return false;}
	if(document.form1.mima.value!=document.form1.mima2.value){alert("�Բ����������벻һ�£�������");document.form1.mima.focus();return false;}
	if(document.form1.xingming.value==""){alert("����������");document.form1.xingming.focus();return false;}
	if(document.form1.Email.value==""){alert("������Email");document.form1.Email.focus();return false;}
	//if(document.form1.zhaopian.value==""){alert("��������Ƭ");document.form1.zhaopian.focus();return false;}
	var strEmail = document.getElementById("Email").value;  
  var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
  var email_Flag = reg.test(strEmail);
  if(email_Flag){
  
  }
  else{
   alert("�Բ���������������ַ��ʽ����");
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
         <li><a class="diyi" >�û�ע��</a></li>
         <!--<li><a href="#">��ҵ��̬</a></li>
         <li><a href="#">������ʶ</a></li>
         <li><a href="#">����֧��</a></li>-->
       </ul>
     </div>
     <div class="dqwz fr">
     ��ǰλ�ã�<a href="index.php">��վ��ҳ</a> &gt; �û�ע��     </div> 
  </div>
  <!--����������-->
  <!--��ϸ���ݵĿ�ʼ-->
  <div class="fxmain_nr">
    
	 <table width="100%" height=550  align="center" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" class="newsline" >
                           <form name="form1" method="post" action=""> 
						   
							<tr>
                              <td align="right">�˺ţ�</td>
                              <td><input name='zhanghao' type='text' id='zhanghao' value='' placeholder="�������˺�" style="width:260px; height:30px; border:solid 1px #000000; color:#666666;" />
                                &nbsp;*</td>
                            </tr>
                            <tr>
                              <td align="right">���룺</td>
                              <td><input name='mima' type='password' id='mima' value='' placeholder="����������" style="width:260px; height:30px; border:solid 1px #000000; color:#666666;"  />
                                &nbsp;* ȷ�����룺 
                                <input name='mima2' type='password' id='mima2' value='' placeholder="������ȷ������" style="width:260px; height:30px; border:solid 1px #000000; color:#666666;" /></td>
                            </tr>
                            <tr>
                              <td align="right">������</td>
                              <td><input name='xingming' type='text' id='xingming' value='' placeholder="����������" style="width:260px; height:30px; border:solid 1px #000000; color:#666666;" />
                                &nbsp;*</td>
                            </tr>
                            <tr>
                              <td align="right">�Ա�</td>
                              <td><select name='xingbie' id='xingbie' style="width:260px; height:30px; border:solid 1px #000000; color:#666666;">
                                  <option value="��">��</option>
                                  <option value="Ů">Ů</option>
                              </select></td>
                            </tr>
                            <tr>
                              <td align="right">������</td>
                              <td><select name='diqu' id='diqu' style="width:260px; height:30px; border:solid 1px #000000; color:#666666;" >
                                  <option value="�㽭">�㽭</option>
                                  <option value="����">����</option>
                                  <option value="����">����</option>
                                  <option value="����">����</option>
                              </select></td>
                            </tr>
                            <tr>
                              <td align="right">Email��</td>
                              <td><input name='Email' type='text' id='Email' value='' style="width:260px; height:30px; border:solid 1px #000000; color:#666666;"  placeholder="������Email"/>
                                &nbsp;*</td>
                            </tr>
                            <tr>
                              <td align="right">��Ƭ��</td>
                              <td><input name='zhaopian' type='text' id='zhaopian' value=''  style="width:460px; height:30px; border:solid 1px #000000; color:#666666;" />
                                &nbsp; <input type="button" onclick="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)" value="�ϴ�" /></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td><input type="hidden" name="addnew" value="1" />
                                  <input type="submit" name="Submit" value="ע��" onClick="return check();" />
                                  <input type="reset" name="Submit2" value="����"  /></td>
                            </tr></form>
                          </table>
					
  </div>
  
  <!--��ϸ���ݵĽ���-->
  
</div>

<!--�������ݵĽ���-->





<!--�ײ��Ŀ�ʼ-->
<?php include_once 'qtdown.php';?>
<!--�ײ��Ľ���-->

</body>
</html>
