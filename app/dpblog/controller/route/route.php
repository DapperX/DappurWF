<?php
	namespace DPWF\app\dpblog;

	class route{
		static public function run($s){
			echo 'dpblog_route run: ',$s,'<br/>';
			$t=str_split_once($s,'/');
			$controllerManage=$GLOBALS['dpblog']['controllerManage'];
			return $controllerManage->get_instance($t[0])->run($t[1]);
		}
	}