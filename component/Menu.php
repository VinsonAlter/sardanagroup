<?php

    $atpm = "";

    if(isset($_GET["MMKSI"])){

        $atpm = "MMKSI";

    }

    else if(isset($_GET["KTB"])){

        $atpm = "KTB";

    }

?>

<section class="menuOverlay d-none">

    <div class="overlayBg flex-fill">

        <!--inject tampilan menu di sini-->

    </div>

</section>

<div class="menu">

    <div class="container pt-4 h-100 d-flex flex-column overflow-auto">

        <div class="btMenuMobile cp fs20">

            <span><i class="fas fa-times"></i></span>            

        </div>

        <div class="flex-grow-1">

            <ul class="list-group list-group-flush menuItem" role="navigation">

                <li class="bookingservice list-group-item font-weight-bold" target="./page/bookingservice/"><h6><a href="javascript:void(0)">BOOKING SERVICE</a></h6></li>

                <li class="konsultasi list-group-item font-weight-bold" target="./page/konsultasi/?<?=$atpm?>"><h6><a href="javascript:void(0)">KONSULTASI</a></h6></li>

                <li class="testdrive list-group-item font-weight-bold" target="./page/testdrive/"><h6><a href="javascript:void(0)">TEST DRIVE</a></h6></li>

                <!-- <li class="suarapelanggan list-group-item font-weight-bold" target="./page/suarapelanggan/"><h6><a href="javascript:void(0)">SUARA PELANGGAN</a></h6></li> -->

                <li class="suarapelanggan list-group-item font-weight-bold" ><h6><a href="https://suara-pelanggan.sardanagroup.co.id/" target="_blank">SUARA PELANGGAN</a></h6></li>

                <li class="sukucadang list-group-item font-weight-bold" target="./page/sukucadang.html"><h6><a href="javascript:void(0)">SPAREPARTS</a></h6></li>

                <li class="bengkel list-group-item font-weight-bold" target="./page/bengkel.html"><h6><a href="javascript:void(0)">BENGKEL</a></h6></li>

                <li class="garansi list-group-item font-weight-bold" target="./page/garansi.html"><h6><a href="javascript:void(0)">GARANSI</a></h6></li>

                <li class="tentangkami list-group-item font-weight-bold" target="./page/tentangkami.html"><h6><a href="javascript:">TENTANG KAMI</a></h6></li>

                <li class="berita list-group-item font-weight-bold" target=""><h6><a href="javascript:void(0)">BERITA</a></h6></li>

                <li class="list-group-item font-weight-bold" target=""><h6><a href="https://sardanagroup.co.id/karir/">KARIR</a></h6></li>

                <li class="list-group-item font-weight-bold" target=""><h6><a href="https://sardanagroup.co.id/galeri/">GALERI</a></h6></li>

            </ul>

        </div>

        <div class="px-4 d-flex justify-content-center">

            <div>

                <a class="mb-1" href="https://www.facebook.com/SardanaIndahBerlianMotor/" target="_blank"><i class="scrolled fab fa-facebook-square"></i></a>

                <a class="mt-1" href="https://www.instagram.com/sardanaindahberlianmotor/" target="_blank"><i class="scrolled fab fa-instagram"></i></a>

                <a class="mt-1" href="https://www.youtube.com/channel/UCkgzJwZY22yTRVmhXZfeESw" target="_blank"><i class="scrolled fab fa-youtube"></i></a>

            </div>

        </div>

    </div>

</div>