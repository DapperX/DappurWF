<?php
	namespace DPWF\unit;

	require 'unit.conf.php';

	class unit extends \DPWF\classLoader{
		public function __construct(){
			echo 'unit manager has been loaded.<br/>';
			echo 'unit NAMESPACE: ',__NAMESPACE__,'<br/>';
			echo 'unit DIR: ',UNIT_DIR,'<br/>';
			$this->namespace=__NAMESPACE__;
			$this->dir=UNIT_DIR;
		}
	}

	class unit_base{
		protected $config=array();
		//unit_base::__construct()用于提供对基类成员的初始化（包括主配置文件的读入）
		public function __construct(){
			$className=str_replace(__NAMESPACE__."\\","",get_class($this));
			$path=UNIT_DIR.'/'.$className;
			$conf=$path.'/'.$className.'.conf.php';
			echo '<strong>conf: ',$conf,'</strong><br/>';
			
			$this->config['__configPath']=$path;
			if(is_file($conf)){
				$this->config=array_merge($this->config,include($conf));
				var_dump($this->config);
			}
				else error(['errorType'=>DPWF_ERR|DPWF_FILE_UNREADABLE,
							'failedConf'=>$conf]);
		}
	}
	
//	spl_autoload_register('DPWF\unit\unit::load');