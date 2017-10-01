<?php
	ob_end_clean();
	$viewData=$GLOBALS['DPWF_VIEWDATA'];
?>
<?php require($viewData['templateDir'].'header.tpl'); ?>

<nav class="nav" role="navigation">	
	<div class="menu">
		<ul>
			<li id="nvabar-item-index"><a href="http://local_ubuntu/blog/">首页</a></li><li id="navbar-page-2"><a href="http://local_ubuntu/blog/?id=2">留言本</a></li>		</ul>
	</div>	
</nav>
<div class="wrap">
<section>
<?php
	foreach($viewData['posts'] as $post){
		echo '<article class="post">';
		echo '<h2><a href="//',$viewData['appWebDir'],'article/show?id=',$post['id'],'" title="',$post['title'],'" target="_blank">',$post['title'],'</a></h2>';
		echo '<div class="postmeta">';
		echo '<span>日期：',$post['postTime'],'</span>';
		echo '<span>分类：<a href="http://local_ubuntu/blog/?cate=1" title="未分类">未分类</a></span>';
		echo '<span>浏览：5次</span>';
		echo '<span>评论：0条</span>';
		echo '<div class="clear"></div>';
		echo '</div>';
		echo '<div class="entry">';
		echo $post['intro'];
		echo '<p class="more"><a href="//',$viewData['appWebDir'],'article/show?id=',$post['id'],'" title="',$post['title'],'">阅读全文</a></p>';
		echo '</div>';
		echo '</article>';
	}
?>
</section>
<div class="pagenavi">
	<a href="http://local_ubuntu/blog/"><span class="page">‹‹</span></a>
	<span class="page now-page">1</span>
	<a href="http://local_ubuntu/blog/"><span class="page">››</span></a>
</div>
</div>


<?php require($viewData['templateDir'].'footer.tpl'); ?>