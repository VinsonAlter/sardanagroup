<?php	
	defined('_EXEC') or die ('Restricted Access');	
	
	$form_caption = 'User';
	$name = $username = $email = $phone = $pass = $confirm = '';
	$active = 1;
	$user = _USER_ID;
	$divisi = $msg = array();

	if (isset($_POST['cmd_new']) || isset($_POST['cmd_save_add']) || isset($_POST['cmd_save_close']))
		$_SESSION['mode'] = 'n';
	elseif (isset($_POST['cmd_cancel']))
		$_SESSION['mode'] = 'v';
	elseif (isset($_POST['cmd_update']))
		$_SESSION['mode'] = 'e';
	elseif (isset($_POST['hid_mode']))
	{
		if ($_POST['hid_mode'] == 'e')
			$_SESSION['mode'] = 'e';
	}
	else
		$_SESSION['mode'] = 'v';
	
	if ($_SESSION['mode'] == 'n')
	{
		$button_packs = '<li>'.$form->create_button('submit','btn btn-default','cmd_save_add','cmd_save_add','Save New','<i class="fa fa-save"></i> '.$TEXT['save-new-button']).'</li>';
		$button_packs .= '<li>&nbsp;</li>';
		$button_packs .= '<li>'.$form->create_button('submit','btn btn-default','cmd_save_close','cmd_save_close','Save Close','<i class="fa fa-save"></i> '.$TEXT['save-close-button']).'</li>';
		$button_packs .= '<li>&nbsp;</li>';
		$button_packs .= '<li>'.$form->create_button('submit','btn btn-danger','cmd_cancel','cmd_cancel','Close','<i class="fa fa-times"></i> '.$TEXT['close-button']).'</li>';
		$button_packs .= $form->create_input_hidden('token','token',createToken(64));
		
		if (isset($_POST['cmd_save_add']) || isset($_POST['cmd_save_close']))
		{
			if (@$_SESSION['token'] != $_POST['token'])
			{
				$_SESSION['token'] = $_POST['token'];
				$name = encode_text($_POST['txt_name']);
				$username = encode_text($_POST['txt_user']);
				$pass = encode_text($_POST['txt_pass']);
				$confirm = encode_text($_POST['txt_confirm']);
				$email = filter_var($_POST['txt_email'], FILTER_SANITIZE_EMAIL);
				$phone = encode_text($_POST['txt_phone']);
				if (isset($_POST['chk_divisi']))
				{
					$kat = $_POST['chk_divisi'];
					foreach ($kat as $key => $value) {
						$div[] = $value;
					}
					$divisi = implode('|', $div);
				}
				$active = (isset($_POST['chk_active']) ? 1 : 0);

				$sql = "SELECT * FROM tb_user WHERE user_name='$username'";
				$rs = $conn->query($sql);
				$user_taken = $conn->num_rows($rs);
				$conn->dump($rs);

				if ($name == '')
					$msg = array('danger',$form_caption,'Nama lengkap harus diisi.');
				elseif ($username == '')
					$msg = array('danger',$form_caption,'Nama login harus diisi.');
				elseif ($user_taken > 0)
					$msg = array('danger',$form_caption,'Nama login sudah terdaftar. Silahkan gunakan nama yang lain.');
				elseif ($pass == '')
					$msg = array('danger',$form_caption,'Kata sandi harus diisi.');
				elseif ($pass !== $confirm)
					$msg = array('danger',$form_caption,'Konfirmasi kata sandi tidak cocok.');
				elseif ($email == '')
					$msg = array('danger',$form_caption,'Alamat email harus diisi.');
				elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
					$msg = array('danger',$form_caption,'Format alamat email tidak valid.');

				if (empty($msg))
				{
					$sql = "INSERT INTO tb_user (name,user_name,password,email,phone,active,division) VALUES ('$name','$username',MD5('$pass'),'$email','$phone',$active,'$divisi')";
					$conn->query($sql);
					$last_id = $conn->last_insert_id();

					$sql = "INSERT INTO tb_access (user_id, access) VALUES ($last_id, '1')";
					$conn->query($sql);

					$name = $username = $pass = $email = $phone = $confirm = '';
					
					$msg = array('success',$form_caption,$TEXT['save-success']);
					
					if (isset($_POST['cmd_save_close']))
						$_SESSION['mode'] = 'v';
				}
			}
		}
	}
	elseif ($_SESSION['mode'] == 'e')
	{
		$id = (int) $_POST['hid_id'];
		$button_packs = '<li>'.$form->create_button('submit','btn btn-default','cmd_update','cmd_update','Update','<i class="fa fa-save"></i> '.$TEXT['save-button']).'</li>';
		$button_packs .= '<li>&nbsp;</li>';
		$button_packs .= '<li>'.$form->create_button('submit','btn btn-danger','cmd_cancel','cmd_cancel','Close','<i class="fa fa-times"></i> '.$TEXT['close-button']).'</li>';
		$button_packs .= $form->create_input_hidden('hid_id','hid_id',$id);
		
		if (isset($_POST['cmd_update']))
		{
			$name = encode_text($_POST['txt_name']);
			$username = encode_text($_POST['txt_user']);
			$pass = encode_text($_POST['txt_pass']);
			$confirm = encode_text($_POST['txt_confirm']);
			$email = filter_var($_POST['txt_email'], FILTER_SANITIZE_EMAIL);
			$phone = encode_text($_POST['txt_phone']);
			if (isset($_POST['chk_divisi']))
			{
				$kat = $_POST['chk_divisi'];
				foreach ($kat as $key => $value) {
					$div[] = $value;
				}
				$divisi = implode('|', $div);
			}
			$active = (isset($_POST['chk_active']) ? 1 : 0);

			$sql = "SELECT * FROM tb_user WHERE user_name='$username' AND id<>$id";
			$rs = $conn->query($sql);
			$user_taken = $conn->num_rows($rs);
			$conn->dump($rs);
			
			if ($name == '')
				$msg = array('danger',$form_caption,'Nama lengkap harus diisi.');
			elseif ($username == '')
				$msg = array('danger',$form_caption,'Nama login harus diisi.');
			elseif ($user_taken > 0)
				$msg = array('danger',$form_caption,'Nama login sudah terdaftar. Silahkan gunakan nama yang lain.');
			elseif (($pass !== '') && ($pass !== $confirm))
				$msg = array('danger',$form_caption,'Konfirmasi kata sandi tidak cocok.');
			elseif ($email == '')
				$msg = array('danger',$form_caption,'Alamat email harus diisi.');
			elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
				$msg = array('danger',$form_caption,'Format alamat email tidak valid.');

			if (empty($msg))
			{
				$sql = "UPDATE tb_user SET name='$name', user_name='$username', email='$email', phone='$phone', active=$active, division='$divisi' WHERE id=$id";
				$conn->query($sql);

				if ($pass !== '')
				{
					$sql = "UPDATE tb_user SET password=MD5('$pass') WHERE id=$id";
					$conn->query($sql);
				}
				
				$msg = array('success',$form_caption,$TEXT['update-success']);
			}
		}
		else
		{
			$sql = "SELECT * FROM tb_user WHERE id = $id";
			$rs = $conn->query($sql);
			if ($row = $conn->result($rs))
			{
				$name = $row['name'];
				$username = $row['user_name'];
				$email = $row['email'];
				$phone = $row['phone'];
				$active = $row['active'];
				$divisi = explode('|',$row['division']);
			}
			$conn->dump($rs);
		}		
	}
	elseif (isset($_POST['cmd_delete']))
	{
		if (isset($_POST['chk_view']))
		{
			$valid = 1;
			$record = $_POST['chk_view'];
		}
		else
		{
			$valid = 0;
			$msg = array('danger',$form_caption,$TEXT['error-selection']);
		}
		
		if ($valid)
		{
			foreach ($record as $val)
			{
				//prevent administrator user and self deleting
				if ($user !== $val)
				{
					$sql = "DELETE FROM tb_user WHERE id <> 1 AND id = $val";
					$conn->query($sql);
				}
				$msg = array('success',$form_caption,$TEXT['delete-success']);
			}
		}
	}
	
	if ($_SESSION['mode'] == '' || $_SESSION['mode'] == 'v')
	{
		$button_packs = '<li>'.$form->create_button('submit','btn btn-info','cmd_new','cmd_new','Add New','<i class="fa fa-plus"></i> '.$TEXT['add-new-button']).'</li>';
		$button_packs .= '<li>&nbsp;</li>';
		$button_packs .= '<li>'.$form->create_button('submit','btn btn-danger','cmd_delete','cmd_delete','Delete','<i class="fa fa-trash-o"></i> '.$TEXT['delete-button'],FALSE,'','onclick="return confirm(\''.$TEXT['delete-confirm'].'\')"').'</li>';
		$button_packs .= $form->create_input_hidden('hid_id','hid_id','');
		$button_packs .= $form->create_input_hidden('hid_mode','hid_mode','');
	}
