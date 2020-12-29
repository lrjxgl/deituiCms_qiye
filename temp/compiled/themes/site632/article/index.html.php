<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<?php echo $this->fetch('head.html'); ?>
<body>
<div class="page"> <?php echo $this->fetch('header.html'); ?>
  <div class="main-body ">
    <div class="row box960 ">
    <div class="layout-innerpg">
      	 <div class="col-4-1">
         	<?php echo $this->fetch('article/sidebar.html'); ?>
         </div>
         <div class="col-4-3">
         	<div class="w98 right">
         	<ul class="data-list" >
            	<?php $this->assign("data",C("articleapi")->onList()); ?>
            	<?php $_from = $this->_var['data']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['c']):
?>
                <?php echo $this->fetch('li_item.html'); ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
            <div><?php echo $this->_var['pagelist']; ?></div>
            </div>
         </div>
         
   </div>      
      
    </div>
  </div>
  <?php echo $this->fetch('footer.html'); ?> </div>
</body>
</html>