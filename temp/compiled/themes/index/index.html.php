<!DOCTYPE html>
<html>
<?php echo $this->fetch('head.html'); ?>
<link href="/plugin/swiper/css/swiper.min.css" rel="stylesheet" />

<body>
<div class="header">
	<div class="header-title"><?php echo $this->_var['site']['sitename']; ?></div>
</div>
<div class="header-row"></div>
<div class="main-body">
	<?php $this->assign("sets",M("table_data")->getData("const")); ?>
	<div class="swiper-container" id="indexFlash">
		<div class="swiper-wrapper" >
			<?php $_from = $this->_var['flashList']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['c']):
?>
			<div class="swiper-slide">
				<img class="imgWidth" src="<?php echo $this->_var['c']['imgurl']; ?>" />
			</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
		 
		<div class="swiper-pagination flex flex-jc-center"></div>
	 
	</div>
	<div class="m-navPic">
	    <?php $_from = $this->_var['navList']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['c']):
?>
	    <a href="<?php echo $this->_var['c']['link_url']; ?>" class="m-navPic-item">
			  <img class="m-navPic-img" src="<?php echo images_site($this->_var['c']['logo']); ?>" />
			  <div class="m-navPic-title"><?php echo $this->_var['c']['title']; ?></div>
			   
	    </a>
		
	    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
	<div  >
		<div class="row-box-hd pdl-10">
			<div class="flex-1 f16">产品推荐</div>
			<div gourl="/index.php?m=article&a=list&catid=<?php echo $this->_var['sets']['productCatid']; ?>" class="row-box-more">更多</div>
		</div>
		<?php $this->assign("list",M("article")->recList("".$this->_var["sets"]["productCatid"]."",5)); ?>
		<div class="flexlist">
			<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['c']):
?>
			<a href="/index.php?m=article&a=show&id=<?php echo $this->_var['c']['id']; ?>" class="flexlist-item pointer">
				<img class="flexlist-img" src="<?php echo $this->_var['c']['imgurl']; ?>.100x100.jpg" />
				<div class="flex-1">
					
					<div class="flexlist-title"><?php echo $this->_var['c']['title']; ?></div>
					<div class="cl-money">￥<?php echo $this->_var['c']['price']; ?></div>
					<div class="flexlist-desc"><?php echo $this->_var['c']['description']; ?></div>
				</div>
				
			</a>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
		 
	</div>	 
	<div class="row-box-hd pdl-10">
		<div class="flex-1 f16">文章推荐</div>
		<div gourl="/index.php?m=article&a=list&catid=<?php echo $this->_var['sets']['articleCatid']; ?>" class="row-box-more">更多</div>
	</div>
	<div >
	<?php $this->assign("list",M("article")->recList("".$this->_var["sets"]["productCatid"]."",5)); ?>
	<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['c']):
?>
	<a href="/index.php?m=article&a=show&id=<?php echo $this->_var['c']['id']; ?>" class="sglist-item">
		<?php if ($this->_var['c']['imgurl']): ?>
		<div class="sglist-imgbox">
			<img class="sglist-img" src="<?php echo $this->_var['c']['imgurl']; ?>.middle.jpg" />
		</div>
		<?php endif; ?>
		<div class="sglist-title"><?php echo $this->_var['c']['title']; ?></div>
		<div class="sglist-desc"><?php echo $this->_var['c']['description']; ?></div>
		 
	</a>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
	 
</div>
<div class="flex-center pd-10">
	<a class="f12 cl3" href="http://www.beian.miit.gov.cn"><?php echo $this->_var['site']['icp']; ?></a>
</div>  
<?php echo $this->fetch('footer-nav.html'); ?>
<?php echo $this->fetch('footer.html'); ?>
<script src="/plugin/swiper/js/swiper.min.js"></script>
<script>
	$(function(){
		var flash = new Swiper("#indexFlash", {
			pagination: {
				el: '.swiper-pagination',
			}
		});
	})
	
</script>
</body>

</html>