<?php
	ob_end_clean();
	$viewData=$GLOBALS['DPWF_VIEWDATA'];
	$post=$viewData['post'];
	$viewData['__css'][]='https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.css';
	$viewData['__js'][]='https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.js';
	//$viewData['__js'][]='//'.$viewData['staticWebDir'].'js/Parser.js';
?>
<?php require($viewData['templateDir'].'header.tpl'); ?>

<nav class="nav" role="navigation">	
	<div class="menu">
		<ul>
			<li id="nvabar-item-index"><a href="http://local_ubuntu/blog/">首页</a></li><li id="navbar-page-2"><a href="http://local_ubuntu/blog/?id=2">留言本</a></li>		</ul>
	</div>	
</nav><div class="wrap">
			<article class="post cate7  auth1">
	<h2><?php echo $post['title'];?></h2>
	<div class="postmeta">
		<span> 日期：2015-10-21</span>
		<span> 分类：<a href="http://local_ubuntu/blog/?cate=7" title="随笔杂谈">随笔杂谈</a></span>
		<span> 浏览：28次</span>
		<span> 评论：0条</span>
		<div class="clear"></div>
	</div>
	<div class="entry">
		<?php echo $post['content_html'];?>
	</div>
	<div class="tags">
			</div>
	<div class="post-copyright">
		<p>内容版权声明：除非注明，否则皆为本站原创文章。</p>
		<p>转载注明出处：<a href="http://local_ubuntu/blog/?id=6" title="计算机和语文" target="_blank">http://local_ubuntu/blog/?id=6</a></p>
	</div>
	<section class="related">
		<h3><i class="icon-caret-down"></i> 相关文章</h3>				<p><strong>暂无相关文章</strong></p>
			</section>
		<section class="commentlist">
		<label id="AjaxCommentBegin"></label>
		<div class="pagenavi commentpagebar">
		</div>
	<label id="AjaxCommentEnd"></label>
</section>
<section class="comment-form" id="comment">
	<h3><i class="icon-caret-down"></i> 我要评论</h3>
		<form id="frmSumbit" target="_self" method="post" action="http://local_ubuntu/blog/zb_system/cmd.php?act=cmt&amp;postid=6&amp;key=e8c56cd9412cd31d16001f515abac79d">
		<input type="hidden" name="inpId" id="inpId" value="6" />
		<input type="hidden" name="inpRevID" id="inpRevID" value="0" />
				<p>
			<input type="text" name="inpName" id="inpName" class="text" value="访客" placeholder="输入你的昵称" tabindex="1"/><label for="name">昵称（必填）</label>
		</p>
		<p>
			<input type="text" name="inpEmail" id="inpEmail" class="text" value="" placeholder="输入您的邮箱，我们保证不会公开" tabindex="2"/><label>邮箱（必填）</label>
		</p>
		<p>
			<input type="text" name="inpHomePage" id="inpHomePage" class="text" value="" placeholder="输入您的网站地址" tabindex="3"/><label>网址</label>
		</p>
						<p>
			<textarea name="txaArticle" id="txaArticle" tabindex="5" placeholder="输入您要说的内容"></textarea>
		</p>
		<p>
			<input type="submit" name="submit" class="submit" value="提交评论" tabindex="6" onclick="return VerifyMessage()"/>
		</p>
		<p>
			<a rel="nofollow" id="cancel-reply" href="#comment" style="display:none;">取消回复</a>
		</p>
		<p class="postbottom">◎欢迎参与讨论，请在这里发表您的看法、交流您的观点。</p>
	</form>
</section>		
	</article>			
</div>

<?php require($viewData['templateDir'].'footer.tpl'); ?>