<?php
$nama = "Abdull";
$umur = 20;
$tinggi = 170.5;
$menikah = true;
$hobi = ["membaca", "berenang","bermain gitar"];

echo "Nama Saya $nama, Umur Saya $umur, tinggi saya $tinggi cm, status saya $menikah, hobi saya $hobi[0] , $hobi[1] , $hobi[2]";

echo "<br><br>=======================<br><br>";

//OPERATOR
$nilai1 = 5;
$nilai2 = 8;
$nilai3 = 10;
$nilai4 = 20;
$nilai5 = 13;
$nilai6 = 0;

$hasil = $nilai1 + $nilai2 - $nilai3 * $nilai4 /$nilai5;

echo "hasil dari $nilai1 + $nilai2 - $nilai3 * $nilai4 /$nilai5 adalah $hasil";

echo "<br><br>=======================<br><br>";
//PERCABANGAN

$nilai = 70;

if($nilai >= 85){
    echo "Grade A";
} else if($nilai >= 70){
    echo "Grade B";
} else if($nilai >= 50){
    echo "Grade C";
} else if($nilai >= 30){
    echo "Grade D";
}else {
    echo "Grade E";
}

echo "<br><br>=======================<br><br>";
//PERCABANGAN GENAP GANJIL

$nilai1 = 5;
$nilai2 = 8;
$nilai3 = 10;
$nilai4 = 20;
$nilai5 = 13;

$hasil = $nilai1 + $nilai2 - $nilai3 * $nilai4 / $nilai5;

echo "Hasil: $hasil <br>";
$bulat = (int) $hasil;
if ($bulat % 2 == 0) {
    echo "Genap";
} else {
    echo "Ganjil";
}

?>




