<?php
//验证登陆信息
//被接单信息的撤销
include_once 'conn.php';
//if($_POST['submit']){
	//$id=$_GET["id"];
	$dingdanhao=$_GET["dingdanhao"];
	//$tablename=$_GET["tablename"];
	//if(!empty($dingdanhao))
	//{echo $dingdanhao;}
	//$userpass=md5($userpass);
	//$sql="delete from jiedan where dingdanhao='$dingdanhao';";
	// 	mysql_query($sql);
	$sql2="update jiedan set zhuangtai='申请重新发起订单'  where dingdanhao='$dingdanhao'";
		mysql_query($sql2);
	$sql3="update jiazhengfuwufabu set issh='申请重新发起订单中'  where dingdanhao='$dingdanhao'";
		mysql_query($sql3);
	$comewhere=$_SERVER['HTTP_REFERER'];
	echo "<script language='javascript'>alert('操作成功！');location.href='$comewhere';</script>";
	//;updata jiazhengfuwufabu set issh='否' where dingdanhao = '&dingdanhao'
//}
?>
