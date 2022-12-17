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
	$month = date('n');
	$year_id = $divisi_id = $counter = 0;
	$status_id = 99;
	$divisi = array();

	$criteria = '';

	if (!isset($_SESSION['FilterMonth']))
	{
		header('Location: '.BASE_URL.DS.'login.php');
		die();
	}

	if (isset($_SESSION['FilterMonth'])) $month = $_SESSION['FilterMonth'];
	if (isset($_SESSION['FilterYearID'])) $year_id = $_SESSION['FilterYearID'];
	if (isset($_SESSION['FilterStatus'])) $status_id = $_SESSION['FilterStatus'];
	if (isset($_SESSION['FilterDivisi'])) $divisi = $_SESSION['FilterDivisi'];
	$year = date('Y') - $year_id;

	function buildNumber($data)
	{
		global $counter;
		$counter += 1;

		return $counter;
	}
	
	function buildActionButton($data)
	{
		global $form;
		
		return $form->create_button('button','btn btn-rounded btn-info','btn_status','btn_status','Edit','&nbsp;<i class="fa fa-edit"></i>',false,'','onclick="getMessage('.$data.');" data-toggle="modal" data-target="#modal_edit" title="Edit"');
	}

	$criteria = " MONTH(CreatedOn) = $month AND YEAR(CreatedOn) = $year ";

	if ($status_id != 99)
		$criteria .= " AND Status = $status_id";

	if (!empty($divisi))
		$criteria .= " AND Departemen IN (". implode(',', $divisi) .")";
	
	// DB table to use
$table = <<<EOT
	(
		SELECT 
			ID,
			CreatedOn,
			Nama, 
			Alamat,
			Telepon,
			TipeMobil,
			NoPolisi,
			Deskripsi,
			Status,
			(CASE Departemen WHEN 1 THEN 'Sales' WHEN 2 THEN 'Service' ELSE 'Sparepart' END) AS Divisi
		FROM 
			tb_customercare
		WHERE 
		$criteria
	) temp
EOT;

	// Table's primary key
	$primaryKey = 'ID';
	$func_apply = 'buildNumber';
	$func_apply_2 = 'buildActionButton';

	$columns = array(
		array( 
			'db' => 'ID', 
			'dt' => 0,
			'formatter' => function ($d, $row) use ($func_apply) {
				return $func_apply($d);
			}
		),
		array( 
			'db' => 'CreatedOn', 
			'dt' => 1,
			'formatter' => function ($d, $row) {
				return date('d-m-Y', strtotime($d));
			}
		),
		array( 'db' => 'Nama', 'dt' => 2 ),
		array( 'db' => 'Alamat', 'dt' => 3 ),
		array( 'db' => 'Telepon', 'dt' => 4 ),
		array( 'db' => 'TipeMobil', 'dt' => 5 ),
		array( 'db' => 'NoPolisi', 'dt' => 6 ),
		array( 'db' => 'Deskripsi', 'dt' => 7 ),
		array( 
			'db' => 'Status', 
			'dt' => 8,
			'formatter' => function ($d, $row) {
				if ($d == 0)
					return '<span class="label label-danger">Open</span>';
				elseif ($d == 1)
					return '<span class="label label-warning">Progress</span>';
				elseif ($d == 2)
					return '<span class="label label-success">Closed</span>';
			}
		),
		array( 'db' => 'Divisi', 'dt' => 9 ),
		array( 
			'db' => 'ID', 
			'dt' => 10,
			'formatter' => function ($d, $row) use ($func_apply_2) {
				return $func_apply_2($d);
			}
		)
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