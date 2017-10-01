<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="UTF-8"/>
<meta http-equiv="Cache-Control" content="no-transform"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta http-equiv="Content-Language" content="zh-CN"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title>Dappur的博客_IT爱好者</title>
<meta name="keywords" content="Dappur,戴普,blog,博客"/>
<meta name="description" content="Dappur的私人博客"/>
<link rel="stylesheet" type="text/css" href="//<?php echo $viewData['staticWebDir']?>css/style.css" media="screen"/>
<script src="//<?php echo $viewData['staticWebDir']?>js/common.js" type="text/javascript"></script>
<script src="//<?php echo $viewData['staticWebDir']?>js/c_html_js_add.php" type="text/javascript"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="http://local_ubuntu/blog/zb_users/theme/plain/script/html5shiv.js"></script>
<script type="text/javascript" src="http://local_ubuntu/blog/zb_users/theme/plain/script/respond.min.js"></script>
<![endif]-->
<script src="http://local_ubuntu/blog/zb_users/theme/plain/script/leonhere.js"></script>
<?php
	if(!isset($viewData['__css'])) $viewData['__css']=[];
	if(!isset($viewData['__js'])) $viewData['__js']=[];
	foreach($viewData['__css'] as $css){
		echo "<link rel='stylesheet' type='text/css' href='$css'/>";
	}
	foreach($viewData['__js'] as $js){
		echo "<script src='$js'></script>";
	}
?>
</head>
<body>
<header class="header" role="banner">
	<div class="btn"><i class="icon-th-large"></i></div>
	<div class="logo">
		<a href="http://local_ubuntu/blog/" title="Dappur的博客"><img src="http://local_ubuntu/blog/zb_users/theme/plain/style/images/logo.png"/></a>
	</div>
	<div class="searchbtn"><i class="icon-search"></i></div>
	<div class="search-form">
		<form name="search" method="post" action="http://local_ubuntu/blog/zb_system/cmd.php?act=search">
			<input type="text" name="q" id="edtSearch" class="s" value="" placeholder="请输入关键词"/>
			<input type="submit" name="submit" id="btnPost" class="submit" value="搜索"/>
		</form>
	</div>
</header>