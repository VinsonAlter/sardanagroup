<?php
	session_start();

	require_once ('config.php');	
	require_once (LIBRARY_PATH.DS.'mysql_connection.cls.php');
	require_once (LIBRARY_PATH.DS.'function.php');
	require_once (LIBRARY_PATH.DS.'attach_mailer_class.php');

	$conn = new mysql_connection();
	$conn->connect();

	$mobile_code = array('0811','0812','0813','0821','0822','0823','0851','0852','0853','0855','0856','0857','0858','0814','0815','0816','0817','0818','0819','0859','0877','0878','0831','0832','0838','0896','0897','0898','0899','0881','0882','0883','0884','0885','0886','0887','0888','0889','0828','0868');
	$area_code = array('0627','0629','0641','0642','0643','0644','0645','0646','0650','0651','0652','0653','0654','0655','0656','0657','0658','0659','061','0620','0621','0622','0623','0624','0625','0626','0627','0628','0630','0631','0632','0633','0634','0635','0636','0639','0751','0752','0753','0754','0755','0756','0757','0759','0760','0761','0762','0763','0764','0765','0766','0767','0768','0769','0624','0770','0771','0772','0773','0776','0777','0778','0779','0740','0741','0742','0743','0744','0745','0746','0747','0748','0702','0711','0712','0713','0714','0730','0731','0733','0734','0735','0715','0716','0717','0718','0719','0732','0736','0737','0738','0739','0721','0722','0723','0724','0725','0726','0727','0728','0729','021','022','0231','0232','0233','0234','0251','0260','0261','0262','0263','0264','0265','0266','0267','024','0271','0272','0273','0274','0275','0276','0280','0281','0282','0283','0284','0285','0286','0287','0289','0291','0292','0293','0294','0295','0296','0297','0298','0299','0356','0274','031','0321','0322','0323','0324','0325','0327','0328','0331','0332','0333','0334','0335','0336','0338','0341','0342','0343','0351','0352','0353','0354','0355','0356','0357','0358','0361','0362','0363','0365','0366','0368','0364','0370','0371','0372','0373','0374','0376','0380','0381','0382','0383','0384','0385','0386','0387','0388','0389','0561','0562','0563','0564','0565','0567','0568','0534','0513','0522','0525','0526','0528','0531','0532','0536','0537','0538','0539','0511','0512','0517','0518','0527','0541','0542','0543','0545','0548','0549','0554','0551','0552','0553','0556','0430','0431','0432','0434','0438','0435','0443','0445','0450','0451','0452','0453','0454','0457','0458','0461','0462','0463','0464','0465','0455','0422','0426','0428','0410','0411','0413','0414','0417','0418','0419','0420','0421','0423','0427','0471','0472','0473','0474','0475','0481','0482','0484','0485','0401','0402','0403','0404','0405','0408','0910','0911','0913','0914','0915','0916','0917','0918','0921','0922','0923','0924','0927','0929','0931','0901','0902','0951','0952','0955','0956','0957','0966','0967','0969','0971','0975','0980','0981','0983','0984','0985','0986'); 
	$errorMSG = '';

	if (isset($_POST['nama']))
	{
		//if (@$_SESSION['token'] != $_POST['token'])
		//{
			//$_SESSION['token'] = $_POST['token'];
			//$category = isset($_POST['kategori']) ? (int) $_POST['kategori'] : 0;
			$category = 1;
			$name = isset($_POST['nama']) ? purgeText($_POST['nama']) : '';
			$addr = isset($_POST['alamat']) ? purgeText($_POST['alamat']) : '';
			$phone = isset($_POST['telepon']) ? $_POST['telepon'] : '';
			$email = isset($_POST['email']) ? purgeText($_POST['email']) : '';
			$type = isset($_POST['tipe']) ? purgeText($_POST['tipe']) : '';
			$chassis = isset($_POST['rangka']) ? purgeText($_POST['rangka']) : '';
			$plate = isset($_POST['nopolisi']) ? purgeText($_POST['nopolisi']) : '';
			$division = isset($_POST['divisi']) ? (int) $_POST['divisi'] : 0;
			$desc = isset($_POST['deskripsi']) ? purgeText($_POST['deskripsi']) : '';
			$created = date('Y-m-d H:i:s');

			$url = 'https://www.google.com/recaptcha/api/siteverify';
			$data = array(
				'secret' => PRIVATE_KEY,
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

			if ($category <= 0)
				$errorMSG = "Kategori wajib dipilih ";
			elseif ($name == '')
				$errorMSG = "Nama wajib diisi ";
			elseif ($addr == '')
				$errorMSG = "Alamat wajib diisi ";
			elseif ($phone == '')
				$errorMSG = "Nomor telepon wajib diisi ";
			elseif (strlen($phone) < 5)
				$errorMSG = "Nomor telepon tidak valid ";
			elseif (!in_array(substr($phone,0,3),$area_code,TRUE) && !in_array(substr($phone,0,4),$mobile_code,TRUE) && !in_array(substr($phone,0,4),$area_code,TRUE))
				$errorMSG = "Nomor telepon tidak valid ";
			elseif (substr($phone,0,2) == '08' && strlen($phone) < 10)
				$errorMSG = "Nomor telepon tidak valid ";
			elseif ($type == '')
				$errorMSG = "Tipe kendaraan wajib diisi ";
			elseif ($division <= 0)
				$errorMSG = "Divisi wajib dipilih ";
			elseif ($desc == '')
				$errorMSG = "Deskripsi keluhan/saran/testimoni wajib diisi ";
			elseif ($captcha_success->success == false)
				$errorMSG = 'Pastikan CAPTCHA telah dicentang ';

			if ($errorMSG == '')
			{
				$sql = "INSERT INTO `tb_customercare`(`Nama`, `Alamat`, `Telepon`, `Email`, `TipeMobil`, `NoRangka`, `NoPolisi`, `Kategori`, `Deskripsi`, `Departemen`, `Status`, `CreatedOn`) VALUES ('$name','$addr','$phone','$email','$type','$chassis','$plate',$category,'$desc',$division,0,'$created')";
				$conn->query($sql);

				// Send notification email
				$tgEntry = @date_format(date_create($created), 'd M Y H:i:s');
				switch ($division)
				{
					case 1:
						$div = 'Sales';
						break;
					case 2:
						$div = 'Service';
						break;
					case 3:
						$div = 'Sparepart';
						break;
				}

				$sender_name = 'Suara Pelanggan';
				$sender_mail = 'cs@sardanagroup.co.id';
				$mailto = 'it.sibmotor@gmail.com';
				$cc = 'hennykatio@gmail.com';
				$subject = "Customer Complain (".$div.")";
				$message = "Berikut informasi detail pelanggan yang melakukan complain:".PHP_EOL;
				$message .= PHP_EOL;
				$message .= "Nama : ".$name.PHP_EOL;
				$message .= "Alamat : ".$addr.PHP_EOL;
				$message .= "E-mail : ".$email.PHP_EOL;
				$message .= "Telepon : ".$phone.PHP_EOL;
				$message .= "Tipe Kendaraan : ".$type.PHP_EOL;
				$message .= "No. Rangka : ".$chassis.PHP_EOL;
				$message .= "No. Polisi : ".$plate.PHP_EOL;			
				$message .= "Tanggal Komplain : ".$tgEntry.PHP_EOL;
				$message .= "Komplain : ".$desc.PHP_EOL;

				$mail = new attach_mailer($sender_name, $sender_mail, $mailto, $cc, $bcc = "", $subject, $message);
				$mail->process_mail();

				$errorMSG = "success";
			}
		//}
	}

	/*if ($errorMSG == '') {
		echo "success";
	} else {*/
		echo $errorMSG;
	//}
?>