<!DOCTYPE html>
<html>
	<?php echo $this->fetch('head.html'); ?>
	<body>
		<?php echo $this->fetch('header.html'); ?>
		<div class="main-body">
			<div class="flex">
				 
				<?php echo $this->fetch('article/side.html'); ?>
				<div class="flex-1">
					<div class="flex mgb-10 flex-ai-center">
						<div>当前位置：</div>
						<a href="/">首页</a>
						<div>&gt;</div>
						<div><?php echo $this->_var['cat']['cname']; ?></div>
						 
						 
					</div>
					<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['c']):
?>
					<a href="/index.php?m=article&a=show&id=<?php echo $this->_var['c']['id']; ?>" class="flexlist-item pointer">
						<?php if ($this->_var['c']['imgurl']): ?><img src="<?php echo $this->_var['c']['imgurl']; ?>.100x100.jpg" class="flexlist-img" /><?php endif; ?>
						<div class="flex-1">
							<div class="flexlist-title"><?php echo $this->_var['c']['title']; ?></div>
							<div class="flexlist-desc"><?php echo $this->_var['c']['description']; ?></div>
						</div>
					</a>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					<?php echo $this->_var['pagelist']; ?>
				</div>
			</div>
		</div>
		<?php echo $this->fetch('footer.html'); ?>
	</body>
</html>
