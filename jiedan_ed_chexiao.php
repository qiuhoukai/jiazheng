<?php
//验证登陆信息

	//家政人员申请撤销订单
	
	//家政人员同意取消订单
include_once 'conn.php';

	$dingdanhao=$_GET["dingdanhao"];
	$sql1="select issh from jiazhengfuwufabu where dingdanhao='$dingdanhao';";
	$query1 = mysql_query($sql1);
	$issh = mysql_result($query1,0);
//家政人员申请撤销订单
	if($issh=="是")
	{
		$sql1="update jiazhengfuwufabu set issh='申请撤销订单'  where dingdanhao='$dingdanhao';";
		mysql_query($sql1);
		$sql2="update jiedan set zhuangtai='申请撤销订单'  where dingdanhao='$dingdanhao';";
		mysql_query($sql2);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('操作成功！');location.href='$comewhere';</script>";
	}
//家政人员同意取消订单
	if($issh=="申请取消订单")
	{
		$sql1="update jiazhengfuwufabu set issh='订单已关闭'  where dingdanhao='$dingdanhao';";
		mysql_query($sql1);
		$sql2="update jiedan set zhuangtai='订单已关闭'  where dingdanhao='$dingdanhao';";
		mysql_query($sql2);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('操作成功！');location.href='$comewhere';</script>";
	}
//家政人员取消撤销订单申请
	if($issh=="申请撤销订单")
	{
		$sql1="update jiazhengfuwufabu set issh='是'  where dingdanhao='$dingdanhao';";
		mysql_query($sql1);
		$sql2="update jiedan set zhuangtai='已接单'  where dingdanhao='$dingdanhao';";
		mysql_query($sql2);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('操作成功！');location.href='$comewhere';</script>";
	}

	
	
	
	
	
	
	else
	{
		echo "<script language='javascript'>alert('系统错误！');history.go(-1);</script>";
	
	}
/*
	$sql2="update jiedan set zhuangtai='申请撤销订单'  where dingdanhao='$dingdanhao'";
		mysql_query($sql2);
	$sql3="update jiazhengfuwufabu set issh='申请取消订单中'  where dingdanhao='$dingdanhao'";
		mysql_query($sql3);
	$comewhere=$_SERVER['HTTP_REFERER'];
	echo "<script language='javascript'>alert('操作成功！');location.href='$comewhere';</script>";
	//;updata jiazhengfuwufabu set issh='否' where dingdanhao = '&dingdanhao'
//}
*/
?>
