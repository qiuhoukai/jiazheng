<?php
//��֤��½��Ϣ
//ɾ����������֤�Ƿ񱻽�
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
	
	
	if($issh=="��")
	{
		//$sql="delete from jiazhengfuwufabu where dingdanhao='$dingdanhao';";
		$sql="update jiazhengfuwufabu set issh='��ȡ������' where dingdanhao='$dingdanhao';";
		mysql_query($sql);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('�����ɹ���');location.href='$comewhere';</script>";
	}
	
	
	
	
	
	//else
//	{
	//	echo "�ӵ���ĳ����������ڿ����С�����"
//	}
	
	
	
	

	//;updata jiazhengfuwufabu set issh='��' where dingdanhao = '&dingdanhao'
?>
