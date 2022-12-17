<?php
	define ('DB_SERVER', 'localhost');
	define ('DB_USER', 'sardanab_sardana');
	define ('DB_PASS', 'SiBmCommit2010');
	define ('DB_NAME', 'sardanab_cs');
	define ('PROJECT_NAME', 'CUSTOMER CARE');
	define ('PROJECT_YEAR', 2018);
	
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) 
	{
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	define ('BASE_URL', $uri.'/customercare');
	define ('ADMIN_URL', 'administrator');
	define ('SECRET_KEY', 'wE2AjCqrXuY=2u2_');
	
	define ('BASE_PATH', dirname(__FILE__));
	define ('DS', '/');
	define ('ROOT_PATH', implode(DS,explode(DS,BASE_PATH)));
	define ('SITE_PATH', ROOT_PATH);
	define ('CONFIG_PATH', ROOT_PATH);
	define ('ADMIN_PATH', ROOT_PATH.DS.ADMIN_URL);
	define ('LIBRARY_PATH', ROOT_PATH.DS.'library');
	define ('MODULE_PATH', ROOT_PATH.DS.'modules');
	
	define ('USE_SEF', 0);
	define ('IDLE_TIME', 30);
	define ('OFFLINE', 0);

	define ('PUBLIC_KEY','6LeMjiETAAAAAIttDjDycVZLiShz2S27KdjuBLL9');
	define ('PRIVATE_KEY','6LeMjiETAAAAAIgMp9PW6aplyxQ3RZs2rD9ZlX39');

	define ('FACEBOOK_URL', 'https://www.facebook.com/SardanaIndahBerlianMotor/');
	define ('INSTAGRAM_URL', 'https://www.instagram.com/sardanaindahberlianmotor/');
	
	date_default_timezone_set('Asia/Jakarta');
?>