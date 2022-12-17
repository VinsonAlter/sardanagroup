<?php	
	session_start();
	
	require_once ('../config.php');

	/* Automatically logout after [IDLE_TIME] minutes idle */
	/* 
	$idletime = IDLE_TIME * 60;
	if (isset($_SESSION['logintime']))
		$logintime = $_SESSION['logintime'];
	else 
	{
		$_SESSION['logintime'] = time();
		$logintime = $_SESSION['logintime'];
	}

	if (time() - $logintime > $idletime)
	{
		session_destroy();
		session_unset();
		header('Location: '.BASE_URL.DS.'login.php');
		exit;
	}
	*/
	/* ----------------------------------------- */

	if (OFFLINE)
	{
		session_unset();
		session_destroy();
		header('Location: '.BASE_URL.DS.'maintenance.php');
	}

	if (isset($_SESSION[SECRET_KEY]['user_id']))
		define('_EXEC', 1);
	else
		header('Location: '.BASE_URL.DS.'login.php');
	
	require_once ('lang/'.file_get_contents('lang.tmp').'.php');
	require_once (LIBRARY_PATH.DS.'mysql_connection.cls.php');
	require_once (LIBRARY_PATH.DS.'form.cls.php');
	require_once (LIBRARY_PATH.DS.'functions.php');
	//require_once (LIBRARY_PATH.DS.'paginator.cls.php');
	require_once ('function.php');
	require_once ('public.php');
	
	$conn = new mysql_connection();
	$conn->connect();
	$form = new cls_form();

	$frm = $frmOption = '';	
	$menu = array('main','user','report','profile','utility','system-setting');
	$menuaccess = array('main','user','user-user');
	
	$default = $filename = 'main.php';

	if (isset($_GET['form'])) $frm = $_GET['form'];
	if (isset($_GET['option'])) $frmOption = $_GET['option'];

	if (!empty($frmOption))
	{
		if ($frm == 'report')
			$filename = 'report'.DS.$frmOption.'.php';
		else
			$filename = basename($frmOption.'.php');

		$needle = $frm.'-'.$frmOption;
	}
	else
	{
		$filename = basename($frm.'.php');
		$needle = $frm;
	}
	
	$key = array_search($needle, $menuaccess);
	$sql = "SELECT access FROM tb_access WHERE user_id = "._USER_ID;
	$rs = $conn->query($sql);
	if ($row = $conn->result($rs))
	{
		$role_access = explode(";",$row['access']);
		for ($i=0;$i<=_ACCESS_ROLE_LEN;$i++)
		{
			if (isset($role_access[$i]))
				$access[$i] = (bool) $role_access[$i];
			else
				$access[$i] = false;
		}
	}
	$conn->dump($rs);

	if (!file_exists(dirname(__FILE__).DS.$filename) || !in_array($frm, $menu))
		$filename = $default;
	if (!isset($access[$key]))
		$filename = $default;

	if (($_SESSION[SECRET_KEY]['avatar'] == '') || !file_exists(ROOT_PATH.DS.'media/avatar/'.$_SESSION[SECRET_KEY]['avatar']))
		$avatar = BASE_URL.DS.'media/avatar/avatar.png';
	else
		$avatar = BASE_URL.DS.'media/avatar/'.$_SESSION[SECRET_KEY]['avatar'];
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<!-- META SECTION -->
		<title><?=PROJECT_NAME; ?> - ADMINISTRATOR</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?=BASE_URL.DS; ?>media/favicon.png">
		<!-- END META SECTION -->

		<!-- CSS INCLUDE -->
		<link type="text/css" rel="stylesheet" href="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/css/theme-default.css"/>
		<link type="text/css" rel="stylesheet" href="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/css/datatables/dataTables.customLoader.colorball.css"/>
		<link type="text/css" rel="stylesheet" href="<?=BASE_URL.DS; ?>includes/css/jquery/jquery-ui.css" />
		<!-- EOF CSS INCLUDE -->		

		<!-- START PLUGINS -->
		<script type="text/javascript" src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/js/plugins/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/js/plugins/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="<?=BASE_URL.DS; ?>includes/js/jquery-ui.js"></script>
		<!-- END PLUGINS -->		
	</head>
	<body>
		<?php require_once('loader.php'); ?>

		<!-- START PAGE CONTAINER -->
		<div class="page-container">

		<!-- START PAGE SIDEBAR -->
			<div class="page-sidebar page-sidebar-fixed scroll">
			<!-- START X-NAVIGATION -->
				<?php require_once ('navi.php'); ?>
				<!-- END X-NAVIGATION -->
			</div>
			<!-- END PAGE SIDEBAR -->

			<!-- PAGE CONTENT -->
			<div class="page-content">

				<!-- START X-NAVIGATION VERTICAL -->
				<ul class="x-navigation x-navigation-horizontal x-navigation-panel">
					<!-- TOGGLE NAVIGATION -->
					<li class="xn-icon-button">
						<a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
					</li>
					<!-- END TOGGLE NAVIGATION -->

					<!-- SIGN OUT -->
					<li class="xn-icon-button pull-right">
						<a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
					</li> 
					<!-- END SIGN OUT -->

					<!-- TASKS -->					
					<li class="xn-icon-button pull-right" id="new-task">
						<?php //require_once('new-task-list.php'); ?>
					</li>
					<!-- END TASKS -->
				</ul>
				<!-- END X-NAVIGATION VERTICAL -->

				<!-- START BREADCRUMB -->
				<ul class="breadcrumb">
					<!--<li><a href="#">Home</a></li>
					<li class="active">Dashboard</li>-->
				</ul>
				<!-- END BREADCRUMB -->	

				<!-- PAGE CONTENT WRAPPER -->
				<div class="page-content-wrap">					
					<div class="row">
						<div class="col-md-12">
						<?php require_once ($filename); ?>
						</div>
					</div>
				</div>
				<!-- END PAGE CONTENT WRAPPER -->
			</div>            
			<!-- END PAGE CONTENT -->
		</div>
		<!-- END PAGE CONTAINER -->

	<!-- ALERT MESSAGE BOX -->
		<?php
			if(!empty($msg)) echo msgbox($msg);
		?>
		<!-- END ALERT MESSAGE BOX -->

	<!-- MESSAGE BOX-->
		<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
			<div class="mb-container">
				<div class="mb-middle">
					<div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
						<div class="mb-content">
							<p>Are you sure you want to log out?</p>
						</div>
						<div class="mb-footer">
							<div class="pull-right">
							<a href="<?=BASE_URL.DS.ADMIN_URL.DS; ?>logout.php" class="btn btn-success btn-lg">Yes</a>
							<button class="btn btn-default btn-lg mb-control-close">No</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END MESSAGE BOX-->

	<!-- START PRELOADS -->
		<audio id="audio-alert" src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/audio/alert.mp3" preload="auto"></audio>
		<audio id="audio-fail" src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/audio/fail.mp3" preload="auto"></audio>
		<!-- END PRELOADS -->

	<!-- START SCRIPTS -->
		<!-- START PLUGINS -->		
		<script type="text/javascript" src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/js/plugins/bootstrap/bootstrap.min.js"></script>
		<!-- END PLUGINS -->
		
		<!-- START THIS PAGE PLUGINS-->
		<script type="text/javascript" src="<?=BASE_URL.DS; ?>includes/js/input-numeric.js"></script>
		<script type="text/javascript" src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/js/jquery.slimscroll.js"></script>
		<script type='text/javascript' src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/js/plugins/icheck/icheck.min.js"></script>
		<script type="text/javascript" src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
		<script type="text/javascript" src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
		<script type='text/javascript' src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
		<script type="text/javascript" src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/js/plugins/bootstrap/bootstrap-select.js"></script>
		<script type="text/javascript" src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/js/plugins/bootstrap/ajax-bootstrap-select.js"></script>
		<script type="text/javascript" src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/js/plugins/bootstrap/bootstrap-file-input.js"></script>
		<script type="text/javascript" src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/js/plugins/owl/owl.carousel.min.js"></script>
		<script type="text/javascript" src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/js/plugins/moment.min.js"></script>
		<script type="text/javascript" src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/js/plugins/daterangepicker/daterangepicker.js"></script>
		<script type="text/javascript" src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/js/plugins/datatables/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/js/plugins/jquery-validation/jquery.validate.js"></script>
		<script type="text/javascript" src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/js/plugins/nvd3/lib/d3.v3.js"></script>
		<script type="text/javascript" src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/js/plugins/nvd3/nv.d3.min.js"></script>
		<!-- END THIS PAGE PLUGINS-->

		<!-- START TEMPLATE -->
		<script type="text/javascript" src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/js/plugins.js"></script>
		<script type="text/javascript" src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/js/actions.js"></script>
		<script type="text/javascript" src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/js/submission.js"></script>
		<script type="text/javascript" src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/js/cookie.js"></script>
		<script type="text/javascript" src="<?=BASE_URL.DS.ADMIN_URL.DS; ?>includes/js/loader.js"></script>
		<?=($frm == '') ? '<script type="text/javascript" src="'.BASE_URL.DS.ADMIN_URL.DS.'includes/js/main-validate.js"></script>' : ''; ?>
		<!-- END TEMPLATE -->

	<!-- END SCRIPTS -->
	</body>
</html>