?>
	<div class="panel panel-primary">
		<form class="form-horizontal" name="frm_action" method="post" action="<?=$_SERVER['REQUEST_URI']; ?>" role="form">
			<div class="panel-heading">
				<h3 class="panel-title"><?=$form_caption; ?></h3>
				<ul class="panel-controls">		
		<?php 
			if ($_SESSION['mode'] == '' || $_SESSION['mode'] == 'v')
			{
				echo $button_packs;
			?>
				</ul>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table id="user-all" class="table table-striped" width="100%">
						<thead>
							<tr>
								<th width="20px"></th>
								<th>Nama</th>
								<th>Nama Login</th>
								<th>Email</th>
								<th>No.Telepon</th>
								<th>Aktif</th>
								<th>Login Terakhir</th>
							</tr>
						</thead>
					</table>
				</div>
				<script type="text/javascript" language="javascript">
					$(document).ready(function() {
						var dataTable = $("#user-all").DataTable({
							"processing" : true,
							"serverSide" : true,
							"deferRender" : true,
							"stateSave" : true,
							"stateDuration" : -1,
							"ajax" : { 
								"url" : "JSON/data-user.php"
							},
							"language": {
								"processing": 
									'<div class="cssload-container-general">' +
										'<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_1"> </div></div>' +
										'<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_2"> </div></div>' +
										'<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_3"> </div></div>' +
										'<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_4"> </div></div>' +
									'</div>',
								"lengthMenu": 'Show <select class="form-control">'+
									'<option value="10">10</option>'+
									'<option value="25">25</option>'+
									'<option value="50">50</option>'+
									'<option value="100">100</option>'+
									'<option value="-1">All</option>'+
									'</select> entries'
							},
							"columnDefs" : [
								{ "targets": [0], "orderable": false },
								{ "targets": [0], "searchable": false }
							],
							"order": [[ 5, "asc" ], [ 1, "asc" ]]
						});
					});
				</script>
		<?php
			}
			elseif (($_SESSION['mode'] == 'n') || ($_SESSION['mode'] == 'e'))
			{
				echo $button_packs;
		?>
				</ul>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-sm-2 control-label">Nama Lengkap*</label>
					<div class="col-md-5">
						<?php echo $form->create_input_text('form-control','txt_name','txt_name',100,'80%',$name,'Nama Lengkap'); ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Nama Login*</label>
					<div class="col-md-5">
						<?php echo $form->create_input_text('form-control','txt_user','txt_user',20,'80%',$username,'Nama Login'); ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Password*</label>
					<div class="col-md-5">
						<?php echo $form->create_input_password('form-control','txt_pass','txt_pass',20,'50%',$pass,'Password'); ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Konfirmasi Password*</label>
					<div class="col-md-5">
						<?php echo $form->create_input_password('form-control','txt_confirm','txt_confirm',20,'50%',$confirm,'Konfirmasi Password'); ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Alamat Email*</label>
					<div class="col-md-5">
						<?php echo $form->create_input_email('form-control','txt_email','txt_email',100,'80%',$email,'Alamat Email'); ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Telepon</label>
					<div class="col-md-5">
						<?php echo $form->create_input_numeric_text('form-control','txt_phone','txt_phone',20,'80%',$phone,'Telepon'); ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Divisi</label>
					<div class="col-md-5">
						<span class="text-muted"><?php echo $form->create_check_box('icheckbox','chk_divisi','chk_divisi[]','1',in_array('1', $divisi)?TRUE:FALSE); ?> Sales</span>
						<span class="text-muted"><?php echo $form->create_check_box('icheckbox','chk_divisi','chk_divisi[]','2',in_array('2', $divisi)?TRUE:FALSE); ?> Service</span>
						<span class="text-muted"><?php echo $form->create_check_box('icheckbox','chk_divisi','chk_divisi[]','2',in_array('3', $divisi)?TRUE:FALSE); ?> Sparepart</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Aktif</label>
					<div class="col-md-5">
						<?php echo $form->create_check_box('icheckbox','chk_active','chk_active','',$active); ?>
					</div>
				</div>
		<?php
			}
		?>
			</div>
		</form>
	</div>
