<?php
	namespace DPWF\unit;

	echo 'route has been required.<br/>';

	class route extends \DPWF\unit\unit_base{
		static public function run($s){
			echo "Route: run $s<br/>";
			$offset=strpos($s,'/',1);
			if($offset===false){
				$appName=$s;
				$sub='';
			}
			else{
				$appName=substr($s,0,$offset);
				$sub=substr($s,$offset+1,strlen($s)-$offset);
			}
			//var_dump($s);
			echo 'appName: ',$appName,'<br/>';
			echo 'sub: ',$sub,'<br/>';
			\DPWF\app\app::load($appName,$sub);
		}
	}