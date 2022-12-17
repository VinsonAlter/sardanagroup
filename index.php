<?php 
    require_once 'config.php';
    require_once("mitsubishi-medan/component/FileGetContents.php");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-30618930-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-30618930-3');
    </script>

    <script>
	  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version="2.0";n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","1274490382674254");fbq("track","PageView");
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1274490382674254&ev=PageView&noscript=1"/></noscript>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mitsubishi Sardana Medan | Gatot Subroto</title>
    <link rel="manifest" href="./manifest.json">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= BASE_URL.DS. 'apple-touch-icon.png'; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= BASE_URL.DS. 'favicon-32x32.png'; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= BASE_URL.DS. 'favicon-16x16.png'; ?>">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#333">
    <?php readfile('./component/meta/Home.php')?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/brands.css"
        integrity="sha384-i2PyM6FMpVnxjRPi0KW/xIS7hkeSznkllv+Hx/MtYDaHA5VcF0yL3KVlvzp8bWjQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/solid.css"
        integrity="sha384-ioUrHig76ITq4aEJ67dHzTvqjsAP/7IzgwE7lgJcg2r7BRNGYSK0LwSmROzYtgzs" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/fontawesome.css"
        integrity="sha384-sri+NftO+0hcisDKgr287Y/1LVnInHJ1l+XC7+FOabmTTIK0HnE2ID+xxvJ21c5J" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/css/lightbox.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/css/styles.css?ver=<?=rand(1,1000)?>">
    <link rel="stylesheet" type="text/css" href="./assets/css/styles.scss">
    
    <script src=" https://cdn.jsdelivr.net/gh/aFarkas/lazysizes/lazysizes.min.js" async=""></script>
</head>
<body>
    <header>
        <?php readfile("./mitsubishi-medan/component/Header.php");?>
    </header>
    <main>
        <section>
            <div class="mt-header">
                <?php require_once('./component/Carousel.php')?>
            </div>
            <div id="PC" class="mt-5">
                <?php require_once("./mitsubishi-medan/component/PC.php")?>
            </div>
            <div id="LCV" class="mt-5">
                <?php require_once("./mitsubishi-medan/component/LCV.php")?>
            </div>
            <div id="CV" class="mt-5">
                <?php require_once("./fuso-medan/component/CV.php")?>
            </div>
            <div id="lokasiDealer" class="mt15">
               <?php readfile("./component/LokasiDealer.php")?>
            </div>
            <div id="berita" class="d-flex align-items-center mt15">
                <div class="container">
                    <h2 class="fs50-scaled">BERITA</h2>
                    <div class="barrrs d-md-none"></div>
                    <div class="row no-gutters justify-content-around mt-4">
                        <?php require_once("./component/BeritaSelayangPandang.php")?>
                    </div>   
                </div>
            </div>
        </section>
    <footer class="pt-3">
        <?php require_once("./component/Footer.php")?>
    </footer>
    <?php readfile("./component/Menu.php")?>
    <?php // require_once("./component/ModalPromo.php")?>
    <?php require_once("./component/ModalDealer.php");?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/gh/uxsolutions/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./assets/js/lightbox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="./assets/js/index.js?ver=<?=rand(1,1000)?>"></script>
    <script>
        const hash = window.location.hash
        $(document).ready(() => {
            if(hash === '#bookingservice'){
                $('.menu').addClass('menuSeparator')
                if(issm){
                    $('body').toggleClass('noScroll')
                    $('.menuOverlay').toggleClass('sideBarActive')
                    $('.overlayBg').load('https://sardanagroup.co.id/page/bookingservice/', () => $('.overlayBg .container').click(e => e.stopPropagation()))
                }
                else{
                    $('.btMenu').click()
                    $('li.bookingservice').click()   
                }
            }
            else if(hash === '#testdrive'){
                $('.menu').addClass('menuSeparator')
                if(issm){
                    $('body').toggleClass('noScroll')
                    $('.menuOverlay').toggleClass('sideBarActive')
                    $('.overlayBg').load('https://sardanagroup.co.id/page/testdrive/', () => $('.overlayBg .container').click(e => e.stopPropagation()))
                }
                else{
                    $('.btMenu').click()
                    $('li.testdrive').click()   
                }
            }
            else if(hash === '#suarapelanggan'){
                $('.menu').addClass('menuSeparator')
                if(issm){
                    $('body').toggleClass('noScroll')
                    $('.menuOverlay').toggleClass('sideBarActive')
                    /* $('.overlayBg').load('https://sardanagroup.co.id/page/suarapelanggan/', () => $('.overlayBg .container').click(e => e.stopPropagation())) */
                    $('.overlayBg').load('https://suara-pelanggan.sardanagroup.co.id/', () => $('.overlayBg .container').click(e => e.stopPropagation()))
                }
                else{
                    $('.btMenu').click()
                    $('li.suarapelanggan').click()   
                }
            }
            else{
                // $('#modalPromo').modal()
                $('#modalDealer2').modal();

            fetch('./getHargaMobil.php?distinct')
            .then(res => res.json())
            .then(json => json.map(mobil => $(`p[mobil="${mobil.merek}"] span`).text(`Rp. ${mobil.harga}`)))
            
            // setTimeout(() => $('#modalPromo').modal('hide'), 30000)
            }
        })
    </script>
</body>


</html>