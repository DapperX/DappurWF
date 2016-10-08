<?php
	function is_https(){
		$t=&$_SERVER['HTTPS'];
		if(!isset($t)) return false;
		if($t===1) return true;
		if($t==='on') return true;
		if($_SERVER['SERVER_PORT']==443) return true;
		return false;
	}

	//将路径中的\\替换为/
	function normal_path($path){
		return str_replace('\\','/',$path);
	}