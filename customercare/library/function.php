<?php
	function get_date()
	{
		return date('Y-m-d');
	}
	
	function get_datetime()
	{
		return date('Y-m-d H:i:s');
	}
	
	function createToken($length)
	{
		$chars = "abcdefghijkmnopqrstuvwxyz023456789";
		srand((double)microtime()*1000000);
		$i = 0;
		$pass = '' ;

		while ($i <= ($length - 1)) {
			$num = rand() % 33;
			$tmp = substr($chars, $num, 1);
			$pass = $pass . $tmp;
			$i++;
		}
		return $pass;
	}

	function purgeText($text)
	{
		$text = trim(rtrim(ltrim($text)));
		$text = strip_tags($text);
		$text = stripslashes($text);
		$text = htmlspecialchars($text, ENT_QUOTES);
		$text = mysql_real_escape_string($text);

		return $text;
	}

	function base64url_encode($data) {
		return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
	}

	function base64url_decode($data) {
		return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
	} 
?>