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
						<div> <?php echo $this->_var['data']['title']; ?></div>
					</div>
					<div class="row-box mgb-5">
						<div class="flex">
							<div class="w300">
								<img src="<?php echo $this->_var['data']['imgurl']; ?>" class="d-img" />
							</div>
							<div class="flex-1 mgl-10">
								<div class="d-title"><?php echo $this->_var['data']['title']; ?></div>
								<div class="flex flex-ai-center">
									<div class="mgr-5 cl2">价格</div>
									<div class="cl-money f18">￥<?php echo $this->_var['data']['price']; ?></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row-box">
						<div class="row-box-hd mgb-10">产品介绍</div>
						<div class="d-content"><?php echo $this->_var['data']['content']; ?></div>
					</div>  
					  
				</div>
			</div>
		</div>
		<?php echo $this->fetch('footer.html'); ?>
	</body>
</html>
