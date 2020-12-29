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
						<div> <?php echo $this->_var['data']['title']; ?></div>
					</div>
					<div class="row-box">
						<div class="d-content"><?php echo $this->_var['data']['content']; ?></div>
					</div>  
				</div>
			</div>
		</div>
		<?php echo $this->fetch('footer.html'); ?>
	</body>
</html>
