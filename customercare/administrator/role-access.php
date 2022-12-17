<?php
	session_start();

	require_once ('../config.php');	

	if (isset($_SESSION[SECRET_KEY]['user_id']))
		define('_EXEC', 1);
	else
		header('Location: '.BASE_URL.DS.'login.php');

	require_once ('lang/'.file_get_contents('lang.tmp').'.php');
	require_once (LIBRARY_PATH.DS.'mysql_connection.cls.php');
	require_once (LIBRARY_PATH.DS.'form.cls.php');
	require_once (LIBRARY_PATH.DS.'functions.php');
	require_once ('function.php');
	require_once ('public.php');

	$conn = new mysql_connection();
	$conn->connect();
	$form = new cls_form();
	$access = array();

	if (_USER_ID != 1)
	{
		echo '<script>window.location.href = "'.BASE_URL.DS.ADMIN_URL.DS.'index.php"; </script>';
		exit;
	}

	if (isset($_REQUEST['show']))
	{
		$sql = "SELECT `access` FROM `tb_access` WHERE `user_id` = ".$_REQUEST['show'];
		$rs = $conn->query($sql);
		if ($row = $conn->result($rs))
		{
			$role_access = explode(";",$row['access']);
			for ($i=0;$i<_ACCESS_ROLE_LEN;$i++)
			{
				if (isset($role_access[$i]))
					$access[$i] = $role_access[$i];
				else
					$access[$i] = 0;
			}
		}
		$conn->dump($rs);
	}

	if (!empty($access))
	{
?>
		<div class="col-md-6">
			<ul class="list-group border-bottom">
				<li class="list-group-item">
					<span><?=$TEXT['navi-today']; ?></span>
					<div class="pull-right switch-button">
						<?php echo $form->create_switch_button('switch','chk_access[0]','chk_access[0]',1,$access[0]); ?>
					</div>
				</li>
				<li class="list-group-item">
					<span><?=$TEXT['navi-user']; ?></span>
					<div class="pull-right switch-button">
						<?php echo $form->create_switch_button('switch','chk_access[1]','chk_access[1]',1,$access[1]); ?>
					</div>
				</li>
				<li class="list-group-item">
					<span>-- <?=$TEXT['navi-user-list']; ?></span>
					<div class="pull-right switch-button">
						<?php echo $form->create_switch_button('switch','chk_access[2]','chk_access[2]',1,$access[2]); ?>
					</div>
				</li>
			</ul>
		</div>
<?php
	}
?>