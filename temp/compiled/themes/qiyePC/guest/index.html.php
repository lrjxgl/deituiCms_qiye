<!DOCTYPE html>
<html>
	<?php echo $this->fetch('head.html'); ?>
	<body>
		<?php echo $this->fetch('header.html'); ?>
		<div class="main-body">
			<div class="flex">
				<div class="flex-1">
					<div class="fwb mgb-10">留言列表</div>
					<div class="list">
						<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['c']):
?>
						<div class="row-box mgb-5">
							
							
						   <div class="flex bd-mp-5">
						   	<div class="cl1 f14"><?php echo $this->_var['c']['nickname']; ?></div>
						   	<div class="flex-1"></div>
						   	<div class="f12 cl2"><?php echo date("Y-m-d H:i:s",$this->_var['c']['dateline']); ?></div> 
						   </div> 
						   <div class="f14 cl2"><?php echo $this->_var['c']['content']; ?></div>
						    
						   <div class="bd-mp-5"></div>
						   <?php if ($this->_var['c']['reply']): ?>
						   <div class="f14 mgb-5 cl2">回复：<?php echo $this->_var['c']['reply']; ?></div>
						   <?php endif; ?>
							
						</div>
						<?php endforeach; else: ?>
							<div class="emptyData">暂无留言</div>
						<?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
						<?php echo $this->_var['pagelist']; ?>
					</div>
				</div>
				<div style="width: 400px;margin-left: 20px;">
					<div class="fwb mgb-10">发表留言</div>
					<form action="/index.php?m=guest&a=save&ajax=1">
					 
					<div class="input-flex">
						<div class="input-flex-label">联系人</div>
						<input name="nickname" class="input-flex-text" type="text" />
					</div>
					<div class="input-flex">
						<div class="input-flex-label">电话</div>
						<input name="telephone" class="input-flex-text" type="text" />
					</div>
					 
					<div class="textarea-flex">
						<div class="textarea-flex-label">留言内容</div>
						<textarea name="content" class="textarea-flex-text" name="content"></textarea>
					</div>
					<div class="btn-row-submit js-submit">发布留言</div>
					</form> 
				</div>
			</div>
		</div>
		<?php echo $this->fetch('footer.html'); ?>
	</body>
</html>
