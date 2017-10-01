<?php
	namespace DPWF\unit;

	echo 'route has been required.<br/>';

	class route extends \DPWF\unit\unit_base{
		static public function run($s){
			echo "Route: run $s<br/>";
			$t=str_split_once($s,'/');
			echo 'appName: ',$t[0],'<br/>';
			echo 'sub: ',$t[1],'<br/>';
			return \DPWF\app\app::load($t[0],$t[1]);
		}
	}