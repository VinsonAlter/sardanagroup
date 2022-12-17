<?php
    // session_start();
    // if(!isset($_SESSION["gerb"])){
    //     echo "no dont!";
    //     die();
    // }
    
	require_once ('./koneksi.php');
	$tampil = "SELECT judul, keterangan, Paths, seo_link FROM news ORDER BY tanggalpublish DESC LIMIT 0,3";
	$hasil = mysqli_query($koneksi,$tampil);
	$i = 0;
	while($data = mysqli_fetch_array($hasil)){
	    $thirdBerita = ($i === 2) ? "thirdBerita" : "";
	    $caption = substr($data[1],0,200);
	    $caption = strip_tags($caption);
		echo '
			<div class="card '.$thirdBerita.'" style="width: 18rem;">
				<div class="card-header" style="border: 0; padding: 0; border-radius: 0; height: 200px; overflow: hidden">
					<img data-src="https://sardanagroup.co.id/HP/production/images/news/'.$data[2].'" class="lazyload card-img-top" alt="'.$data[0].'">
				</div>				
				<div class="card-body no-gutter-left d-flex flex-column align-items-start">
					<h5 class="card-title">'.$data[0].'</h5>
					<p class="card-text mmc-regular flex-fill">'.$caption.'...</p>
					<a href="https://sardanagroup.co.id/berita/'.$data[3].'" class="btn btn-myPrimary">Lebih lanjut...</a>
				</div>
			</div>  
		';
		$i++;
	}
	mysqli_free_result($hasil);
?>