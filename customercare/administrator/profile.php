<?php	
	defined('_EXEC') or die ('Restricted Access');
	
	$form_caption = 'Profile';
	$name = $email = $phone = $user = $oldpass = $pass = $confirm = $status = '';
	$id = _USER_ID;
	$img_path = 'avatar.png';
	$avatar = '../images/avatar/avatar.png';
	$msg = array();	

	$button_packs = '<li>'.$form->create_button('submit','btn btn-default','cmd_update','cmd_update','Update','<i class="fa fa-save"></i> '.$TEXT['save-button']).'</li>';
	$button_packs .= '<li>'.$form->create_button('submit','btn btn-danger','cmd_cancel','cmd_cancel','Close','<i class="fa fa-times"></i> '.$TEXT['close-button']).'</li>';
		
	if (isset($_POST['cmd_update']))
	{
		$name = encode_text($_POST['txt_name']);
		$user = encode_text($_POST['txt_user']);
		if (isset($_POST['txt_oldpass']))
			$oldpass = encode_text($_POST['txt_oldpass']);
		if (isset($_POST['txt_pass']))
			$pass = encode_text($_POST['txt_pass']);
		if (isset($_POST['txt_confirm']))
			$confirm = encode_text($_POST['txt_confirm']);
		$email = filter_var($_POST['txt_email'], FILTER_SANITIZE_EMAIL);
		$phone = encode_text($_POST['txt_phone']);
		$status = encode_text($_POST['txt_status']);
		$img_path = $_POST['hid_img_path'];
		$avatar = '../images/avatar/'.$img_path;
		$new_filename = '';

		$sql = "SELECT * FROM tb_user WHERE user_name='$user' AND id <> $id";
		$rs = $conn->query($sql);
		$result = $conn->num_rows($rs);
		$conn->dump($rs);

		$sql = "SELECT password FROM tb_user WHERE id = $id";
		$rs = $conn->query($sql);
		$row = $conn->result($rs);
		$currentpass = $row['password'];
		$conn->dump($rs);

		//if ($name == '')
			//$msg = array('danger',$form_caption,'Nama lengkap harus diisi.');
		//else
		if ($user == '')
			$msg = array('danger',$form_caption,'Nama login harus diisi.');
		elseif ($result > 0)
			$msg = array('danger',$form_caption,'Nama login sudah digunakan.');
		elseif (($oldpass !== '') && (md5($oldpass) !== $currentpass))
			$msg = array('danger',$form_caption,'Kata sandi lama tidak cocok.');
		elseif (($pass !== '') && ($oldpass == ''))
			$msg = array('danger',$form_caption,'Kata sandi lama harus diisi untuk mengganti kata sandi baru.');
		elseif (($pass !== '') && ($pass !== $confirm))
			$msg = array('danger',$form_caption,'Konfirmasi kata sandi tidak cocok.');
		elseif ($email == '')
			$msg = array('danger',$form_caption,'Alamat email harus diisi.');
		elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
			$msg = array('danger',$form_caption,'Format alamat email tidak valid.');
		elseif ($_FILES["fil_avatar"]["name"] !== '')
		{
			$timestamp = time();
			$fileName = pathinfo(basename($_FILES["fil_avatar"]["name"]), PATHINFO_FILENAME);
			$fileType = pathinfo(basename($_FILES["fil_avatar"]["name"]), PATHINFO_EXTENSION);
			//$check = getimagesize($_FILES["fil_avatar"]["tmp_name"]);
			$maxFileSize = 2 * 1024 * 1024; //2MB
			$allowedExtensions = array('jpg','jpeg','png');
			
			$new_filename = $fileName.$timestamp.'.'.$fileType;
			$target_dir = SITE_PATH.DS.'images/avatar/';
			$target_file = $target_dir.$new_filename;
			$isUploadOK = 1;
			
			if ($_FILES["fil_avatar"]["error"] > 0)
			{
				$msg = array('danger',$form_caption,'Terjadi kesalahan saat mengunggah file Anda. Silahkan coba lagi.');
				$isUploadOK = 0;	
			}
			//elseif ($check == false) 
			elseif (!getimagesize($_FILES["fil_avatar"]["tmp_name"]))
			{
				$msg = array('danger',$form_caption,'Pastikan Anda sedang mengunggah file gambar.');
				$isUploadOK = 0;
			}
			elseif (file_exists($target_file)) 
			{
				$msg  = array('danger',$form_caption,'File sudah pernah diupload. Silahkan ganti file Anda dengan nama lain.');
				$isUploadOK = 0;
			}
			elseif ($_FILES["fil_avatar"]["size"] > $maxFileSize) 
			{
				$msg = array('danger',$form_caption,'Ukuran file melebihi batas yang diperbolehkan.');
				$isUploadOK = 0;
			}
			elseif (!in_array($fileType, $allowedExtensions)) 
			{
				$msg = array('danger',$form_caption,'Maaf, hanya file dengan extensi .JPG, .JPEG & .PNG yang diperbolehkan.');
				$isUploadOK = 0;
			}
			elseif (!is_uploaded_file($_FILES["fil_avatar"]["tmp_name"]))
			{
				$msg = array('danger',$form_caption,'Maaf, file Anda tidak dapat diunggah.');
				$isUploadOK = 0;
			}

			if ($isUploadOK) 
			{			
				if (!move_uploaded_file($_FILES["fil_avatar"]["tmp_name"], $target_file)) 
					$msg = array('danger',$form_caption,'Terjadi kesalahan saat mengunggah file Anda. Silahkan coba lagi.');
			}
		}

		if (empty($msg))
		{
			$sql = "UPDATE tb_user SET user_name='$user', email='$email', phone='$phone', status_message='$status' WHERE id=$id";
			$conn->query($sql);
			
			$_SESSION[SECRET_KEY]['username'] = $user;
			$_SESSION[SECRET_KEY]['status'] = $status;

			if (($oldpass !== '') && ($pass !== ''))
			{
				$sql = "UPDATE tb_user SET password=MD5('$pass') WHERE id=$id";
				$conn->query($sql);
			}

			if ($new_filename != '')
			{
				$sql = "UPDATE tb_user SET avatar='$new_filename' WHERE id=$id";
				$conn->query($sql);
				$_SESSION[SECRET_KEY]['avatar'] = $new_filename;
				$avatar = '../images/avatar/'.$new_filename;
				$img_path = $new_filename;
			}
			else
				$avatar = '../images/avatar/'.$img_path;
			
			$msg = array('success',$form_caption,$TEXT['update-success']);
		}
	}	
	elseif (isset ($_POST['cmd_cancel']))
	{
		echo '<script>window.location.href = "'.BASE_URL.DS.ADMIN_URL.DS.'";</script>';
		die();
	}
	else
	{
		$sql = "SELECT * FROM tb_user WHERE id = $id";
		$rs = $conn->query($sql);
		if ($row = $conn->result($rs))
		{
			$user = $row['user_name'];
			$name = $row['name'];
			$email = $row['email'];
			$phone = $row['phone'];
			$status = $row['status_message'];
			if ($row['avatar'] != '')
			{
				$avatar = '../images/avatar/'.$row['avatar'];
				$img_path = $row['avatar'];
			}
		}
		$conn->dump($rs);
	}	
