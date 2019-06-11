<?php
//验证登陆信息

include_once 'conn.php';
//if($_POST['submit']){
	$id=$_GET["id"];
	$tablename=$_GET['tablename'];
	$lb=$_GET['lb'];
	//$userpass=md5($userpass);

//验证是否删除超级管理员
if($id!="0")
{
		
//删除管理员
	$sql="delete from $tablename where id=$id";
	//echo $sql;
	 	mysql_query($sql);
		$comewhere=$_SERVER['HTTP_REFERER'];
		
		if($tablename=="allusers")
		{
			echo "<script language='javascript'>alert('删除成功！');location.href='yhzhgl.php';</script>";
		}
		else
		{
			echo "<script language='javascript'>alert('删除！');location.href='xinwentongzhi_list.php?lb=".$lb."';</script>";
		}

	
}
	else
	{
		echo "<script language='javascript'>alert('您不能删除超级管理员！');location.href='yhzhgl.php';</script>";
	}

//}
?>