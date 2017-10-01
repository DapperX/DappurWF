<!DOCTYPE html>
<html lang="zh">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Language" content="zh-CN"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<meta name="robots" content="noindex,nofollow"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>DappurWF安装程序</title>
		<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="style.css"/>
		<!--[if lt IE 9]>
      	<script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      	<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div id="pleft" class="col-sm-3 col-sm-offset-1 hidden-xs menu-fixed">
					<h3>DappurWF</h3>
					<h4>安装程序</h4>
					<ul class="nav nav-list">
						<li id="s1" class="disabled"><a href="#"><i class="glyphicon glyphicon-minus"></i>&emsp;欢迎使用</a></li>
						<li id="s2" class="disabled"><a href="#"><i class="glyphicon glyphicon-minus"></i>&emsp;权限检查</a></li>
						<li id="s3" class="disabled"><a href="#"><i class="glyphicon glyphicon-minus"></i>&emsp;数据库配置</a></li>
						<li id="s4" class="disabled"><a href="#"><i class="glyphicon glyphicon-minus"></i>&emsp;网站设置</a></li>
						<li id="s5" class="disabled"><a href="#"><i class="glyphicon glyphicon-minus"></i>&emsp;完成安装</a></li>
					</ul>
				</div>

				<div id="pright" class="col-md-6 col-sm-7 col-sm-offset-4 ">
					<?php display_content() ?>
				</div>
			</div>
		</div>
		<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				if(typeof(is_error)!="undefined") return;
				var t=<?php echo $_SESSION['install']['step'];?>,u=<?php echo isset($_GET['step'])?$_GET['step']:'t';?>;
				for(var i=1;i<t;i++) $("#s"+i+" a i").toggleClass("glyphicon-ok glyphicon-minus");
				for(var i=1;i<=t;i++) $("#s"+i+" a").attr("href","./index.php?step="+i);
				for(var i=1;i<=t;i++) $("#s"+i).removeClass("disabled");
				if(u<=t){$("#s"+u+" a").css("font-weight","bold").attr("href","#");}
			});
		</script>
	</body>
</html>

<?php function display_content(){
	if(file_exists('install.lock')){
		display_error('安装完成','DappurWF已经安装完成，请前往首页体验吧。<br/>如需重新安装，请删除install目录下的install.lock并重新访问首页。');
		return;
	}
	session_start();
	$step=&$_SESSION['install']['step'];
	if(isset($_POST['step_from']) && $_POST['step_from']==$step) $step++;
	if(!isset($step)){
		display_error('安装程序已停止','这可能是由您直接通过网址访问本安装程序，或在之前手动终止安装造成的。<br/>如需重新运行本安装程序，请前往首页，DappurWF会初始化安装参数并引导您进入安装页面。');
		return;
	}
	$t=isset($_GET['step'])?$_GET['step']:$step;
	if(function_exists('display_step_'.$t) && $t<=$step)
		call_user_func('display_step_'.$t);
	else display_error('错误','安装参数错误。');
}

function display_error($title,$info){ ?>
	<h1><?php echo $title; ?></h1>
	<p><?php echo $info; ?></p>
	<br/><br/>
	<a class="btn btn-primary" href="../">返回首页</a>
	<script>var is_error=true;</script>
<?php }

	function display_step_1(){
		if(!is_readable('END_USER_LICENSE_AGREEMENT')){
			display_error('错误','无法显示DappurWF最终用户协议，安装中止。');
			$step=1;
			return;
		}
	?>
		<h1>欢迎使用</h1><hr/>
		<p>欢迎安装DappurWF，在继续之前请仔细阅读下面的许可协议。</p>
		<pre><?php readfile('END_USER_LICENSE_AGREEMENT'); ?></pre>
		<form method="post" action="./index.php?step=2">
			<input type="hidden" name="step_from" value="1"/>
			<input type="submit" class="btn btn-primary pull-right" value="我已阅读、理解且同意此协议，并选择继续安装"/>
		</form>
<?php }

	function display_step_2(){ ?>
		<h1>权限检查</h1><hr/>
		<p><b>基础框架所需权限</b></p>
		<p><b>模块所需权限</b></p>
		<form method="post" action="./index.php?step=3">
			<input type="hidden" name="step_from" value="2"/>
			<input type="submit" class="btn btn-primary pull-right" value="下一步"/>
		</form>
<?php }

	function display_step_3(){ ?>
		<h1>数据库配置</h1><hr/>
		<p></p>
		<form method="post" action="./index.php?step=4">
			<input type="hidden" name="step_from" value="3"/>
			<input type="submit" class="btn btn-primary pull-right" value="下一步"/>
		</form>
<?php }

	function display_step_4(){ ?>
		<h1>网址设置</h1><hr/>
		<p></p>
		<form method="post" action="./index.php?step=5">
			<input type="hidden" name="step_from" value="4"/>
			<input type="submit" class="btn btn-primary pull-right" value="开始安装"/>
		</form>
<?php }

	function display_step_5(){ ?>
		<h1>正在安装，请稍后</h1><hr/>
		<p></p>
<?php } ?>
