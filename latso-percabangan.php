<?php

$gaji = 8000000;
$pajak = 0; 
$status = "tetap";

if ($gaji >= 15000000) {
    $pajak = 20;
} elseif ($gaji >= 10000000 && $gaji <= 15000000) {
    $pajak = 15;
} elseif ($gaji >= 5000000 && $gaji <= 10000000) {
    $pajak = 10;
} elseif ($gaji >= 5000000) {
    $pajak = 5;
} else {
    $pajak = 0;
}

if ($status == "tetap") {
    $pajak = $pajak + 5;
}  

// Potongan pajak
$potonganPajak = ($pajak / 100) * $gaji;

// Gaji bersih
$gajiBersih = $gaji - $potonganPajak;



echo "==== Rincian Pajak ====<br>";
echo "Gaji bulanan: Rp " .$gaji. "<br>";
echo "Status Pegawai :" .$status. "<br>";
echo "pajak: " .$pajak. "%<br>";
echo "Potongan pajak: Rp " .$potonganPajak. "<br>";
echo "Gaji bersih: Rp " .$gajiBersih. "<br>";

?>


<?php

echo   "<br> <br> <br> <br> <br> <br>" ;


$member = ["gold", "silv", "non"];
$Diskon= 0;
$totalBelanja = 1200000;

if ($member == "gold") {

} else if ($totalBelanja >= 1500000) {
    $Diskon=20;
} else if ($totalBelanja >= 1000000 && $totalBelanja <= 1499000) {
    $Diskon= 15;
}   else if ($totalBelanja <= 1000000) {
    $Diskon= 10;
}

//potongan diskon
$potongan = ($Diskon / 100) * $totalBelanja;

$TotalBayar = $totalBelanja - $potongan;

echo "==== Total Pembelanjaan ====<br>";
echo "Total Belanja : Rp " .$totalBelanja. "<br>";
echo "Jenis  : " .$member[0]. "<br>";
echo "diskon : " .$Diskon. "%<br>";
echo "Potongan : Rp ".$potongan. "<br>";
echo "Total belanja : Rp".$TotalBayar."<br>";