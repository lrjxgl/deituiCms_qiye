<div class="footer-row"></div>
<?php $this->assign("sets",M("table_data")->getData("const")); ?>
<div class="footer">
	<a href="/" class="footer-item icon-home <?php if ($this->_var['ftnav'] == 'index'): ?>footer-active<?php endif; ?>">
		首页
	</a>
	<a href="/index.php?m=article&a=list&catid=<?php echo $this->_var['sets']['productCatid']; ?>" class="footer-item icon-goods <?php if ($this->_var['ftnav'] == 'product'): ?>footer-active<?php endif; ?>">
		产品
	</a>
	<a href="/index.php?m=article&a=list&catid=<?php echo $this->_var['sets']['articleCatid']; ?>" class="footer-item icon-goods <?php if ($this->_var['ftnav'] == 'article'): ?>footer-active<?php endif; ?>">
		资讯
	</a>
	 
	<a href="/index.php?m=article&a=show&id=<?php echo $this->_var['sets']['aboutID']; ?>" class="footer-item icon-info  <?php if ($this->_var['ftnav'] == 'aboutus'): ?>footer-active<?php endif; ?>">
		公司简介
	</a>
	 
</div>