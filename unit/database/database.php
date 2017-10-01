<?php
	namespace DPWF\unit;

	echo 'database has been required.<br/>';

	class database extends \DPWF\unit\unit_base{
		protected $db=[];

		public function getDb($appName){
			$ins=&$this->db[$appName];
			if(!isset($ins)){
				$t=$this->config[$appName];
				var_dump($t);
				$ins=new \mysqli($t['dbHost'],$t['dbUserName'],$t['dbPassword'],$t['dbName']);
				if(mysqli_connect_errno()){
					echo 'mysqli connect failed',mysqli_connect_error(),'<br/>';
					exit();
				}
				$ins->query('set names '.$t['dbCharset']);
			}
			return $ins;
		}
	}