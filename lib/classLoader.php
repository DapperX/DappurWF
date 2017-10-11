<?php
	namespace DPWF;
	echo 'classLoader.php has been required<br/>';

	class classLoader{
		protected $namespace=__NAMESPACE__;
		protected $dir='';
		private $instance=array();
		
		public function get_instance($className){
			echo 'classLoader get_instance: ','\\'.$this->namespace.'\\'.$className,'<br/>';
			$t=&$this->instance[$className];
			if(!isset($t)){
				self::load($className);
				$fullName=$this->namespace.'\\'.$className;
				$t=new $fullName;
			}
			return $t;
		}

		public function load($className){
			if(class_exists($this->namespace.'\\'.$className)) return;
			echo get_class($this)," is loading ".$this->dir."/$className/$className.php<br/>";
			if(is_file($this->dir."/$className/$className.php"))
				include($this->dir."/$className/$className.php");
			else
				echo 'file not found<br/>';
				/*
				error(['errorType'=>DPWF_ERR|DPWF_CLASS_MISSING,
						'className'=>$className]);
				*/
		}
	}