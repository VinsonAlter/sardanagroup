<?php
    require_once ('../config.php');
	require_once (BASE_PATH.DS.'koneksi.php');
	
	$link = mysqli_real_escape_string($koneksi, $_GET['seolink']);
	$sql = "SELECT id, tanggal, judul, keterangan, Paths FROM news WHERE seo_link='$link'";
	$res = mysqli_query($koneksi, $sql);
	while($data = mysqli_fetch_array($res)){
	    $post = preg_replace('/style\s.+?>/is', 'class="img-fluid"', $data[3]);
	    $caption = substr($data[3],0,155);
	    $caption = strip_tags($caption);
	    $title = $imgAlt = $data[2];
	    $date = $data[1];
	    $imgSrc = $data[4];
	    $imgsrc = "http://sardanagroup.co.id/HP/production/images/news/$imgSrc";
	    $imgSecure = "https://sardanagroup.co.id/HP/production/images/news/$imgSrc";
	   // echo'
	   //     <div class="col-12 col-md-8">
    //             <h1 class="berita-header">'.$data[2].'</h1>
    //             <p class="text-muted">'.$data[1].'</p>
    //             <img class="img-fluid" src="'.BASE_URL.'/HP/production/images/news/'.$data[4].'" alt="'.$data[2].'">
    //         </div>
    //         <div class="col-12 col-md-8 mt-4 mmc-regular">
    //             '.$post.'
    //         </div>
	   // ';
	    
	}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:title" content="<?=$title?> | Sardana Group Dealer Resmi Mitsubishi Medan" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?=$imgsrc?>" />
    <meta property="og:image:secure_url" content="<?=$imgSecure?>" />
    <meta property="og:url" content="https://sardanagroup.co.id/berita/<?=$link?>"/>
    <meta property="og:description" content="<?=$caption?>" />
    <meta name="description" content="<?=$caption?>" />

    <title><?=$title?> | Sardana Group Dealer Resmi Mitsubishi Medan</title>
    <link rel="canonical" href="https://sardanagroup.co.id/berita/<?=$link?>" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/brands.css"
        integrity="sha384-i2PyM6FMpVnxjRPi0KW/xIS7hkeSznkllv+Hx/MtYDaHA5VcF0yL3KVlvzp8bWjQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/solid.css"
        integrity="sha384-ioUrHig76ITq4aEJ67dHzTvqjsAP/7IzgwE7lgJcg2r7BRNGYSK0LwSmROzYtgzs" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/fontawesome.css"
        integrity="sha384-sri+NftO+0hcisDKgr287Y/1LVnInHJ1l+XC7+FOabmTTIK0HnE2ID+xxvJ21c5J" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css"/>
    <script src=" https://cdn.jsdelivr.net/gh/aFarkas/lazysizes/lazysizes.min.js" async=""></script>
