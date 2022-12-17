<?php

  $year = date('Y');

  require_once(__DIR__."../../config.php");

  require_once(__DIR__ . "/ModalDealer.php");

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script src="https://kit.fontawesome.com/00610b519d.js" crossorigin="anonymous"></script>

<section id="footer" class="bg-black white d-flex flex-column justify-content-md-center pt-3">

    <div class="container footer-mobile">

        <div class="container mmc-regular" itemscope itemtype="https://schema.org/LocalBusiness">

            <img class="lazyload img-fluid d-block" data-src="https://sardanagroup.co.id/assets/img/logo/sardana-footer.png" width="320px" itemprop="logo" content="https://sardanagroup.co.id/assets/img/logo/sardana-footer.png" alt="Logo Sardana Group Mitsubishi Medan">

            <div class="d-flex align-items-center">

                <i class="fas fa-map-marked-alt mr-2"></i>

                <a class="m-0 p-0 white" href="https://www.google.com/maps/place/Mitsubishi+Sardana+Medan+-+Gatot+Subroto/@3.5897229,98.6548474,17z/data=!3m1!4b1!4m5!3m4!1s0x30312f94a86ecdbb:0x83c7b521f607d461!8m2!3d3.5897229!4d98.6570361?hl=en"><span itemprop="address">Jl. Jend. Gatot Subroto No.437, Medan, Sumatera Utara - 20119</span></a>

            </div>

            <div class="d-flex align-items-center">

                <i class="fas fa-phone mr-2"></i>

                <a class="m-0 p-0 white" href="tel:+62614557800"><span itemprop="telephone">+6261 4557800 </span>(ext. 301, 302, 303)</a>

            </div>

            <div class="d-flex align-items-center">

                <i class="fas fa-envelope mr-2"></i>

                <a class="m-0 p-0 white" href="mailto:cs@sardanagroup.co.id"><span itemprop="email">cs@sardanagroup.co.id</span></a>

            </div>

        </div>

        <hr style="border-top: 1px solid rgba(255, 255, 255, 0.3);" />

        <div class="container mt-4">

          <ul class="checklist-ul">

            <li>Pembayaran dianggap sah hanya jika di transfer ke rekening<br><b><u>PT.Sardana IndahBerlian Motor</u></b><br><b>Bank HSBC cab Diponegoro Medan</b><br>001.026459.001<br><b>Bank Danamon cab Diponegoro Medan</b><br>3513208276<br><b>Bank BCA cab Diponegoro Medan</b><br>022.1650688</li>

            <li>Dalam hal pembayaran dilakukan secara tunai, harap tidak melakukan pembayaran secara tunai selain ke kasir dealer resmi, dan akan mendapatkan bukti tanda terima resmi</li>

            <li>Kami tidak bertanggung jawab atas pembayaran yang dilakukan selain kondisi diatas</li>

          </ul>

        </div>

        <hr style="border-top: 1px solid rgba(255, 255, 255, 0.3);" />

        <div class="row mt-4">

            <div class="col text-center font-weight-bold mmc-regular">KEMUDAHAN AKSES PRODUK DAN LAYANAN MITSUBISHI MOTORS & MITSUBISHI FUSO DALAM GENGGAMAN ANDA</div>

        </div>

        <div class="row no-gutters font-weight-bold mmc-regular d-flex justify-content-center mt-4">

            <div class="card-deck">

                <div class="card card-mobile-app">

                    <div class="card-header rounded-0 card-header-mobile-app text-center">

                        <p class="m-0 p-0">SARDANA MOBILE</p>

                    </div>

                    <div class="card-body d-flex justify-content-center">

                        <div class="mobileApp w-30">

                            <img class="lazyload img-fluid" data-src="https://sardanagroup.co.id/assets/img/icon/sardanamobile.png" alt="Logo Sardana Mobile">

                        </div>

                    </div>

                    <div class="card-footer card-footer-mobile-app text-muted d-flex justify-content-center align-items-center">

                        <a class="mr-1 w-40" href="https://play.google.com/store/apps/details?id=id.compro.sardanamobile" target="_blank">

                            <img class="lazyload img-fluid" data-src="https://sardanagroup.co.id/assets/img/icon/gplaybadge.png" alt="Download Sardana Mobile di Google Playstore">

                        </a>

                        <a class="ml-1 w-40" href="https://itunes.apple.com/us/app/sardana-mobile/id1441751987?ls=1" target="_blank"> 

                            <img class="lazyload img-fluid" data-src="https://sardanagroup.co.id/assets/img/icon/appstorebadge.png" alt="Download Sardana Mobile di App Store">

                        </a>

                    </div>

                </div>

                <div class="card card-mobile-app">

                    <div class="card-header card-header-mobile-app text-center">

                        <p class="m-0 p-0">MY MITSUBISHI ID</p>

                    </div>

                    <div class="card-body d-flex justify-content-center">

                        <div class="mobileApp w-30">

                            <!--

                            <img class="lazyload img-fluid" data-src="https://sardanagroup.co.id/assets/img/icon/mymitsubishi.png" alt="Logo My Mitsubishi ID">

                            -->

                            <img class="lazyload img-fluid" data-src="<?=BASE_URL;?>assets/img/icon/mymitsubishi-new.png" alt="Logo My Mitsubishi ID">

                        </div>

                    </div>

                    <div class="card-footer card-footer-mobile-app text-muted d-flex justify-content-center align-items-center">

                        <a class="mr-1 w-40" href="https://play.google.com/store/apps/details?id=id.co.mmksi.mitsubishimotors" target="_blank">

                            <img class="lazyload img-fluid" data-src="https://sardanagroup.co.id/assets/img/icon/gplaybadge.png" alt="Download My Mitsubishi di Google Playstore">

                        </a>

                        <a class="ml-1 w-40" href="https://itunes.apple.com/id/app/my-mitsubishi-motors-id/id1280830456" target="_blank"> 

                            <img class="lazyload img-fluid" data-src="https://sardanagroup.co.id/assets/img/icon/appstorebadge.png" alt="Download My Mitsubishi App Store">

                        </a>

                    </div>

                </div>

                <div class="card card-mobile-app">

                    <div class="card-header card-header-mobile-app text-center">

                        <p class="m-0 p-0">RUNNER TELEMATICS</p>

                    </div>

                    <div class="card-body d-flex justify-content-center">

                        <div class="mobileApp w-60">

                            <img class="lazyload img-fluid" data-src="https://sardanagroup.co.id/assets/img/icon/telematics.png" alt="Logo Runner Telematics">

                        </div>

                    </div>

                    <div class="card-footer card-footer-mobile-app text-muted d-flex justify-content-center align-items-center">

                        <a class="mr-1 w-40" href="https://play.google.com/store/apps/details?id=com.ktbfuso.runner" target="_blank">

                            <img class="lazyload img-fluid" data-src="https://sardanagroup.co.id/assets/img/icon/gplaybadge.png" alt="Download Runner Telematics di Google Playstore">

                        </a>

                        <a class="ml-1 w-40" href="https://apps.apple.com/id/app/runner-telematics/id1419081781" target="_blank"> 

                            <img class="lazyload img-fluid" data-src="https://sardanagroup.co.id/assets/img/icon/appstorebadge.png" alt="Download Runner Telematics di App Store">

                        </a>

                    </div>

                </div>

            </div>  

        </div>

        <div class="listMobilFooter row justify-content-center mt-3">

            <div class="col-md-4 d-flex justify-content-center ">

                <div class="footerPC">

                    <h6 class="mb-0">PASSENGER CAR</h6>

                    <div class="mmc-regular fs12">

                        <p class="mb-0"><a class="white" href="https://sardanagroup.co.id/mitsubishi-medan/cars/pajero-sport/">Pajero Sport</a></p>

                        <!-- <p class="mb-0"><a class="white" href="https://sardanagroup.co.id/mitsubishi-medan/cars/eclipse-cross/">Eclipse Cross</a></p> -->

                        <p class="mb-0"><a class="white" href="https://sardanagroup.co.id/mitsubishi-medan/cars/new-xpander/">New Xpander</a></p>

                        <p class="mb-0"><a class="white" href="https://sardanagroup.co.id/mitsubishi-medan/cars/all-new-xpander-cross/">New Xpander Cross</a></p>

                        <p class="mb-0"><a class="white" href="https://sardanagroup.co.id/mitsubishi-medan/cars/new-xpander-cross/">Xpander Cross</a></p>

                        <!-- <p class="mb-0"><a class="white" href="https://sardanagroup.co.id/mitsubishi-medan/cars/outlander-sport">Outlander Sport</a></p> -->

                    </div>

                </div>

            </div>

            <div class="footerLCV col-md-4 d-flex justify-content-center">

                <div class="">  

                    <h6 class="mb-0">LIGHT COMMERCIAL VEHICLE</h6>

                    <div class="mmc-regular fs12">

                        <p class="mb-0"><a class="white" href="https://sardanagroup.co.id/mitsubishi-medan/cars/triton/">Triton</a></p>

                        <P class="mb-0"><a class="white" href="https://sardanagroup.co.id/mitsubishi-medan/cars/l300">Colt L300</a></P>

                        <!--<p class="mb-0"><a class="white" href="https://sardanagroup.co.id/mitsubishi/cars/t120ss">Colt T120SS</a></p> -->

                    </div>

                </div>

            </div>

            <div class="footerCV col-md-4 d-flex justify-content-center">

                <div class="">

                    <h6 class="mb-0">COMMERCIAL VEHICLE</h6>

                    <div class="mmc-regular fs12">

                        <p class="mb-0"><a class="white" href="https://sardanagroup.co.id/fuso-medan/canter/">Light Duty</a></p>

                        <p class="mb-0"><a class="white" href="https://sardanagroup.co.id/fuso-medan/fighter-x">Medium Duty</a></p>

                        <p class="mb-0"><a class="white" href="https://sardanagroup.co.id/fuso-medan/truck-head">Tractor Head</a></p>

                    </div>

                </div>

            </div>

        </div>

        <div class="socialMedia d-flex justify-content-center mt-3">

            <ul>

                <li>

                    <a href="https://www.facebook.com/sardanaindahberlianmotor" target="_blank"><i class="fab fa-lg fa-facebook" aria-hidden="true"></i></a>

                </li>

                <li>

                    <a href="https://www.instagram.com/sardanaindahberlianmotor" target="_blank"><i class="fa fa-lg fa-instagram" aria-hidden="true"></i></a>

                </li>

                <li>

                    <a href="https://www.youtube.com/sardanaberlian" target="_blank"><i class="fa fa-lg fa-youtube-play" aria-hidden="true"></i></a>

                </li>

            </ul>

        </div>

        <div class="copyright fs11 mmc-regular white text-center"><a href="/component/testing/Testing.php">.</a>© <?php echo $year; ?> Sardana IndahBerlian Motor. All rights reserved<a href="/component/testing2/Testing.php">.</a></div>



        <!-- Sosial Media Desktop -->

        <div class="hoverable-sidenav text-center" id="hoverableSidenav">

          <a href="javascript:void(0)" id="whatsapp" data-toggle="modal" data-target="#popupWhatsapp">

              <span style="padding-left: 10px">Chat Us</span>

              <i class="fab fa-whatsapp"></i>

          </a>

          <a href="https://bit.ly/sardanabookingservice" id="booking">

              <span>Booking Service</span>

              <i class="fas fa-tools"></i>

          </a>

          <a href="javascript:void(0)" id="brochure" data-toggle="modal" data-target="#popupBrochure">

              <span>E-Brochure</span>

              <i class="fa fa-arrow-alt-circle-down"></i>

          </a>


          <a href="https://sardanagroup.co.id/simulasi-kredit" id="simulasi">

              <span>Simulasi Kredit</span>

              <i class="fas fa-calculator"></i>

          </a>


          <a href="javascript:void(0)" id="dealer-lokasi" data-toggle="modal" data-target="#modalDealer2" >

              <span>Lokasi Dealer</span>

              <i class="fas fa-map-marker-alt"></i>

          </a>
          
          

          <!-- <a href="#" id="price">

              <span>Price List</span>

              <i class="fas fa-list"></i>

          </a> -->

        </div>



        <!-- Sosial Media Mobile -->

        <div class="container-fluid media-mobile">

            <div class="row text-center cp mmc-regular">

                <div class="col icon-media-mobile p-0 align-items-center" data-toggle="modal" data-target="#popupWhatsapp">

                    <p class="p-0">WA Official <br/> <small>0811-654-1800</small></p>

                </div>

                <div class="col icon-media-mobile p-0" onclick="window.location='https://bit.ly/sardanabookingservice'">

                    <p class="p-0">Booking<br />Service</p>

                </div>

                <div class="col icon-media-mobile p-0" data-toggle="modal" data-target="#popupBrochure">

                    <p class="p-0 mt-3">Brosur</p>

                </div>

                <div class="col icon-media-mobile p-0" onclick="window.location='https://sardanagroup.co.id/simulasi-kredit/'">

                    <p class="p-0">Simulasi<br />Kredit</p>

                </div>

                <div class="col icon-media-mobile p-0" data-toggle="modal" data-target="#modalDealer2">

                    <p class="p-0">Lokasi<br/> Dealer</p>

                </div>


                <!-- <div class="col-2 icon-media-mobile p-0">

                    <p class="p-0">Price<br />List</p>

                </div> -->

            </div>

        </div>



        <!-- Popup Whatsapp -->

        <div class="modal fade" id="popupWhatsapp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title mmc-bold" id="exampleModalLabel">Chat with us <i class="fab fa-lg fa-whatsapp ml-1" style="color: green"></i></h5>

                    </div>

                    <div class="modal-body">

                        <form>

                            <div class="form-group" style="margin-bottom: 0">                    

                                <textarea class="form-control mmc-regular" id="kontenWhatsapp" rows="3">[SG]Halo Sardana Berlian, Saya ingin bertanya seputar produk Mitsubishi.</textarea>

                            </div>

                        </form>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>

                        <button type="button" class="btn btn-danger" id="btnKirimWhatsapp">Kirim</button>

                    </div>

                </div>

            </div>

        </div>



        <!-- Popup Brochure -->

        <!-- Modal -->

        <div class="modal fade" id="popupBrochure" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

          <div class="modal-dialog modal-lg modal-dialog-scrollable text-dark">

            <div class="modal-content">

              <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Pilih E-Brochure yang ingin anda unduh.</h5>

                <button type="button" class = "btn btn-light" data-dismiss="modal" aria-label="Close">

                <!-- <span aria-hidden="true">&times;</span> -->

                  <i class="fa fa-times text-body"></i>

                </button>

              </div>

              <div class="modal-body">

                <div class="container-fluid">

                  <div class="row mt-2">

                    <div class="col-md-4">

                      <div class="card bg-dark text-white card-brochure" onclick="window.open('<?=BASE_URL;?>brosur/new-pajero-sport.pdf')">

                        <img src="https://sardanagroup.co.id/mitsubishi-medan/assets/img/bg/new-pajero.jpg" class="card-img card-img-custom" alt="Mitsubishi Pajero Sport">

                        <div class="card-img-overlay">

                          <h5 class="card-title">New Pajero Sport <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                        </div>

                      </div>

                    </div>

                    <div class="col-md-4 mt-2 mt-sm-0">

                      <div class="card bg-dark text-white card-brochure" onclick="window.open('https://sardanagroup.co.id/brosur/new-xpander.pdf')">

                        <img src="https://sardanagroup.co.id/mitsubishi-medan/assets/img/bg/new-xpander.jpg" class="card-img card-img-custom" alt="Mitsubishi New Xpander">

                        <div class="card-img-overlay">

                          <h5 class="card-title">New Xpander <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                        </div>

                      </div>

                    </div>

                    <div class="col-md-4 mt-2 mt-sm-0">

                      <div class="card bg-dark text-white card-brochure" onclick="window.open('https://sardanagroup.co.id/brosur/new-xpander-cross.pdf')">

                        <img src="https://sardanagroup.co.id/mitsubishi-medan/assets/img/bg/xpander-cross.jpg" class="card-img card-img-custom" alt="Mitsubishi Xpander Cross">

                        <div class="card-img-overlay">

                          <h5 class="card-title">Xpander Cross <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                        </div>

                      </div>

                    </div>

                  </div>

                  <!--

                  <div class="row mt-2">

                    <div class="col-md-4 mt-2 mt-sm-0">

                      <div class="card bg-dark text-white card-brochure" onclick="window.open('https://sardanagroup.co.id/brosur/xpander-cross-rf.pdf')">

                        <img src="https://sardanagroup.co.id/mitsubishi-medan/assets/img/bg/xpander-cross-rf-brochure.jpg" class="card-img card-img-custom" alt="Mitsubishi Xpander Cross RF Black Edition">

                        <div class="card-img-overlay">

                          <h5 class="card-title">Xpander Cross RF Black Edition <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                        </div>

                      </div>                     

                    </div> 

                    <div class="col-md-4 mt-2 mt-sm-0">

                      <div class="card bg-dark text-white card-brochure" onclick="window.open('https://sardanagroup.co.id/brosur/xpander-rf.pdf')">

                        <img src="https://sardanagroup.co.id/mitsubishi-medan/assets/img/bg/xp-rf.jpg" class="card-img card-img-custom" alt="Mitsubishi Xpander RF Black Edition">

                        <div class="card-img-overlay">

                          <h5 class="card-title">Xpander RF Black Edition <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                        </div>

                      </div>

                    </div>

                    <div class="col-md-4">

                      <div class="card bg-dark text-white card-brochure" onclick="window.open('https://hargamitsubishimedan.id/brosur/xpander-cross.pdf')">

                        <img src="https://sardanagroup.co.id/mitsubishi-medan/assets/img/bg/xpander-cross.jpg" class="card-img card-img-custom" alt="Mitsubishi Xpander Cross">

                        <div class="card-img-overlay">

                          <h5 class="card-title">Xpander Cross <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                        </div>

                      </div>

                    </div>

                  </div>

                  -->

                  <div class="row mt-2">

                    <!--

                    <div class="col-md-4 mt-2 mt-sm-0">

                      <div class="card bg-dark text-white card-brochure" onclick="window.open('https://hargamitsubishimedan.id/brosur/xpander.pdf')">

                        <img src="https://sardanagroup.co.id/mitsubishi-medan/assets/img/bg/xpander.jpg" class="card-img card-img-custom" alt="Mitsubishi Xpander">

                        <div class="card-img-overlay">

                          <h5 class="card-title">Xpander <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                        </div>

                      </div>                     

                    </div> 

                    <div class="col-md-4">

                      <div class="card bg-dark text-white card-brochure" onclick="window.open('https://sardanagroup.co.id/brosur/outlander-phev.pdf')">

                        <img src="https://sardanagroup.co.id/mitsubishi-medan/assets/img/bg/outlander-phev.jpg" class="card-img card-img-custom" alt="Mitsubishi Outlander PHEV">

                        <div class="card-img-overlay">

                          <h5 class="card-title">Outlander PHEV <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                        </div>

                      </div>

                    </div>

                    -->

                    <div class="col-md-4">

                      <div class="card bg-dark text-white card-brochure" onclick="window.open('<?=BASE_URL?>brosur/all-new-xpander-cross-edit.pdf')">

                        <img src="<?=BASE_URL?>mitsubishi-medan/assets/img/bg/new-xpander-cross-nav.png" class="card-img card-img-custom" alt="Mitsubishi New Xpander Cross">

                        <div class="card-img-overlay">

                          <h5 class="card-title">New Xpander Cross <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                        </div>

                      </div>

                    </div>

                    <div class="col-md-4 mt-2 mt-sm-0">

                      <div class="card bg-dark text-white card-brochure" onclick="window.open('<?=BASE_URL?>brosur/new-triton-edited-c.pdf')">

                        <img src="<?=BASE_URL?>mitsubishi-medan/assets/img/bg/new-triton-euro4-nav.jpg" class="card-img card-img-custom" alt="Mitsubishi Triton">

                        <div class="card-img-overlay">

                          <h5 class="card-title">New Triton <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                        </div>

                      </div>

                    </div>

                    <div class="col-md-4 mt-2 mt-sm-0">

                      <div class="card bg-dark text-white card-brochure" onclick="window.open('<?=BASE_URL?>brosur/new-l300-edit-c.pdf')">

                        <img src="<?=BASE_URL?>mitsubishi-medan/assets/img/bg/New-Colt-Euro4-nav.jpg" class="card-img card-img-custom" alt="Mitsubishi L300">

                        <div class="card-img-overlay">

                          <h5 class="card-title">New Colt L300 <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                        </div>

                      </div>                     

                    </div>                        

                  </div>

                  <div class="accordion" id="accordionCanter">

                    <div class="card">

                      <div class="card-header" id="headingOne">

                        <h2 class="mb-0 d-flex align-items-center justify-space-between">

                          <button class="btn btn-link btn-block text-left text-dark" type="button" data-toggle="collapse" data-target="#canter" aria-expanded="false" aria-controls="canter">

                            CANTER

                          </button>

                          <i class="fas fa-plus" style="font-size: 20px"></i>

                        </h2>

                      </div>

                      <div id="canter" class="collapse" aria-labelledby="headingOne" data-parent="#accordionCanter">

                        <div class="card-body">

                          <div class="row mt-2">

                            <div class="col-md-4">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/cf7dbde2d0347d73466e519bed1e4f81.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FE_71.jpg" class="card-img card-img-custom" alt="Mitsubishi Canter FE 71">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FE 71<i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>                        

                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/c2299424d4317bd79227bc7a73baddc8.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FE_71_L.jpg" class="card-img card-img-custom" alt="Mitsubishi Canter FE 71 L">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FE 71 L <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>                     

                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/10596da20718009d3e6a31dc759f550a.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FE_71_BC.jpg" class="card-img card-img-custom" alt="Mitsubishi Canter FE 71 BC">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FE 71 Bus Chassis <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>                         

                          </div>

                          <div class="row mt-2">

                            <div class="col-md-4">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/d7c142844076ed3dc653f6148287504c.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FE_71_LBC.jpg" class="card-img card-img-custom" alt="Mitsubishi Canter FE 71 LBC">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FE 71 Long Bus Chassis <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>  
                            
                            <div class="col-md-4 mt-2 mt-sm-0">
                              
                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/636e3103e68c3bedcf8d297c7ad0dfba.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FE_71_LBC_non_cabin.jpg" class="card-img card-img-custom" alt="Mitsubishi Canter FE 71 LBC Non Cabin">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FE 71 LBC Non Cabin <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>  

                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/5ec38ca8f27b2e79be248c81ac039f6a.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/herobanner-FE-73.jpg" class="card-img card-img-custom" alt="Mitsubishi Canter FE 73">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FE 73 <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>                     

                            </div>                        

                          </div>

                          <div class="row mt-2">

                            <!-- old items

                            <div class="col-md-4">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/d365d809359bd07ff9ec2b5aefc97ccc.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/4-Colt-Diesel-FE-73-HD-revisiedsticker2_(1).png" class="card-img card-img-custom" alt="Mitsubishi Colt Diesel FE 73 HD Super Power">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FE 73 HD Super Power <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>  
                            
                            -->

                            <div class="col-md-4">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/98790e70c429d9f52a34390493778eb5.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FE_74.jpg" class="card-img card-img-custom" alt="Mitsubishi Canter FE 74">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FE 74 <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>   

                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/c4882106f398e735ccf4647cbe0b0513.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FE_74_L.jpg" class="card-img card-img-custom" alt="Mitsubishi Canter FE 74 L">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FE 74 L <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>
                            
                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/42b3dd017ab995cd773d0bdf7cb853a7.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/herobanner-FE-74HD_(2).jpg" class="card-img card-img-custom" alt="Mitsubishi Canter FE 74 HD">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FE 74 HD <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>                     

                            </div>                        

                          </div>

                          <div class="row mt-2">

                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/9a9a4f1e1228f35c5529ba53fb4837ea.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FE_74_HDSweb.jpg" class="card-img card-img-custom" alt="Mitsubishi Canter FE 74 HDS">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FE 74 HDS <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>                     

                            </div>

                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/3abdf52031b3090c5d1cb40b33af37af.pdf')">

                                <img src="https://bosowaberlian.co.id/fuso/wp-content/themes/miratfuso/img/FE-SHDX.jpg" class="card-img card-img-custom" alt="Mitsubishi Canter FE SHDX">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FE SHDX<i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>                     

                            </div>                       

                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/4db7d8991f01b285a721935b75b460ed.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FE_84_G.jpg" class="card-img card-img-custom" alt="Mitsubishi Canter FE 84 G">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FE 84 G <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>                     

                            </div>                        

                          </div>

                          <div class="row mt-2">                

                            <div class="col-md-4">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/4db3d23cace0265bd089e4255c84ebb8.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FE_84_SHDX.jpg" class="card-img card-img-custom" alt="Mitsubishi Canter FE 84 SHDX">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FE 84 SHDX <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>     
                            
                            <!-- old product
                            
                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://sardanagroup.co.id/fuso-medan/assets/brosur/FE%2083%20BUS%20CHASSIS.pdf')">

                                <img src="https://sardanagroup.co.id/fuso-medan/assets/img/header/header-colt-diesel-bus-FE83-BC.jpg" class="card-img card-img-custom" alt="Mitsubishi Colt Diesel FE 83 BC">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FE 83 BC <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>   
                            
                            -->

                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/2935a2718dc53f423dddd98cafc96df1.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FE_84_GS.jpg" class="card-img card-img-custom" alt="Mitsubishi CANTER FE 84 GS">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FE 84 GS <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>
                            
                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/f01bdefe7fb87ef820c8c3b91190bf0e.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FE_84_G_BC.jpg" class="card-img card-img-custom" alt="Mitsubishi Canter FE 84G BUS CHASSIS">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FE 84G BUS CHASSIS <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                      </div>

                    </div>

                  </div>

                  <div class="accordion" id="accordionFighter-X">

                    <div class="card">

                      <div class="card-header" id="headingTwo">

                        <h2 class="mb-0 d-flex align-items-center justify-space-between">

                          <button class="btn btn-link btn-block text-left text-dark" type="button" data-toggle="collapse" data-target="#fighter-x" aria-expanded="false" aria-controls="fighter-x">

                            FIGHTER-X

                          </button>

                          <i class="fas fa-plus" style="font-size: 20px"></i>

                        </h2>

                      </div>

                      <div id="fighter-x" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFighter-X">

                        <div class="card-body">

                          <!-- old products

                          <div class="row mt-2">

                            <div class="col-md-4">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://sardanagroup.co.id/fuso-medan/assets/brosur/FUSO%20FM%20517%20HL%20LONG.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/11-Fuso-FM-517-HL-LONG-revisiedsticker2.png" class="card-img card-img-custom" alt="Mitsubishi Fuso FM 517 HL LONG">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FM 517 HL LONG <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>                        

                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://sardanagroup.co.id/fuso-medan/assets/brosur/FUSO%20FM%20517%20HL.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/12-Fuso-FM-517-HL-revisiedsticker.png" class="card-img card-img-custom" alt="Mitsubishi Fuso FM 517 HL">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FM 517 HL <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>                        

                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://sardanagroup.co.id/fuso-medan/assets//brosur/FUSO%20FM%20517%20HS.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/13-Fuso-FM-517-HS-revisiedsticker2_(1).png" class="card-img card-img-custom" alt="Mitsubishi Fuso FM 517 HS">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FM 517 HS <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>                     

                            </div>                        

                          </div>

                          -->

                          <div class="row mt-2">

                            <!-- old product

                            <div class="col-md-4">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://sardanagroup.co.id/fuso-medan/assets/brosur/Fuso%20Fighter%20FM%2065%20FS.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/3_Banner-Slide-FM65FS-revisied+sticker1.png" class="card-img card-img-custom" alt="Mitsubishi Fuso FM 65 FS">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FM 65 FS <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>     
                            
                            -->

                            <div class="col-md-4">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/34384df276a002298b679295dc058b75.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/herobanner-FM65-FS-HiSS.jpg" class="card-img card-img-custom" alt="Mitsubishi Fighter-X FM 65 FS HI GEAR">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FM 65 FS HI GEAR <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>                     

                            </div>

                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/97f514f07bc72ac5ab1d0f7c0e0df9d2.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FM_65_M.jpg" class="card-img card-img-custom" alt="Mitsubishi Fighter-X FM 65 FM HI GEAR">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FM 65 FM HI GEAR <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>                     

                            </div>   

                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/43dcbdc36abc2cf44d6d7dba57d5eaa5.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/herobanner-FM65-FL-HI-Gear.jpg" class="card-img card-img-custom" alt="Mitsubishi Fighter-X FM 65 FL HI GEAR">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FM 65 FL HI GEAR <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>

                            <!-- old products

                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://sardanagroup.co.id/fuso-medan/assets/brosur/Fuso%20Fighter%20FM%2065%20FL%204X2.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/4_Banner-Slide-FM65FL-revisied+sticker.png" class="card-img card-img-custom" alt="Mitsubishi Fuso FM 65 FL">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FM 65 FL <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>  
                            
                            -->

                          </div>

                          <div class="row mt-2">   
                            
                            <div class="col-md-4">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/5c92460f6c1981f25c3660abcb0fb3e8.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FM_65_SL.jpg" class="card-img card-img-custom" alt="Mitsubishi Fighter-X FM 65 FSL">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FM 65 FSL <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div> 

                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/5c92460f6c1981f25c3660abcb0fb3e8.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FM_65_SL1.jpg" class="card-img card-img-custom" alt="Mitsubishi Fighter-X FM 65 FSL HI GEAR">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FM 65 FSL HI GEAR <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>

                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/c9ffc93303a8fb04cba6f9169dacbde1.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FN_61.jpg" class="card-img card-img-custom" alt="Mitsubishi Fighter-X FN 61 FS">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FN 61 FS <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>

                            <!--

                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://sardanagroup.co.id/fuso-medan/assets/brosur/Fuso%20Fighter%20FM%2065%20FM.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/19-Fighter-FM-65-FM-revisiestciker.png" class="card-img card-img-custom" alt="Mitsubishi Fuso FM 65 FM">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FM 65 FM <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>
                            
                            -->

                          </div>

                          <div class="row mt-2"> 
                            
                            <div class="col-md-4">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/044f312bda059784d48e767370d26d09.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FN_61_L.jpg" class="card-img card-img-custom" alt="Mitsubishi Fighter-X FN 61 FL">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FN 61 FL <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>

                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/044f312bda059784d48e767370d26d09.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FN_61_L-11.jpg" class="card-img card-img-custom" alt="Mitsubishi Fighter-X FN 61 FL HD">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FN 61 FL HD <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>

                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/044f312bda059784d48e767370d26d09.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FN_61_L-11.jpg" class="card-img card-img-custom" alt="Mitsubishi Fighter-X FN 61 FL HD R">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FN 61 FL HD R <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>

                            <!--

                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://sardanagroup.co.id/fuso-medan/assets/brosur/Fuso%20Fighter%20FN%2061%20FM%20HD.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/5_Banner-Slide-FM61FM-HD-revisied+sticker1.png" class="card-img card-img-custom" alt="Mitsubishi Fuso FM 61 FM HD">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FM 61 FM HD <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>                     

                            </div>   
                            
                            -->

                          </div>

                          <!-- old product 

                          <div class="row mt-2">                        

                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/92dc9bfd54812eb59e8334e0efcd1721.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/7_Banner-Slide-FN62-F-revisied+sticker.png" class="card-img card-img-custom" alt="Mitsubishi Fuso FN 62 F">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FN 62 F <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>                     

                            </div>                        

                          </div>

                          -->

                          <div class="row mt-2">

                            <div class="col-md-4">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/073b593c1b058f92d1656d5eab9dce2a.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FN_62_Heavy_Duty.jpg" class="card-img card-img-custom" alt="Mitsubishi Fighter-X FN 62 F HD">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FN 62 F HD <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>   
                            
                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/073b593c1b058f92d1656d5eab9dce2a.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FN_62_Heavy_Duty.jpg" class="card-img card-img-custom" alt="Mitsubishi Fighter-X FN 62 F HD R">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FN 62 F HD R<i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>

                            <!-- old product

                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://sardanagroup.co.id/fuso-medan/assets/brosur/FUSO%20FN%20527%20ML.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/17-Fuso-FN-527-ML-revisiedsticker.png" class="card-img card-img-custom" alt="Mitsubishi Fuso FN 527 ML">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FN 527 ML <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>

                            -->

                            <div class="col-md-4 mt-2 mt-sm-0">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/2791ca5f75c3a383152b16372d0abc06.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FN_62_L.jpg" class="card-img card-img-custom" alt="Mitsubishi Fighter-X FN 62 FL HD">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FN 62 FL HD<i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>

                          </div>

                          <div class="row mt-2">

                            <!-- old products

                            <div class="col-md-4">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://sardanagroup.co.id/fuso-medan/assets/brosur/FUSO%20FN%20527%20MS.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/16-Fuso-FN-527-MS-revisiedsticker.png" class="card-img card-img-custom" alt="Mitsubishi Fuso FN 527 MS">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FN 527 MS <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>

                            <div class="col-md-4">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://sardanagroup.co.id/fuso-medan/assets/brosur/FUSO%20FN%20517%20ML2%20SUPER%20LONG.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/14-Fuso-FN-517-ML2-Super-Long-REV2-compressor.png" class="card-img card-img-custom" alt="Mitsubishi Fuso FN 517 ML2 SUPER LONG">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FN 517 ML2 SUPER LONG <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>

                            <div class="col-md-4">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/4de239cb78a4d40d09aa79ed448b1093.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/15-Fuso-FN-517-ML2-revisiedsticker.png" class="card-img card-img-custom" alt="Mitsubishi Fuso FN 517 ML2">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FN 517 ML2 <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>

                            -->

                            <div class = "col-md-4">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/2791ca5f75c3a383152b16372d0abc06.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FN_62_L.jpg" class="card-img card-img-custom" alt="Mitsubishi Fighter-X FN 62 HD R">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FN 62 HD R <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                      </div>

                    </div>

                  </div>

                  <div class="accordion" id="accordionTruck-Head">

                    <div class="card">

                      <div class="card-header" id="headingTwo">

                        <h2 class="mb-0 d-flex align-items-center justify-space-between">

                          <button class="btn btn-link btn-block text-left text-dark" type="button" data-toggle="collapse" data-target="#truck-head" aria-expanded="false" aria-controls="truck-head">

                            TRACTOR HEAD

                          </button>

                          <i class="fas fa-plus" style="font-size: 20px"></i>

                        </h2>

                      </div>

                      <div id="truck-head" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFighter-X">

                        <div class="card-body">

                          <div class="row mt-2">

                            <div class="col-md-4">

                              <div class="card bg-dark text-white card-brochure" onclick="window.open('https://ktbfuso.co.id/assets/brosur/85b74c83a73ac15c36384e318eec2cb6.pdf')">

                                <img src="https://ktbfuso.co.id/assets/uploads/products/FN_62_TH1.jpg" class="card-img card-img-custom" alt="Mitsubishi Fuso FN 62 TH">

                                <div class="card-img-overlay">

                                  <h5 class="card-title">FN 62 F TH <i class="fas fa-file-download text-danger ml-1" style="font-size: 20px"></i></h5>

                                </div>

                              </div>

                            </div>

                          </div>

                        </div>

                      </div>

                    </div>

                  </div>

                </div>              

              </div>

              <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>                

              </div>

            </div>

          </div>

        </div>

    </div>

</section>



<script>

    const btnKirimWhatsapp = document.getElementById('btnKirimWhatsapp');

    const konten = document.getElementById('kontenWhatsapp').value;    

    btnKirimWhatsapp.addEventListener('click', function() {        

        window.open("https://wa.me/+628116541800?text=" + konten);

    })
    

    $('[data-toggle="modal"]').on('click', function() {

      $('.modal').not($(this).data('target')).modal('hide');
    
    });

    

</script>