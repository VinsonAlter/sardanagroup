<?php
//     require_once ('../config.php');
// 	require_once (BASE_PATH.DS.'koneksi.php');
//     $sql = "SELECT seo_link FROM news ORDER BY tanggalpublish DESC LIMIT 0,1";
//     $res = mysqli_query($koneksi, $sql);
//     if($res){
//         $row = mysqli_fetch_assoc($res);
//         $link = $row["seo_link"];
//         header("Location: https://sardanagroup.co.id/index-dev/berita/$link");
//         die();
//     }
//     else{
//         header("Location: ../");
//         die();
//     }
    header("Location: ../");
    die();
?>