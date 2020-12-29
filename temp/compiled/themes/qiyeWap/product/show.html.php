<!DOCTYPE html>
<html>
	<?php echo $this->fetch('head.html'); ?>
	<link href="/plugin/swiper/css/swiper.min.css" rel="stylesheet" />
	<body>
		<div class="header">
			<div class="header-back"></div>
			<div class="header-title">产品详情</div>
		</div>
		<div class="header-row"></div>
		<div class="main-body mgb-10">
			<?php if (! $this->_var['imgsata']): ?>
			<img src="<?php echo $this->_var['data']['imgurl']; ?>" class="d-img" />
			<?php else: ?>
			<div class="swiper-container" style="width: 100%;" id="indexFlash">
				<div class="swiper-wrapper" >
					<?php $_from = $this->_var['imgsdata']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['c']):
?>
					<div class="swiper-slide">
						<img class="imgWidth" src="<?php echo $this->_var['c']['trueimgurl']; ?>" />
					</div>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</div>
				 
				<div class="swiper-pagination flex flex-jc-center"></div>
			 
			</div>
			<?php endif; ?>
			<div class="row-box mgb-5">
				<div class="d-title"><?php echo $this->_var['data']['title']; ?></div>
				<div class="flex">
					<div class="cl2 mgr-5">价格</div>
					<div class="cl-money"><?php echo $this->_var['data']['price']; ?></div>
				</div>
			</div>
			
			<div class="pd-10 bg-fff">
				<div class="d-content"> <?php echo $this->_var['data']['content']; ?> </div>
			</div>
		</div>
		 
		<?php echo $this->fetch('footer.html'); ?>
		 
		<?php wx_jssdk();?>
		<script type="text/javascript">
			wxshare_title="<?php echo $this->_var['data']['title']; ?>";
			<?php if ($this->_var['data']['imgurl']): ?> 
			 wxshare_imgUrl="<?php echo images_site($this->_var['data']['imgurl']); ?>.100x100.jpg";
			 <?php endif; ?>
		</script>
		<script>
			setTimeout(function(){
				$.get("/index.php?m=article&a=addclick&id=<?php echo $this->_var['data']['id']; ?>&ajax=1")
			},3000);
			
		</script>
		<script src="/plugin/swiper/js/swiper.min.js"></script>
		<script>
			$(function(){
				if($("#indexFlash .swiper-slide").length>0){
					var flash = new Swiper("#indexFlash", {
						pagination: {
							el: '.swiper-pagination',
						}
					});
				}else{
					$("#indexFlash").hide();
				}
				
			})
			
		</script>
	</body>
	
</html>