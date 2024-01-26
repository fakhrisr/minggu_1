<?php

//hari ke 3

echo"<h2>HARI KE 3</h2>";

//soal 2 H-1
$a='lele';
$b='lele';

$ucapan= $a == $b ? "sama" : "tidak sama";
echo"$ucapan";

echo "<br>";


//soal 7 H-1
$a = 7;

$ucapan= is_numeric($a) ? "numerik" : "string";
echo"$ucapan";

echo"<br>";

//soal H-2

$a=0;

$ucapan = $a < 0 ? "negatif"
            : ($a > 0 ? "positif"
            : "cacah"); 
echo"$ucapan";

echo"<br>";


//soal 7 H-2

$day= date('l');
$ucapan = $day == 'Friday' ? "5%" 
        : ($day == 'Monday' ? "2%" 
        : "0%");
echo"$ucapan";

echo"<br>";


//soal 10 H-2
$bayar=150000;
$voucher=10000;
$diskon=($bayar - $voucher);

$hasil= $bayar >=100000 ? "harga menjadi".number_format($diskon) : " tidak mendapat diskon";
echo"$hasil";

echo"<br>";


//soal 8 H-2
$pt=13;
$lb=9;
$luas= $pt * $lb;

$hasil= $luas < 90 ? "tipe rumah 36" 
        : ($luas >= 90 && $luas <= 96 ? "tipe rumah 45 "
        : ($luas >= 96 && $luas <= 120 ? "tipe rumah 54"
        : ($luas >= 120 && $luas <= 150 ? "tipe rumah 60" 
        : "tipe rumah 70")));
echo $hasil;

echo"<br>";

//soal sendiri

$fakhri=100000;
$diskon=0.5;

$hasil=$fakhri >= 50000 ? "harga jadi". number_format($fakhri - $diskon) : "tidak dapat diskon";
echo"$hasil";
        

//soal
echo"<h2>soal :</h2>";

//soal 1
//point5

$andi=850000;
$bunga=0.05;

echo"1.";

$hasil= $andi >= 500000 ? " bunga menjadi". number_format($andi * $bunga + $andi
) : "tidak mendapat bunga";
echo"$hasil";

echo"<br>";


//soal 2
//point3
$jam= 19.00;

echo"2. ";

$hasil= $jam >= 12 ? "0". $jam - 12 . ".00pm" : "0". $jam. ".00am";
echo"$hasil";

echo"<br>";


//soal 3
//point3

$day= date('l');

echo"3. ";

echo  $hasil = $day == "Monday" ? "upacara" : "tidak upacara";

echo"<br>";


//soal 4
//point 5

$nilai=90;

echo"4. ";

echo $hasil= $nilai >= 90 ? "mendapat predikat A"
        : ($nilai >= 75 ? "predikat b" : "predikat c");

echo"<br>";


//soal 5
//point3

$status = "sakit";
$persen = 100;

echo"5. ";

echo $hasil = $status == 'sakit' || $status == 'izin' ? $persen - 3 :(($status == 'alfa') ? $persen - 5 : 0);

?>