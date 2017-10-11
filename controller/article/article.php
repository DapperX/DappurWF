<?php
	namespace DPWF\app\dpblog;

	class article extends \DPWF\controller_base{
		private $userId=0;

		public function __construct(){
			parent::__construct();
			$this->appName='dpblog';
		}

		public function show($id){
			global $unitManage;
			$db=$unitManage->get_instance('database')->getDb($this->appName);
			$sql='SELECT id,title,postTime,content_html FROM dpblog_post WHERE id='.$id;

			$result=$db->query($sql);
			if($result==false){
				echo '<strong>blog::show: Cannot show!</strong><br/>';
				exit();
			}
			$this->display('showArticle.tpl',['post'=>$result->fetch_assoc()]);
		}

		public function list(){
			global $unitManage;
			$db=$unitManage->get_instance('database')->getDb($this->appName);
			$sql='SELECT id,title,postTime,intro FROM dpblog_post';

			echo '===========<strong> blog sql: </br>',$sql,'</br></strong>';
			$result=$db->query($sql);
			if($result==false){
				echo '<strong>blog::list: Cannot list!</strong><br/>';
				exit();
			}
			$posts=[];
			while($post=$result->fetch_assoc()){
				var_dump($post);
				$posts[]=$post;
			}
			$this->display('listArticle.tpl',['posts'=>$posts]);
		}

		public function modify(){
			$this->display('modifyArticle.tpl',['postId'=>0]);
		}

		public function post($title,$content_md,$content_html){
			global $unitManage;
			$db=$unitManage->get_instance('database')->getDb($this->appName);

			$stmt=$db->prepare('INSERT INTO dpblog_post (postTime,intro,title,content_md,content_html) VALUES ("1970-01-01","intro",?,?,?)');
			$stmt->bind_param('sss',$title,$content_md,$content_html);
			$stmt->execute();

			$stmt->close();
			//return $title.'|'.$content_md.'|'.$content_html;
			return '|'.$stmt->errno.'|';
		}
	}