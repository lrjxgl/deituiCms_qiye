 <div class="header">
	<div class="header-box">
		 
		<img src="<?php echo images_site($this->_var['site']['logo']); ?>" class="header-logo"  alt="deituiCMS">
		<?php $this->assign("navList",M("navbar")->navlist(3)); ?> 
		 
		<div class="header-navbar">
			<a href="/" class="header-navbar-item <?php if ($this->_var['headerNav'] == 'index'): ?>header-navbar-active<?php endif; ?>">首页</a>
			<?php $_from = $this->_var['navList']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['c']):
?> 
			<div class="header-navbar-item <?php if ($this->_var['headerNav'] == 'down'): ?>header-navbar-active<?php endif; ?>">
				<a class="cl-white" href="<?php echo $this->_var['c']['link_url']; ?>"><?php echo $this->_var['c']['title']; ?></a>
				<?php if ($this->_var['c']['child']): ?>
				<div class="header-navbar-childBox">
					<?php $_from = $this->_var['c']['child']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'cc');if (count($_from)):
    foreach ($_from AS $this->_var['cc']):
?>
					<a href="<?php echo $this->_var['cc']['link_url']; ?>" class="header-navbar-childBox-item"><?php echo $this->_var['cc']['title']; ?></a>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					 
				</div>
				<?php endif; ?>
			</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			
		</div>
		 
	</div>
	<div class="header-navbar-action"></div>
</div>
<div class="header-row"></div>
 
<script>
	$(function(){
		if($(".header-navbar-active").length>0){
			var left=$(".header-navbar-active").offset().left+$(".header-navbar-active").width()/2;
		}else{
			var left=$(".header-navbar-item:eq(0)").offset().left+$(".header-navbar-item:eq(0)").width()/2;
		}
		
		$(".header-navbar-action").css({left:left});
		$(document).on("mouseenter",".header-navbar-item",function(){
			var w=$(this).width();
			$(this).addClass("header-navbar-active").siblings().removeClass("header-navbar-active");
			var left=$(".header-navbar-active").offset().left+w/2;
			$(".header-navbar-action").animate({left:left},"fast");
			$(this).find(".header-navbar-childBox").addClass("active")
		})
		$(document).on("mouseleave",".header-navbar-item",function(){
			$(this).find(".header-navbar-childBox").removeClass("active")
		})
		$(document).on("click","[gourl]",function(){
			window.location=$(this).attr("gourl");
		})
	})
	
	
</script>