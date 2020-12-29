<!DOCTYPE html>
<html>
	<?php echo $this->fetch('head.html'); ?>
	<body>
		<?php echo $this->fetch('header.html'); ?>
		<div class="main-body">
			<div class="flex">
				<div class="page-side">
					<?php $this->assign("list",M("article")->getListByCatid("".$this->_var["data"]["catid"]."")); ?>
					<div class="row-box">
						<div class="row-box-hd"><?php echo $this->_var['cat']['cname']; ?></div>
						<div class="list">
							<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['c']):
?>
							<a href="/index.php?m=article&a=show&id=<?php echo $this->_var['c']['id']; ?>" class="bglist-item <?php if ($this->_var['c']['id'] == get ( 'id' )): ?>active<?php endif; ?>"><?php echo $this->_var['c']['title']; ?></a>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</div>
						
					</div>
				</div>
				<div class="flex-1">
					<div class="flex mgb-10 flex-ai-center">
						<div>当前位置：</div>
						<div>首页</div>
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
