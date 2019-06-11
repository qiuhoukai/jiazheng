<?php
//验证登陆信息
//删除订单，验证是否被接
include_once 'conn.php';
//if($_POST['submit']){
	//$id=$_GET["id"];
	$dingdanhao=$_GET["dingdanhao"];
	//$tablename=$_GET["tablename"];
	//if(!empty($dingdanhao))
	//{echo $dingdanhao;}
	//$userpass=md5($userpass);
	

	$sql0="select issh from jiazhengfuwufabu where dingdanhao='$dingdanhao';";
	$query = mysql_query($sql0);
	$issh = mysql_result($query,0);
	
	//$sql1="select zhuangtai from jiedan where dingdanhao='$dingdanhao';";
	//$query = mysql_query($sql1);
	//$zhuangtai = mysql_result($query,0);
	
	
	if($issh=="否")
	{
		//$sql="delete from jiazhengfuwufabu where dingdanhao='$dingdanhao';";
		$sql="update jiazhengfuwufabu set issh='已取消订单' where dingdanhao='$dingdanhao';";
		mysql_query($sql);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('操作成功！');location.href='$comewhere';</script>";
	}
	
	
	
	
	
	//else
//	{
	//	echo "接单后的撤销功能正在开发中。。。"
//	}
	
	
	
	

	//;updata jiazhengfuwufabu set issh='否' where dingdanhao = '&dingdanhao'
?>
