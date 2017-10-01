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

	function str_split_once($s,$separator){
		$offset=strpos($s,$separator,1);
			if($offset===false){
				$mainName=$s;
				$sub='';
			}
			else{
				$mainName=substr($s,0,$offset);
				$sub=substr($s,$offset+1,strlen($s)-$offset);
			}
		return [$mainName,$sub];
	}