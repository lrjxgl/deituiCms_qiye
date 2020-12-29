<!DOCTYPE html>
<html>
	<?php echo $this->fetch('head.html'); ?>
	<body>
		<?php echo $this->fetch('header.html'); ?>
		<div class="main-body">
			<div class="flex">
				 
				<?php echo $this->fetch('product/side.html'); ?>
				<div class="flex-1">
					<div class="flex mgb-10 flex-ai-center">
						<div>当前位置：</div>
						<div>首页</div>
						
						<div>&gt;</div>
						<div> <?php echo $this->_var['cat']['cname']; ?></div>
					</div>
					<div class="flex flex-wrap">
						<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['c']):
?>
						<a href="/index.php?m=article&a=show&id=<?php echo $this->_var['c']['id']; ?>" class="block col-3 bg-white">
							<div class="pd-5">
								<img class="wmax" src="<?php echo $this->_var['c']['imgurl']; ?>.middle.jpg" />
								<div class="mgb-5"><?php echo $this->_var['c']['title']; ?></div>
								<div class="cl-money">￥<?php echo $this->_var['c']['price']; ?></div>
							</div>
							
						</a>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</div>
				</div>
			</div>
		</div>
		<?php echo $this->fetch('footer.html'); ?>
	</body>
</html>
