<?php
//��֤��½��Ϣ
//���ӵ���Ϣ�ĳ�������Ϊδ�ӵ������·��𶩵�
include_once 'conn.php';

	$dingdanhao=$_GET["dingdanhao"];


		$sql1="update jiazhengfuwufabu set issh='�����'  where dingdanhao='$dingdanhao'";
		mysql_query($sql1);
		$sql2="update jiedan set zhuangtai='�ѽ���'  where dingdanhao='$dingdanhao'";
		mysql_query($sql2);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('�����ɹ���');location.href='$comewhere';</script>";
	
?>
