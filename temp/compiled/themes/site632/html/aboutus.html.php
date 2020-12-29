<!DOCTYPE html>
<html>
<?php echo $this->fetch('head.html'); ?>
<body>
<div class="page">
<?php echo $this->fetch('header.html'); ?>
<div class="main-body">
<div class="box960">
<div class="row">
<div class="col-5-1"> 
<?php echo $this->fetch('html/sidebar.html'); ?>
</div>
<div class="col-5-4">
<div class="w98 right">
<?php $this->assign("data",C("dataapi")->getWord("关于我们")); ?>
<div class="daohang" style="background-color:#C30; height:40px; line-height:40px;color:#fff;">
<div style=" float:left;     padding:0px 20px;"><?php echo $this->_var['data']['title']; ?></div>
<div style="float:right; padding-right:10px;">首页 &gt; 关于我们</div>
<div class="clearfix"></div>
</div>

<h1 style="padding:20px 0px; text-align:center;"><?php echo $this->_var['data']['title']; ?></h1>
 
<div class="d-content"><?php echo $this->_var['data']['content']; ?></div>
</div>
</div>
</div>
</div>
</div>
<?php echo $this->fetch('footer.html'); ?>
</div>
</body>
</html>