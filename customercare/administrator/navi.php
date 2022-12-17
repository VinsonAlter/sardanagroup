<?php
	defined('_EXEC') or die ('Restricted Access');

	$user = _USER_ID;
	$access = array();

	$sql = "SELECT access FROM tb_access WHERE user_id = $user";
	$rs = $conn->query($sql);
	if ($row = $conn->result($rs))
	{
		$role_access = explode(";",$row['access']);
		for ($i=0;$i<=_ACCESS_ROLE_LEN;$i++)
		{
			if (isset($role_access[$i]))
				$access[$i] = $role_access[$i];
			else
				$access[$i] = 0;
		}
	}
	$conn->dump($rs);

	/*$sql = "SELECT sales_id FROM tb_user WHERE id = $user";
	$rs = $conn->query($sql);
	if ($row = $conn->result($rs))
	{
		$sales_id = $row['sales_id'];
	}
	$conn->dump($rs);*/
?>
	<ul class="x-navigation">
		<li class="xn-logo">
			<a href="<?=BASE_URL.DS.ADMIN_URL; ?>"><?=PROJECT_NAME; ?></a>
			<a href="#" class="x-navigation-control"></a>
		</li>
		<li class="xn-profile">
			<a href="#" class="profile-mini">
				<img src="<?=$avatar; ?>"/>
			</a>
			<div class="profile">
				<div class="profile-image">
					<img src="<?=$avatar; ?>"/>
				</div>
				<div class="profile-data">
					<div class="profile-data-name"><?=$_SESSION[SECRET_KEY]['username']; ?></div>
					<div class="profile-data-title">
						<i class="fa fa-comment"></i> <?=greeting(); ?>
						<?php if ($_SESSION[SECRET_KEY]['status'] != '') echo '<br /><em><i class="fa fa-quote-left"></i>&nbsp;&nbsp;'.$_SESSION[SECRET_KEY]['status'].'&nbsp;&nbsp;<i class="fa fa-quote-right"></i></em>'; ?>
					</div>
				</div>
				<div class="profile-controls">
					<a href="<?=BASE_URL.DS.ADMIN_URL.DS; ?>index.php?form=profile" class="profile-control-left"><span class="fa fa-info"></span></a>
					<!--<a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>-->
				</div>
			</div>
		</li>
		<?php if ($access[0]) { ?>
		<li<?=(($frm=='')?' class="active"':''); ?>>
			<a href="<?=BASE_URL.DS.ADMIN_URL; ?>"><span class="fa fa-desktop"></span> <span class="xn-text"><?=$TEXT['navi-today']; ?></span></a>
		</li>
		<?php } ?>

		<?php if ($user == 1) { ?>
		<li<?=(($frm=='user')?' class="active"':''); ?>>
			<a href="<?=BASE_URL.DS.ADMIN_URL.DS; ?>index.php?form=user"><span class="fa fa-users"></span> <span class="xn-text"><?=$TEXT['navi-user-list']; ?></span></a>
		</li>		
		<li class="xn-openable<?=(($frm=='system-setting')?' active':''); ?>">
			<a href="#"><span class="fa fa-cogs"></span> <span class="xn-text"><?=$TEXT['navi-system-setting']; ?></span></a>
			<ul>
				<li<?=(($frmOption=='role')?' class="active"':''); ?>><a href="<?=BASE_URL.DS.ADMIN_URL.DS; ?>index.php?form=system-setting&option=role"><span class="fa fa-lock"></span> <?=$TEXT['navi-system-setting-access']; ?></a></li>
				<li<?=(($frmOption=='system-message')?' class="active"':''); ?>><a href="<?=BASE_URL.DS.ADMIN_URL.DS; ?>index.php?form=system-setting&option=system-message"><span class="fa fa-exclamation-triangle"></span> <?=$TEXT['navi-system-setting-message']; ?></a></li>
				<li<?=(($frmOption=='user-log')?' class="active"':''); ?>><a href="<?=BASE_URL.DS.ADMIN_URL.DS; ?>index.php?form=system-setting&option=user-log"><span class="fa fa-clock-o"></span> <?=$TEXT['navi-system-setting-user-log']; ?></a></li>
			</ul>
		</li>
		<?php } ?>
	</ul>