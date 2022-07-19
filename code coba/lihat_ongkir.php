<?php
    echo "<head><title>DAFTAR ONGKIR</title></head>";
    $fp = fopen("dataongkir.txt", "r");
    echo "<center>";
    echo "<b>TABEL ONGKIR</b>";
    echo "<br>";
    echo "<a href= test.html>::CEK ONGKIR::</a><br>";
    echo "<hr>";
    echo " <table width = 1000 border=1>";
    echo "<tr>
    <td>Tanggal</td>  
    <td>Nama   </td>
    <td>Asal </td>
    <td>Tujuan </td>
    <td>Telp </td>
    <td>Jarak </td>
    <td>Berat </td>
    <td>Email  </td>
    <td>Total </td>
    </tr>";
    while ($isi = fgets($fp,10000))
    {
        $pisah = explode("|", $isi);
        echo "<br>";
        echo "<tr>
        <td>$pisah[0]</td>  
        <td>$pisah[1]</td>
        <td>$pisah[2]</td>
        <td>$pisah[3]</td>
        <td>$pisah[4]</td>
        <td>$pisah[5]</td>
        <td>$pisah[6]</td>
        <td>$pisah[7]</td>
        <td>$pisah[8]</td>
        </tr>";
    }
    "</table>";
    "</center>";
?>