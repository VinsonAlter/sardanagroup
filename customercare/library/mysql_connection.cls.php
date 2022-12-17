<?php
	require_once (CONFIG_PATH.DS.'config.php');
	
	class mysql_connection
	{
		var $server;
		var $user;
		var $pass;
		var $db;

		var $conn;
		
		function __construct()
		{
			$this->server = DB_SERVER;
			$this->user = DB_USER;
			$this->pass = DB_PASS;
			$this->db = DB_NAME;
		}
				
		function connect()
		{	
			$this->conn = @mysql_connect($this->server,$this->user,$this->pass) 
				or die("Couldn't connect to MySQL:<br>" . mysql_error() . "<br>" . mysql_errno());
			$db = @mysql_select_db($this->db,$this->conn)
				or die("Couldn't select database:<br>" . mysql_error(). "<br>" . mysql_errno());
		}
		
		function query($query)
		{	
			$result = @mysql_query($query,$this->conn)
				or die("Couldn't execute query:<br>" . mysql_error(). "<br>" . mysql_errno());
			return $result;
		}
		
		function num_rows($rs)
		{	
			try
			{
				$rows_count = mysql_num_rows($rs);
				return $rows_count;
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ', $e->getMessage(), "<br>\n";
				return false;
			}
		}
		
		function result($rs)
		{
			try
			{
				$rows = mysql_fetch_array($rs,MYSQL_BOTH);
				return $rows;
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ', $e->getMessage(), "<br>\n";
				return false;
			}
		}
		
		function dump($rs)
		{
			try
			{
				mysql_free_result($rs);
				return true;
			} 
			catch (Exception $e)
			{
				echo 'Caught exception: ', $e->getMessage(), "<br>\n";
				return false;
			}
		}
		
		function last_insert_id()
		{
			try
			{
				return mysql_insert_id();
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ', $e->getMessage(), "<br>\n";
				return false;
			}
		}
		
		function affected_rows()
		{
			try
			{
				return mysql_affected_rows();
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ', $e->getMessage(), "<br>\n";
				return false;
			}
		}

		function disconnect()
		{
			mysql_close($this->conn);
		}
	}
?>