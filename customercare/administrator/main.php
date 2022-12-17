<?php
	defined('_EXEC') or die ('Restricted Access');	

	$form_caption = 'Suara Pelanggan';
	$month = date('n');
	$year_id = 0;
	$status_id = 99;
	$divisi_user = $divisi = array();
	$list_divisi = '';
	$user = _USER_ID;
	if (!isset($_SESSION['FilterMonth'])) $_SESSION['FilterMonth'] = $month;

	$sql = "SELECT division FROM tb_user WHERE id = $user";
	$rs = $conn->query($sql);
	while ($row = $conn->result($rs))
	{
		$divisi_user = explode('|', $row['division']);
	}
	$conn->dump($rs);
	$divisi = $divisi_user;

	if (isset($_POST['cmd_submit']))
	{
		if (isset($_POST['cbo_month']))
			$_SESSION['FilterMonth'] = (int) $_POST['cbo_month'];
		if (isset($_POST['cbo_year']))
			$_SESSION['FilterYearID'] = (int) $_POST['cbo_year'];
		if (isset($_POST['cbo_status']))
			$_SESSION['FilterStatus'] = (int) $_POST['cbo_status'];
		$divisi = array();
		if (isset($_POST['chk_divisi']))
		{
			$kat = $_POST['chk_divisi'];
			foreach ($kat as $key => $value) {
				$divisi[] = $value;
			}
		}
		$_SESSION['FilterDivisi'] = $divisi;
	}

	if (isset($_SESSION['FilterMonth'])) $month = $_SESSION['FilterMonth'];
	if (isset($_SESSION['FilterYearID'])) $year_id = $_SESSION['FilterYearID'];
	if (isset($_SESSION['FilterStatus'])) $status_id = $_SESSION['FilterStatus'];
	if (isset($_SESSION['FilterDivisi'])) $divisi = $_SESSION['FilterDivisi'];
	$year = date('Y') - $year_id;
