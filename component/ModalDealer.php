<?php

	require_once (__DIR__. '../../koneksi.php');	

	require_once(__DIR__."../../config.php");

?>

<style>

    .carousel-control-dealer-prev {
        left: -80px;
    }

    .carousel-control-dealer-next {
        right: -80px;
    }

    #modalDealer2 {

        position: fixed;

        top: 50%;

        transform: translateY(-50%);

    }

</style>

<div class="modal fade" id="modalDealer2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">

    <div class="modal-dialog" >

        <div class="modal-content bg-light bg-gradient">

            <div class="modal-header modalDealer-header py-0">

                <h5 class="modal-title text-uppercase" id="exampleModalLongTitle"></h5>

                <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">

                    <!-- <span aria-hidden="true" class = "text-body">&times;</span> -->

                    <i class="fa fa-times text-body"></i>

                </button>

            </div>

            <div class="modal-body px-3 py-0">

                <div class = "container-carousel">

                    <div id = "carouselModal" class = "carousel slide" data-ride="carousel" data-interval="false">
       
                        <div class = "carousel-inner carousel-modal-test">

                            <div class = "carousel-item active text-body">

                                <div>

                                    <h5 class="mmc-bold mb-0">MITSUBISHI SARDANA MEDAN GATOT SUBROTO</h5>

                                    <p class="fs15 mmc-regular mb-0 font-weight-bold">PT Sardana IndahBerlian Motor</p>

                                    <p class="fs15 m-0 p-0 mmc-regular mb-0 text-gray">JL. Jend. Gatot Subroto NO.437, Medan - 20119</p>

                                    <ul class="justify-service fs13 pl-0 mt-1 mb-0 text-gray">

                                        <li class="m-0 pr-1">SALES</li>

                                        <li class="m-0 px-1">SPAREPART</li>

                                        <li class="m-0 px-1">SERVICE</li>

                                    </ul>

                                    <div class = "dealerLocation mt-3 mb-4">
                                    
                                        <a class = "mmc-regular pr-4 font-weight-bold" role = "link" href = "https://www.google.com/maps/place/Mitsubishi+Sardana+Medan+-+Gatot+Subroto/@3.5900147,98.6570843,17z/data=!4m12!1m6!3m5!1s0x30312f94a86ecdbb:0x83c7b521f607d461!2sMitsubishi+Sardana+Medan+-+Gatot+Subroto!8m2!3d3.5897229!4d98.6570361!3m4!1s0x30312f94a86ecdbb:0x83c7b521f607d461!8m2!3d3.5897229!4d98.6570361?hl=en" target="_blank">Lokasi</a>

                                        <a class = "mmc-regular font-weight-bold" role = "link" href = "<?=BASE_URL.DS.'virtual-showroom/gatot-subroto/'?>">Virtual Showroom</a>

                                    </div>


                                    <div class = "dealerContacts">

                                        <a class="cardItem mt-2 " >

                                            <div class="dealerContacts-list">

                                                <h4 class="mmc-bold m-0 p-0">Showroom</h3>

                                                <div class="cardItemTrip">

                                                    <a class="m-0 p-0 text-gray" href="tel:+62614557800" target = "_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 061-4557800 </a><br/>

                                                    <p class="mmc-regular m-0 p-0 text-gray"> <i class="mr-1 fa fa-md fa-fax"> </i> 061-4534400</p>

                                                </div>

                                            </div>

                                        </a>

                                        <a class="cardItem mt-2 ">

                                            <div class="dealerContacts-list">

                                                <h4 class="mmc-bold m-0 p-0">Service</h3>
                                                
                                                <div class="cardItemTrip">

                                                    <a class="m-0 p-0 text-gray" href="tel:+62614152800" target="_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 061-4152800 </a><br />

                                                    <a class="m-0 p-0 text-gray" href="tel:+6285261006800" target="_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 0852-6100-6800 </a><br />

                                                    <a class="m-0 p-0 text-gray" href="https://wa.me/+6285261006800?text=[SG] Halo Sardana Gatsu. Saya ingin booking service." target="_blank"> <i class="mr-1 fa fa-lg fa-whatsapp"> </i> 0852-6100-6800 </a>

                                                </div>

                                            </div>

                                        </a>

                                        <a class="cardItem mt-2 ">

                                            <div class="dealerContacts-list">

                                                <h4 class="mmc-bold m-0 p-0">Sparepart</h3>
                                                
                                                <div class="cardItemTrip">

                                                    <a class="m-0 p-0 text-gray" href="tel:+628116722800" target="_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 0811-6722800 </a><br />

                                                    <a class="m-0 p-0 text-gray" href="https://wa.me/+628116722800?text=[SG] Halo Sardana Gatsu. Saya ingin bertanya mengenai sparepart." target="_blank"> <i class="mr-1 fa fa-lg fa-whatsapp"> </i> 0811-6722800 </a> 

                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                        <div class = "dealerOpening cardItem">

                                            <div class = "dealerOpening-detail">

                                                <table class = "dealerOpeningDate">

                                                    <thead>

                                                        <tr>

                                                            <th colspan = "2" >

                                                                <div class = "dealerOpening-detail-header">

                                                                    <h3 class = "mmc-bold m-0 p-0">Showroom</h3>

                                                                    <p class = "mmc-regular m-0 p-0">Jam Operasional</p>

                                                                </div>

                                                            </th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Senin</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Selasa</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Rabu</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Kamis</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Jumat</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Sabtu</td>

                                                            <td class = "mmc-regular">08.00 - 14.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Minggu</td>

                                                            <td class = "mmc-regular">10.00 - 14.00</td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                            <div class = "dealerOpening-detail cardItem">

                                                <table class = "dealerOpeningDate">

                                                    <thead>

                                                        <tr>

                                                            <th colspan = "2">

                                                                <div class = "dealerOpening-detail-header">

                                                                    <h3 class = "mmc-bold m-0 p-0">Service</h3>

                                                                    <p class = "mmc-regular m-0 p-0">Jam Operasional</p>

                                                                </div>

                                                            </th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Senin</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Selasa</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Rabu</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Kamis</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Jumat</td>

                                                            <td class = "mmc-regular">08.00 - 16.15</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Sabtu</td>

                                                            <td class = "mmc-regular">08.00 - 14.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Minggu</td>

                                                            <td class = "mmc-regular">Tutup</td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                        </div>

                                    </a>

                                </div>

                            </div>

                            <div class = "carousel-item text-body">

                                <div>

                                    <h5 class="mmc-bold mb-0">MITSUBISHI SARDANA MEDAN PUTRI HIJAU</h5>

                                    <p class="fs15 mmc-regular mb-0 font-weight-bold">PT Sardana IndahBerlian Motor</p>

                                    <p class="fs15 m-0 p-0 mmc-regular mb-0 text-gray">JL. Putri Hijau NO.4A, Medan - 20111</p>

                                    <ul class="justify-service fs13 pl-0 mt-1 mb-0 text-gray">

                                        <li class="m-0 pr-1">SALES</li>

                                    </ul>

                                    <div class = "dealerLocation mt-3 mb-4">
                                    
                                        <a class = "mmc-regular pr-4 font-weight-bold" role = "link" href = "https://www.google.com/maps/place/Mitsubishi+Sardana+Medan+-+Putri+Hijau/@3.5941005,98.6763251,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xdd150e253aa8bd58!8m2!3d3.5941005!4d98.6763251?authuser=1" target="_blank">Lokasi</a>

                                    </div>

                                    <div class = "dealerContacts">

                                        <a class="cardItem mt-2 " >

                                            <div class="dealerContacts-list">

                                                <h3 class="mmc-bold m-0 p-0">Showroom</h3>

                                                <div>

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="tel:+626180513800" target = "_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 061-8051-3800 </a><br/>

                                                    <p class="mmc-regular m-0 p-0 text-gray"> <i class="mr-1 fa fa-md fa-fax"> </i> 061-4155980</p>

                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                        <div class = "dealerOpening cardItem">

                                            <div class = "dealerOpening-detail">

                                                <table class = "dealerOpeningDate">

                                                    <thead>

                                                        <tr>

                                                            <th colspan = "2" >

                                                                <div class = "dealerOpening-detail-header">

                                                                    <h3 class = "mmc-bold m-0 p-0">Showroom</h3>

                                                                    <p class = "mmc-regular m-0 p-0">Jam Operasional</p>

                                                                </div>

                                                            </th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Senin</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Selasa</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Rabu</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Kamis</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Jumat</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Sabtu</td>

                                                            <td class = "mmc-regular">08.00 - 14.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Minggu</td>

                                                            <td class = "mmc-regular">10.00 - 14.00</td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                        </div>

                                    </a>

                                </div>

                            </div>

                            <div class = "carousel-item text-body">

                                <div>

                                    <h5 class="mmc-bold mb-0">MITSUBISHI SARDANA TANJUNG MORAWA</h5>

                                    <p class="fs15 mmc-regular mb-0 font-weight-bold">PT Sardana IndahBerlian Motor</p>

                                    <p class="fs15 m-0 p-0 mmc-regular mb-0 text-gray">JL. Raya Medan - Tj. Morawa KM-12, Deli Serdang - 20362</p>

                                    <ul class="justify-service fs13 pl-0 mt-1 mb-0 text-gray">

                                        <li class="m-0 pr-1">SALES</li>

                                        <li class="m-0 px-1">SPAREPART</li>

                                        <li class="m-0 px-1">SERVICE</li>

                                    </ul>

                                    <div class = "dealerLocation mt-3 mb-4">
                                    
                                        <a class = "mmc-regular pr-4 font-weight-bold" role = "link" href = "https://www.google.com/maps/place/PT.+Sardana+Indah+Berlian+Motor/@3.5305887,98.748711,40z/data=!4m11!1m5!8m4!1e4!2s104784978095969566489!3m1!1e1!3m4!1s0x303139f81238c7fb:0xac0c69fa3e1ff195!8m2!3d3.5307109!4d98.7489154" target="_blank">Lokasi</a>

                                        <a class = "mmc-regular font-weight-bold" role = "link" href = "<?=BASE_URL.DS.'virtual-showroom/tanjung-morawa/'?>">Virtual Showroom</a>

                                    </div>

                                    <div class = "dealerContacts">

                                        <a class="cardItem mt-2 " >

                                            <div class="dealerContacts-list">

                                                <h3 class="mmc-bold m-0 p-0">Showroom</h3>

                                                <div>

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="tel:+62617947800" target = "_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 061-7947800 </a><br/>

                                                    <p class="mmc-regular m-0 p-0 text-gray"> <i class="mr-1 fa fa-md fa-fax"> </i> 061-7943800</p>

                                                </div>

                                            </div>

                                        </a>

                                        <a class="cardItem mt-2 ">

                                            <div class="dealerContacts-list">

                                                <h3 class="mmc-bold m-0 p-0">Service</h3>
                                                
                                                <div>

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="tel:+62617947800" target="_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 061-7947800 </a><br />

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="tel:+6282366662800" target="_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 0823-6666-2800 </a><br />

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="https://wa.me/+6282366662800?text=[SG] Halo Sardana Tamora. Saya ingin booking service." target="_blank"> <i class="mr-1 fa fa-lg fa-whatsapp"> </i> 0823-6666-2800 </a>

                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                        <div class = "dealerOpening cardItem">

                                            <div class = "dealerOpening-detail">

                                                <table class = "dealerOpeningDate">

                                                    <thead>

                                                        <tr>

                                                            <th colspan = "2" >

                                                                <div class = "dealerOpening-detail-header">

                                                                    <h3 class = "mmc-bold m-0 p-0">Showroom</h3>

                                                                    <p class = "mmc-regular m-0 p-0">Jam Operasional</p>

                                                                </div>

                                                            </th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Senin</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Selasa</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Rabu</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Kamis</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Jumat</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Sabtu</td>

                                                            <td class = "mmc-regular">08.30 - 15.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Minggu</td>

                                                            <td class = "mmc-regular">Tutup</td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                            <div class = "dealerOpening-detail cardItem">

                                                <table class = "dealerOpeningDate">

                                                    <thead>

                                                        <tr>

                                                            <th colspan = "2">

                                                                <div class = "dealerOpening-detail-header">

                                                                    <h3 class = "mmc-bold m-0 p-0">Service</h3>

                                                                    <p class = "mmc-regular m-0 p-0">Jam Operasional</p>

                                                                </div>

                                                            </th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Senin</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Selasa</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Rabu</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Kamis</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Jumat</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Sabtu</td>

                                                            <td class = "mmc-regular">08.30 - 15.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Minggu</td>

                                                            <td class = "mmc-regular">Tutup</td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                        </div>

                                    </a>

                                </div>

                            </div>

                            <div class = "carousel-item text-body">

                                <div>

                                    <h5 class="mmc-bold mb-0">MITSUBISHI SARDANA RANTAU PRAPAT</h5>

                                    <p class="fs15 mmc-regular mb-0 font-weight-bold">PT Sardana IndahBerlian Motor</p>

                                    <p class="fs15 m-0 p-0 mmc-regular mb-0 text-gray">JL. H.M. Said No.123, Perdamean, Rantau Prapat</p>

                                    <ul class="justify-service fs13 pl-0 mt-1 mb-0 text-gray">

                                        <li class="m-0 pr-1">SALES</li>

                                        <li class="m-0 px-1">SPAREPART</li>

                                        <li class="m-0 px-1">SERVICE</li>

                                    </ul>

                                    <div class = "dealerLocation mt-3 mb-4">
                                    
                                        <a class = "mmc-regular pr-4 font-weight-bold" role = "link" href = "https://www.google.com/maps/place/PT.SARDANA+INDAHBERLIAN+MOTOR.+RANTAU+PRAPAT/@2.0521901,99.8670846,17z/data=!4m5!3m4!1s0x302da11cbf768825:0xdaa0f0d9ee8719a3!8m2!3d2.0523699!4d99.86736?hl=en" target="_blank">Lokasi</a>

                                    </div>

                                    <div class = "dealerContacts">

                                        <a class="cardItem mt-2 " >

                                            <div class="dealerContacts-list">

                                                <h3 class="mmc-bold m-0 p-0">Showroom</h3>

                                                <div>

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="tel:+6262422900" target = "_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 062-422900 </a><br/>

                                                    <p class="mmc-regular m-0 p-0 text-gray"> <i class="mr-1 fa fa-md fa-fax"> </i> 062-4327877</p>

                                                </div>

                                            </div>

                                        </a>

                                        <a class="cardItem mt-2 ">

                                            <div class="dealerContacts-list">

                                                <h3 class="mmc-bold m-0 p-0">Service</h3>
                                                
                                                <div>

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="tel:+6262422900" target="_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 062-422900 </a><br />

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="tel:+6281270280800" target="_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 0812-7028-0800 </a><br />

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="https://wa.me/+6281270280800?text=[SG] Halo Sardana Rantau. Saya ingin booking service." target="_blank"> <i class="mr-1 fa fa-lg fa-whatsapp"> </i> 0812-7028-0800 </a>

                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                        <div class = "dealerOpening cardItem">

                                            <div class = "dealerOpening-detail">

                                                <table class = "dealerOpeningDate">

                                                    <thead>

                                                        <tr>

                                                            <th colspan = "2" >

                                                                <div class = "dealerOpening-detail-header">

                                                                    <h3 class = "mmc-bold m-0 p-0">Showroom</h3>

                                                                    <p class = "mmc-regular m-0 p-0">Jam Operasional</p>

                                                                </div>

                                                            </th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Senin</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Selasa</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Rabu</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Kamis</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Jumat</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Sabtu</td>

                                                            <td class = "mmc-regular">08.00 - 14.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Minggu</td>

                                                            <td class = "mmc-regular">Tutup</td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                            <div class = "dealerOpening-detail cardItem">

                                                <table class = "dealerOpeningDate">

                                                    <thead>

                                                        <tr>

                                                            <th colspan = "2">

                                                                <div class = "dealerOpening-detail-header">

                                                                    <h3 class = "mmc-bold m-0 p-0">Service</h3>

                                                                    <p class = "mmc-regular m-0 p-0">Jam Operasional</p>

                                                                </div>

                                                            </th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Senin</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Selasa</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Rabu</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Kamis</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Jumat</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Sabtu</td>

                                                            <td class = "mmc-regular">08.00 - 14.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Minggu</td>

                                                            <td class = "mmc-regular">Tutup</td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                        </div>

                                    </a>

                                </div>

                            </div>

                            <div class = "carousel-item text-body">

                                <div>

                                    <h5 class="mmc-bold mb-0">MITSUBISHI DARUSSALAM BANDA ACEH</h5>

                                    <p class="fs15 mmc-regular mb-0 font-weight-bold">PT Darussalam Berlian Motor</p>

                                    <p class="fs15 m-0 p-0 mmc-regular mb-0 text-gray">Jl. Soekarno Hatta Kel. Lam Ara, Banda Aceh</p>

                                    <ul class="justify-service fs13 pl-0 mt-1 mb-0 text-gray">

                                        <li class="m-0 pr-1">SALES</li>

                                        <li class="m-0 px-1">SPAREPART</li>

                                        <li class="m-0 px-1">SERVICE</li>

                                    </ul>

                                    <div class = "dealerLocation mt-3 mb-4">
                                    
                                        <a class = "mmc-regular pr-4 font-weight-bold" role = "link" href = "https://www.google.com/maps?ll=5.520166,95.306941&z=18&t=m&hl=en-GB&gl=US&mapclient=apiv3&cid=14826673489491687064" target="_blank">Lokasi</a>

                                    </div>

                                    <div class = "dealerContacts">

                                        <a class="cardItem mt-2 " >

                                            <div class="dealerContacts-list">

                                                <h3 class="mmc-bold m-0 p-0">Showroom</h3>

                                                <div>

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="tel:+6265140800" target = "_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 065-140800 </a><br/>

                                                    <p class="mmc-regular m-0 p-0 text-gray"> <i class="mr-1 fa fa-md fa-fax"> </i> 065-148800</p>

                                                </div>

                                            </div>

                                        </a>

                                        <a class="cardItem mt-2 ">

                                            <div class="dealerContacts-list">

                                                <h3 class="mmc-bold m-0 p-0">Service</h3>
                                                
                                                <div>

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="tel:+6265147800" target="_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 065-147800 </a><br />

                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                        <div class = "dealerOpening cardItem">

                                            <div class = "dealerOpening-detail">

                                                <table class = "dealerOpeningDate">

                                                    <thead>

                                                        <tr>

                                                            <th colspan = "2" >

                                                                <div class = "dealerOpening-detail-header">

                                                                    <h3 class = "mmc-bold m-0 p-0">Showroom</h3>

                                                                    <p class = "mmc-regular m-0 p-0">Jam Operasional</p>

                                                                </div>

                                                            </th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Senin</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Selasa</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Rabu</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Kamis</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Jumat</td>

                                                            <td class = "mmc-regular">08.00 - 17.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Sabtu</td>

                                                            <td class = "mmc-regular">08.00 - 14.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Minggu</td>

                                                            <td class = "mmc-regular">Tutup</td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                            <div class = "dealerOpening-detail cardItem">

                                                <table class = "dealerOpeningDate">

                                                    <thead>

                                                        <tr>

                                                            <th colspan = "2">

                                                                <div class = "dealerOpening-detail-header">

                                                                    <h3 class = "mmc-bold m-0 p-0">Service</h3>

                                                                    <p class = "mmc-regular m-0 p-0">Jam Operasional</p>

                                                                </div>

                                                            </th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Senin</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Selasa</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Rabu</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Kamis</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Jumat</td>

                                                            <td class = "mmc-regular">08.00 - 17.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Sabtu</td>

                                                            <td class = "mmc-regular">08.00 - 14.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Minggu</td>

                                                            <td class = "mmc-regular">Tutup</td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                        </div>

                                    </a>

                                </div>

                            </div>

                            <div class = "carousel-item text-body">

                                <div>

                                    <h5 class="mmc-bold mb-0">MITSUBISHI BARITO BATULICIN</h5>

                                    <p class="fs15 mmc-regular mb-0 font-weight-bold">PT Barito Berlian Motor</p>

                                    <p class="fs15 m-0 p-0 mmc-regular mb-0 text-gray">JL. Raya Batulicin Kab. Tanah Bumbu, Batulicin - 72271</p>

                                    <ul class="justify-service fs13 pl-0 mt-1 mb-0 text-gray">

                                        <li class="m-0 pr-1">SALES</li>

                                        <li class="m-0 px-1">SPAREPART</li>

                                        <li class="m-0 px-1">SERVICE</li>

                                    </ul>

                                    <div class = "dealerLocation mt-3 mb-4">
                                    
                                        <a class = "mmc-regular pr-4 font-weight-bold" role = "link" href = "https://www.google.com/maps?ll=-3.453035,116.000615&z=16&t=m&hl=en-GB&gl=US&mapclient=apiv3&cid=12379424512824704973" target="_blank">Lokasi</a>

                                    </div>

                                    <div class = "dealerContacts">

                                        <a class="cardItem mt-2 " >

                                            <div class="dealerContacts-list">

                                                <h3 class="mmc-bold m-0 p-0">Showroom</h3>

                                                <div>

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="tel:+6251875800" target = "_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 0518-75800 </a><br/>

                                                    <p class="mmc-regular m-0 p-0 text-gray"> <i class="mr-1 fa fa-md fa-fax"> </i> 0518-74800</p>

                                                </div>

                                            </div>

                                        </a>

                                        <a class="cardItem mt-2 ">

                                            <div class="dealerContacts-list">

                                                <h3 class="mmc-bold m-0 p-0">Service</h3>
                                                
                                                <div>

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="tel:+6251871008" target="_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 0518-71008 </a><br />

                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                        <div class = "dealerOpening cardItem">

                                            <div class = "dealerOpening-detail">

                                                <table class = "dealerOpeningDate">

                                                    <thead>

                                                        <tr>

                                                            <th colspan = "2" >

                                                                <div class = "dealerOpening-detail-header">

                                                                    <h3 class = "mmc-bold m-0 p-0">Showroom</h3>

                                                                    <p class = "mmc-regular m-0 p-0">Jam Operasional</p>

                                                                </div>

                                                            </th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Senin</td>

                                                            <td class = "mmc-regular">08.30 - 17.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Selasa</td>

                                                            <td class = "mmc-regular">08.30 - 17.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Rabu</td>

                                                            <td class = "mmc-regular">08.30 - 17.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Kamis</td>

                                                            <td class = "mmc-regular">08.30 - 17.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Jumat</td>

                                                            <td class = "mmc-regular">08.30 - 17.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Sabtu</td>

                                                            <td class = "mmc-regular">08.30 - 12.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Minggu</td>

                                                            <td class = "mmc-regular">Tutup</td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                            <div class = "dealerOpening-detail cardItem">

                                                <table class = "dealerOpeningDate">

                                                    <thead>

                                                        <tr>

                                                            <th colspan = "2">

                                                                <div class = "dealerOpening-detail-header">

                                                                    <h3 class = "mmc-bold m-0 p-0">Service</h3>

                                                                    <p class = "mmc-regular m-0 p-0">Jam Operasional</p>

                                                                </div>

                                                            </th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Senin</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Selasa</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Rabu</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Kamis</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Jumat</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Sabtu</td>

                                                            <td class = "mmc-regular">08.30 - 15.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Minggu</td>

                                                            <td class = "mmc-regular">Tutup</td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                        </div>

                                    </a>

                                </div>

                            </div>

                            <div class = "carousel-item text-body">

                                <div>

                                    <h5 class="mmc-bold mb-0">MITSUBISHI BARITO BANJARBARU</h5>

                                    <p class="fs15 mmc-regular mb-0 font-weight-bold">PT Barito Berlian Motor</p>

                                    <p class="fs15 m-0 p-0 mmc-regular mb-0 text-gray">JL. A. Yani KM-22 Landasan Ulin Utara, Banjarbaru - 70723</p>

                                    <ul class="justify-service fs13 pl-0 mt-1 mb-0 text-gray">

                                        <li class="m-0 pr-1">SALES</li>

                                        <li class="m-0 px-1">SPAREPART</li>

                                        <li class="m-0 px-1">SERVICE</li>

                                        <li class="m-0 px-1">BODY PAINT</li>

                                    </ul>

                                    <div class = "dealerLocation mt-3 mb-4">
                                    
                                        <a class = "mmc-regular pr-4 font-weight-bold" role = "link" href = "https://www.google.com/maps?ll=-3.442002,114.718977&z=16&t=m&hl=en-GB&gl=US&mapclient=apiv3&cid=14816080668011242003" target="_blank">Lokasi</a>

                                    </div>

                                    <div class = "dealerContacts">

                                        <a class="cardItem mt-2 " >

                                            <div class="dealerContacts-list">

                                                <h3 class="mmc-bold m-0 p-0">Showroom</h3>

                                                <div>

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="tel:+625114705800" target = "_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 0511-4705800 </a><br/>

                                                    <p class="mmc-regular m-0 p-0 text-gray"> <i class="mr-1 fa fa-md fa-fax"> </i> 0511-4706800</p>

                                                </div>

                                            </div>

                                        </a>

                                        <a class="cardItem mt-2 ">

                                            <div class="dealerContacts-list">

                                                <h3 class="mmc-bold m-0 p-0">Service</h3>
                                                
                                                <div>

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="tel:+625114707800" target="_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 0511-4707800 </a><br />

                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                        <div class = "dealerOpening cardItem">

                                            <div class = "dealerOpening-detail">

                                                <table class = "dealerOpeningDate">

                                                    <thead>

                                                        <tr>

                                                            <th colspan = "2" >

                                                                <div class = "dealerOpening-detail-header">

                                                                    <h3 class = "mmc-bold m-0 p-0">Showroom</h3>

                                                                    <p class = "mmc-regular m-0 p-0">Jam Operasional</p>

                                                                </div>

                                                            </th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Senin</td>

                                                            <td class = "mmc-regular">08.30 - 17.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Selasa</td>

                                                            <td class = "mmc-regular">08.30 - 17.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Rabu</td>

                                                            <td class = "mmc-regular">08.30 - 17.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Kamis</td>

                                                            <td class = "mmc-regular">08.30 - 17.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Jumat</td>

                                                            <td class = "mmc-regular">08.30 - 17.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Sabtu</td>

                                                            <td class = "mmc-regular">08.30 - 12.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Minggu</td>

                                                            <td class = "mmc-regular">Tutup</td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                            <div class = "dealerOpening-detail cardItem">

                                                <table class = "dealerOpeningDate">

                                                    <thead>

                                                        <tr>

                                                            <th colspan = "2">

                                                                <div class = "dealerOpening-detail-header">

                                                                    <h3 class = "mmc-bold m-0 p-0">Service</h3>

                                                                    <p class = "mmc-regular m-0 p-0">Jam Operasional</p>

                                                                </div>

                                                            </th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Senin</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Selasa</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Rabu</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Kamis</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Jumat</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Sabtu</td>

                                                            <td class = "mmc-regular">08.30 - 15.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Minggu</td>

                                                            <td class = "mmc-regular">Tutup</td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                        </div>

                                    </a>

                                </div>

                            </div>

                            <div class = "carousel-item text-body">

                                <div>

                                    <h5 class="mmc-bold mb-0">MITSUBISHI SARDANA MEDAN CEMARA</h5>

                                    <p class="fs15 mmc-regular mb-0 font-weight-bold">PT Sardana IndahBerlian Motor</p>

                                    <p class="fs15 m-0 p-0 mmc-regular mb-0 text-gray">Jl. Boulevard Barat No. 8 Bundaran Komp Cemara Asri, Kec. Percut Sei Tuan, Kabupaten Deli Serdang, Sumatera Utara - 20173</p>

                                    <ul class="justify-service fs13 pl-0 mt-1 mb-0 text-gray">

                                        <li class="m-0 pr-1">SALES</li>

                                    </ul>

                                    <div class = "dealerLocation mt-3 mb-4">
                                    
                                        <a class = "mmc-regular pr-4 font-weight-bold" role = "link" href = "https://www.google.com/maps/place/Mitsubishi+Sardana+Medan+-+Cemara+Asri/@3.6355225,98.6959846,17z/data=!3m1!4b1!4m5!3m4!1s0x30313369d2395a97:0xec3f8b46ebff9696!8m2!3d3.6355225!4d98.6981733" target="_blank">Lokasi</a>

                                    </div>

                                    <div class = "dealerContacts">

                                        <a class="cardItem mt-2 " >

                                            <div class="dealerContacts-list">

                                                <h3 class="mmc-bold m-0 p-0">Showroom</h3>

                                                <div>

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="tel:06180011800" target = "_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 061-8001-1800 </a><br/>

                                                    <p class="mmc-regular m-0 p-0 text-gray"> <i class="mr-1 fa fa-md fa-fax"> </i> 061-4155980</p>

                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                        <div class = "dealerOpening cardItem">

                                            <div class = "dealerOpening-detail">

                                                <table class = "dealerOpeningDate">

                                                    <thead>

                                                        <tr>

                                                            <th colspan = "2" >

                                                                <div class = "dealerOpening-detail-header">

                                                                    <h3 class = "mmc-bold m-0 p-0">Showroom</h3>

                                                                    <p class = "mmc-regular m-0 p-0">Jam Operasional</p>

                                                                </div>

                                                            </th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Senin</td>

                                                            <td class = "mmc-regular">08.00 - 18.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Selasa</td>

                                                            <td class = "mmc-regular">08.00 - 18.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Rabu</td>

                                                            <td class = "mmc-regular">08.00 - 18.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Kamis</td>

                                                            <td class = "mmc-regular">08.00 - 18.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Jumat</td>

                                                            <td class = "mmc-regular">08.00 - 18.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Sabtu</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Minggu</td>

                                                            <td class = "mmc-regular">10.00 - 14.00</td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                        </div>

                                    </a>

                                </div>

                            </div>

                            <div class = "carousel-item text-body">

                                <div>

                                    <h5 class="mmc-bold mb-0">MITSUBISHI SARDANA KISARAN</h5>

                                    <p class="fs15 mmc-regular mb-0 font-weight-bold">PT Sardana IndahBerlian Motor</p>

                                    <p class="fs15 m-0 p-0 mmc-regular mb-0 text-gray">Jl. Cipto No.17, Kisaran Kota, Kec. Kota Kisaran Barat, Kabupaten Asahan, Sumatera Utara - 21211</p>

                                    <ul class="justify-service fs13 pl-0 mt-1 mb-0 text-gray">

                                        <li class="m-0 pr-1">SALES</li>

                                    </ul>

                                    <div class = "dealerLocation mt-3 mb-4">
                                    
                                        <a class = "mmc-regular pr-4 font-weight-bold" role = "link" href = "https://www.google.com/maps/place/MITSUBISHI+SARDANA+BERLIAN+KISARAN/@2.9840619,99.6258394,17z/data=!3m1!4b1!4m5!3m4!1s0x30324b093481b49b:0x5006e70f5dcef028!8m2!3d2.9840619!4d99.6280281" target="_blank">Lokasi</a>

                                    </div>

                                    <div class = "dealerContacts">

                                        <a class="cardItem mt-2 " >

                                            <div class="dealerContacts-list">

                                                <h3 class="mmc-bold m-0 p-0">Showroom</h3>

                                                <div>

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="tel:06233441050" target = "_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 062-3344-1050 </a><br/>

                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                        <div class = "dealerOpening cardItem">

                                            <div class = "dealerOpening-detail">

                                                <table class = "dealerOpeningDate">

                                                    <thead>

                                                        <tr>

                                                            <th colspan = "2" >

                                                                <div class = "dealerOpening-detail-header">

                                                                    <h3 class = "mmc-bold m-0 p-0">Showroom</h3>

                                                                    <p class = "mmc-regular m-0 p-0">Jam Operasional</p>

                                                                </div>

                                                            </th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Senin</td>

                                                            <td class = "mmc-regular">08.00 - 18.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Selasa</td>

                                                            <td class = "mmc-regular">08.00 - 18.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Rabu</td>

                                                            <td class = "mmc-regular">08.00 - 18.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Kamis</td>

                                                            <td class = "mmc-regular">08.00 - 18.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Jumat</td>

                                                            <td class = "mmc-regular">08.00 - 18.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Sabtu</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Minggu</td>

                                                            <td class = "mmc-regular">10.00 - 14.00</td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                        </div>

                                    </a>

                                </div>

                            </div>

                            <div class = "carousel-item text-body">

                                <div>

                                    <h5 class="mmc-bold mb-0">MITSUBISHI SARDANA SIANTAR</h5>

                                    <p class="fs15 mmc-regular mb-0 font-weight-bold">PT Sardana IndahBerlian Motor</p>

                                    <p class="fs15 m-0 p-0 mmc-regular mb-0 text-gray">Jl. Gereja No.35, Kristen, Kec. Siantar Sel., Kota Pematang Siantar, Sumatera Utara 21144</p>

                                    <ul class="justify-service fs13 pl-0 mt-1 mb-0 text-gray">

                                        <li class="m-0 pr-1">SALES</li>

                                    </ul>

                                    <div class = "dealerLocation mt-3 mb-4">
                                    
                                        <a class = "mmc-regular pr-4 font-weight-bold" role = "link" href = "https://www.google.com/maps/place/Dealer+Mitsubishi+Siantar/@2.9508337,99.0545579,15z/data=!4m5!3m4!1s0x30318511d99b0c4d:0x8dfeba7beb9af6c9!8m2!3d2.9502458!4d99.0610402" target="_blank">Lokasi</a>

                                    </div>

                                    <div class = "dealerContacts">

                                        <a class="cardItem mt-2 " >

                                            <div class="dealerContacts-list">

                                                <h3 class="mmc-bold m-0 p-0">Showroom</h3>

                                                <div>

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="tel:06227438800" target = "_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 062-2743-8800 </a><br/>

                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                        <div class = "dealerOpening cardItem">

                                            <div class = "dealerOpening-detail">

                                                <table class = "dealerOpeningDate">

                                                    <thead>

                                                        <tr>

                                                            <th colspan = "2" >

                                                                <div class = "dealerOpening-detail-header">

                                                                    <h3 class = "mmc-bold m-0 p-0">Showroom</h3>

                                                                    <p class = "mmc-regular m-0 p-0">Jam Operasional</p>

                                                                </div>

                                                            </th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Senin</td>

                                                            <td class = "mmc-regular">09.00 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Selasa</td>

                                                            <td class = "mmc-regular">09.00 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Rabu</td>

                                                            <td class = "mmc-regular">09.00 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Kamis</td>

                                                            <td class = "mmc-regular">09.00 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Jumat</td>

                                                            <td class = "mmc-regular">09.00 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Sabtu</td>

                                                            <td class = "mmc-regular">09.00 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Minggu</td>

                                                            <td class = "mmc-regular">Tutup</td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                        </div>

                                    </a>

                                </div>

                            </div>

                            <div class = "carousel-item text-body">

                                <div>

                                    <h5 class="mmc-bold mb-0">MITSUBISHI DARUSSALAM NAGAN RAYA</h5>

                                    <p class="fs15 mmc-regular mb-0 font-weight-bold">PT Darussalam Berlian Motor</p>

                                    <p class="fs15 m-0 p-0 mmc-regular mb-0 text-gray">Jl. Meulaboh - Tapaktuan depan kompi C Brimod Desa Ujung Fatiha Kec. Kuala, Kabupaten Nagan Raya</p>

                                    <ul class="justify-service fs13 pl-0 mt-1 mb-0 text-gray">

                                        <li class="m-0 pr-1">SALES</li>

                                        <li class="m-0 px-1">SPAREPART</li>

                                        <li class="m-0 px-1">SERVICE</li>

                                    </ul>

                                    <div class = "dealerLocation mt-3 mb-4">
                                    
                                        <a class = "mmc-regular pr-4 font-weight-bold" role = "link" href = "https://www.google.com/maps/place/DEALER+MITSUBISHI+NAGAN+RAYA/@4.1242709,96.3151484,16z/data=!4m9!1m2!2m1!1s48F9%2BWJ5+DEALER+MITSUBISHI+NAGAN+RAYA,+Ujong+Fatihah,+Kuala,+Kabupaten+Nagan+Raya,+Aceh+23671!3m5!1s0x303ec95712e231b5:0x4dd2e4718333b556!8m2!3d4.1242476!4d96.3189244!15sCl00OEY5K1dKNSBERUFMRVIgTUlUU1VCSVNISSBOQUdBTiBSQVlBLCBVam9uZyBGYXRpaGFoLCBLdWFsYSwgS2FidXBhdGVuIE5hZ2FuIFJheWEsIEFjZWggMjM2NzGSARBjb3Jwb3JhdGVfb2ZmaWNl" target="_blank">Lokasi</a>

                                    </div>

                                    <div class = "dealerContacts">

                                        <a class="cardItem mt-2 " >

                                            <div class="dealerContacts-list">

                                                <h3 class="mmc-bold m-0 p-0">Showroom</h3>

                                                <div>

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="tel:06557117800" target = "_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 065-5711-7800 </a><br/>

                                                </div>

                                            </div>

                                        </a>

                                        <a class="cardItem mt-2 ">

                                            <div class="dealerContacts-list">

                                                <h3 class="mmc-bold m-0 p-0">Service</h3>
                                                
                                                <div>

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="tel:+626557116800" target="_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 065-5711-6800 </a><br />

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="tel:+6282150704355" target="_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 0821-5070-4355 </a><br />

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="https://wa.me/+6282150704355?text=[SG] Halo. Saya ingin booking service." target="_blank"> <i class="mr-1 fa fa-lg fa-whatsapp"> </i> 0821-5070-4355 </a>

                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                        <div class = "dealerOpening cardItem">

                                            <div class = "dealerOpening-detail">

                                                <table class = "dealerOpeningDate">

                                                    <thead>

                                                        <tr>

                                                            <th colspan = "2" >

                                                                <div class = "dealerOpening-detail-header">

                                                                    <h3 class = "mmc-bold m-0 p-0">Showroom</h3>

                                                                    <p class = "mmc-regular m-0 p-0">Jam Operasional</p>

                                                                </div>

                                                            </th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Senin</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Selasa</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Rabu</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Kamis</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Jumat</td>

                                                            <td class = "mmc-regular">08.00 - 17.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Sabtu</td>

                                                            <td class = "mmc-regular">08.00 - 14.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Minggu</td>

                                                            <td class = "mmc-regular">Tutup</td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                            <div class = "dealerOpening-detail cardItem">

                                                <table class = "dealerOpeningDate">

                                                    <thead>

                                                        <tr>

                                                            <th colspan = "2">

                                                                <div class = "dealerOpening-detail-header">

                                                                    <h3 class = "mmc-bold m-0 p-0">Service</h3>

                                                                    <p class = "mmc-regular m-0 p-0">Jam Operasional</p>

                                                                </div>

                                                            </th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Senin</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Selasa</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Rabu</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Kamis</td>

                                                            <td class = "mmc-regular">08.00 - 16.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Jumat</td>

                                                            <td class = "mmc-regular">08.00 - 17.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Sabtu</td>

                                                            <td class = "mmc-regular">08.00 - 14.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Minggu</td>

                                                            <td class = "mmc-regular">Tutup</td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                        </div>

                                    </a>

                                </div>

                            </div>

                            <div class = "carousel-item text-body">

                                <div>

                                    <h5 class="mmc-bold mb-0">MITSUBISHI BARITO BASIRIH</h5>

                                    <p class="fs15 mmc-regular mb-0 font-weight-bold">PT Barito Berlian Motor</p>

                                    <p class="fs15 m-0 p-0 mmc-regular mb-0 text-gray">JL. Gubernur Soebardjo RT.13, Kel. Basirih Selatan, Kec. Banjarmasin Selatan, Banjarmasin</p>

                                    <ul class="justify-service fs13 pl-0 mt-1 mb-0 text-gray">

                                        <li class="m-0 pr-1">SALES</li>

                                        <li class="m-0 px-1">SPAREPART</li>

                                        <li class="m-0 px-1">SERVICE</li>

                                    </ul>

                                    <div class = "dealerLocation mt-3 mb-4">
                                    
                                        <a class = "mmc-regular pr-4 font-weight-bold" role = "link" href = "https://www.google.com/maps/place/PT.+Barito+Berlian+Motor+Basirih/@-3.3557155,114.5757986,17z/data=!3m1!4b1!4m5!3m4!1s0x2de421b1a07aae45:0x4a6b80a07016f411!8m2!3d-3.3557155!4d114.5779873" target="_blank">Lokasi</a>

                                    </div>

                                    <div class = "dealerContacts">

                                        <a class="cardItem mt-2 " >

                                            <div class="dealerContacts-list">

                                                <h3 class="mmc-bold m-0 p-0">Showroom</h3>

                                                <div>

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="tel:+625116778000" target = "_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 0511-6778000 </a><br/>

                                                </div>

                                            </div>

                                        </a>

                                        <a class="cardItem mt-2 ">

                                            <div class="dealerContacts-list">

                                                <h3 class="mmc-bold m-0 p-0">Service</h3>
                                                
                                                <div>

                                                    <a class="mmc-regular m-0 p-0 text-gray" href="tel:+625116778000" target="_blank"> <i class="mr-1 fa fa-md fa-phone"> </i> 0511-6778000 </a><br />

                                                </div>

                                            </div>

                                        </a>

                                    </div>

                                        <div class = "dealerOpening cardItem">

                                            <div class = "dealerOpening-detail">

                                                <table class = "dealerOpeningDate">

                                                    <thead>

                                                        <tr>

                                                            <th colspan = "2" >

                                                                <div class = "dealerOpening-detail-header">

                                                                    <h3 class = "mmc-bold m-0 p-0">Showroom</h3>

                                                                    <p class = "mmc-regular m-0 p-0">Jam Operasional</p>

                                                                </div>

                                                            </th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Senin</td>

                                                            <td class = "mmc-regular">08.30 - 17.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Selasa</td>

                                                            <td class = "mmc-regular">08.30 - 17.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Rabu</td>

                                                            <td class = "mmc-regular">08.30 - 17.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Kamis</td>

                                                            <td class = "mmc-regular">08.30 - 17.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Jumat</td>

                                                            <td class = "mmc-regular">08.30 - 17.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Sabtu</td>

                                                            <td class = "mmc-regular">08.30 - 12.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Minggu</td>

                                                            <td class = "mmc-regular">Tutup</td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                            <div class = "dealerOpening-detail cardItem">

                                                <table class = "dealerOpeningDate">

                                                    <thead>

                                                        <tr>

                                                            <th colspan = "2">

                                                                <div class = "dealerOpening-detail-header">

                                                                    <h3 class = "mmc-bold m-0 p-0">Service</h3>

                                                                    <p class = "mmc-regular m-0 p-0">Jam Operasional</p>

                                                                </div>

                                                            </th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Senin</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Selasa</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Rabu</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Kamis</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Jumat</td>

                                                            <td class = "mmc-regular">08.30 - 16.30</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Sabtu</td>

                                                            <td class = "mmc-regular">08.30 - 15.00</td>

                                                        </tr>

                                                        <tr class = "dealerOpening-detail-hour">

                                                            <td class = "mmc-regular">Minggu</td>

                                                            <td class = "mmc-regular">Tutup</td>

                                                        </tr>

                                                    </tbody>

                                                </table>

                                            </div>

                                        </div>

                                    </a>

                                </div>

                            </div>

                        </div>


                        <ol class="carousel-indicators carousel-dealer-indicators">
            
                            <li data-target="#carouselModal" data-slide-to="0" class="active"></li>
                
                            <li data-target="#carouselModal" data-slide-to="1"></li>

                            <li data-target="#carouselModal" data-slide-to="2"></li>

                            <li data-target="#carouselModal" data-slide-to="3"></li>

                            <li data-target="#carouselModal" data-slide-to="4"></li>

                            <li data-target="#carouselModal" data-slide-to="5"></li>

                            <li data-target="#carouselModal" data-slide-to="6"></li>

                            <li data-target="#carouselModal" data-slide-to="7"></li>

                            <li data-target="#carouselModal" data-slide-to="8"></li>

                            <li data-target="#carouselModal" data-slide-to="9"></li>

                            <li data-target="#carouselModal" data-slide-to="10"></li>

                            <li data-target="#carouselModal" data-slide-to="11"></li>
            
                        </ol>

                        <a class="carousel-control-prev carousel-control-dealer-prev cp" onclick="javascript:$('#carouselModal').carousel('prev')" role="button" data-slide="prev">

                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                            <span class="sr-only">Previous</span>

                        

                        </a>

                        <a class="carousel-control-next carousel-control-dealer-next cp" onclick="javascript:$('#carouselModal').carousel('next')" data-slide="next">

                            <span class="carousel-control-next-icon" aria-hidden="true"></span>

                            <span class="sr-only">Next</span>

                        </a>

                    </div>

                </div>

            </div>

            <div class="modal-footer modalDealer-footer">

                

            </div>

        </div>

    </div>

</div>








