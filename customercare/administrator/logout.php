<?php
	session_start();
		
	require_once ('../config.php');
	require_once (LIBRARY_PATH.DS.'mysql_connection.cls.php');
	
	if (isset($_SESSION[SECRET_KEY]['user_id']))
		define('_EXEC', 1);
	else
	{
		header('Location: '.BASE_URL.DS.'login.php');
		die();
	}

	$conn = new mysql_connection();
	$conn->connect();
	
	$sql = 'UPDATE tb_user SET is_online = 0 WHERE id = '.$_SESSION[SECRET_KEY]['user_id'];
	$conn->query($sql);	
	$conn->disconnect();

	unset($_SESSION[SECRET_KEY]['user_id']);
	unset($_SESSION[SECRET_KEY]['username']);
	unset($_SESSION[SECRET_KEY]['status']);
	unset($_SESSION[SECRET_KEY]['avatar']);
	unset($_SESSION['mode']);
	//unset($_SESSION['logintime']);
	
	session_unset();
	session_destroy();
	
	//header('Location: '.BASE_URL, true);

	echo '<script>window.location.replace("'.BASE_URL.DS.'login.php")</script>';
?>