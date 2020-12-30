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
						<a href="/index.php?m=article&a=list&catid=<?php echo $this->_var['cat']['catid']; ?>"><?php echo $this->_var['cat']['cname']; ?></a>
						<div>&gt;</div>
						<div> 详情</div>
					</div>
					<div class="row-box">
						<div class="d-title"><?php echo $this->_var['data']['title']; ?></div>
						<div class="d-tools">
							<div class="cl2 f12">发表于 <?php echo $this->_var['data']['timeago']; ?></div>
						</div>
						<div class="d-content"><?php echo $this->_var['data']['content']; ?></div>
					</div>  
				</div>
			</div>
		</div>
		<?php echo $this->fetch('footer.html'); ?>
	</body>
</html>
