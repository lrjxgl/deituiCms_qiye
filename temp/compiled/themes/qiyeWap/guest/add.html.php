<!doctype html>
<html>
<?php echo $this->fetch('head.html'); ?>

<body>
<div class="header">
			<div class="header-back"></div>
			<div class="header-title">发布留言</div>
			 
		</div>
		<div class="header-row"></div>

<div class="main-body">
    <form action="/index.php?m=guest&a=save&ajax=1">
	<input type="hidden" name="id" value="<?php echo $this->_var['data']['id']; ?>">
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
 
<?php echo $this->fetch('footer.html'); ?>
</div>
</body>
</html>
