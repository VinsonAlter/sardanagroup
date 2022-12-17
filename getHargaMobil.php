<?php
    require_once ('koneksi.php');   
    $data = array();
    
    if(isset($_GET["distinct"])){
        $sql = "SELECT merek, MIN(harga) as harga FROM hargamobil WHERE discontinue = 0 GROUP BY merek";        
        $stmt = $pdo->prepare($sql);
        $stmt->execute();        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $row['harga'] = rupiah($row['harga']);
            $data[] =  $row;
        }
        
        $sql = "SELECT merek, MIN(harga) as harga FROM hargamobil WHERE tipe LIKE 'ATHLETE%' AND discontinue = 0";
        $stmt = $pdo->prepare($sql);
        if ($stmt->execute()) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $row['merek'] = 'TRITON ATHLETE';
            $row['harga'] = rupiah($row['harga']);
            $data[] = $row;
        }        
        
        $sql = "SELECT merek, MIN(harga) as harga FROM hargamobil WHERE tipe LIKE 'FM 65%' AND discontinue = 0";
        $stmt = $pdo->prepare($sql);
        if ($stmt->execute()) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $row['merek'] = 'FIGHTER';
            $row['harga'] = rupiah($row['harga']);
            $data[] = $row;
        }
    }
    else if(isset($_GET["pertype"])){
        $merek = $_GET["merek"];
        $sql = "SELECT tipe, harga FROM hargamobil WHERE discontinue = 0 AND merek = '$merek' ORDER BY harga ASC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $row['harga'] = rupiah($row['harga']);
            $data[] =  $row;
        }
    }
    
    
    
    function rupiah($args){
	    return "" . number_format($args,0,',','.');
    }
    // header('Access-Control-Allow-Origin:*');
    header('Access-Control-Allow-Origin:www.sardanagroup.co.id');
    echo json_encode($data);
?>