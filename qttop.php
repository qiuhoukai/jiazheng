<div class="itop">
  <div class="itopc">
    <div class="itopcl"><span>欢迎进入家政服务平台主页!</span></div>
    <div class="itopcr">
	  <div align="right">
	    <?php 
					if (empty($_SESSION['cx']))
					{
				?> 
	      <a href="userlog.php"> <strong>用户登陆</strong></a>
        <?php 
							}
				  else
				  {
				 ?>
	    当前用户:<?php echo $_SESSION['username']?>,人员类别:<?php echo $_SESSION['cx']?>;&nbsp;&nbsp; <a href="logout.php">退出</a><span>|</span><a href="main.php">个人后台</a>
	    <?php } ?>
        </div>
    </div>
  </div>
</div>
<div class="ilogo">
  <div class="ilogoc">
    <div class="ilogol"><img src="qtimages/timg.jpg" width="70" height="65" />
      <p><strong>家政服务平台</strong><br>
        <span>全力打造,精心呵护</span></p>
    </div>
    <div class="ilogor">
      <p>全国咨询热线：<br>
        <strong>400-XXXX-XXXX</strong></p>
    </div>
    <div class="clear"></div>
  </div>
</div>

<div id="hsgbanner">
		<div  class="navgrp">
		
			<ul class="nav" id="nav">	
			 <li class="cur" ><a href="index.php">网站首页</a></li>
			 <li><a href="jiazhengfuwufabulist.php">家政任务</a></li>
			 <li><a href="jiazhengrenyuanlist.php">家政人员</a> </li>
			 <li><a style="cursor:pointer">用户注册</a>
				<div id="navChild"> <a href="userreg.php">用户注册</a> <a href="jiazhengrenyuanadd.php">家政人员注册</a> </div></li>
			 <li><a style="cursor:pointer">新闻资讯</a>
				<div id="navChild"> <a href="news.php?lb=站内新闻">站内新闻</a> <a href="news.php?lb=行业资讯">行业资讯</a> </div></li>
			 <li><a style="cursor:pointer">在线留言</a>
				<div id="navChild"> <a href="lyb.php">我要留言</a> <a href="lyblist.php">查看留言</a> </div></li>
			 <li ><a href="dx_detail.php?lb=系统简介">系统简介</a> </li>
			 <li><a href="login.html">后台管理</a> </li>
			</ul>
        
		</div>
 </div>
