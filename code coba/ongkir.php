<?php
    $tgl = date('Y-m-d');
    $nama = $_POST['name'];
    $asal = $_POST['asal'];
    $tujuan = $_POST['tujuan'];
    $telp = $_POST['telp'];
    $jarak = $_POST['jarak'];
    $berat = $_POST['berat'];
    $email = $_POST['email'];

    $total = $jarak * 5000;

    $fp  = fopen("dataongkir.txt", "a+");
    fputs($fp,"$tgl|$nama|$asal|$tujuan|$telp|$jarak|$berat|$email|$total\n");    
    fclose($fp);
    echo "<style>
    body{
        background: rgb(247,248,243);
        background: linear-gradient(270deg, rgba(247,248,243,1) 1%, rgba(0,66,124,1) 100%);}
        </style>";

    echo "Terima kasih Telah Menggunakan Layanan Kami<br><br>";
    echo "Kembali ke <a href=testss.php>Cek Ongkir</a><br>";
    echo "Menuju ke <a href=lihat.php>Lihat Data</a>";
?>