<?php
//��֤��½��Ϣ
//���ӵ���Ϣ�ĳ���
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
	$sql2="update jiedan set zhuangtai='�������·��𶩵�'  where dingdanhao='$dingdanhao'";
		mysql_query($sql2);
	$sql3="update jiazhengfuwufabu set issh='�������·��𶩵���'  where dingdanhao='$dingdanhao'";
		mysql_query($sql3);
	$comewhere=$_SERVER['HTTP_REFERER'];
	echo "<script language='javascript'>alert('�����ɹ���');location.href='$comewhere';</script>";
	//;updata jiazhengfuwufabu set issh='��' where dingdanhao = '&dingdanhao'
//}
?>
