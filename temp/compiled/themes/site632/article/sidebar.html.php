<div class="col-sub" style="margin-left:0px;">
			<div style="display:none;"></div><div class="block first-block block-articles " id="block-articles-15591" rel="15591">
    <div class="block-head">
	    <div class="head-inner">
	    	<h2 class="title">文章分类</h2>
	    	<div class="links"><a class="more" href="<?php echo R("/index.php?m=article");?>">更多</a></div>	    </div>
    </div>
    <div class="block-content clearfix">
    	<div class="item-list">
	    	<ul class="clearfix">
            <?php $this->assign("c_data",M("category")->children(0,MODEL_ARTICLE_ID)); ?>
            <?php $_from = $this->_var['c_data']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('k', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['c']):
?>
	    			    		<li>
	    		<a title="<?php echo $this->_var['c']['cname']; ?>" href="<?php echo R("/index.php?m=list&catid=".$this->_var["c"]["catid"]."");?>"><?php echo $this->_var['c']['cname']; ?></a>
	    			    		</li>
                                <?php $_from = $this->_var['c']['child']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'cc');if (count($_from)):
    foreach ($_from AS $this->_var['cc']):
?>
	    			    		<li>
	    		<a title="<?php echo $this->_var['cc']['cname']; ?>" href="<?php echo R("/index.php?m=list&catid=".$this->_var["cc"]["catid"]."");?>">&nbsp;&nbsp;<?php echo $this->_var['cc']['cname']; ?></a>
	    			    		</li>
	    	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                
	    	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	    			    	</ul>
    	</div>
    </div>
    <div class="block-foot"><div><div>-</div></div></div>
 </div>
<div class="block last-block block-articles " id="block-articles-15592" rel="15592">
    <div class="block-head">
	    <div class="head-inner">
	    	<h2 class="title">最新文章</h2>
	    	<div class="links"><a class="more" href="<?php echo R("/index.php?m=article");?>">更多</a></div>	    </div>
    </div>
    <div class="block-content clearfix">
    	<div class="item-list">
	    	<ul class="clearfix">
            <?php $this->assign("t_c",C("articleapi")->recommend("".$this->_var["cat"]["catid"]."",10)); ?>
              <?php $_from = $this->_var['t_c']; if (!is_array($_from) && !is_object($_from)) { $_from=array();}; $this->push_vars('', 'c');if (count($_from)):
    foreach ($_from AS $this->_var['c']):
?>
	    			    		<li>
	    		<a href="index.php?m=show&id=<?php echo $this->_var['c']['id']; ?>"><?php echo $this->cutstr($this->_var['c']['title'],36,'..'); ?></a>
	    			    		</li>
	    		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	    	 
	    			    	</ul>
    	</div>
    </div>
    <div class="block-foot"><div><div>-</div></div></div>
 </div>
		</div>
 
