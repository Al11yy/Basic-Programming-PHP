<?php

$uts = 100;
$uas = 50;
$tugas = 80;

$status =" ";
$grade = " ";

$rata = ($uts + $uas + $tugas) / 3;

if ($rata >= 73 && $rata <= 80) {
    $status = "Perbaikan";
    $grade = "C";
} else if ($rata >= 81 && $rata <= 93) {
    $status = "Lulus";
    $grade = "B";
} else if ($rata >= 94 && $rata <= 100) {
    $status = "Sangat Lulus";
    $grade = "A";
} else {
    $status = "-";
    $grade = "-";
}

// HASIL

echo"==========HASIL==========<br>";
echo"rata-rata = $rata <br>";
echo"Grade = $grade <br>";
echo"Status = $status <br>";
