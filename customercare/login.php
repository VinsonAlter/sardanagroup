<?php
	session_cache_limiter('nocache');
	session_set_cookie_params(0);
	session_start();
	session_regenerate_id(true);
	
	require_once ('config.php');
	require_once (LIBRARY_PATH.DS.'mysql_connection.cls.php');
	require_once (LIBRARY_PATH.DS.'client_info.cls.php');
	require_once (LIBRARY_PATH.DS.'form.cls.php');
	require_once (LIBRARY_PATH.DS.'functions.php');

	if (OFFLINE)
		header('Location: '.BASE_URL.DS.'maintenance.php');
	
	if (isset($_SESSION[SECRET_KEY]['user_id'])) header('Location: '.BASE_URL.DS.ADMIN_URL);
	
	$conn = new mysql_connection();
	$conn->connect();
	$form = new cls_form();	

	$user = $pass = $err = $message = '';
	$year = date('Y');
	
	if (isset($_POST['cmd_login']))
	{
		$user = mysql_real_escape_string($_POST['txt_username']);
		$pass = mysql_real_escape_string($_POST['txt_password']);
		
		$sql = "SELECT * FROM tb_user WHERE user_name='$user' AND password=MD5('$pass') AND active = 1";
		$rs = $conn->query($sql);
		$row = $conn->result($rs);
		
		if($conn->num_rows($rs) > 0)
		{
			if ($user == $row['user_name'] && md5($pass) == $row['password'])
			{
				if (!(bool) $row['active'])
					$err = 'User ini berada dalam status non aktif, silahkan hubungi web administrator Anda.';
				else
				{
					$_SESSION[SECRET_KEY]['user_id'] = (int) $row['id'];
					$_SESSION[SECRET_KEY]['username'] = $row['user_name'];
					$_SESSION[SECRET_KEY]['status'] = $row['status_message'];
					$_SESSION[SECRET_KEY]['avatar'] = $row['avatar'];
					$_SESSION['mode'] = '';
					//$_SESSION['logintime'] = time();

					$user_id = (int) $row['id'];
					$logged = get_datetime();

					$sql = "UPDATE tb_user SET is_online = 1, last_login = '$logged' WHERE id = $user_id";
					$conn->query($sql);
					
					$client = new client_info($_SERVER['HTTP_USER_AGENT']);
					$browser = $client->getBrowser();
					$os = $client->getOS();
					$ip = getenv('HTTP_CLIENT_IP')?:getenv('HTTP_X_FORWARDED_FOR')?:getenv('HTTP_X_FORWARDED')?:getenv('HTTP_FORWARDED_FOR')?:getenv('HTTP_FORWARDED')?:getenv('REMOTE_ADDR');

					$sql = "INSERT INTO tb_user_log VALUES ($user_id,'$logged','$browser','$os','$ip')";
					$conn->query($sql);

					header('Location: '.BASE_URL.DS.ADMIN_URL.DS.'index.php');
					die();
				}
			}
			else
				$err = 'Login gagal. Silahkan periksa username dan password yang Anda masukkan.';
		}
		else
			$err = 'Login gagal. Silahkan periksa username dan password yang Anda masukkan.';
		
		$conn->dump($rs);
	}

	$sql = "SELECT * FROM tb_system_msg WHERE valid_till > NOW()";
	$rs = $conn->query($sql);
	while ($row = $conn->result($rs))
	{
		$message = str_replace("\r\n",'<br />',$row['message']);
	}
	$conn->dump($rs);
?>
<!DOCTYPE html>
<html lang="en-US" class="body-full-height">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="" />
		<title><?=PROJECT_NAME; ?> - Login</title>
		<link rel="shortcut icon" href="<?=BASE_URL.DS; ?>/media/favicon.png">
		
		<link type="text/css" rel="stylesheet" href="<?=BASE_URL.DS; ?>includes/css/theme-login.css" />
		<script type="text/javascript" href="<?=BASE_URL.DS; ?>includes/js/jquery.min.js"></script>
		<script type="text/javascript" href="<?=BASE_URL.DS; ?>includes/js/bootstrap.min.js"></script>
	</head>
	<body id="login">		
		<div class="login-container">
			<div class="login-box animated fadeInDown">
				<div class="login-logo"></div>
				<div class="login-body">
					<div class="login-title"><strong>Welcome</strong>, Please login</div>
					<form name="frm_login" action="<?=BASE_URL.DS.'login.php'; ?>" class="form-horizontal" method="post">
						<div class="form-group">
							<div class="col-md-12">
								<?php echo $form->create_input_text('form-control','txt_username','txt_username',20,'',$user,'Username'); ?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<?php echo $form->create_input_password('form-control','txt_password','txt_password',50,'',$pass,'Password'); ?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6">
								<!--<a href="#" class="btn btn-link btn-block">Forgot your password?</a>-->
							</div>
							<div class="col-md-6">
								<?php echo $form->create_button('submit','btn btn-info btn-block','cmd_login','cmd_login','Log In','Log In'); ?>
							</div>
						</div>
					</form>
				</div>
				<div class="login-footer">
					<div class="pull-left">
						&copy; <?=((PROJECT_YEAR == $year) ? $year : PROJECT_YEAR.' - '.$year); ?> | <?=PROJECT_NAME; ?>
					</div>
					<div class="pull-right">
						<a href="<?=BASE_URL; ?>">Go to Home Page</a>
					</div>
				</div>
			<?php
				if ($message !== '') {
			?>
				<div class="alert alert-danger" role="alert">
					<strong>Perhatian!</strong><br /> <?php echo $message; ?>
				</div>
			<?php 
				} 
			?>
			</div>
		</div>
	</body>
	<?=(($err != '')?"<script>alert('$err'); </script>":""); ?>
</html>
