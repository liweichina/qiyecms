<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo ($title); ?></title>
<!-- Bootstrap -->
<link href="__PUBLIC__/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="/Public/Js/Jquery/Jqueryb.js"></script>
<script src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script>
<!--<link rel="stylesheet" type="text/css" href="/Public/Css/Common/common.css" />-->
<link rel="stylesheet" type="text/css" href="../Public/Css/common.css" />
<script>
	$(document).ready(function(){
		
	});
</script>
</head>
<body>
<div id="header">
	<div style="height:16px;"></div>
	<div id="navigation">
		<ul class="nav nav-pills">
		    <li <?php if(MODULE_NAME == 'Index'): ?>class="active"<?php endif; ?> >
		    	<a href="index.php?m=Index&a=index">首页</a>
		    </li>
		    <li <?php if(MODULE_NAME == 'Portal'): ?>class="active"<?php endif; ?> >
		    	<a href="index.php?m=Portal&a=index">门户</a>
		    </li>
		    <li <?php if(MODULE_NAME == 'Forum'): ?>class="active"<?php endif; ?> >
		    	<a href="index.php?m=Forum&a=index">论坛</a>
		    </li>
		    <li <?php if(APP_NAME == 'Admin'): ?>class="active"<?php endif; ?> >
		    	<a href="admin.php?m=Index&a=index">后台管理</a>
		    </li>
    	</ul>
	</div>
</div>
<div id="main">
	



portal
</div>
<div id="footer">
	<div id="fcenter">
		<div>
			本网站由ThinkPHP开发。
		</div>
		<div>
			关于 · 问题反馈 · 
			<a href="http://www.miibeian.gov.cn/publish/query/indexFirst.action">京ICP备13023464号</a>
		</div>
	</div>
</div>
</body>
</html>