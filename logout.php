<?php
header("content-type:text/html; charset=utf-8");
//注销登录		//乱码问题
session_start();
$_SESSION['username']="";
$_SESSION['cx']="";

//echo "<script language='javascript'>alert('注销登录成功！');location='index.php';</script>";
  echo "<script>javascript:alert('注销登录成功！');location.href='index.php';</script>";

?>