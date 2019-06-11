<?php
//验证登陆信息
//被接单信息的撤销，改为未接单，重新发起订单
include_once 'conn.php';

	$dingdanhao=$_GET["dingdanhao"];


		$sql1="update jiazhengfuwufabu set issh='已完成'  where dingdanhao='$dingdanhao'";
		mysql_query($sql1);
		$sql2="update jiedan set zhuangtai='已结算'  where dingdanhao='$dingdanhao'";
		mysql_query($sql2);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('操作成功！');location.href='$comewhere';</script>";
	
?>
