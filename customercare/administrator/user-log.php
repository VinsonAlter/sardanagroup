<?php	
	defined('_EXEC') or die ('Restricted Access');
	
	$form_caption = 'User Log';
	if (!isset($_SESSION['UserLogID'])) $_SESSION['UserLogID'] = 0;
	$datestart = date('01-m-Y');
	$dateend = date('d-m-Y');

	$user = _USER_ID;

	if ($user !== 1)
	{
		echo '<script>window.location.href = "'.BASE_URL.DS.ADMIN_URL.DS.'index.php"; </script>';
		die();
	}
	
	if (isset($_POST['cmd_filter']))
	{
		$_SESSION['UserLogID'] = (int) $_POST['cbo_user'];
		$_SESSION['UserLogDateFrom'] = $_POST['txt_datestart'];
		$_SESSION['UserLogDateTo'] = $_POST['txt_dateend'];

		if ((int) $_POST['cbo_user'] <= 0)
			$msg = array('danger',$form_caption,'Harap pilih user.');
	}

	$user_id = (int) $_SESSION['UserLogID'];
	if (isset($_SESSION['UserLogDateFrom'])) $datestart = $_SESSION['UserLogDateFrom'];
	if (isset($_SESSION['UserLogDateTo'])) $dateend = $_SESSION['UserLogDateTo'];
?>
	<div class="panel panel-primary">
		<form class="form-horizontal" name="frm_action" method="post" action="<?=$_SERVER['REQUEST_URI']; ?>" role="form">
			<div class="panel-heading">
				<h3 class="panel-title"><?=$form_caption; ?></h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label class="col-sm-1 control-label text-left">User: </label>
							<div class="col-md-3">
							<?php
								$option = array();
								$option[0] = array(0, 'Pilih User');

								$sql = "SELECT * FROM tb_user WHERE active = 1 ORDER BY Name";
								$rs = $conn->query($sql);
								while ($row = $conn->result($rs))
								{
									$option[] = array($row['id'],$row['name']);
								}
								$conn->dump($rs);

								echo $form->create_combo_box('form-control select','cbo_user','cbo_user','',$user_id,$option,'data-live-search="true"');
							?>
							</div>
							<label class="col-sm-1 control-label">Tgl.Login: </label>
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-5">
										<?php echo $form->create_date_picker('form-control datepicker','txt_datestart','txt_datestart','100%',$datestart); ?>
									</div>
									<label class="col-sm-1 control-label">s/d</label>
									<div class="col-md-5">
										<?php echo $form->create_date_picker('form-control datepicker','txt_dateend','txt_dateend','100%',$dateend); ?>
									</div>
								</div>
							</div>
							<div class="col-md-1">
								<?php echo $form->create_button('submit','btn btn-default','cmd_filter','cmd_filter','Filter','<i class="fa fa-search"></i> '.$TEXT['filter-button']); ?>
							</div>
						</div>
					</div>
				</div>
				<hr />
				<div class="table-responsive">
					<table id="userlog-all" class="table table-striped table-condensed">
						<thead>
							<tr>
								<th>Tanggal</th>
								<th>Host</th>
								<th>Browser</th>
								<th>OS</th>
							</tr>
						</thead>
					</table>
				</div>
				<br />
				<script type="text/javascript" language="javascript">
					$(document).ready(function() {
						$("#userlog-all").DataTable({
							"processing" : true,
							"serverSide" : true,
							"searching" : false,
							"deferRender" : true,
							"stateSave" : true,
							"stateDuration" : -1,
							"ajax" : { 
								"url" : "JSON/data-userlogs.php"
							},
							"language": {
								"processing": 
									'<div class="cssload-container-general">' +
										'<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_1"> </div></div>' +
										'<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_2"> </div></div>' +
										'<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_3"> </div></div>' +
										'<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_4"> </div></div>' +
									'</div>',
								"lengthMenu": 'Show <select class="form-control">'+
									'<option value="10">10</option>'+
									'<option value="25">25</option>'+
									'<option value="50">50</option>'+
									'<option value="100">100</option>'+
									'<option value="-1">All</option>'+
									'</select> entries'
							},
							"order": [[ 0, "desc" ]]
						});
					});
				</script>
			</div>
		</form>
	</div>