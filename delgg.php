<?php
//��֤��½��Ϣ

include_once 'conn.php';
//if($_POST['submit']){
	$id=$_GET["id"];
	$tablename=$_GET['tablename'];
	$lb=$_GET['lb'];
	//$userpass=md5($userpass);

//��֤�Ƿ�ɾ����������Ա
if($id!="0")
{
		
//ɾ������Ա
	$sql="delete from $tablename where id=$id";
	//echo $sql;
	 	mysql_query($sql);
		$comewhere=$_SERVER['HTTP_REFERER'];
		
		if($tablename=="allusers")
		{
			echo "<script language='javascript'>alert('ɾ���ɹ���');location.href='yhzhgl.php';</script>";
		}
		else
		{
			echo "<script language='javascript'>alert('ɾ����');location.href='xinwentongzhi_list.php?lb=".$lb."';</script>";
		}

	
}
	else
	{
		echo "<script language='javascript'>alert('������ɾ����������Ա��');location.href='yhzhgl.php';</script>";
	}

//}
?>