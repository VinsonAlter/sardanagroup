<?php
	defined('_EXEC') or die ('Restricted Access');	
	
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

	//function to convert format date dd/mm/yy to format that accepted by mysql
	function date_to_str($date)
	{
		if (($date == '') || (strlen($date) <> 10))
			return false;

		$reform = substr($date,6,4) . '-' . substr($date,3,2) . '-' .substr($date,0,2);
		return $reform;
	}

	function is_sunday($day,$month,$year)
	{
		if (empty($day))
			$day = date('d');
		if (empty($month))
			$month = date('m');
		if (empty($year))
			$year = date('Y');

		$date = $year.'-'.$month.'-'.$day;
		$date = strtotime($date);
		$date = date("w", $date);
		if ($date == 0) {
			return true;
		} else {
			return false;
		}
	}

	function is_holiday($day,$month,$year)
	{
		global $conn;
		$holiday = false;

		if (empty($day))
			$day = date('d');
		if (empty($month))
			$month = date('m');
		if (empty($year))
			$year = date('Y');

		$sql = "SELECT COUNT(*) FROM tb_holiday WHERE Tanggal = '$year-$month-$day'";
		$rs = $conn->query($sql);
		while ($row = $conn->result($rs))
		{
			if ($row[0] > 0)
				$holiday = true;
		}
		$conn->dump($rs);

		return $holiday;
	}

	function day_number($day,$month,$year)
	{
		if (empty($day))
			$day = date('d');
		if (empty($month))
			$month = date('m');
		if (empty($year))
			$year = date('Y');

		$date = $year.'-'.$month.'-'.$day;
		$date = strtotime($date);
		$date = date("w", $date);
		
		return $date;
	}

	function encode_text($text)
	{
		/*if (empty($text) || (!isset($text)) || (trim($text) == ''))
			return "";
		else
			return htmlspecialchars($text, ENT_QUOTES);*/
		$text = trim($text);
		$text = str_replace('â€','&quot;',$text);		
		$text = str_replace('â€œ','&quot;',$text);
		$text = str_replace('â€­','',$text);
		$text = str_replace('â€¬','',$text);
		$text = stripslashes($text);
		$text = htmlspecialchars($text);

		return $text;
	}

	function greeting()
	{
		$mes = '';
		$nHour = date('G');
		$nMinute = (int) date('i');

		if (($nHour >= 4) && ($nHour < 10))
			$mes = 'Selamat Pagi';
		elseif (($nHour >= 10) && ($nHour < 14))
			$mes = 'Selamat Siang';
		elseif (($nHour >= 14) && ($nHour <= 19))
			$mes = 'Selamat Sore';
		elseif (($nHour >= 19) || ($nHour < 4))
			$mes = 'Selamat Malam';

		return $mes;
	}

	function msgbox($message)
	{
		if (empty($message) || !is_array($message))
			return false;
		
		$msg_type = $message[0];
		$msg_body = $message[2];

		switch ($msg_type)
		{
			case 'success':
				$msg_header = '<span class="fa fa-check"></span> '.$message[1];
				break;
			case 'info':
				$msg_header = '<span class="fa fa-info"></span> '.$message[1];
				break;
			case 'warning':
				$msg_header = '<span class="fa fa-warning"></span> '.$message[1];
				break;
			default:
				$msg_header = '<span class="fa fa-times-circle"></span> '.$message[1];
		}

		$res = '
			<div class="message-box message-box-'.$msg_type.' animated fadeIn" id="message-box-'.$msg_type.'">
				<div class="mb-container">
					<div class="mb-middle">
						<div class="mb-title">'.$msg_header.'</div>
						<div class="mb-content">
							<p>'.$msg_body.'</p>
						</div>
						<div class="mb-footer">
							<button class="btn btn-default btn-lg pull-right mb-control-close">Close</button>
						</div>
					</div>
				</div>
			</div>
			<script>
				$(document).ready(function(){
					$("#message-box-'.$msg_type.'").toggleClass("open");
				});
			</script>
		';
		
		return $res;
	}

	function getTeamMemberID($userid, $active=true)
	{
		global $conn;
		global $team;
		$ctrl = '';

		$sql = "SELECT ControledTeam FROM tb_teamcontrol WHERE USER_ID = $userid";
		$rs = $conn->query($sql);
		while ($row = $conn->result($rs))
		{
			$ctrl = $row['ControledTeam'];
		}
		$conn->dump($rs);

		$ctrl_team = array_filter(explode(',', $ctrl));
		for ($i=0;$i<count($ctrl_team);$i++)
		{
			$team[] = $ctrl_team[$i];
			$sql = "SELECT id FROM tb_user WHERE role_id = 6 AND supervisor_id = {$ctrl_team[$i]}";
			if ($active) $sql .= " AND active = 1";
			$rs = $conn->query($sql);
			while ($row = $conn->result($rs))
			{
				$team[] = $row['id'];
			}
			$conn->dump($rs);
		}

		$sql = "SELECT id FROM tb_user WHERE supervisor_id = $userid";
		if ($active) $sql .= " AND active = 1";
		$rs = $conn->query($sql);
		while ($row = $conn->result($rs))
		{
			$team[] = $row['id'];
		}
		$conn->dump($rs);

		return $team;
	}

	function getTeamMemberInitial($userid, $active=true)
	{
		global $conn;
		global $team;
		$ctrl = '';

		$sql = "SELECT ControledTeam FROM tb_teamcontrol WHERE USER_ID = $userid";
		$rs = $conn->query($sql);
		while ($row = $conn->result($rs))
		{
			$ctrl = $row['ControledTeam'];
		}
		$conn->dump($rs);

		$ctrl_team = array_filter(explode(',', $ctrl));
		for ($i=0;$i<count($ctrl_team);$i++)
		{
			$sql = "SELECT initial FROM tb_user WHERE id = {$ctrl_team[$i]}";
			$rs = $conn->query($sql);
			while ($row = $conn->result($rs))
			{
				$team[] = $row['initial'];
			}
			$conn->dump($rs);
			
			$sql = "SELECT initial FROM tb_user WHERE role_id = 6 AND supervisor_id = {$ctrl_team[$i]}";
			if ($active) $sql .= " AND active = 1";
			$rs = $conn->query($sql);
			while ($row = $conn->result($rs))
			{
				$team[] = $row['initial'];
			}
			$conn->dump($rs);
		}

		$sql = "SELECT initial FROM tb_user WHERE supervisor_id = $userid";
		if ($active) $sql .= " AND active = 1";
		$rs = $conn->query($sql);
		while ($row = $conn->result($rs))
		{
			$team[] = $row['initial'];
		}
		$conn->dump($rs);

		return $team;
	}

	function getUserInitial($id)
	{
		global $conn;
		$initial = '';

		$sql = "SELECT initial FROM tb_user WHERE id = $id";
		$rs = $conn->query($sql);
		while ($row = $conn->result($rs))
		{
			$initial = $row['initial'];
		}
		$conn->dump($rs);

		return $initial;
	}

	function base64url_encode($data) {
		return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
	}

	function base64url_decode($data) {
		return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
	}

	function cleanData(&$str)
	{
		// escape tab characters	
		$str = preg_replace("/\t/", "\\t", $str);

		// escape new lines
		$str = preg_replace("/\r?\n/", "\\n", $str);

		// convert 't' and 'f' to boolean values
		if ($str == 't') $str = 'TRUE';
		if ($str == 'f') $str = 'FALSE';

		// force certain number/date formats to be imported as string
		if (preg_match("/^0/", $str) || preg_match("/^\+?\d{8,}$/", $str) || preg_match("/^\d{4}.\d{1,2}.\d{1,2}/", $str)) 
		{
			$str = "'$str";
		}

		//escape fields that include double quotes
		if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
	}

	function getWeeksInMonth($mm, $yy)
	{
		$startdate = date($yy."-".$mm."-01") ;
		//$current_date = date('Y-m-t');
		$ld = cal_days_in_month(CAL_GREGORIAN, $mm, $yy);
		$lastday = $yy.'-'.$mm.'-'.$ld;
		$start_date = date('Y-m-d', strtotime($startdate));
		$end_date = date('Y-m-d', strtotime($lastday));
		$end_date1 = date('Y-m-d', strtotime($lastday." + 6 days"));
		$week_array = array();
		$first = true;

		for ($date = $start_date; $date <= $end_date1; $date = date('Y-m-d', strtotime($date. ' + 7 days')))
		{
			$getarray = getWeekDates($date, $start_date, $end_date, $first);
			if ($getarray) $week_array[] = $getarray;
			$first = false;
		}

		return $week_array;
	}

	function getWeekDates($date, $start_date, $end_date, $first)
	{
		$week =  date('W', strtotime($date));
		$year =  date('Y', strtotime($date));
		
		if ($first && $week >= 52) $year -= 1;
		$from = date("Y-m-d", strtotime("{$year}-W{$week}+1")); //echo $from." < ".$start_date." -- ";
		$to = date("Y-m-d", strtotime("{$year}-W{$week}-7")); //echo $to." > ".$end_date."<br />";
		
		if (($from > $end_date) && ($to > $end_date))
			$array1 = false;
		else
		{
			if ($from < $start_date) $from = $start_date;
			if ($to > $end_date) $to = $end_date;

			$array1 = array(
				"ssdate" => $from,
				"eedate" => $to
			);
		}

		return $array1;
	}

	function getTriwulanMonth($month)
	{
		switch ($month) {
			case 1:
				$mm = 'JAN';
				break;
			case 2:
				$mm = 'FEB';
				break;
			case 3:
				$mm = 'MAR';
				break;
			case 4:
				$mm = 'APR';
				break;
			case 5:
				$mm = 'MEI';
				break;
			case 6:
				$mm = 'JUN';
				break;
			case 7:
				$mm = 'JUL';
				break;
			case 8:
				$mm = 'AGT';
				break;
			case 9:
				$mm = 'SEP';
				break;
			case 10:
				$mm = 'OKT';
				break;
			case 11:
				$mm = 'NOV';
				break;
			case 12:
				$mm = 'DES';
				break;
		}

		return $mm;
	}

	function getTriwulan($date)
	{
		$eval_month = date('n', strtotime($date));
		$eval_year = date('Y', strtotime($date));
		$curr_month = date('n', strtotime(date('Y-m-d')));
		$curr_year = date('Y', strtotime(date('Y-m-d')));
		/*$new_eval = date_create($curr_year.'-'.$eval_month.'-01');
		$diff = date_diff(date_create(date('Y-m-01')), $new_eval);
		if ($diff->format('%a') > 0)
			$eval_year = $curr_year - 1;
		else
			$eval_year = $curr_year;*/

		$p1 = $eval_month;
		$y1 = $y2 = $y3 = $eval_year;
		$p2 = $eval_month + 1;
		if ($p2 > 12)
		{
			$p2 -= 12;
			$y2 += 1;
		}
		$p3 = $eval_month + 2;
		if ($p3 > 12)
		{
			$p3 -= 12;
			$y3 += 1;
		}
		
		while (!((($curr_month == $p1) && ($curr_year == $y1)) || (($curr_month == $p2) && ($curr_year == $y2)) || (($curr_month == $p3) && ($curr_year == $y3))))
		{
			$p1 += 3;
			if ($p1 > 12)
			{
				$p1 -= 12;
				$y1 += 1;
			}
			$p2 += 3;
			if ($p2 > 12)
			{
				$p2 -= 12;
				$y2 += 1;
			}
			$p3 += 3;
			if ($p3 > 12)
			{
				$p3 -= 12;
				$y3 += 1;
			}
		}

		$result = array($p1.'-'.$p2.'-'.$p3, $y1.'-'.$y2.'-'.$y3, getTriwulanMonth($p1).'-'.getTriwulanMonth($p3));

		return $result;
	}

	function getTotalSales($initial,$month,$year)
	{
		global $conn;
		$total_do = $total_target = 0;
		$result = array();

		$sql = "SELECT SUM(Unit) FROM tb_do WHERE YEAR(TglDO) = {$year} AND MONTH(TglDO) = {$month} AND JualVia = '{$initial}'";
		$rs = $conn->query($sql);
		while ($row = $conn->result($rs))
		{
			$total_do = (int) $row[0];
		}
		$conn->dump($rs);

		$sql = "SELECT Target{$month} FROM tb_target WHERE Tahun = {$year} AND Initial = '{$initial}'";
		$rs = $conn->query($sql);
		while ($row = $conn->result($rs))
		{
			$total_target = (int) $row[0];
		}
		$conn->dump($rs);

		$result = array($total_target, $total_do);

		return $result;
	}

	function clearCache($lifetime = 3600)
	{
		$now = time();
		$dir = 'cache/';
		
		if (is_dir($dir)) 
		{
			if ($dh = opendir($dir)) 
			{
				while (($file = readdir($dh)) !== false) 
				{
					if (filetype($dir . $file) == 'file')
					{
						if ($file != 'index.html')
						{
							$check = explode(".", $file);
							$time = substr($check[0], 8, strlen($check[0]));
							if (($now - $time) > $lifetime)
							{
								unlink($dir . $file);
							}
						}
					}
				}
				closedir($dh);
			}
		}
	}
?>