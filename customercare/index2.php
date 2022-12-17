<?php
	session_start();
	
	require_once ('config.php');
	require_once (LIBRARY_PATH.DS.'mysql_connection.cls.php');
	require_once (LIBRARY_PATH.DS.'function.php');

	$conn = new mysql_connection();
	$conn->connect();
	//$form = new cls_form();

	/*
	<div class="row">
		<div class="col-md-1">
			<div class="form-group">
				<label class="check">Kategori</label>
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<label class="check"><input type="radio" class="icheckbox" id="kategori" name="kategori" value="1" /> Keluhan</label>
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<label class="check"><input type="radio" class="icheckbox" id="kategori" name="kategori" value="2" /> Saran</label>
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<label class="check"><input type="radio" class="icheckbox" id="kategori" name="kategori" value="3" /> Testimoni</label>
			</div>
		</div>
	</div>
	*/
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="keywords" content="Sardana Berlian, Sardana Customer Care, Keluhan, Saran, Testimonial, Suara Pelanggan, Suara Pelanggan Sardana">
		<meta name="description" content="Suarakan saran atau keluhan Anda disini.">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="robots" content="index, follow" />
		<meta name="author" content="Johannes">
		<title><?=PROJECT_NAME; ?></title>
		<link rel="canonical" href="<?=BASE_URL; ?>" />
		<link rel="shortcut icon" href="<?=BASE_URL; ?>/media/favicon.png" />
		<link rel="stylesheet" href="<?=BASE_URL; ?>/includes/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=BASE_URL; ?>/includes/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=BASE_URL; ?>/includes/css/line-icons.css">
		<link rel="stylesheet" href="<?=BASE_URL; ?>/includes/css/owl.carousel.css">
		<link rel="stylesheet" href="<?=BASE_URL; ?>/includes/css/owl.theme.css">
		<link rel="stylesheet" href="<?=BASE_URL; ?>/includes/css/nivo-lightbox.css">
		<link rel="stylesheet" href="<?=BASE_URL; ?>/includes/css/magnific-popup.css">
		<link rel="stylesheet" href="<?=BASE_URL; ?>/includes/css/animate.css">
		<link rel="stylesheet" href="<?=BASE_URL; ?>/includes/css/menu_sideslide.css">
		<link rel="stylesheet" href="<?=BASE_URL; ?>/includes/css/main.css">    
		<link rel="stylesheet" href="<?=BASE_URL; ?>/includes/css/responsive.css">
	</head>
	<body>
		<header id="video-area">
			<div class="fixed-top">
				<div class="container">
					<div class="logo-menu">
						<a href="<?=BASE_URL; ?>" class="logo"><img src="<?=BASE_URL.DS; ?>media/logo.png" /></a>
					</div>
				</div>
			</div>
		</header>
		<section id="contact" class="section">
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="col-md-9 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">
						<div class="contact-block">
							<div class="section-header">
								<h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Suara <span>Pelanggan</span></h2>
								<hr class="lines wow zoomIn" data-wow-delay="0.3s">
								<p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Demi meningkatkan kualitas layanan kami, masukan dari Anda baik berupa kritik maupun saran sangat kami harapkan.</p>
							</div>
							<form id="contactForm">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" required data-error="Silahkan masukkan nama Anda">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Anda" required data-error="Silahkan masukkan alamat Anda">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" id="telepon" name="telepon" placeholder="Nomor Telepon Anda" required data-error="Silahkan masukkan nomor telepon Anda" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" id="email" name="email" placeholder="Email Anda">
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="tipe" name="tipe" placeholder="Tipe/Model Kendaraan Anda" required data-error="Silahkan masukkan tipe/model kendaraan Anda">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" id="rangka" name="rangka" placeholder="Nomor Rangka Kendaraan Anda">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" id="nopolisi" name="nopolisi" placeholder="Nomor Plat Kendaraan Anda">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-1">
										<div class="form-group">
											<label class="check">Divisi</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="check"><input type="radio" class="icheckbox" id="divisi" name="divisi" value="1" /> Sales</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="check"><input type="radio" class="icheckbox" id="divisi" name="divisi" value="2" /> Service</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label class="check"><input type="radio" class="icheckbox" id="divisi" name="divisi" value="3" /> Sparepart</label>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group"> 
											<textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Apakah Keluhan Anda? Deskripsikan Keluhan Anda secara Spesifik." rows="11" data-error="Silahkan deskripsikan keluhan Anda" required></textarea>
											<div class="help-block with-errors"></div>
										</div>
										<script src='https://www.google.com/recaptcha/api.js' async defer></script>
										<div class="g-recaptcha" data-sitekey="<?=PUBLIC_KEY; ?>"></div>
										<br />
										<div class="submit-button text-center">
											<input type="hidden" id="token" name="token" value="<?=createToken(64); ?>" />
											<button class="btn btn-common" id="submit" type="submit">Kirim</button>
											<div id="msgSubmit" class="h3 text-center hidden"></div> 
											<div class="clearfix"></div> 
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="social-icons wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">
							<ul>
								<li class="facebook"><a href="<?=FACEBOOK_URL; ?>"><i class="fa fa-facebook"></i></a></li>
								<li class="instagram"><a href="<?=INSTAGRAM_URL; ?>"><i class="fa fa-instagram"></i></a></li>
								<li class="linkedin"><a href="http://www.sardanagroup.co.id/"><i class="fa fa-globe"></i></a></li>
							</ul>
						</div>
						<div class="site-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s">
							<p>All copyrights reserved &copy; <?=PROJECT_YEAR; ?> - PT. Sardana IndahBerlian Motor</p>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<div id="loader">
			<div class="spinner">
				<div class="double-bounce1"></div>
				<div class="double-bounce2"></div>
			</div>
		</div>

		<script src="<?=BASE_URL; ?>/includes/js/jquery-min.js"></script>
		<script src="<?=BASE_URL; ?>/includes/js/tether.min.js"></script>
		<script src="<?=BASE_URL; ?>/includes/js/bootstrap.min.js"></script>
		<script src="<?=BASE_URL; ?>/includes/js/classie.js"></script>
		<script src="<?=BASE_URL; ?>/includes/js/mixitup.min.js"></script>
		<script src="<?=BASE_URL; ?>/includes/js/nivo-lightbox.js"></script>
		<script src="<?=BASE_URL; ?>/includes/js/owl.carousel.min.js"></script>
		<script src="<?=BASE_URL; ?>/includes/js/jquery.stellar.min.js"></script>
		<script src="<?=BASE_URL; ?>/includes/js/jquery.nav.js"></script>
		<script src="<?=BASE_URL; ?>/includes/js/smooth-scroll.js"></script>
		<script src="<?=BASE_URL; ?>/includes/js/smooth-on-scroll.js"></script>
		<script src="<?=BASE_URL; ?>/includes/js/wow.js"></script>
		<script src="<?=BASE_URL; ?>/includes/js/jquery.vide.js"></script>
		<script src="<?=BASE_URL; ?>/includes/js/jquery.counterup.min.js"></script>
		<script src="<?=BASE_URL; ?>/includes/js/jquery.magnific-popup.min.js"></script>
		<script src="<?=BASE_URL; ?>/includes/js/waypoints.min.js"></script>
		<script src="<?=BASE_URL; ?>/includes/js/form-validator.min.js"></script>
		<script src="<?=BASE_URL; ?>/includes/js/contact-form-script.js"></script>
		<script src="<?=BASE_URL; ?>/includes/js/main.js"></script>
		<script src="<?=BASE_URL; ?>/includes/js/icheck.min.js"></script>
		<script src="<?=BASE_URL; ?>/includes/js/plugins.js"></script>
	</body>
</html>