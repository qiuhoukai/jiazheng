<?php
//验证登陆信息

include_once 'conn.php';
//if($_POST['submit']){
	//$id=$_GET["id"];
	$id=$_GET["id"];
	//$tablename=$_GET["tablename"];
	//if(!empty($dingdanhao))
	//{echo $dingdanhao;}
	//$userpass=md5($userpass);
	$sql="delete from liuyanban where id='$id';";
	 	mysql_query($sql);
	$comewhere=$_SERVER['HTTP_REFERER'];
	echo "<script language='javascript'>alert('操作成功！');location.href='$comewhere';</script>";
	//;updata jiazhengfuwufabu set issh='否' where dingdanhao = '&dingdanhao'
//}
?>
