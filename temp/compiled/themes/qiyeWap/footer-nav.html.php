<div class="footer-row"></div>
<?php $this->assign("sets",M("table_data")->getData("const")); ?>
<div class="footer">
	<a href="/" class="footer-item icon-home">
		首页
	</a>
	<a href="/index.php?m=article&a=list&catid=<?php echo $this->_var['sets']['productCatid']; ?>" class="footer-item icon-goods">
		产品
	</a>
	<a href="/index.php?m=article&a=list&catid=<?php echo $this->_var['sets']['articleCatid']; ?>" class="footer-item icon-goods">
		资讯
	</a>
	 
	<a href="/index.php?m=article&a=show&id=<?php echo $this->_var['sets']['aboutID']; ?>" class="footer-item icon-info">
		联系我们
	</a>
	 
</div>