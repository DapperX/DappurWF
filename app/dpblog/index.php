<?php
	namespace DPWF\app\dpblog;

	echo 'dpblog has been loaded.<br/>';

	require_once __DIR__.'/conf.php';
	echo 'dpblog_CONTROLLER_DIR: ',$GLOBALS['dpblog']['DIR_CONTROLLER'],'<br/>';
	require_once $GLOBALS['dpblog']['DIR_CONTROLLER'].'controller.php';

	$controllerManage=&$GLOBALS['dpblog']['controllerManage'];
	if(!isset($controllerManage)) $controllerManage=new controller;
	$GLOBALS['DPWF_APP_RTN']=$controllerManage->get_instance('route')->run($GLOBALS['DPWF_APP_PARAM']);
