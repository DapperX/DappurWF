<?php
	namespace DPWF\app\dpblog;

	$t=&$GLOBALS['dpblog'];
	if(!isset($t)) $t=[];
	
	$t['DIR_ROOT']=__DIR__.'/';
	$t['WEBDIR_ROOT']=WEBDIR_APP.'dpblog/';
	$t['DIR_CONTROLLER']=$t['DIR_ROOT'].'controller/';
	$t['DIR_MODEL']=$t['DIR_ROOT'].'model/';
	$t['DIR_LIB']=$t['DIR_ROOT'].'lib/';
	$t['DIR_TEMPLATE']=$t['DIR_ROOT'].'template/';
	$t['WEBDIR_STATIC']=$t['WEBDIR_ROOT'].'static/';