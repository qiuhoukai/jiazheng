<div class="jdbj">
  <div class="syqlj">
    <div class="scp1" style="width:1000px;"><strong class="bt1">��������</strong><span class="bt2">LINKS</span></div>
    <div class="yqljs"> 
	<?php 
					  $sql="select * from youqinglianjie order by id desc";
					  $query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount>0)
					  {
					  	for($i=0;$i<$rowscount;$i++)
						{
						?>
	<a target="_blank" href="<?php echo mysql_result($query,$i,"wangzhi");?>"><?php echo mysql_result($query,$i,"wangzhanmingcheng");?></a>
	  <?php
						}
					  }
					  ?>
	
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
<!--�������ӵĽ���--> 

<!--�ײ��Ŀ�ʼ-->
<div class="footWrap">
  <div class="footer_nav">
   <!-- <div class="fnavc"> <a href="#">��վ��ҳ</a> <a href="#" target="_blank">��˾����</a> <a href="#" target="_blank">��Ʒ����</a> <a href="#" target="_blank">��������</a> <a href="#" target="_blank">��˾����</a> <a  href="#" target="_blank">��ϵ����</a> </div>-->
  </div>
  <div class="hbfooter">
    <div class="hbbottom">
      <div class="hbtmleft">
        <p>��Ȩ���У�  XXXXXX   XXXXXXXXXX<br />
          �������ߣ�XXXXXX / XXXXX   &nbsp&nbsp&nbsp&nbsp24Сʱ�ۺ�������ߣ�XXXXXXXXXXX  &nbsp&nbsp ���棺XXXXXXXX<br />
          ��˾��ַ��XXXXXXXX  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp����֧�֣�<!--<a href="XXXXXX" target="_blank">    </a>--> XXXXXXXX </p>
      </div>
      <div class="hbtmright"> <img src="qtimages/jianguan.png" width="88" height="88" /> <br />
        �������� </div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
</div>