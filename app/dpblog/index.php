<?php
	namespace DPWF\app\dpblog;

	echo 'Blog has been loaded.<br/>';

	require __DIR__.'/conf.php';
	echo 'DPBLOG_CONTROLLER_DIR: ',DPBLOG_CONTROLLER_DIR,'<br/>';
	require DPBLOG_CONTROLLER_DIR.'controller.php';

	$controllerManage=new controller;
	$controllerManage->get_instance('route')->run($GLOBALS['DPWF_APP_PARAM']);
