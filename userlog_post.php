<?php
//验证登陆信息
session_start();
include_once 'conn.php';
//if($_POST['submit']){
	
	$username=$_POST['username'];
	$pwd=$_POST['pwd1'];
	$cx=$_POST['cx'];
	//$userpass=md5($userpass);
	$yzm=$_POST['yzm'];
		if ($username!="" && $pwd!="" && $yzm!="")
		{
			if($yzm==$_SESSION['regsession_code'])
			{
			
			}
			else
			{
				echo "<script language='javascript'>alert('请输入正确验证码！');location.href='index.php';</script>";
				die;
			}
		
		if($cx=="用户")
		{
			$sql="select * from yonghuzhuce where zhanghao='$username' and mima='$pwd' and issh='是'";
		}
		else
		if($cx=="家政人员")
		{
			$sql="select * from jiazhengrenyuan where jiazhengbianhao='$username' and mima='$pwd' and issh='是'";
		}
		
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
			if($rowscount>0)
			{
					$_SESSION['username']=$username;
					$_SESSION['cx']=$_POST["cx"];
					
					if($cx=="家政人员")
					{
						$_SESSION['xm']=mysql_result($query,jiazhengxingming);
					}
					else
					{
						$_SESSION['xm']=mysql_result($query,xingming);
					}
					
					
					
					$_SESSION['zp']=mysql_result($query,zhaopian);
					//$row = mysql_fetch_row($query)
					//echo $_SESSION['cx'];
					echo "<script language='javascript'>alert('登陆成功！');location='index.php';</script>";
			}
			else
			{
					echo "<script language='javascript'>alert('用户名或密码错误！或您的帐号未经审核');history.back();</script>";
			}
		}
		else
		{
				echo "<script language='javascript'>alert('请输入完整！');history.back();</script>";
		}
	
	
//}
?>