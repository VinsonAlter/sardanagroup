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
	
	$user = _USER_ID;
	$criteria = '';
	$counter = $counter2 = 0;

	function buildCheckBox($data)
	{
		global $form;
		global $counter;
		$counter += 1;

		return $form->create_check_box('icheckbox','chk_view['.$counter.']','chk_view['.$counter.']',$data,false).
			$form->create_input_hidden('hid_rec_id['.$counter.']','hid_rec_id['.$counter.']',$data);
	}

	function buildLink($data)
	{	
		global $counter2;
		$counter2 += 1;
		
		return '<a href="#" onclick="callToAction('.$counter2.')">'.$data.'</a>';
	}

	if ($user != 1)
		$criteria .= " WHERE u.id = 0";

	// DB table to use
$table = <<<EOT
	(
		SELECT 
			id,
			name,
			user_name,
			email,
			phone,
			active,
			DATE_FORMAT(last_login,'%d-%m-%Y %H:%i:%s') AS last_log
		FROM 
			tb_user
		$criteria
	) temp
EOT;

	$primaryKey = 'id';
	$func_apply = 'buildCheckBox';
	$func_apply_2 = 'buildLink';

	$columns = array(
		array( 
			'db' => 'id', 
			'dt' => 0,
			'formatter' => function ($d, $row) use ($func_apply) {
				return $func_apply($d, $row);
			}
		),
		array( 
			'db' => 'name', 
			'dt' => 1,
			'formatter' => function ($d, $row) use ($func_apply_2) {
				return $func_apply_2($d, $row);
			}
		),
		array( 'db' => 'user_name', 'dt' => 2 ),
		array( 'db' => 'email', 'dt' => 3 ),
		array( 'db' => 'phone', 'dt' => 4 ),
		array( 
			'db' => 'active', 
			'dt' => 5,
			'formatter' => function ($d, $row) {
				if ($d == 1)
					return '<span class="label label-primary">Ya</span>';
				else
					return '<span class="label label-danger">Tidak</span>';
			}
		),
		array( 'db' => 'last_log', 'dt' => 6 )
	);

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