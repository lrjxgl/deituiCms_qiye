<div style="padding: 40px;background-color: #fff; margin-top: 20px;">
	<?php $this->assign("com",M("table_data")->getData("aboutus")); ?>

	<div class="main-body">
		<div class="flex mgb-10">
			<div class="flex-1">
				<div class="mgb-10">
					<span class="mgr-10 cl2">友情链接:</span>
					<?php $this->assign("links",M("ad")->listbyno("pc-friendlink")); ?>
					<?php $_from = $this->_var['links']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['c']):
?>
					<a class="cl2 mgr-10" href="<?php echo $this->_var['c']['link1']; ?>"><?php echo $this->_var['c']['title']; ?></a>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

				</div>
				<div class="mgb-10">
					<span class="cl2 mgr-10"> 2021 © </span>
					<a class="cl2 mgr-10" href="/" target="_blank"><?php echo $this->_var['site']['sitename']; ?></a>
					<a class="  cl2" href="https://beian.miit.gov.cn"><?php echo $this->_var['site']['icp']; ?></a>

				</div>
				<div class="cl2">技术支持：<a class="cl2" href="https://www.deituicms.com">deituiCMS</a></div>
			</div>
			<div class="mgr-10">
				<img src="<?php echo $this->_var['com']['ewm']; ?>.100x100.jpg" class="w100" />
			</div>
			<div>
				<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['com']['qq']; ?>&site=qq&menu=yes" class="btn-small mgb-10 btn-outline-primary">在线客服</a>
				<div class="cl2 f16 mgb-5">电话：<?php echo $this->_var['com']['telephone']; ?></div>
				
				<div class="mgb-5 cl2">联系人：<?php echo $this->_var['com']['nickname']; ?></div>
				<div class="mgb-5 cl2">地址：<?php echo $this->_var['com']['address']; ?></div>

			</div>
		</div>



		
	</div>

</div>
