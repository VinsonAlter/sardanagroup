<?php
	defined('_EXEC') or die ('Restricted Access');	

	$form_caption = 'Pesan Sistem';

	$user = _USER_ID;

	$valid_date = date('d-m-Y');
	$valid_time = $message = '';
	$msg = array();

	if ($user !== 1)
	{
		echo '<script>window.location.href = "'.BASE_URL.DS.ADMIN_URL.DS.'index.php"; </script>';
		die();
	}

	if (isset($_POST['cmd_save']))
	{
		$valid_date = $_POST['txt_validdate'];
		$valid_time = $_POST['tmp_validtime'];
		$message = encode_text($_POST['txt_message']);

		if ($valid_date == '')
			$msg = array('danger',$form_caption,'Tanggal valid harus diisi.');
		elseif ($valid_time == '')
			$msg = array('danger',$form_caption,'Waktu valid harus diisi.');
		elseif ($message == '')
			$msg = array('danger',$form_caption,'Pesan harus diisi.');

		if (empty($msg))
		{
			$sql = "DELETE FROM tb_system_msg WHERE 1";
			$conn->query($sql);

			$sql = "INSERT INTO tb_system_msg (message,valid_till) VALUES ('$message','".date_to_str($valid_date)." $valid_time')";
			$conn->query($sql);

			$msg = array('success',$form_caption,$TEXT['save-success']);
		}
	}

	$sql = "SELECT DATE_FORMAT(valid_till, '%d-%m-%Y %H:%i:s') AS valid_till, message FROM tb_system_msg";
	$rs = $conn->query($sql);
	while ($row = $conn->result($rs))
	{
		$valid_date = substr($row['valid_till'],0,10);
		$valid_time = substr($row['valid_till'],11,8);
		$message = $row['message'];
	}
	$conn->dump($rs);
?>
	<form class="form-horizontal" name="frm_action" method="post" action="<?=$_SERVER['REQUEST_URI']; ?>" role="form">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><?=$form_caption; ?></h3>
				<ul class="panel-controls">
				<?php echo '<li>'.$form->create_button('submit','btn btn-info','cmd_save','cmd_save','Save','<i class="fa fa-floppy-o"></i> '.$TEXT['save-button']).'</li>'; ?>
				</ul>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-sm-2 control-label">Valid sampai</label>
					<div class="col-md-2"><?php echo $form->create_date_picker_cmp('form-control','txt_validdate','txt_validdate',$valid_date); ?></div>
					<div class="col-md-2"><?php echo $form->create_time_picker('form-control timepicker24','tmp_validtime','tmp_validtime','',$valid_time); ?></div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Pesan</label>
					<div class="col-md-5">
						<?php echo $form->create_textarea('form-control','txt_message','txt_message',10,0,'',$message,'Pesan'); ?>
					</div>
				</div>
			</div>
		</div>
	</form>