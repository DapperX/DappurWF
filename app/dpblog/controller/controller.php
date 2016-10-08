<?php
	namespace DPWF\app\dpblog;

	class controller extends \DPWF\classLoader{
		public function __construct(){
			echo 'controller manager has been loaded.<br/>';
			echo 'controller NAMESPACE: ',__NAMESPACE__,'<br/>';
			echo 'controller DIR: ',DPBLOG_CONTROLLER_DIR,'<br/>';
			$this->namespace=__NAMESPACE__;
			$this->dir=DPBLOG_CONTROLLER_DIR;
		}
	}