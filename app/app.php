<?php
	namespace DPWF\app;

	require 'app.conf.php';
	class app{
		static public function load($appName,$appParam){
			echo "app: load ".APP_DIR."/$appName/index.php<br/>";
			if(is_file(APP_DIR."/$appName/index.php"))
			{
				$GLOBALS['DPWF_APP_PARAM']=$appParam;
				include(APP_DIR."/$appName/index.php");
				return $GLOBALS['DPWF_APP_RTN'];
			}
			error(['errorType'=>DPWF_ERR|DPWF_APP_MISSING,
					'appName'=>$appName]);
		}
	}