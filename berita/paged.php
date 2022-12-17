<?php
    require_once ('../config.php');
	require_once (BASE_PATH.DS.'koneksi.php');
	$params = array_keys($_GET);
	$tahun = (int)$params[0];
	$page = (int)$params[1] * 9;
	$data = array();
	$tampil = "SELECT judul, Paths, seo_link, tanggalpublish FROM news WHERE YEAR(tanggalpublish) = $tahun AND kategori = 'SG' ORDER BY tanggalpublish DESC LIMIT $page,9";
	// $tampil = "SELECT judul, Paths, seo_link, tanggalpublish FROM news WHERE YEAR(tanggalpublish) = $tahun ORDER BY tanggalpublish DESC LIMIT $page,9";
	$hasil = mysqli_query($koneksi,$tampil);
	$i = 0;
	$temp = array();
	while($row = mysqli_fetch_assoc($hasil)){
	    array_push($temp, $row);
	}
	$data["item"] = $temp;
	$sql = "SELECT COUNT(*) as total FROM news WHERE YEAR(tanggalpublish) = $tahun";
	$sql = mysqli_query($koneksi, $sql);
	if($row = mysqli_fetch_assoc($sql)){
	    $data["count"] = (int)$row["total"];
	}
	echo json_encode($data)
?>
