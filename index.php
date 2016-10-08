<?php
	namespace DPWF;
/*
	require('etc/system.php');
	require(DPWF_LIB.'base.php');

	require(DPWF_INSTALL.'install.php');
	DPWF_check_installed();
*/
	require './lib/base.php';
	require 'conf.php';
	require LIB_DIR.'classLoader.php';
	require UNIT_DIR.'unit.php';
	require APP_DIR.'app.php';

//	install::check();

	echo '*******<br/>';
	echo 'DPWF_HTTP: ',DPWF_HTTP.'<br/>';
	echo 'DPWF_HOST: ',DPWF_HOST.'<br/>';
	echo 'DPWF_WEBROOT: ',DPWF_WEBROOT.'<br/>';
	echo 'DPWF_REALROOT: ',DPWF_REALROOT.'<br/>';
	echo $_SERVER['PATH_INFO'],'<br/>';
	echo '*******<br/>';

	$s=isset($_SERVER['PATH_INFO'])?ltrim($_SERVER['PATH_INFO'],'/'):'';

	$unitManage=new unit\unit;
	$unitManage->get_instance('route')->run($s);