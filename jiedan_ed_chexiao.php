<?php
//��֤��½��Ϣ

	//������Ա���볷������
	
	//������Աͬ��ȡ������
include_once 'conn.php';

	$dingdanhao=$_GET["dingdanhao"];
	$sql1="select issh from jiazhengfuwufabu where dingdanhao='$dingdanhao';";
	$query1 = mysql_query($sql1);
	$issh = mysql_result($query1,0);
//������Ա���볷������
	if($issh=="��")
	{
		$sql1="update jiazhengfuwufabu set issh='���볷������'  where dingdanhao='$dingdanhao';";
		mysql_query($sql1);
		$sql2="update jiedan set zhuangtai='���볷������'  where dingdanhao='$dingdanhao';";
		mysql_query($sql2);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('�����ɹ���');location.href='$comewhere';</script>";
	}
//������Աͬ��ȡ������
	if($issh=="����ȡ������")
	{
		$sql1="update jiazhengfuwufabu set issh='�����ѹر�'  where dingdanhao='$dingdanhao';";
		mysql_query($sql1);
		$sql2="update jiedan set zhuangtai='�����ѹر�'  where dingdanhao='$dingdanhao';";
		mysql_query($sql2);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('�����ɹ���');location.href='$comewhere';</script>";
	}
//������Աȡ��������������
	if($issh=="���볷������")
	{
		$sql1="update jiazhengfuwufabu set issh='��'  where dingdanhao='$dingdanhao';";
		mysql_query($sql1);
		$sql2="update jiedan set zhuangtai='�ѽӵ�'  where dingdanhao='$dingdanhao';";
		mysql_query($sql2);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('�����ɹ���');location.href='$comewhere';</script>";
	}

	
	
	
	
	
	
	else
	{
		echo "<script language='javascript'>alert('ϵͳ����');history.go(-1);</script>";
	
	}
/*
	$sql2="update jiedan set zhuangtai='���볷������'  where dingdanhao='$dingdanhao'";
		mysql_query($sql2);
	$sql3="update jiazhengfuwufabu set issh='����ȡ��������'  where dingdanhao='$dingdanhao'";
		mysql_query($sql3);
	$comewhere=$_SERVER['HTTP_REFERER'];
	echo "<script language='javascript'>alert('�����ɹ���');location.href='$comewhere';</script>";
	//;updata jiazhengfuwufabu set issh='��' where dingdanhao = '&dingdanhao'
//}
*/
?>
