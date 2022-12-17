<?php
	require_once ('../../config.php');
	require_once (BASE_PATH.DS.'koneksi.php');
	require_once (BASE_PATH.DS.'library/attach_mailer_class.php');

    date_default_timezone_set('Asia/Jakarta');

    function mysql_date_format($date)
	{
		if (empty($date))
			return "";
		else
		{
			$d = explode("/",$date);
			return $d[2]."-".$d[1]."-".$d[0];
		}
	}

    if (isset($_POST['btnKirim']))
    {
	   // $tanggalMasuk = date("Y-m-d H:i:s");
	    $km = isset($_POST['km']) ? $_POST['km'] : '';
		$kodeDealer = isset($_POST['kodeDealer']) ? $_POST['kodeDealer'] : '';
		$tanggalBooking = isset($_POST['tanggalBooking']) ? $_POST['tanggalBooking'] : '';
		$jamBooking = isset($_POST['jamBooking']) ? $_POST['jamBooking'] : '';
		$modelKendaraan = isset($_POST['modelKendaraan']) ? $_POST['modelKendaraan'] : '';
		$namaCustomer = isset($_POST['namaCustomer']) ? strtoupper($_POST['namaCustomer']) : '';
		$nomorHp = isset($_POST['nomorHp']) ? $_POST['nomorHp'] : '';
		$nomorPolisi = isset($_POST['nomorPolisi']) ? preg_replace('/\s+/', '', strtoupper($_POST['nomorPolisi'])) : '';
		$kerusakan = isset($_POST['kerusakan']) ? $_POST['kerusakan'] : '';
		$tanggalInput = date("Y-m-d H:i:s");
		$status = $ketrangan = 1;

		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$data = array(
			'secret' => "6LeMjiETAAAAAIgMp9PW6aplyxQ3RZs2rD9ZlX39", //localhost secret : 6Ldn9qkUAAAAAH4aoKf7iz_DXuvzs9NkrozJQkaa
			'response' => $_POST['g-recaptcha-response'],
			'remoteip' => $_SERVER['REMOTE_ADDR']
		);
		$options = array(
			'http' => array (
				'method' => 'POST',
				'header' => 'Context-type: application/x-www-form-urlencoded',
				'content' => http_build_query($data)
			)
		);
		$context = stream_context_create($options);
		$verify = @file_get_contents($url, false, $context);
		$captcha_success = json_decode($verify);

		if ($captcha_success->success == true) {
			$masuk = "INSERT INTO bookingservice (bengkelResmi, tanggal, jam, modelKendaraan, nama, nomorHp, nomorPolisi, kerusakan, status_id, tanggalMasuk, km, tanggalInput, sumberBooking) VALUES('$kodeDealer', '".mysql_date_format($tanggalBooking)."','$jamBooking', '$modelKendaraan', '$namaCustomer', '$nomorHp', '$nomorPolisi', '$kerusakan', $status, $keterangan, '$tanggalMasuk', '$km', '$tanggalInput', 'Website')";
			$query = mysqli_query($koneksi, $masuk);
			if ($query) {
				$sender_name = 'Web Master sardanagroup.co.id';
				$sender_mail = 'webmaster@sardanagroup.co.id';
				$mailto = 'svc.sibmotor@gmail.com';
				$subject = "[Notifikasi] Booking Service dari pengunjung website www.sardanagroup.co.id untuk Dealer ".$kodeDealer;
				$message = "Berikut ini terlampir informasi booking service dari pengunjung website.".PHP_EOL;
				$message .= "Nama : ".$namaCustomer.PHP_EOL;
				$message .= "Telepon : ".$nomorHp.PHP_EOL;
				$message .= "Tanggal/Jam Booking : ".$tanggalBooking." ".$jamBooking.PHP_EOL;
				$message .= "Model Kendaraan : ".$modelKendaraan.PHP_EOL;
				$message .= "Nomor Polisi : ".$nomorPolisi.PHP_EOL;
				$message .= "Keluhan : ".$kerusakan.PHP_EOL;
				$message .= "Tanggal Entry : ".$tanggalInput.PHP_EOL;

				$mail = new attach_mailer($sender_name, $sender_mail, $mailto, $cc = "", $bcc = "", $subject, $message);
				$mail->process_mail();

				echo "
					<script>
						alert('Terima Kasih telah mengisi Booking Service Online. Kami akan segera menghubungi Anda.')
						location.href='https://sardanagroup.co.id/'
					</script>
				";
            } 
            else {
				echo "<script>alert('Silakan cek data Anda Kembali.');location.href='https://sardanagroup.co.id/'</script>";
	        }
		} else {
			echo "<script>alert('Pastikan CAPTCHA telah terconteng.');location.href='https://sardanagroup.co.id/'</script>";
		}
	} else {
		echo "<script>location.href='https://sardanagroup.co.id/'</script>";
	}
?>