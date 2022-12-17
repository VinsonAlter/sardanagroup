<?php
	defined('_EXEC') or die ('Restricted Access');

	define ('_SESS_ID', session_id());
	define ('_USER_ID', $_SESSION[SECRET_KEY]['user_id']);
	define ('_USER_NAME', $_SESSION[SECRET_KEY]['username']);
	define ('_ACCESS_ROLE_LEN', 3);
	
	$time_set = [
		[0, '00:00'],
		[1, '01:00'],
		[2, '02:00'],
		[3, '03:00'],
		[4, '04:00'],
		[5, '05:00'],
		[6, '06:00'],
		[7, '07:00'],
		[8, '08:00'],
		[9, '09:00'],
		[10, '10:00'],
		[11, '11:00'],
		[12, '12:00'],
		[13, '13:00'],
		[14, '14:00'],
		[15, '15:00'],
		[16, '16:00'],
		[17, '17:00'],
		[18, '18:00'],
		[19, '19:00'],
		[20, '20:00'],
		[21, '21:00'],
		[22, '22:00'],
		[23, '23:00']
	];
	$month_set = [
		[1,'Januari'],
		[2,'Februari'],
		[3,'Maret'],
		[4,'April'],
		[5,'Mei'],
		[6,'Juni'],
		[7,'Juli'],
		[8,'Agustus'],
		[9,'September'],
		[10,'Oktober'],
		[11,'November'],
		[12,'Desember']
	];
?>