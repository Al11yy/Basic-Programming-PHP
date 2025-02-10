<?php
$total = 100000;

echo"total belanja anda $total <br>";

// =============== JIKA HANYA ADA SATU KONDISI ====================
if ($total >= 100000) {
    echo "anjng lu dapet diskon tai hoki bego Rp. 1000";
} else {
    echo "HAHA mampus anjng ga dapet diskon lu tai";
}
// ==================================

echo "<br>=====================================================<br>";

// ===============JIKA ADA DUA KONDISI====================
$hari = "kontol";

if ($hari == "senin") {
    echo "Pake baju putih abu";
} else if ($hari == "selasa") {
    echo "<b>pake baju pramuka</b>";
} else if ($hari == "rabu") {
    echo "pake baju roduktif";
}  else if ($hari == "kamis") {
    echo "pake baju batik";
}  else if ($hari == "jumat") {
    echo "pake baju gamis muslim";
}   else {
    echo "<h1>HAHAHHAHA LIBUR YESSSSS!!!!</h1>";
}
// ==================================