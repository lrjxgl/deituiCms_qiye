

<div id="hd">
		<div class="clearfix pagetitle">
			<h1 class="sitename"><a href="/" title="<?php echo $this->_var['site']['sitename']; ?>"><img id="sitelogo" class="ifixpng" src="<?php echo IMAGES_SITE; ?><?php echo $this->_var['site']['logo']; ?>" alt="<?php echo $this->_var['site']['sitename']; ?>" /></a></h1>
			<div class="extra">
				<div class="language">
				<?php if ($this->_var['ssuser']): ?>
                    欢迎您，<?php echo $this->_var['ssuser']['nickname']; ?>,<a href="<?php echo R("/index.php?m=order&a=my");?>">用户中心</a>!
                    <?php else: ?><a href="<?php echo R("/index.php?m=login");?>">登陆</a>	 | <a href="<?php echo R("/index.php?m=register&a=reg");?>">注册</a><?php endif; ?>
                </div>
				 
			</div>
		</div>
		<div class="clearfix sitenav">
			<div class="clearfix menu-main">
				<ul id="menuSitenav" class="clearfix">
<li class="first-item">
     <a href="/" class="home"><span>首页</span></a>
</li>
                                <li >
                <a href="<?php echo R("/index.php?m=html&a=aboutus");?>" target="_self"><span>公司简介</span></a>                                </li>
                                <li >
                <a href="<?php echo R("/index.php?m=article");?>" target="_self"><span>新闻中心</span></a>                                </li>
                                <li >
                <a href="<?php echo R("/index.php?m=product");?>" target="_self"><span>产品展示</span></a>                                </li>
                                <li >
                <a href="<?php echo R("/index.php?m=html&a=job");?>" target="_self"><span>诚聘英才</span></a>                                </li>
                                <li >
                <a href="<?php echo R("/index.php?m=guest&a=add");?>" target="_self"><span>在线咨询</span></a>                                </li>
                                 
                                <li  class="last-item">
                <a href="<?php echo R("/index.php?m=html&a=contact");?>" target="_self"><span>联系我们</span></a>                                </li>
                </ul>			</div>
		</div>
		</div>
        
        <div class="banner-main" style="width:960px; background-color:inherit; margin: 0px auto;" id="banner-main">
		<div id="banner-main" class="banner banner-main"><div class="banner-inner"><img src="<?php echo $this->_var['skins']; ?>style/banner.jpg" alt="" /></div></div>	</div>