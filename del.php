<?php
//��֤��½��Ϣ
//�����Ĳ���
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
	
	//���·��𶩵�
	if($issh=="�����ѹر�")
	{
		$sql1="delete from jiedan where dingdanhao='$dingdanhao';";
		$sql2="update jiazhengfuwufabu set issh='��'  where dingdanhao='$dingdanhao';";
		mysql_query($sql1);
		mysql_query($sql2);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('�����ɹ���');location.href='$comewhere';</script>";
	}
	//δ�ӵ����û�����ȡ������
	if($issh=="��")
	{
		$sql1="update jiazhengfuwufabu set issh='�����ѹر�'  where dingdanhao='$dingdanhao';";
		mysql_query($sql1);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('�����ɹ���');location.href='$comewhere';</script>";
	}
	//�ѽӵ����û�����ȡ������
	if($issh=="��")
	{
		$sql1="update jiazhengfuwufabu set issh='����ȡ������'  where dingdanhao='$dingdanhao';";
		mysql_query($sql1);
		$sql2="update jiedan set zhuangtai='����ȡ������'  where dingdanhao='$dingdanhao';";
		mysql_query($sql2);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('�����ɹ���');location.href='$comewhere';</script>";
	}
	//�ѽӵ����û�ͬ�⳷������
	if($issh=="���볷������"&&$zhuangtai=="���볷������")
	{
		$sql1="update jiazhengfuwufabu set issh='�����ѹر�'  where dingdanhao='$dingdanhao';";
		mysql_query($sql1);
		$sql2="update jiedan set zhuangtai='�����ѹر�'  where dingdanhao='$dingdanhao';";
		mysql_query($sql2);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('�����ɹ���');location.href='$comewhere';</script>";
	}
	//������Ա���볷��������������������jiedan_ed_chexiao.php
	
	//������Աͬ��ȡ��������������������jiedan_ed_chexiao.php
	
	//������Ա�ܾ�ȡ������
	if($issh=="����ȡ������"&&$zhuangtai=="����ȡ������")
	{
		$sql1="update jiazhengfuwufabu set issh='��'  where dingdanhao='$dingdanhao';";
		mysql_query($sql1);
		$sql2="update jiedan set zhuangtai='�ѽӵ�'  where dingdanhao='$dingdanhao';";
		mysql_query($sql2);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('�����ɹ���');location.href='$comewhere';</script>";
	}

	
	
	
	
	
	
	
	
	
/*
	if($zhuangtai=="����ȡ������"||$zhuangtai=="���볷������")
	{
		$sql1="delete from jiedan where dingdanhao='$dingdanhao';";
		$sql2="update jiazhengfuwufabu set issh='��ȡ������'  where dingdanhao='$dingdanhao'";
		mysql_query($sql1);
		mysql_query($sql2);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('�����ɹ���');location.href='$comewhere';</script>";
	}
	if($zhuangtai=="�������·��𶩵�")
	{
		$sql="delete from jiedan where dingdanhao='$dingdanhao'";
	 	mysql_query($sql);
		$sql2="update jiazhengfuwufabu set issh='��'  where dingdanhao='$dingdanhao'";
		mysql_query($sql2);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('�����ɹ���');location.href='$comewhere';</script>";
	}
	if($issh=="��ȡ������")
	{
		$sql2="update jiazhengfuwufabu set issh='��'  where dingdanhao='$dingdanhao'";
		mysql_query($sql2);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('�����ɹ���');location.href='$comewhere';</script>";
	}
	
	if($zhuangtai=="�ѽӵ�")
	{
		echo "<script language='javascript'>alert('�����볷������');history.go(-1);</script>";
	}*/
	else{
		echo "<script language='javascript'>alert('��������');history.go(-1);</script>";
	}
	
	//$sql="delete from jiedan where dingdanhao='$dingdanhao';";
	// 	mysql_query($sql);
	//$sql2="update jiazhengfuwufabu set issh='��'  where dingdanhao='$dingdanhao'";
	//	mysql_query($sql2);
	
	
	
	
	
	//;updata jiazhengfuwufabu set issh='��' where dingdanhao = '&dingdanhao'
//}
?>
