<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<?php $this->assign("site",M("site")->selectRow()); ?>
<title><?php if ($this->_var['seo']['title']): ?><?php echo $this->_var['seo']['title']; ?><?php else: ?><?php echo $this->_var['site']['title']; ?><?php endif; ?></title>
<meta name="keywords" content="<?php if ($this->_var['seo']['keywords']): ?><?php echo $this->_var['seo']['keywords']; ?><?php else: ?><?php echo $this->_var['site']['keywords']; ?><?php endif; ?>" />
<meta name="description" content="<?php if ($this->_var['seo']['description']): ?><?php echo $this->_var['seo']['description']; ?><?php else: ?><?php echo $this->_var['site']['description']; ?><?php endif; ?>" />
<meta property="qc:admins" content="32662172176121755676375" />
<link href="/plugin/skyweb/skyweb.css" rel="stylesheet">

<script src="/plugin/skyweb/jquery.js"></script>
<script src="/plugin/skyweb/skyweb.js"></script>
<script src="/plugin/skyweb/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $this->_var['skins']; ?>images/jquery.cycle.all.js"></script>
<script src="<?php echo $this->_var['skins']; ?>images/app.js?v=32"></script>
<link href="<?php echo $this->_var['skins']; ?>images/app.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['skins']; ?>style/style.css" />
</head>