?>
	<div class="panel panel-primary">
		<form class="form-horizontal" name="frm_action" method="post" action="<?=$_SERVER['REQUEST_URI']; ?>" enctype="multipart/form-data" role="form">			
			<div class="panel-heading">
				<h3 class="panel-title"><?=$form_caption; ?></h3>
				<ul class="panel-controls">
				<?php echo $button_packs; ?>
				</ul>
			</div>
			<div class="panel-body">
				<h3>Account Setting</h3>
				<div class="form-group">
					<label class="col-sm-2 control-label">Alamat Email*</label>
					<div class="col-md-5">
						<?php echo $form->create_input_email('form-control','txt_email','txt_email',100,'80%',$email,'Alamat Email'); ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Nama Login*</label>
					<div class="col-md-5">
						<?php echo $form->create_input_text('form-control','txt_user','txt_user',20,'80%',$user,'Nama Login'); ?>
					</div>
				</div>				
				<hr />
				<h3>Profile Setting</h3>
				<div class="form-group">
					<label class="col-sm-2 control-label">Nama Lengkap</label>
					<div class="col-md-5">
						<?php echo $form->create_input_text('form-control','txt_name','txt_name',100,'80%',$name,'Nama Lengkap','color:#000000;',true,false); ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Message</label>
					<div class="col-md-5">
						<?php echo $form->create_input_text('form-control','txt_status','txt_status',200,'80%',$status,'Status'); ?>
					</div>
				</div>				
				<div class="form-group">
					<label class="col-sm-2 control-label">Avatar (Max. 2 MB)</label>
					<div class="col-md-5">
						<div class="profile-image">
							<img src="<?=$avatar; ?>" width="100px" height="100px" />
							<?php echo $form->create_input_hidden('hid_img_path','hid_img_path',$img_path); ?>
						</div>
						<br />
						<?php echo $form->create_input_file('fileinput btn-primary','fil_avatar','fil_avatar','80%','Browse','data-filename-placement="inside"'); ?>
					</div>
				</div>
				<hr />
				<h3>Contact Setting</h3>
				<div class="form-group">
					<label class="col-sm-2 control-label">Telepon</label>
					<div class="col-md-5">
						<?php echo $form->create_input_text('form-control','txt_phone','txt_phone',20,'80%',$phone,'Telepon'); ?>
					</div>
				</div>
				<hr />
				<h3>Security Setting</h3>
				<div class="form-group">
					<label class="col-sm-2 control-label">Kata Sandi Lama</label>
					<div class="col-md-5">
						<?php echo $form->create_input_password('form-control','txt_oldpass','txt_oldpass',20,'50%',$oldpass,'Kata Sandi Lama'); ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Kata Sandi Baru</label>
					<div class="col-md-5">
						<?php echo $form->create_input_password('form-control','txt_pass','txt_pass',20,'50%',$pass,'Kata Sandi Baru'); ?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Konfirmasi Sandi Baru</label>
					<div class="col-md-5">
						<?php echo $form->create_input_password('form-control','txt_confirm','txt_confirm',20,'50%',$confirm,'Konfirmasi Sandi Baru'); ?>
					</div>
				</div>
			</div>
		</form>
	</div>