?>
	<div class="panel panel-primary">
		<form class="form-horizontal" name="frm_action" method="post" action="<?=$_SERVER['REQUEST_URI']; ?>" role="form">
			<div class="panel-heading">
				<h3 class="panel-title"><?=$form_caption; ?></h3>
				<ul class="panel-controls"></ul>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="col-md-3 control-label">Periode</label>
							<div class="col-md-3">
							<?php
								echo $form->create_combo_box('form-control select','cbo_month','cbo_month','',$month,$month_set);
							?>
							</div>
							<div class="col-md-3">
							<?php
								$option = array();
								$option[0] = array(0, date('Y'));
								$option[1] = array(1, date('Y') - 1);
								$option[2] = array(2, date('Y') - 2);
								$option[3] = array(3, date('Y') - 3);

								echo $form->create_combo_box('form-control select','cbo_year','cbo_year','',$year_id,$option);
							?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Status</label>
							<div class="col-md-6">
							<?php
								$option = array();
								$option = [[99,'Semua Status'],[0,'Open'],[1,'Progress'],[2,'Closed']];
								echo $form->create_combo_box('form-control select','cbo_status','cbo_status','100%',$status_id,$option);
							?>
							</div>
						</div>
					<?php
						if (count($divisi_user) > 1) {
					?>
						<div class="form-group">
							<label class="col-md-3 control-label">Divisi</label>
						<?php
							foreach ($divisi_user as $val) {
								switch ($val) {
									case 1:
										echo '<label class="col-md-2 check"><span class="text-muted">'.$form->create_check_box('icheckbox','chk_divisi','chk_divisi[]','1',in_array('1', $divisi)?TRUE:FALSE).' Sales</span></label>';
										break;
									case 2:
										echo '<label class="col-md-2 check"><span class="text-muted">'.$form->create_check_box('icheckbox','chk_divisi','chk_divisi[]','2',in_array('2', $divisi)?TRUE:FALSE).' Service</span></label>';
										break;
									case 3:
										echo '<label class="col-md-3 check"><span class="text-muted">'.$form->create_check_box('icheckbox','chk_divisi','chk_divisi[]','3',in_array('3', $divisi)?TRUE:FALSE).' Sparepart</span></label>';
										break;
								}
							}
						?>
						</div>
					<?php
						}
					?>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<div class="col-md-1">
								<?php echo $form->create_button('submit','btn btn-default','cmd_submit','cmd_submit','Filter','<i class="fa fa-search"></i> '.$TEXT['filter-button']); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table id="message-all" class="table table-striped table-condensed" width="100%">
						<thead>
							<tr>
								<th width="20px">#</th>
								<th>Tgl.Entry</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Telepon</th>
								<th>Tipe</th>
								<th>No.Polisi</th>
								<th>Keluhan</th>
								<th>Status</th>
								<th>Divisi</th>
								<th>Aksi</th>
							</tr>
						</thead>
					</table>
				</div>
				<br />
				<script type="text/javascript" language="javascript">
					$(document).ready(function() {
						var dataTable = $("#message-all").DataTable({
							"processing" : true,
							"serverSide" : true,
							"deferRender" : true,
							"stateSave" : true,
							"stateDuration" : -1,
							"ajax" : { 
								"url" : "JSON/data-message.php"
							},
							"language": {
								"processing": 
									'<div class="cssload-container-general">' +
										'<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_1"> </div></div>' +
										'<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_2"> </div></div>' +
										'<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_3"> </div></div>' +
										'<div class="cssload-internal"><div class="cssload-ballcolor cssload-ball_4"> </div></div>' +
									'</div>',
								"lengthMenu": 'Show <select class="form-control input-sm" name="cbo_page">' +
									'<option value="10">10</option>' +
									'<option value="25">25</option>' +
									'<option value="50">50</option>' +
									'<option value="100">100</option>' +
									'<option value="-1">All</option>' +
									'</select> entries'
							},
							"columnDefs" : [
								{ "targets": [0, -1], "orderable": false },
								{ "targets": [0, -1], "searchable": false }
							],
							"order": [ [ 1, "desc" ] ]
						});
					});
				</script>
			</div>
		</form>
	</div>
	<div class="modal fade" id="modal_edit" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					 <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel">Tindak Lanjut</h4>
				</div>
				<div id="edit-message" class="modal-body">
					<form class="form-horizontal" id="jvalidate" name="frm_edit" method="post" action="javascript:editMessage();" role="form">
						<?php echo $form->create_input_hidden('hid_message_id', 'hid_message_id', 0); ?>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="col-md-2 control-label">Nama</label>
									<div class="col-md-10"><?php echo $form->create_input_text('form-control input-sm','nama','nama',100,'100%','','Nama','color:#000000;',true); ?></div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Alamat</label>
									<div class="col-md-10"><?php echo $form->create_input_text('form-control input-sm','alamat','alamat',200,'100%','','Alamat','color:#000000;',true); ?></div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Telepon</label>
									<div class="col-md-10"><?php echo $form->create_input_text('form-control input-sm','telepon','telepon',20,'50%','','Telepon','color:#000000;',true); ?></div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Tipe Mobil</label>
									<div class="col-md-10"><?php echo $form->create_input_text('form-control input-sm','tipe','tipe',50,'100%','','Tipe Mobil','color:#000000;',true); ?></div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">No. Rangka</label>
									<div class="col-md-4"><?php echo $form->create_input_text('form-control input-sm','rangka','rangka',20,'100%','','No. Rangka','color:#000000;',true); ?></div>
									<label class="col-md-2 control-label">No. Polisi</label>
									<div class="col-md-4"><?php echo $form->create_input_text('form-control input-sm','nopol','nopol',10,'100%','','No. Polisi','color:#000000;',true); ?></div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Keluhan</label>
									<div class="col-md-10"><?php echo $form->create_textarea('form-control input-sm','pesan','pesan',2,100,'100%','','Deskripsi','color:#000000;',true); ?></div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Catatan</label>
									<div class="col-md-10"><?php echo $form->create_textarea('form-control input-sm','catatan','catatan',2,100,'100%','','Catatan'); ?></div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Departemen</label>
									<div class="col-md-4">
								<?php
									$option = array();
									$option = [[1,'Sales'],[2,'Service'],[3,'Sparepart']];
									echo $form->create_combo_box('form-control select','departemen','departemen','100%',1,$option);
								?>
									</div>
									<label class="col-md-2 control-label">Status</label>
									<div class="col-md-4">
								<?php
									$option = array();
									$option = [[0,'Open'],[1,'Progress'],[2,'Closed']];
									echo $form->create_combo_box('form-control select','status','status','100%',0,$option);
								?>
									</div>
								</div>
								<div id="edit-status"></div>
								<div class="form-group">
									<div class="col-md-12">
										<ul class="panel-controls">
											<li><?php echo $form->create_button('submit','btn btn-primary pull-right','cmd_submit','cmd_submit','','<i class="fa fa-save"></i> Simpan'); ?></li>
											<li>&nbsp;</li>
											<li><?php echo $form->create_button('button','btn btn-danger pull-right','cmd_close','cmd_close','','<i class="fa fa-close"></i> Tutup',false,'',' data-dismiss="modal"'); ?></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>