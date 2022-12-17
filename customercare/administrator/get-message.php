<?php
	session_start();
	
	require_once ('../config.php');

	if (isset($_SESSION[SECRET_KEY]['user_id']))
		define('_EXEC', 1);
	else
		header('Location: '.BASE_URL.DS.'login.php');

	require_once (LIBRARY_PATH.DS.'mysql_connection.cls.php');
	require_once (LIBRARY_PATH.DS.'form.cls.php');
	require_once (LIBRARY_PATH.DS.'functions.php');
	require_once ('function.php');
	require_once ('public.php');
	
	$conn = new mysql_connection();
	$conn->connect();
	$form = new cls_form();
	
	$user = _USER_ID;
	$res = '';

	if (isset($_REQUEST['ref']))
	{
		$ms_id = (int) $_REQUEST['ref'];

		$sql = "SELECT division FROM tb_user WHERE id = $user";
		$rs = $conn->query($sql);
		while ($row = $conn->result($rs))
		{
			$division = explode('|', $row['division']);
		}
		$conn->dump($rs);

		$sql = "SELECT a.*, b.name, DATE_FORMAT(ModifiedOn, '%d-%m-%Y %H:%i:%s') AS TglEdit FROM tb_customercare a LEFT JOIN tb_user b ON a.ModifiedBy = b.id WHERE a.ID = $ms_id AND Departemen IN (". implode(',', $division) .")";
		$rs = $conn->query($sql);
		while ($row = $conn->result($rs))
		{
			$res['ID'] = $row['ID'];
			$res['Nama'] = $row['Nama'];
			$res['Alamat'] = $row['Alamat'];
			$res['Telepon'] = $row['Telepon'];
			$res['Tipe'] = $row['TipeMobil'];
			$res['Rangka'] = $row['NoRangka'];
			$res['Nopol'] = $row['NoPolisi'];
			$res['Pesan'] = $row['Deskripsi'];
			$res['Catatan'] = $row['Catatan'];
			$res['Divisi'] = $row['Departemen'];
			$res['Status'] = $row['Status'];
			$res['EditBy'] = $row['name'];
			$res['EditOn'] = $row['TglEdit'];
		}
		$conn->dump($rs);
	}

	echo json_encode($res);
?>