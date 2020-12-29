<div class="page-side">

	<div class="row-box mgb-10">
		<div class="row-box-hd"><?php if ($this->_var['parent']): ?><?php echo $this->_var['parent']['cname']; ?><?php else: ?>产品中心<?php endif; ?></div>

		<div class="list">
			<?php $_from = $this->_var['catlist']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['c']):
?>
			<a href="/index.php?m=article&a=list&catid=<?php echo $this->_var['c']['catid']; ?>" class="bglist-item <?php if ($this->_var['c']['catid'] == get ( 'catid' )): ?>active<?php endif; ?>"><?php echo $this->_var['c']['cname']; ?></a>
			<?php $_from = $this->_var['c']['child']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'cc');if (count($_from)):
    foreach ($_from AS $this->_var['cc']):
?>
			<a href="/index.php?m=article&a=list&catid=<?php echo $this->_var['cc']['catid']; ?>" class="bglist-item <?php if ($this->_var['cc']['catid'] == get ( 'catid' )): ?>active<?php endif; ?>">|--<?php echo $this->_var['cc']['cname']; ?></a>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
		
		

	</div>
	<?php $this->assign("list",M("article")->recList("".$this->_var["cat"]["catid"]."",12)); ?>
	<?php if ($this->_var['list']): ?>
	<div class="row-box">
		<div class="row-box-hd">热门产品</div>
		<div class="list">
			<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['c']):
?>
			<a href="/index.php?m=article&a=show&id=<?php echo $this->_var['c']['id']; ?>" class="row-item <?php if ($this->_var['c']['id'] == get ( 'id' )): ?>active<?php endif; ?>">
				<div class="row-item-title"><?php echo $this->_var['c']['title']; ?></div>
				<div class="cl-money"><?php echo $this->_var['c']['price']; ?></div>
			</a>
			
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
		
	</div>
	<?php endif; ?>
</div>
