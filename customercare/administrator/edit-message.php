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
	$msg = '';

	if (isset($_POST['hid_message_id']))
	{
		$ms_id = isset($_POST['hid_message_id']) ? (int) $_POST['hid_message_id'] : 0;
		$notes = isset($_POST['catatan']) ? encode_text($_POST['catatan']) : '';
		$divisi = isset($_POST['departemen']) ? (int) $_POST['departemen'] : 1;
		$status = isset($_POST['status']) ? (int) $_POST['status'] : 0;
		$modified = get_datetime();

		$sql = "UPDATE tb_customercare SET Catatan='$notes', Departemen=$divisi, Status=$status, ModifiedBy=$user, ModifiedOn='$modified' WHERE ID = $ms_id";
		$conn->query($sql);

		$msg = 'Data berhasil diperbarui';
	}

	$res['msg'] = $msg;

	echo json_encode($res);
?>