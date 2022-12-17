<?php
	session_start();
	
	require_once ('../../config.php');

	if (isset($_SESSION[SECRET_KEY]['user_id']))
		define('_EXEC', 1);
	else
		header('Location: '.BASE_URL.DS.'login.php');

	require_once (LIBRARY_PATH.DS.'mysql_connection.cls.php');
	require_once (LIBRARY_PATH.DS.'form.cls.php');
	require_once (LIBRARY_PATH.DS.'ssp.cls.php');
	require_once (LIBRARY_PATH.DS.'functions.php');
	require_once ('../function.php');
	require_once ('../public.php');
	
	$conn = new mysql_connection();
	$conn->connect();
	$form = new cls_form();
	
	$user_id = 0;
	$datestart = date('01-m-Y');
	$dateend = date('d-m-Y');
	$criteria = '';

	if (!isset($_SESSION['UserLogID']))
	{
		header('Location: '.BASE_URL.DS.'login.php');
		die();
	}
	
	if (isset($_SESSION['UserLogID'])) $user_id = (int) $_SESSION['UserLogID'];
	if (isset($_SESSION['UserLogDateFrom'])) $datestart = $_SESSION['UserLogDateFrom'];
	if (isset($_SESSION['UserLogDateTo'])) $dateend = $_SESSION['UserLogDateTo'];
	
	$criteria .= " User_ID = $user_id AND LEFT(Logged,10) BETWEEN '".date_to_str($datestart)."' AND '".date_to_str($dateend)."'";

	// DB table to use
$table = <<<EOT
	(
		SELECT * 
		FROM 
			tb_user_log 
		WHERE 
			$criteria
	) temp
EOT;

	// Table's primary key
	$primaryKey = 'User_ID';

	$columns = array(
		array( 
			'db' => 'Logged', 
			'dt' => 0,
			'formatter' => function ($d, $row) {
				return date('D, d M Y H:i:s', strtotime($d));
			}
		),
		array( 
			'db' => 'IP_Address', 
			'dt' => 1,
			'formatter' => function ($d, $row) {
				return gethostbyaddr($d);
			}
		),			
		array( 'db' => 'ClientBrowser', 'dt' => 2 ),
		array( 'db' => 'ClientOS', 'dt' => 3 )
	);

	// SQL server connection information
	$sql_details = array(
		'user' => DB_USER,
		'pass' => DB_PASS,
		'db'   => DB_NAME,
		'host' => DB_SERVER
	);
	
	echo json_encode(
		SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
	);
?>