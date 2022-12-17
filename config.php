<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) 
	{
		$uri = 'https://';
	} else {
		$uri = 'http://'; 
	}
		$uri .= $_SERVER['HTTP_HOST'];
	define ('DS', '/');
	define ('BASE_URL', $uri.DS.'sardanagroup/');
	define ('BASE_PATH', dirname(__FILE__));
	define ('RECAPTCHA_PUBLIC_KEY', '6LeMjiETAAAAAIttDjDycVZLiShz2S27KdjuBLL9');

	define ('MINI_SITE_URL', 'https://mitsubishixpandermedan.sardanagroup.co.id/');
	
	define ('FACEBOOK_URL', 'https://www.facebook.com/SardanaIndahBerlianMotor/');
	define ('TWITTER_URL', 'https://twitter.com/sardanaindah');
	define ('YOUTUBE_URL', 'https://www.youtube.com/channel/UCkgzJwZY22yTRVmhXZfeESw');
	define ('GMAIL_URL', 'mailto:sibmotor@gmail.com');
	define ('INSTAGRAM_URL', 'https://www.instagram.com/sardanaindahberlianmotor/');
	
	define ('GOOGLE_PLAY_URL', 'https://play.google.com/store/apps/details?id=id.compro.sardanamobile');
	define ('APP_STORE_URL', 'https://itunes.apple.com/us/app/sardana-mobile/id1441751987?ls=1');
	define ('GOOGLE_PLAY_MYMITSUBOSHI_URL', 'https://play.google.com/store/apps/details?id=id.co.mmksi.mitsubishimotors');
	define ('APP_STORE_MYMITSUBOSHI_URL', 'https://itunes.apple.com/id/app/my-mitsubishi-motors-id/id1280830456');
	define ('GOOGLE_PLAY_RUNNER_URL', 'https://play.google.com/store/apps/details?id=com.ktbfuso.runner');
	define ('APP_STORE_RUNNER_URL', 'https://itunes.apple.com/id/app/runner-telematics/id1419081781?mt=8');

	date_default_timezone_set('Asia/Jakarta');
?>