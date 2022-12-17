<?php
	defined('_EXEC') or die ('Restricted Access');

	$form_caption = 'Hak Akses';
	$user = _USER_ID;
	$access = array();

	if (_USER_ID !== 1)
	{
		echo '<script>window.location.href = "'.BASE_URL.DS.ADMIN_URL.DS.'index.php"; </script>';
		die();
	}

	if (isset($_POST['cmd_save']))
	{
		$user = (int) $_POST['cbo_user'];
		for ($i=0;$i<_ACCESS_ROLE_LEN;$i++)
		{
			$access[] = (int) isset($_POST['chk_access'][$i]);
		}

		$menu_access = implode(";",$access);
		$sql = "UPDATE `tb_access` SET `access` = '$menu_access' WHERE `user_id` = $user";
		$conn->query($sql);

		$msg = array('success',$form_caption,$TEXT['update-success']);
	}
	else
	{
		$sql = "SELECT `access` FROM `tb_access` WHERE `user_id` = $user";
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
?>
	<style type="text/css">
		.switch-button {
			margin-top: -5px !important;
		}
	</style>
	<script language="javascript">
		$(document).ready(function() {
			$("#cbo_user").change(function(event) {				
				id = $("#cbo_user").val();				
				$("#access-list").load('role-access.php',{"show":id});
			});
		});		
	</script>
	<div class="panel panel-primary">
		<form class="form-horizontal" name="frm_action" method="post" action="<?=$_SERVER['REQUEST_URI']; ?>" role="form">
			<div class="panel-heading">
				<h3 class="panel-title"><?=$form_caption; ?></h3>
				<ul class="panel-controls">
				<?php echo '<li>'.$form->create_button('submit','btn btn-info','cmd_save','cmd_save','Save','<i class="fa fa-floppy-o"></i> '.$TEXT['save-button']).'</li>'; ?>
				</ul>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-sm-1 control-label">User*</label>
					<div class="col-md-5">
					<?php
						$option = array();
							
						$sql = "SELECT * FROM tb_user WHERE active = 1 ORDER BY name";
						$rs = $conn->query($sql);
						while ($row = $conn->result($rs))
						{
							$option[] = array($row['id'],$row['name']);
						}
						
						echo $form->create_combo_box('form-control select','cbo_user','cbo_user','100%',$user,$option);
					?>
					</div>
				</div>
				<div class="row" id="access-list">
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
				</div>
			</div>
		</form>
	</div>