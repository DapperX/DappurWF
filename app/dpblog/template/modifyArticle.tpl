<?php
	ob_end_clean();
	$viewData=$GLOBALS['DPWF_VIEWDATA'];
	$post=$viewData['post'];
	//if(!isset($viewData['__css'])) $viewData['__css']=[];
	//if(!isset($viewData['__js'])) $viewData['__js']=[];
	$viewData['__css'][]='https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.css';
	$viewData['__js'][]='https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.js';
	$viewData['__js'][]='https://code.jquery.com/jquery-3.4.1.min.js';
	$viewData['__js'][]='//'.$viewData['staticWebDir'].'/js/Parser.js';
?>
<?php require($viewData['templateDir'].'/header.tpl'); ?>

<div class="content">
<div class="wrap">
		<p>Title: <input type="text" id="title"/></p>
		
		<p>Content</p>
		<textarea id="text-input" name="content" oninput="this.editor.update()" rows="6" cols="60"><?php echo $post["content_md"];?></textarea>
		<button id="submit">Submit</button>
		<div id="preview"></div>
</div>
</div>

<script>
	$("#submit").click(function(){
		$.post("//<?php echo DPWF_WEBROOT ?>/ajax.php/dpblog/article/post",
			{
				'id': <?php echo $post["id"];?>,
				'title': $("#title")[0].value,
				'content_md': $("#text-input")[0].value,
				'content_html': $("#preview")[0].innerHTML
			},
			function(result){
				alert(result);
			});
	});
</script>


<script>
	function Editor(input, preview) {
		var parser = new HyperDown;
		this.update = function () {
			preview.innerHTML = parser.makeHtml(input.value);
		};
		input.editor = this;
		this.update();
	}
	new Editor($("#text-input")[0],$("#preview")[0]);
	$('#title').val('<?php echo $post["title"];?>');
</script>

<?php require($viewData['templateDir'].'/footer.tpl'); ?>