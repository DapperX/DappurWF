<?php
	namespace DPWF\app\dpblog;

	class controller extends \DPWF\classLoader{
		public function __construct(){
			echo 'dpblog controller has been loaded.<br/>';
			echo 'dpblog controller NAMESPACE: ',__NAMESPACE__,'<br/>';
			echo 'dpblog controller DIR: ',$GLOBALS['dpblog']['DIR_CONTROLLER'],'<br/>';
			$this->namespace=__NAMESPACE__;
			$this->dir=$GLOBALS['dpblog']['DIR_CONTROLLER'];
		}
	}