<!DOCTYPE html>
<html>
<?php echo $this->fetch('head.html'); ?>
<body >
<div id="doc">
	<?php echo $this->fetch('header.html'); ?>
	<div id="bd">

	<div id="homepg" class="bd-inner">
		<div  class="clearfix layout-home three-cols">
	<div class="col-main">
		<div class="main-wrap">
			<div class="block">
				<div class="block-head">
					<div class="head-inner">
						<h2 class="title">新闻列表</h2>
						<div class="links"><a class="more" href="<?php echo R("/index.php?m=article");?>">更多</a></div>
					</div>
				</div>
				<div class="block-content clearfix">
					<ul class="item-list">
						<?php $this->assign("t_c",C("articleapi")->recommend(0,4)); ?>
                        <?php $_from = $this->_var['t_c']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['c']):
?>				
						<li>
							<a href="<?php echo R("/index.php?m=show&id=".$this->_var["c"]["id"]."");?>" title="<?php echo $this->_var['c']['title']; ?>"><?php echo $this->cutstr($this->_var['c']['title'],24,''); ?></a> <em class="date"><?php echo date("Y-m-d",$this->_var['c']['dateline']); ?></em>
						</li>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>				
						 
											
					</ul>
				</div>
				<div class="block-foot"><div><div>-</div></div></div>
			</div>
		</div>
	</div>
	<div class="col-sub">
		<div class="block block-menu-simple">
			<div class="block-head">
				<div class="head-inner">
					<h2 class="title">联系我们</h2>
					 
				</div>
			</div>
			<div class="block-content clearfix">
										<div class="contact">
					 <?php $this->assign("t1",C("dataapi")->getWord("联系我们")); ?>
        <?php echo $this->_var['t1']['info']; ?>
					</div>
								</div>
			<div class="block-foot"><div><div>-</div></div></div>
		</div>
	</div>
	<div class="col-extra">
		<div class="block">
			<div class="block-head">
				<div class="head-inner">
					<h2 class="title">关于我们</h2>
					 
				</div>
			</div>
			<div class="block-content clearfix">
				<div class="content-text">
					 <?php $this->assign("t1",C("dataapi")->getWord("关于我们")); ?>
        <?php echo $this->_var['t1']['info']; ?>
				</div>
			</div>
			<div class="block-foot"><div><div>-</div></div></div>
		</div>
	</div>
	</div>
			<div class="clearfix  layout-home">
    	<div class="col-main">
	<div class="main-wrap" style=" margin-right:0px;">
    	<div style="display:none;"></div><div class="block first-block block-products " id="block-products-15580" rel="15580">
    <div class="block-head"><div class="head-inner"><h2 class="title">最新产品</h2><div class="links"><a class="more" href="<?php echo R("/index.php?m=product");?>">更多</a></div>    </div></div>
    <div class="block-content clearfix">
        <ul class="list-gallery clearfix">
        <?php $this->assign("t_c",C("productapi")->recommend(0,6)); ?>
        <?php $_from = $this->_var['t_c']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['c']):
?>
                        <li>
                <div class="thumb">
                <a href="<?php echo R("/index.php?m=show&id=".$this->_var["c"]["id"]."");?>" ><img src="<?php echo IMAGES_SITE; ?><?php echo $this->_var['c']['imgurl']; ?>.100x100.jpg" alt="<?php echo R("/index.php?m=show&id=".$this->_var["c"]["id"]."");?>" width="100%" /></a>
                </div>
                <div class="des"><p class="default"><a href="<?php echo R("/index.php?m=show&id=".$this->_var["c"]["id"]."");?>" ><?php echo $this->_var['c']['title']; ?></a></p></div>
				            </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>                 
                    </ul>
    </div>
    <div class="block-foot"><div><div>-</div></div></div>
 </div>	</div>
	</div>
	 
	
	</div>
	</div>
	</div>
 <?php echo $this->fetch('footer.html'); ?>
</body>
</html>