<?php

	require_once (__DIR__. '../../koneksi.php');	

	$judul = $path = '';

	$sql = "SELECT judul, imagepath, seo_link, imagepath_mb FROM promo WHERE id = 1";

	$rs = mysqli_query($koneksi, $sql);

	while ($row = mysqli_fetch_array($rs)){

		$judul = $row[0];

		$imgPath = $row[1];

		$seo = $row[2];

        $imgPathMb = $row[3];

	}

	mysqli_free_result($rs);

?>

<div class="modal fade" id="modalPromo" tabindex="-1" role="dialog" aria-labelledby="modalPromo" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content">

        <div class="modal-header">

            <h5 class="modal-title text-uppercase" id="exampleModalLongTitle"><?=$judul?></h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">&times;</span>

            </button>

        </div>

        <div class="modal-body">

            <!-- <img src="https://sardanagroup.co.id/images/promo/<?=$imgPath?>" class="d-block w-100" alt="<?=$judul?>"> -->

            <picture>

                <img class="d-lg w-100" src="https://sardanagroup.co.id/images/promo/<?=$imgPath?>" alt="<?=$judul?>">

                <img class="d-sm w-100" src="https://sardanagroup.co.id/images/promo/<?=$imgPathMb?>" alt="<?=$judul?>">

            </picture>

        </div>

        <div class="modal-footer">

            <!-- <a href="https://sardanagroup.co.id/promo/<?=$seo?>" style="color:#ED0000">LEBIH LANJUT <i class="font-weight-bold fas fa-chevron-right"></i></a> -->

            <a href="https://sardanagroup.co.id/promo-mitsubishi/" style="color:#ED0000">LEBIH LANJUT <i class="font-weight-bold fas fa-chevron-right"></i></a>

        </div>

        </div>

    </div>

</div>







