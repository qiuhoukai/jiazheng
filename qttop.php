<div class="itop">
  <div class="itopc">
    <div class="itopcl"><span>��ӭ�����������ƽ̨��ҳ!</span></div>
    <div class="itopcr">
	  <div align="right">
	    <?php 
					if (empty($_SESSION['cx']))
					{
				?> 
	      <a href="userlog.php"> <strong>�û���½</strong></a>
        <?php 
							}
				  else
				  {
				 ?>
	    ��ǰ�û�:<?php echo $_SESSION['username']?>,��Ա���:<?php echo $_SESSION['cx']?>;&nbsp;&nbsp; <a href="logout.php">�˳�</a><span>|</span><a href="main.php">���˺�̨</a>
	    <?php } ?>
        </div>
    </div>
  </div>
</div>
<div class="ilogo">
  <div class="ilogoc">
    <div class="ilogol"><img src="qtimages/timg.jpg" width="70" height="65" />
      <p><strong>��������ƽ̨</strong><br>
        <span>ȫ������,���ĺǻ�</span></p>
    </div>
    <div class="ilogor">
      <p>ȫ����ѯ���ߣ�<br>
        <strong>400-XXXX-XXXX</strong></p>
    </div>
    <div class="clear"></div>
  </div>
</div>

<div id="hsgbanner">
		<div  class="navgrp">
		
			<ul class="nav" id="nav">	
			 <li class="cur" ><a href="index.php">��վ��ҳ</a></li>
			 <li><a href="jiazhengfuwufabulist.php">��������</a></li>
			 <li><a href="jiazhengrenyuanlist.php">������Ա</a> </li>
			 <li><a style="cursor:pointer">�û�ע��</a>
				<div id="navChild"> <a href="userreg.php">�û�ע��</a> <a href="jiazhengrenyuanadd.php">������Աע��</a> </div></li>
			 <li><a style="cursor:pointer">������Ѷ</a>
				<div id="navChild"> <a href="news.php?lb=վ������">վ������</a> <a href="news.php?lb=��ҵ��Ѷ">��ҵ��Ѷ</a> </div></li>
			 <li><a style="cursor:pointer">��������</a>
				<div id="navChild"> <a href="lyb.php">��Ҫ����</a> <a href="lyblist.php">�鿴����</a> </div></li>
			 <li ><a href="dx_detail.php?lb=ϵͳ���">ϵͳ���</a> </li>
			 <li><a href="login.html">��̨����</a> </li>
			</ul>
        
		</div>
 </div>
