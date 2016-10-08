<?php
	function DPWF_check_installed(){
		if(!DPWF_is_installed()){
			DPWF_install();
		}
	}

	function DPWF_is_installed(){
		return file_exists(DPWF_REALROOT.DPWF_INSTALL.'install.lock');
	}

	function DPWF_install(){
		session_start();
		if(!isset($_SESSION['install']['step'])) $_SESSION['install']['step']=1;
		header('location: '.DPWF_HTTP.DPWF_WEBROOT.DPWF_INSTALL);
		exit;
	}