<!DOCTYPE html>
<html>
	<?php echo $this->fetch('head.html'); ?>
	<body>
		<div class="header">
			<div class="header-back"></div>
			<div class="header-title">产品中心</div>
		</div>
		<div class="header-row"></div>
		<div class="main-body">
			<?php if ($this->_var['children']): ?>
			<div class="tabs-border">
					
					<?php $_from = $this->_var['children']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['c']):
?>	
					<a href="/index.php?m=article&a=list&catid=<?php echo $this->_var['c']['catid']; ?>" class="tabs-border-item"><?php echo $this->_var['c']['cname']; ?></a>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</div>
			<?php endif; ?>	
			<div class="pd-10 bg-fff">
				<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['c']):
?>
				<a href="/index.php?m=article&a=show&id=<?php echo $this->_var['c']['id']; ?>" class="flexlist-item pointer">
					<img class="flexlist-img" src="<?php echo $this->_var['c']['imgurl']; ?>.100x100.jpg" />
					<div class="flex-1">
						
						<div class="flexlist-title"><?php echo $this->_var['c']['title']; ?></div>
						<div class="cl-money">￥<?php echo $this->_var['c']['price']; ?></div>
						<div class="flexlist-desc"><?php echo $this->_var['c']['description']; ?></div>
					</div>
					
				</a>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</div>
		</div>
		<?php echo $this->fetch('footer.html'); ?>
		
	</body>
</html>
