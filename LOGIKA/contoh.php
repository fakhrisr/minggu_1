<?php

//perulangan for
//huruf
for ($i = 0; $i < 5; $i++) {
    echo "Wajib Ngulik <br>";
}


//angka
for ($i = 1; $i <= 10; $i++) {
    echo "{$i}";
}

echo"<br>";


//angka atas ke bawah
for ($i = 10; $i > 0; $i--) {
    echo "{$i}";
}

echo"<br>";

//while
$i = 1;

while ($i <= 20) {
    echo "{$i} ";
    $i++;
}

echo"<br>";


//do while
while (false) {
    echo "Perulangan while! <br>";
}

do {
    echo "Perulangan do while! <br>";
} while (false);


//foreach

$list = ['RPL', 'Wajib', 'Ngulik'];

foreach ($list as $l) {
    echo "Nama : {$l} <br>";
}


$string = 'wikrama';

$huruf_terakhir_kedua = substr($string, -2);

echo "String: $string <br>";
echo "Huruf terakhir kedua: $huruf_terakhir_kedua";

echo"<br>";



//latihan function

// Function definition with multiple parameters
function add($num1, $num2) {
    $sum = $num1 + $num2;
    return $sum;
}

// Function call
$result = add(5, 3);
echo "nilai: $result<br>";


//ngulik 2


function siswa($nama, $rombel, $rayon){
    echo"nama : $nama <br>
         rombel : $rombel<br>
         rayon : $rayon<br><hr>";

}

siswa('fakhri','pplg 5','ciawi 1');
siswa('fakhri','pplg 5','ciawi 1');
siswa('fakhri','pplg 5','ciawi 1');
siswa('fakhri','pplg 5','ciawi 1');



//ngulik 3

function nama($name){
    echo "nama : $name<br>";
}

nama('fakhri');
nama('smith');
nama('idoy');


//ngulik 4
function angka($a, $b, $c, $d){
    return $a * $b + $c - $d;
}

echo "2 * 2 + 11 - 10 = ". angka(2, 2, 11, 10) ;
echo"<br>";
echo"3 * 3 + 11 - 10 = ";
echo $hasil = angka(3, 3, 11, 10);
echo"<br>";


//ngulik 5
//&

function angka5(&$tambah){
	$tambah += 5;
}

$angka2 =2;
angka5($angka2);
echo "5 + 7 = $angka2";