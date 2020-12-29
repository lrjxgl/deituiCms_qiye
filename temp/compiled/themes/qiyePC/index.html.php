<!DOCTYPE html>
<html>
	<?php echo $this->fetch('head.html'); ?>
	<link href="/plugin/swiper/css/swiper.min.css" rel="stylesheet" />
	<body>
		<?php echo $this->fetch('header.html'); ?>
		<?php $this->assign("sets",M("table_data")->getData("const")); ?>
		<div class="flashBox" style="margin-top: -20px; margin-bottom: 20px;">
			<div class="swiper-container" style="width: 100%;overflow: hidden;" id="indexFlash">
				<div class="swiper-wrapper flex" >
					<?php $_from = $this->_var['flashList']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['c']):
?>
					<div class="swiper-slide">
						<img style="width: 100%;" src="<?php echo $this->_var['c']['imgurl']; ?>" />
					</div>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</div>
				 
				<div class="swiper-pagination flex flex-jc-center"></div>
			 
			</div>
		</div>
		<div class="main-body">
			 
			<?php $this->assign("gs",M("article")->get("".$this->_var["sets"]["aboutID"]."")); ?>
			<div style="padding: 20px 10px; background-color: #fff; margin-bottom: 20px; ">
				<div class="flex">
					<img style="width: 240px;" src="<?php echo $this->_var['gs']['imgurl']; ?>.small.jpg" />
					<div class="flex-1  mgl-20">
						<div class="f18 mgb-10 fw-600">公司简介</div>
						<div class="cl2 mgb-10" style="line-height: 1.5;"><?php echo $this->_var['gs']['description']; ?></div>
						<div class="flex">
							<a href="/index.php?m=article&a=show&id=<?php echo $this->_var['gs']['id']; ?>" class="btn btn-outline-primary">查看详情</a>
						</div>
						
					</div>
				</div>
			</div> 
			
			<div class="pd-5 mgb-20">
				<div class="flex-col mgb-20 flex-center">
					<div class="f22 fwb mgb-10">产品展示</div>
					<div class="f16 cl2">RECOMMEND PRODUCT</div>
				</div>
				<?php $this->assign("list",M("article")->recList("".$this->_var["sets"]["productCatid"]."",5)); ?>
				<div class="flex flex-wrap mgb-20">
					<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['c']):
?>
					<a href="/index.php?m=article&a=show&id=<?php echo $this->_var['c']['id']; ?>" class="block col-5 bg-white">
						<div class="pd-5">
							<img class="wmax" src="<?php echo $this->_var['c']['imgurl']; ?>.middle.jpg" />
							<div class="mgb-5"><?php echo $this->_var['c']['title']; ?></div>
							<div class="cl-money">￥<?php echo $this->_var['c']['price']; ?></div>
						</div>
						
					</a>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</div>
				<div class="flex flex-center">
					<a href="/index.php?m=article&a=list&catid=<?php echo $this->_var['sets']['productCatid']; ?>" class="btn btn-outline-primary">更多产品</a>
				</div>
			</div>
			
			<div class="row-box">
				<div class="flex-col mgb-20 flex-center">
					<div class="f22 fwb mgb-10">新闻资讯</div>
					<div class="f16 cl2">RECOMMEND News</div>
				</div>
				<?php $this->assign("list",M("article")->recList("".$this->_var["sets"]["articleCatid"]."",6)); ?>
				<div class="flex flex-wrap mgb-20">
					<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['c']):
?>
					<a href="/index.php?m=article&a=show&id=<?php echo $this->_var['c']['id']; ?>" class="flexlist-item col-2 pointer">
						<?php if ($this->_var['c']['imgurl']): ?><img src="<?php echo $this->_var['c']['imgurl']; ?>.100x100.jpg" class="flexlist-img" /><?php endif; ?>
						<div class="flex-1">
							<div class="flexlist-title"><?php echo $this->_var['c']['title']; ?></div>
							<div class="flexlist-desc"><?php echo $this->_var['c']['description']; ?></div>
						</div>
					</a>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</div>
				<div class="flex flex-center">
					<a href="/index.php?m=article&a=list&catid=<?php echo $this->_var['sets']['articleCatid']; ?>" class="btn btn-outline-primary">更多资讯</a>
				</div>
			</div>
		</div>
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
