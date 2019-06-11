<div class="jdbj">
  <div class="syqlj">
    <div class="scp1" style="width:1000px;"><strong class="bt1">友情链接</strong><span class="bt2">LINKS</span></div>
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
<!--友情链接的结束--> 

<!--底部的开始-->
<div class="footWrap">
  <div class="footer_nav">
   <!-- <div class="fnavc"> <a href="#">网站首页</a> <a href="#" target="_blank">公司介绍</a> <a href="#" target="_blank">产品中心</a> <a href="#" target="_blank">新闻中心</a> <a href="#" target="_blank">公司资质</a> <a  href="#" target="_blank">联系我们</a> </div>-->
  </div>
  <div class="hbfooter">
    <div class="hbbottom">
      <div class="hbtmleft">
        <p>版权所有：  XXXXXX   XXXXXXXXXX<br />
          销售热线：XXXXXX / XXXXX   &nbsp&nbsp&nbsp&nbsp24小时售后服务热线：XXXXXXXXXXX  &nbsp&nbsp 传真：XXXXXXXX<br />
          公司地址：XXXXXXXX  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp技术支持：<!--<a href="XXXXXX" target="_blank">    </a>--> XXXXXXXX </p>
      </div>
      <div class="hbtmright"> <img src="qtimages/jianguan.png" width="88" height="88" /> <br />
        工商网监 </div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
</div>