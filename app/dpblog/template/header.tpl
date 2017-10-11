<?php
	$viewData['__css'][]="//$viewData[staticWebDir]/css/common.css";
?>

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
<meta name="description" content="Dappur的博客"/>
<?php
	if(isset($viewData['__css'])) foreach($viewData['__css'] as $css){
		echo "<link rel='stylesheet' type='text/css' href='$css'/>";
	}
	if(isset($viewData['__js'])) foreach($viewData['__js'] as $js){
		echo "<script src='$js'></script>";
	}
?>
</head>
<body>

<div class="banner">
	<header class="header" role="banner">
	<div class="btn"><i class="icon-th-large"></i></div>
	<div class="logo">
		<a href="//<?php echo $viewData['appWebDir']?>/article/list" title="Dappur的博客">
			<img src="//<?php echo $viewData['staticWebDir']?>/img/logo.png"/>
		</a>
	</div>
	<div class="menu">
		<ul>
			<li><a href="#">Index</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Weibo</a></li>
		</ul>
	</div>
	</header>
</div>
<div class="container">
<nav class="nav" role="navigation">	
		<ul>
			<li id="nvabar-item-index">
				<a href="http://local_ubuntu/blog/">首页</a>
			</li>
			<li id="navbar-page-2">
				<a href="http://local_ubuntu/blog/?id=2">留言本</a>
			</li>
		</ul>
</nav>