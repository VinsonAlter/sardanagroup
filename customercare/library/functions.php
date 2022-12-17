<?php
	function get_date()
	{
		return date('Y-m-d');
	}
	
	function get_datetime()
	{
		return date('Y-m-d H:i:s');
	}
	
	function getMonth($month)
	{
		switch ($month)
		{
			case 1:
				$name = 'JAN';
				break;
			case 2:
				$name = 'FEB';
				break;
			case 3:
				$name = 'MAR';
				break;
			case 4:
				$name = 'APR';
				break;
			case 5:
				$name = 'MAY';
				break;
			case 6:
				$name = 'JUN';
				break;
			case 7:
				$name = 'JUL';
				break;
			case 8:
				$name = 'AUG';
				break;
			case 9:
				$name = 'SEP';
				break;
			case 10:
				$name = 'OCT';
				break;
			case 11:
				$name = 'NOV';
				break;
			default:
				$name = 'DEC';
		}
		
		return $name;
	}
?>