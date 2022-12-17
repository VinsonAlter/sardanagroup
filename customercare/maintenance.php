<?php
	require_once ('config.php');

	if (!OFFLINE)
		header('Location: '.BASE_URL.DS.'login.php');
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="" />
		<title><?=PROJECT_NAME; ?> - Website Under Maintenance</title>
		<link rel="shortcut icon" href="<?=BASE_URL.DS; ?>templates/images/favicon.png">
		
		<link type="text/css" rel="stylesheet" href="<?=BASE_URL.DS; ?>includes/css/theme.css" />
		<script type="text/javascript" href="<?=BASE_URL.DS; ?>includes/js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" href="<?=BASE_URL.DS; ?>includes/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="error-container">
			<div class="error-code"><img src="<?=BASE_URL.DS; ?>media/maintenance.png" /></div>
			<div class="error-text">Under Maintenance</div>
			<div class="error-subtext">Untuk sementara waktu website tidak dapat diakses. Terima kasih atas kesediaan Anda untuk mengunjungi halaman kami.</div>
			<div class="error-actions">
				<div class="row">
					<div class="col-md-6 col-lg-offset-3">
						<button class="btn btn-info btn-block btn-lg" onClick="document.location.href = '<?=BASE_URL.DS; ?>';">Try Again</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>