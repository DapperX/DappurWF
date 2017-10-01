<?php
	namespace DPWF;

	$rtn=require('index.php');
	ob_end_clean();
	echo $rtn;