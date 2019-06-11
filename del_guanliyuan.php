<?php
//验证登陆信息
//删除用户
include_once 'conn.php';
//if($_POST['submit']){
	$id=$_GET["id"];
	//$dingdanhao=$_GET["dingdanhao"];
	//$tablename=$_GET["tablename"];
	//if(!empty($dingdanhao))
	//{echo $dingdanhao;}
	//$userpass=md5($userpass);
	$sql="delete from yonghuzhuce where id='$id';";
	 	mysql_query($sql);
	//$sql2="update jiazhengfuwufabu set issh='否'  where dingdanhao='$dingdanhao'";
	//	mysql_query($sql2);
	$comewhere=$_SERVER['HTTP_REFERER'];
	echo "<script language='javascript'>alert('操作成功！');location.href='$comewhere';</script>";
	//;updata jiazhengfuwufabu set issh='否' where dingdanhao = '&dingdanhao'
//}
?>