</head>
<body>
    <?php require_once("../mitsubishi-medan/component/Header.php")?>
    <div class="container margin-top-header">
        <div class="row justify-content-center">
            <?php
                echo'
    		        <div class="col-12 col-md-8">
                        <h1 class="berita-header">'.$title.'</h1>
                        <p class="text-muted">'.$date.'</p>
                        <img class="img-fluid" src="'.BASE_URL.'/HP/production/images/news/'.$imgSrc.'" alt="'.$imgAlt.'">
                    </div>
                    <div class="col-12 col-md-8 mt-4 mmc-regular">
                        '.$post.'
                    </div>
    		    ';
            ?>
        </div>
    </div>
    
    <div class="container  mt-4">
        <h1>BERITA LAINNYA</h1>
        <div class="row no-gutters justify-content-around mt-4">
            <?php
                $tampil = "SELECT judul, keterangan, Paths, seo_link FROM news WHERE seo_link <> '$link' ORDER BY tanggalpublish DESC LIMIT 3 ";
            	$hasil = mysqli_query($koneksi,$tampil);
            	$i = 0;
            	while($data = mysqli_fetch_array($hasil)){
            	    if($i === 2){
            	        $thirdBerita = "thirdBerita";
            	    }
            	    $caption = substr($data[1],0,200);
            	    $caption = strip_tags($caption);
            		echo '
            			<div class="card '.$thirdBerita.'" style="width: 18rem;">
                            <img src="https://sardanagroup.co.id/HP/production/images/news/'.$data[2].'" class="card-img-top card-img-berita" alt="'.$data[0].'">
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
        </div>
    </div>
    <?php require_once("../component/Menu.php")?>
    <?php require_once("../component/Footer.php")?>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/gh/uxsolutions/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(()=>{
            const sm = window.matchMedia("(max-width: 576px)")
            const issm = sm.matches
            const menuActive = () => {
                if(issm){$('.menu').toggleClass('menuActive')}
                $('.overlayBg .container').click(e => e.stopPropagation())
            }
            const loadOverlay = target => $('.overlayBg').load(target, () => menuActive())
            
            // navBarStepBack(1)
            $('p img').css({'width': '', 'height': ''}).addClass("img-fluid")
            $('iframe').addClass('d-block w-100')
            
            $('.tentangKami h3').click(({currentTarget}) => {
                $('.tentangKami h3').removeClass('active')
                $(currentTarget).addClass('active')
                $('.profil').hide()
                $('.visi').hide()
                $('.misi').hide()
                const curr = $(currentTarget).text().toLocaleLowerCase()
                $(`.${curr}`).show()
            })
            
            $('.btMenu, .btMenuMobile, .layanan').click(e => {
                $('.menuOverlay').toggleClass('sideBarActive')
                $('body').toggleClass('noScroll')
                $('.header').toggleClass('inactiveHeader')
                $('.menu').toggleClass('menuActive')
                e.stopPropagation()
            })
            $('.menu').click(e => e.stopPropagation())
            $('.menuItem a').click(({currentTarget}) => {
                $('.menuItem a').removeClass('activeRed')
                $(currentTarget).addClass('activeRed')
                $('.menu').addClass('menuSeparator')
            })
            $('body').click(({currentTarget}) => {
               if(!issm){
                    $('.menuOverlay').removeClass('sideBarActive')
                    $('body').removeClass('noScroll')
                    // $('.header').css('top','0')
                    $('.menu').removeClass('menuActive')
                    $('.header').removeClass('inactiveHeader')
               }
            })
            
            $('.garansi').click(({currentTarget}) => {
                $('.overlayBg').load('https://sardanagroup.co.id/page/Garansi.php', () => {
                    $('.kendaraanNiaga').hide()
                    if(issm){$('.menu').toggleClass('menuActive')}
                    $('.overlayBg .container').click(e =>{
                        e.stopPropagation()
                    })
                    $('.garansiItem p').click(({currentTarget}) => {
                        $('.kendaraanPenumpang').hide()
                        $('.kendaraanNiaga').hide()
                        $('.garansiItem p').removeClass('activeRed')
                        $(currentTarget).addClass('activeRed')
                        $(`.${$(currentTarget).attr('target')}`).show()
                    })
                })
            })
            $('.bengkel').click(({currentTarget}) => {
                $('.overlayBg').load('https://sardanagroup.co.id/page/Bengkel.php', () => {
                    if(issm){$('.menu').toggleClass('menuActive')}
                    $('.periode').hide()
                    $('.fasilitas').hide()
                    $('.overlayBg .container').click(e => {
                        e.stopPropagation()
                    })
                    $('.bengkelItem p').click(({currentTarget}) => {
                        $('.perawatan').hide()
                        $('.periode').hide()
                        $('.fasilitas').hide()
                        $('.bengkelItem p').removeClass('activeRed')
                        $(currentTarget).addClass('activeRed')
                        $(`.${$(currentTarget).text().toLocaleLowerCase()}`).show()
            
                    })
                })
            })
            
            $('.sukucadang').click(() => loadOverlay('https://sardanagroup.co.id/page/SukuCadang.php'))
            $('.bookingservice').click(() => loadOverlay('https://sardanagroup.co.id/page/bookingservice/'))
            /* $('.suarapelanggan').click(() => loadOverlay('https://sardanagroup.co.id/page/suarapelanggan/')) */
            $('.suarapelanggan').click(() => loadOverlay('https://suara-pelanggan.sardanagroup.co.id/'))
            $('.testdrive').click(() => loadOverlay('https://sardanagroup.co.id/page/testdrive/'))
            $('.tentangkami').click(() => loadOverlay('https://sardanagroup.co.id/page/TentangKami.php'))
            $('.konsultasi').click(() => loadOverlay('https://sardanagroup.co.id/page/konsultasi/?MMKSI'))
            $('.berita').click(() => loadOverlay('https://sardanagroup.co.id/page/Berita.php'))
            
            let prevScrollpos = window.pageYOffset;
            $(window).scroll(() => {
                if($(window).scrollTop() > 95){
                    const currentScrollPos = window.pageYOffset;
                    if(prevScrollpos > currentScrollPos){
                        $('.headerContainer').removeClass('inactiveHeader')
                    }
                    else{
                        $('.headerContainer').addClass('inactiveHeader')
                    }
                    prevScrollpos = currentScrollPos;
                }
                else{
                    $('.headerContainer').removeClass('inactiveHeader')
                }
            })
            
            $.ajaxPrefilter(( options, original_Options, jqXHR )=>{
                options.async = true;
            })
        })
        // function navBarStepBack(r) {
        //     if (r < 1 || "string" == typeof r) return;
        //     let a = "";
        //     for (i = 1; i <= r; i++){
        //         a += "../"
        //     }
        //     $('.navMenu a').each((i, el)=>{
        //         const oldHref = $(el).attr('href')
        //         $(el).attr('href', `${a}${oldHref}`)
        //     })
        //     $('.menuItem li').each((i, el)=>{
        //         const oldTarget = $(el).attr('target').replace('./', '')
        //         $(el).attr('target', `https://sardanagroup.co.id/${oldTarget}`)
        //     })
        // }
    </script>
</html>
    

