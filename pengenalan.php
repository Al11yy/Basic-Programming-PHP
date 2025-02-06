<?php

echo "Halo Dunia!"; // echo digunakan untuk mencetak data ke layar kita

$nama = "Ali";       // Teks (String)
$umur = 5;           // Angka bulat (Integer)
$tinggi = 1.2;       // Angka desimal (Float)
$menikah = false;    // Ya atau Tidak (Boolean)
$buah = ["Apel", "Mangga", "Jeruk"]; // Kotak isi banyak (Array)

echo " <br> Namaku $nama, aku suka " . $buah[0]; // Mangga

//contoh variabel
$nama_lengkap ="Ghazam Al Aliy R.";
$usia = "15";
$alamat = "Jl Poras No 7";
$tgl_ultah = "13 Feb 2009";
$tempat_lahir = "Jakarta";

//penerapan nya

// cara pertama 
echo "nama lengkap : $nama_lengkap <br>";

// cara kedua
echo "<br><br>----Data Diri---<br>";
echo "nama lengkap :" . $nama_lengkap . "<br>";
echo "Alamat :" . $alamat . "<br>";
echo "Tempat Lahir :" . $tempat_lahir . "<br>";
echo "Usia :" . $usia . "<br>";
echo "Tgl Lahir :" . $tgl_ultah . "<br>";

