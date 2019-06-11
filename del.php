<?php
//验证登陆信息
//订单的操作
include_once 'conn.php';
//if($_POST['submit']){
	//$id=$_GET["id"];
	$dingdanhao=$_GET["dingdanhao"];
	//$tablename=$_GET["tablename"];
	//if(!empty($dingdanhao))
	//{echo $dingdanhao;}
	//$userpass=md5($userpass);
	
	$sql0="select zhuangtai from jiedan where dingdanhao='$dingdanhao';";
	$query = mysql_query($sql0);
	$zhuangtai = mysql_result($query,0);
	$sql1="select issh from jiazhengfuwufabu where dingdanhao='$dingdanhao';";
	$query1 = mysql_query($sql1);
	$issh = mysql_result($query1,0);
	
	//重新发起订单
	if($issh=="订单已关闭")
	{
		$sql1="delete from jiedan where dingdanhao='$dingdanhao';";
		$sql2="update jiazhengfuwufabu set issh='否'  where dingdanhao='$dingdanhao';";
		mysql_query($sql1);
		mysql_query($sql2);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('操作成功！');location.href='$comewhere';</script>";
	}
	//未接单，用户申请取消订单
	if($issh=="否")
	{
		$sql1="update jiazhengfuwufabu set issh='订单已关闭'  where dingdanhao='$dingdanhao';";
		mysql_query($sql1);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('操作成功！');location.href='$comewhere';</script>";
	}
	//已接单：用户申请取消订单
	if($issh=="是")
	{
		$sql1="update jiazhengfuwufabu set issh='申请取消订单'  where dingdanhao='$dingdanhao';";
		mysql_query($sql1);
		$sql2="update jiedan set zhuangtai='申请取消订单'  where dingdanhao='$dingdanhao';";
		mysql_query($sql2);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('操作成功！');location.href='$comewhere';</script>";
	}
	//已接单，用户同意撤销订单
	if($issh=="申请撤销订单"&&$zhuangtai=="申请撤销订单")
	{
		$sql1="update jiazhengfuwufabu set issh='订单已关闭'  where dingdanhao='$dingdanhao';";
		mysql_query($sql1);
		$sql2="update jiedan set zhuangtai='订单已关闭'  where dingdanhao='$dingdanhao';";
		mysql_query($sql2);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('操作成功！');location.href='$comewhere';</script>";
	}
	//家政人员申请撤销订单——————见jiedan_ed_chexiao.php
	
	//家政人员同意取消订单——————见jiedan_ed_chexiao.php
	
	//家政人员拒绝取消订单
	if($issh=="申请取消订单"&&$zhuangtai=="申请取消订单")
	{
		$sql1="update jiazhengfuwufabu set issh='是'  where dingdanhao='$dingdanhao';";
		mysql_query($sql1);
		$sql2="update jiedan set zhuangtai='已接单'  where dingdanhao='$dingdanhao';";
		mysql_query($sql2);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('操作成功！');location.href='$comewhere';</script>";
	}

	
	
	
	
	
	
	
	
	
/*
	if($zhuangtai=="申请取消订单"||$zhuangtai=="申请撤销订单")
	{
		$sql1="delete from jiedan where dingdanhao='$dingdanhao';";
		$sql2="update jiazhengfuwufabu set issh='已取消订单'  where dingdanhao='$dingdanhao'";
		mysql_query($sql1);
		mysql_query($sql2);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('操作成功！');location.href='$comewhere';</script>";
	}
	if($zhuangtai=="申请重新发起订单")
	{
		$sql="delete from jiedan where dingdanhao='$dingdanhao'";
	 	mysql_query($sql);
		$sql2="update jiazhengfuwufabu set issh='否'  where dingdanhao='$dingdanhao'";
		mysql_query($sql2);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('操作成功！');location.href='$comewhere';</script>";
	}
	if($issh=="已取消订单")
	{
		$sql2="update jiazhengfuwufabu set issh='否'  where dingdanhao='$dingdanhao'";
		mysql_query($sql2);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('操作成功！');location.href='$comewhere';</script>";
	}
	
	if($zhuangtai=="已接单")
	{
		echo "<script language='javascript'>alert('请申请撤销订单');history.go(-1);</script>";
	}*/
	else{
		echo "<script language='javascript'>alert('操作错误！');history.go(-1);</script>";
	}
	
	//$sql="delete from jiedan where dingdanhao='$dingdanhao';";
	// 	mysql_query($sql);
	//$sql2="update jiazhengfuwufabu set issh='否'  where dingdanhao='$dingdanhao'";
	//	mysql_query($sql2);
	
	
	
	
	
	//;updata jiazhengfuwufabu set issh='否' where dingdanhao = '&dingdanhao'
//}
?>
