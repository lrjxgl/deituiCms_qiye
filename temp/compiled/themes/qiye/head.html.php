<head>
	<meta charset="utf-8">
	<?php if (! $this->_var['site']): ?>
	<?php $this->assign("site",M("site")->get()); ?>
	<?php endif; ?>
	<title><?php if ($this->_var['seo']): ?><?php echo $this->_var['seo']['title']; ?><?php else: ?><?php echo $this->_var['site']['title']; ?><?php endif; ?></title>
	<link href="/plugin/dt-ui/dt-ui-pc.css" rel="stylesheet" />
	<link href="/plugin/dt-ui/dt-ui-pc-header.css" rel="stylesheet" />
	<link href="//at.alicdn.com/t/font_811242_0zhbr243mw7c.css" rel="stylesheet" />
	<link href="<?php echo $this->_var['skins']; ?>css/app.css" rel="stylesheet" />
	<script src="/plugin/jquery/jquery.js"></script>
</head>
