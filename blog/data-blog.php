<?php
  require_once "../config.php";
  require_once "../koneksi.php";
  $data = '<div class="row">';
  if (isset($_POST["tipe"]))
  {
    $tipe = $_POST["tipe"];
    if ($tipe == "semua")
    {
      $result = $koneksi->query("SELECT * FROM NEWS WHERE kategori = 'SG' AND (tipe = 'promo' OR tipe = 'event' OR tipe = 'hype')");
    }
    else
    {
      $result = $koneksi->query("SELECT * FROM NEWS WHERE kategori = 'SG' AND tipe = '$tipe'");       
    }
    while ($row = $result->fetch_array())
    {      
      $date = strtotime($row["tanggalpublish"]);
      $date = date("d-m-Y", $date);
      $data .= '<div class="col-12 col-sm-6 col-lg-4">
                  <div class="card" style="border: 1px solid gray; overflow: hidden; cursor: pointer">
                    <img src="https://sardanagroup.co.id/HP/production/images/news/' .$row["Paths"]. '" class="card-img-top" alt="'.$row["judul"].'">
                    <div class="card-body">
                      <small class="card-text text-muted">' .$date. '</small>
                      <p class="card-text">' .$row["judul"]. '</p>
                      <a class="btn btn-danger selengkapnya-lain" href="detail.php?url=' .$row["seo_link"].'"><i class="fas fa-plus mr-2" style="font-size: 12px"></i>SELENGKAPNYA</a>                    
                    </div>
                  </div>
                </div>';
    }
  }
  else
  {
    $data .= 'data not found.';
  }  
  $data .= '</div>';

  echo $data;
?>