<?php
    header("Access-Control-Allow-Origin:*");
    define ('RECAPTCHA_PUBLIC_KEY', '6LeMjiETAAAAAIttDjDycVZLiShz2S27KdjuBLL9');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/brands.css"
        integrity="sha384-i2PyM6FMpVnxjRPi0KW/xIS7hkeSznkllv+Hx/MtYDaHA5VcF0yL3KVlvzp8bWjQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/solid.css"
        integrity="sha384-ioUrHig76ITq4aEJ67dHzTvqjsAP/7IzgwE7lgJcg2r7BRNGYSK0LwSmROzYtgzs" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/fontawesome.css"
        integrity="sha384-sri+NftO+0hcisDKgr287Y/1LVnInHJ1l+XC7+FOabmTTIK0HnE2ID+xxvJ21c5J" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/uxsolutions/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src=" https://cdn.jsdelivr.net/gh/aFarkas/lazysizes/lazysizes.min.js" async=""></script>
    <title>Promo Spesial Mitsubishi | Sardana Group Dealer Resmi Mitsubishi Medan</title>
</head>
<body>
    <?php require_once("../mitsubishi-medan/component/Header.php")?>
    <div class="container mt-header overflow-auto bg-white o-100">
        <div class="d-flex justify-content-end"> 
            <button type="button" class="close d-md-none" onclick="javascript:$('.menu').toggleClass('menuActive')" aria-label="Close">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <h1>BOOKING SERVICE</h1>
        <div class="row">
            <div class="col col-md-8">
                <p class="mmc-regular">
                    Mitsubishi Service Booking adalah fasilitas untuk melakukan perjanjian service kendaraan di dealer resmi Mitsubishi untuk pelanggan demi kenyamanan waktu service, jenis pekerjaan, dan suku cadang yang dipersiapkan dengan lebih baik. Untuk kenyamanan Anda lakukan booking 1-2 hari sebelumnya.
                </p>
                Syarat dan Ketentuan BOOKING SERVICE :
                <ul class="mmc-regular">
                    <li>
                        Lakukan service booking 1 (satu) hari sebelumnya
                    </li>
                    <li>
                        Dapat Discount 10%
                    </li>
                    <li>
                        Booking sesuai jam operasional bengkel yaitu Senin-Jumat : 08:00 - 16:00 WIB; Sabtu : 08:00 - 14:00 WIB
                    </li>
                </ul>
                Syarat dan Ketentuan DISCOUNT 10% :
                <ul class="mmc-regular">
                    <li>
                        Discount berlaku hanya untuk LC (Labour Charge)
                    </li>
                    <li>
                        Discount dalam bentuk Voucher Service
                    </li>
                    <li>
                        Voucher dapat digunakan untuk service berikutnya
                    </li>
                    <li>
                        Follow akun Instagram <a href="https://www.instagram.com/sardanaindahberlianmotor/">Sardana Berlian</a>
                    </li>
                </ul>
            </div>
        </div>
        <h5 class="mt-4">Silahkan Isi Data Booking Anda</h5>
        <div class="row mt-3 mb-3">
            <div class="col-8">
                <form action="https://sardanagroup.co.id/page/bookingservice/input.php" method="POST">
                    <div class="form-group">
                        <label for="kodeDealer">Dealer resmi Mitsubishi</label>
                        <select class="mmc-regular form-control" name="kodeDealer" id="kodeDealer" required>
                            <option value="100011">MEDAN GATOT SUBROTO - PT. SARDANA INDAHBERLIAN MOTOR</option>
                            <!--<option value="100698">DELI SERDANG TAMORA - PT. SARDANA INDAHBERLIAN MOTOR</option>
                            <option value="Rantau Prapat, Sumut - PT. SARDANA INDAHBERLIAN MOTOR">Rantau Prapat, Sumut - PT. SARDANA INDAHBERLIAN MOTOR</option>
                            <option value="Banda Aceh, NAD - PT. DARUSSALAM BERLIAN MOTOR">Banda Aceh, NAD - PT. DARUSSALAM BERLIAN MOTOR</option>
                            <option value="Banjarbaru, Kalsel - PT. BARITO BERLIAN MOTOR">Banjarbaru, Kalsel - PT. BARITO BERLIAN MOTOR</option>
                            <option value="Batulicin, Kalsel - PT. BARITO BERLIAN MOTOR">Batulicin, Kalsel - PT. BARITO BERLIAN MOTOR</option> -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggalBooking">Tanggal Booking</label>
                        <input class="mmc-regular form-control" type="text" id="tanggalBooking" name="tanggalBooking" value="<?php $now = strtotime(date("Y-m-d")); echo date("d/m/Y", strtotime('+1 day', $now)) ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="jamBooking">Jam Booking</label>
                        <select class="mmc-regular form-control" id="jamBooking" name="jamBooking" required>
                            <option value="">Silahkan Pilih</option>
                            <option value="08:00">08:00</option>
                            <option value="08:30">08:30</option>
                            <option value="09:00">09:00</option>
                            <option value="09:30">09:30</option>
                            <option value="10:00">10:00</option>
                            <option value="10:30">10:30</option>
                            <option value="11:00">11:00</option>
                            <option value="11:30">11:30</option>
                            <option value="12:00">12:00</option>
                            <option value="12:30">12:30</option>
                            <option value="13:00">13:00</option>
                            <option value="13:30">13:30</option>
                            <option value="14:00">14:00</option>
                            <option value="14:30">14:30</option>
                            <option value="15:00">15:00</option>
                            <option value="15:30">15:30</option>
                            <option value="16:00">16:00</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="modelKendaraan">Model kendaraan</label>
                        <select class="mmc-regular form-control" id="modelKendaraan" name="modelKendaraan" required>
                            <option value="">Silahkan Pilih</option>
                            <optgroup label="Passenger">
                                <option value="PAJERO SPORT">PAJERO SPORT</option>
                                <option value="ECLIPSE CROSS">ECLIPSE CROSS</option>
                                <option value="OUTLANDER SPORT">OUTLANDER SPORT</option>
                                <option value="XPANDER">XPANDER</option>
                                <option value="XPANDER CROSS">XPANDER CROSS</option>
                                <option value="MIRAGE">MIRAGE</option>
                                <option value="KUDA">KUDA</option>
                                <option value="GRANDIS">GRANDIS</option>
                                <option value="DELICA">DELICA</option>
                                <option value="LANCER">LANCER</option>
                                <option value="MAVEN">MAVEN</option>
                            </optgroup>
                            <optgroup label="LCV">
                                <option value="TRITON">TRITON</option>
                                <option value="L300">L300</option>
                                <option value="T120SS">T120SS</option>
                            </optgroup>
                            <optgroup label="CV">
                                <option value="COLT DIESEL">COLT DIESEL</option>
                                <option value="FUSO">FUSO</option>
                                <option value="TRACTOR HEAD">TRACTOR HEAD</option>
                            </optgroup>
                            <optgroup label="Others">
                                <option value="OTHERS">Lainnya</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="km">Kilometer</label>
                        <input type="text" class="mmc-regular form-control" id="km" name="km" maxlength="10" placeholder="Kilometer kendaraan anda" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="namaCustomer">Nama</label>
                        <input type="text" class="mmc-regular form-control" id="namaCustomer" name="namaCustomer" maxlength="50" placeholder="Nama anda" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="nomorHp">Nomor HP</label>
                        <input type="text" class="mmc-regular form-control" id="nomorHp" name="nomorHp" maxlength="20" placeholder="Nomor HP anda" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="nomorPolisi">Nomor Polisi</label>
                        <input type="text" class="mmc-regular form-control" id="nomorPolisi" name="nomorPolisi" maxlength="20" placeholder="Nomor polisi anda" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="kerusakan">Kerusakan / Keluhan</label>
                        <textarea rows="4" class="mmc-regular form-control" id="kerusakan" name="kerusakan" placeholder="Deskripsi kerusakan / keluhan kendaraan anda" required></textarea>
                    </div>
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="<?=RECAPTCHA_PUBLIC_KEY?>"></div>
                    </div>
                    <button type="submit" class="btn btn-myPrimary" name="btnKirim">Booking</button>
                </form>
            </div>
        </div>
    </div>
    <?php require_once("../component/Menu.php")?>
    <?php require_once("../component/Footer.php")?>
</body>
    <script defer src="https://www.google.com/recaptcha/api.js"></script>	
    <script src="https://www.sardanagroup.co.id/index-dev/page/bookingservice/init.js"></script>
</html>