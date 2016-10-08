<?php
	namespace DPWF;

	//本文件由index.php负责执行
	require('common.php');

	define(DPWF_HTTP,is_https()?'https://':'http://');
	define(DPWF_HOST,$_SERVER['HTTP_HOST']);
	$t=dirname($_SERVER['SCRIPT_NAME']).'/';
	define(DPWF_WEBROOT,DPWF_HOST.$t);
	define(DPWF_REALROOT,normal_path($_SERVER['DOCUMENT_ROOT']).$t);
	unset($t);

	function error($info){
		log::insert($info);
		header('HTTP/1.1 404 Not Found');
		header('Status:404 Not Found');
		if(($info['errorType']>>16)>=DPWF_DEBUG_LEVEL){
			$html_content=array('errorInfo'=>$info)+debug_get_info();
			include('error.tplx');
		}
		else hook::notice('error');
		exit;
	}

	function debug_get_info(){
		$a=array('CGI'=>$_SERVER['GATEWAY_INTERFACE'],
				'serverSoft'=>$_SERVER['SERVER_SOFTWARE'],
				'protocol'=>$_SERVER['SERVER_PROTOCOL'],
				'PHPRunMode'=>php_sapi_name(),
				'PHPVersion'=>PHP_VERSION,
				'ZendVersion'=>zend_version()
			);
		$b=array();$t=debug_backtrace();
		foreach($t as $k=>$v){
			if(isset($v['type'])) $s.=$v['class'].$v['type'];
			$s.=$v['function'].'(';
			$s.=') at ['.$v['file'].' : '.$v['line'].']';
			$b[$k]=$s."\n";
		}
		return array('backTrace'=>$b,'serverInfo'=>$a);
	}