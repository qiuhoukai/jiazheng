<?php
//��֤��½��Ϣ��ɾ��������Ա

include_once 'conn.php';
//if($_POST['submit']){
	//$id=$_GET["id"];
	$jiazhengbianhao=$_GET["jiazhengbianhao"];
	//$tablename=$_GET["tablename"];
	//if(!empty($dingdanhao))
	//{echo $dingdanhao;}
	//$userpass=md5($userpass);
	$sql="delete from jiazhengrenyuan where jiazhengbianhao='$jiazhengbianhao';";
	 	mysql_query($sql);
	$comewhere=$_SERVER['HTTP_REFERER'];
	echo "<script language='javascript'>alert('�����ɹ���');location.href='$comewhere';</script>";
	//;updata jiazhengfuwufabu set issh='��' where dingdanhao = '&dingdanhao'
//}
?>
