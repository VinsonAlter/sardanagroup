<nav id="bottomNav" class="d-md-none navbar fixed-bottom bg-black d-flex justify-content-around align-items-center">
        <div class="text-center ">
            <a href="https://sardanagroup.co.id/index-dev/promo/" class="red text-decoration-none">
                <i class="fas fa-car fa-lg"></i>
                <p class="fs10 p-0 m-0 mmc-regular">Produk</p>
            </a>
        </div>
        <div class="simulasiKredit text-center">
            <a href="https://sardanagroup.co.id/index-dev/promo/" class="red text-decoration-none">
                <i class="fas fa-money-bill-alt fa-lg"></i>
                <p class="fs10 p-0 m-0 mmc-regular">Promo</p>
            </a>
        </div>
        <div class="text-center">
            <a data-toggle="modal" href="#myModal" href="#" class="red">
                <i class="fas fa-question-circle fa-lg" aria-hidden="true"></i>
                <p class="fs10 p-0 m-0 mmc-regular">Layanan</p>
            </a>
        </div>
    </nav>
    <div id="txtSideNav" class="">
        <div id="txtPromo" class="bg-black px-1 py-2">
            <p class="fs10 p-0 m-0 mmc-regular white">Promo Spesial</p>
        </div>
        <div id="txtSimulasi" class="bg-black px-1 py-2"> 
            <p class="fs10 p-0 m-0 mmc-regular white">Simulasi Kredit</p>
        </div>
        <div id="txtKonsultasi" class="bg-black px-1 py-2">
            <p class="fs10 p-0 m-0 mmc-regular white">Konsultasi</p>
        </div>
        <div id="txtTestDrive" class="bg-black px-1 py-2">
            <p class="fs10 p-0 m-0 mmc-regular white">Test Drive</p>
        </div>
    </div>
    <nav id="sideNav" class="d-none d-md-flex flex-column position-fixed bg-black rounded-lg p-1">
        <div id="promoSpesial" class="navbar-brand text-center p-0 m-0" target="txtPromo">
            <a href="https://sardanagroup.co.id/index-dev/promo/" class="red">
                <i class="fas fa-shopping-cart"></i>
                <p class="ipads fs10 p-0 m-0 mmc-regular">Promo<br>Spesial</p>
            </a>
        </div>
        <div id="simulasiKredit" class="navbar-brand text-center p-0 m-0" target="txtSimulasi">
            <a href="https://sardanagroup.co.id/index-dev/simulasi/" class="red">
                <i class="fas fa-money-bill-alt"></i>
                <p class="ipads fs10 p-0 m-0 mmc-regular">Simulasi</p>
            </a>
        </div>
        <div id="konsultasi" class="navbar-brand text-center p-0 m-0" target="txtKonsultasi">
            <a data-toggle="modal" href="#myModal" href="#" class="red">
                <i class="fas fa-question-circle" aria-hidden="true"></i>
                <p class="ipads fs10 p-0 m-0 mmc-regular">Konsultasi</p>
            </a>
        </div>
        <div id="testDrive" class="navbar-brand text-center p-0 m-0" target="txtTestDrive">
            <a data-toggle="modal" href="#myModalTestDrive" class="red">
                <i class="fas fa-car" aria-hidden="true"></i>
                <p class="ipads fs10 p-0 m-0 mmc-regular">Test<br>Drive</p>
            </a>
        </div>
    </nav>
    <style>
        #navOverlay{
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 9999;
            height: 100%;
            transition: all 2.5s
        }
    </style>
    <div id="navOverlay" class="bg-white">
        <div id="overlayProduk">
            <button type="button" class="close p-2" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <div class="container">
                <h5 class="mt-4 mmc-regular font-weight-bold">Passenger Car</h5>
                <div class="mmc-regular">
                    <a class="nav-link" href="https://sardanagroup.co.id/index-dev/mitsubishi/cars/pajero-sport/">Pajero Sport</a>
                    <a class="nav-link" href="https://sardanagroup.co.id/index-dev/mitsubishi/cars/eclipse-cross/">Eclipse Cross</a>
                    <a class="nav-link" href="https://sardanagroup.co.id/index-dev/mitsubishi/cars/xpander/">Xpander</a>
                    <a class="nav-link" href="https://sardanagroup.co.id/index-dev/mitsubishi/cars/xpander-limited/">Xpander Limited</a>
                    <a class="nav-link" href="https://sardanagroup.co.id/index-dev/mitsubishi/cars/triton/">Triton</a>
                    <a class="nav-link" href="https://sardanagroup.co.id/index-dev/mitsubishi/cars/outlander-sport/">Outlander Sport</a>
                </div>
                <h5 class="mt-4 mmc-regular font-weight-bold">Light Commercial Vehicle</h5>
                <div class="mmc-regular">
                    <a class="nav-link" href="https://sardanagroup.co.id/index-dev/mitsubishi/cars/l300/">Colt L300</a>
                    <a class="nav-link" href="https://sardanagroup.co.id/index-dev/mitsubishi/cars/t120ss/">T120SS</a>
                </div>
            </div>
        </div>
        <div id="overlayLayanan" class="d-none">
            <div class="container mt-4 mmc-regular">
                <a class="nav-link" href="">Booking Service</a>
                <a class="nav-link" href="#">Test Drive</a>
                <a class="nav-link" href="#">Spareparts</a>
                <a class="nav-link" href="#">Bengkel</a>
                <a class="nav-link" href="#">Garansi</a>
            </div>
        </div>
    </div>