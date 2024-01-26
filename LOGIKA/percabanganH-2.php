<?php

//hari ke 2
echo"<h2>HARI KE2</h2>";

$a = 0;

if ($a>0) {
    echo "positif";
}elseif($a<0) {
    echo"negatif";
}else{
    echo"cacah";
}

echo"<br>";

//

$a=9;

if ($a>0) {
    echo"positif";
    if ($a>10) {
        echo"lebih besar";
    }else{
        echo"tidak";
    }
    }else{
        echo"negatif";
    }
    
    echo"<br>";

//

$nilai=90;
$kehadiran=100;

if ($nilai>=85 && $kehadiran>=98 % 2) {
    echo"berprestasi";
}else{
    echo"tidak berprestasi";
}

echo"<br>";


//hari ke 2
//soal

echo"<h2>SOAL :</h2>";
//soal 1

$nilai = 100;

echo "1.Nilai: {$nilai} <br>";

if ($nilai >= 85 && $nilai <= 100) {
  echo "Predikat: A";
} elseif ($nilai >= 75) {
  echo "Predikat: B";
}else {
    echo"predikat: c";
}

echo"<br>";

//soal 2
$a=17;

echo "2.umur: {$a} <br>";

if ($a >= 6 && $a < 12) {
    echo"waktu tidur 10 jam";
}elseif ($a >= 12 && $a < 18) {
    echo"waktu tidur 8-9 jam";
}elseif ($a >= 18 && $a <40) {
    echo"waktu tidur 7-8 jam";
}else{
    echo"tidak bisa tidur";
}

echo"<br>";

//soal3

$a = 9;

echo "3.";

if ($a>0) {
    echo "positif";
}elseif($a<0) {
    echo"negatif";
}else{
    echo"cacah";
}

echo"<br>";

//soal4

$jamkerja=14;
$kompensasi=30000;

echo"4.";

if ($jamkerja > 8) {
    $hasil = ($jamkerja - 8) * $kompensasi;
    echo"mendapatkan kompensasi $hasil";
}else {
    echo"tidak dapat";
}

echo"<br>";

//soal5

$adni=2004;
$eko= 2001;

echo"5.";
if ($adni % 4 == 0 && $eko%4 == 0 ) {
    echo"adni dan eko lahir ditahun kabisat";
}elseif ($adni % 4 == 0) {
    echo"adni lahir di tahun kabisat";
}elseif ($eko % 4 == 0) {
    echo"eko lahir di tahun kabisat";
}else {
    echo"adni dan eko tidak lahir di tahun kabisat";
}

echo"<br>";

//soal6

$bb=44;
$tb=148;

echo"6.";

$metertb=$tb/100;

$imt=$bb/($metertb ** 2);

if($imt < 18.5){
    echo "Berat Kurang";
}else if(($imt >= 18.5) && ($imt <= 22.9)){
    echo "Berat Badan Normal";
}else if(($imt > 24.9) && ($imt <= 24.9)){
    echo "Berat Badan lebih";
}else{
    echo "Berat Badan Obesitas";
}
echo "</br>";

//soal7

$nasigoreng=15000;
$ayambakar=20000;
$nasikebuli=25000;
$anekajus=8000;
$esjeruk=5000;


echo"7.";

$day = date('l,');
$tanggal =  date("M Y");
echo"$day  $tanggal, ";


if ($day == 'Friday') {
    echo '5%';
}elseif ($day == 'Monday') {
    echo '2%';
}else{
    echo "0%";
}

echo"<br>";

//soal8

$pt=13;
$lb=9;

echo"8.";

$luas= $pt * $lb;

if ($luas < 90) {
    echo"tipe rumah 36";
}elseif ($luas >= 90 && $luas <= 96) {
    echo"tipe rumah 45";
}elseif ($luas >= 96 && $luas <= 120) {
    echo"tipe rumah 54";
}elseif ($luas >= 120 && $luas <= 150) {
    echo"tipe rumah 60";
}else {
    echo"tipe rumah 70";
}

echo"<br>";


//soal10

$bayar=150000;
$voucher=10000;
$harga= ($bayar - $voucher) ;

echo"10.";

if (($bayar >= 100000) && ($bayar <= 150000)) {
    echo"mendapat voucher 10.000, anda jadi membayar ".number_format($harga);
}elseif ($bayar >= 150000) {
    echo"mendapat voucher 10.000 dan 1 dus permen kaki. anda jadi membayar".number_format($harga) ;
}else{
    echo"tidak mendapat potongan harga";
}

echo"<br>";

?>
