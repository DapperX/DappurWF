<?php
	class log extends unit_base{
		protected $file;
		protected $buff=array();

		public function __construct($file_=null){
			parent::__construct();

		}

		public function __destruct(){
			self::write();
		}

		public function insert($msg){
			array_push($buff,$msg);
		}

		protected function write(){
			if(!count($buff)) return;
		}
	}