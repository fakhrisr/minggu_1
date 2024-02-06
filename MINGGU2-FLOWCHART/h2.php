<?php   

function calculator($value1, $value2, $operator) {
    
    if ($operator == "+") {
        $result = $value1 + $value2;
    } elseif ($operator == "-") {
        $result = $value1 - $value2;
    } elseif ($operator == "*") {
        $result = $value1 * $value2;
    } elseif ($operator == "/") {
        $result = $value1 / $value2;
    } else {
        $result = "Invalid operator";
    }
    
    return $result;
}

$value1 = 10;
$value2 = 5;
$operator = "*";

echo "Hasil  " . calculator($value1, $value2, $operator);
echo "_ ";


// 3 jenis bawaan php

//abs mengembalikan nilai absolut dari angka berbeda
//(bila nila minus atau -2 akan menjadi plus 2)
echo(abs(6.7) . " ");
echo(abs(-6.7) . " ");
echo(abs(-3) . " ");
echo(abs(93));
echo "_ ";

//floor membulatkan angka ke bawah ke bilangan terdekat
//(bila nila -5.1 depannya memiliki minus akan dibulatkan ke angka terdekat menjadi -6)
echo(floor(0.2) . " ");
echo(floor(0.40) . " ");
echo(floor(5) . " ");
echo(floor(7.2) . " ");
echo(floor(-5.1) . " ");
echo(floor(-6.9));
echo "_ ";

//rand adalah hasilkan nomor acak  
//(mendapatkan angka secara acak)
echo(rand() . " ");
echo(rand() . " ");
echo(rand(10,100));
echo(rand(1,100)) . "_ ";

$angka_acak = rand(1, 100);
echo "ini adalah angka acaak " . $angka_acak;
echo "_ ";

//str adalah untuk mengubah sebuah kalimat yang kalian mau
$str = "hello";
echo str_replace("e", "o", $str) . "_ ";

//date_create, date_modify dan date_format untuk mengubah atau update tanggal
$date = date_create("2013-05-04");
date_modify($date, "+3 days");
echo "tanggal hari ini " . date_format($date, "y-m-d") . "_ ";

//menjumlahkan menggunakan sum
function sum($x, $d){
    $m = $x + $d;
    return $m;
}

echo "5 + 10 = " . sum(5,10) . " ";
echo "100 + 9 = " . sum(100,9) . "_ ";
echo"<br>";

//menghasilkan huruf random
$data = "hello";
echo strtoupper($data) . " ";
echo"<br>";


$date = [1,2,3];

if (is_array ($date)){
    echo "data adalah array";
} else {
    echo "data bukan array";
}

echo "_ ";

//mencari array untuk nilai tertentu
$makanan = ['nasi', 'indomie', 'roti'];

    $upper = array_map(function($value) {
        return strtoupper($value);
    }, $makanan);
    echo '<pre>'; print_r($upper) . " ";

$apa = array('bapak', 'ibu', 'kake', 'nenek');
$keluarga = array_pop($apa);
print_r($apa);

echo "_ ";

//mengubah huruf besar dan kecil
$username = "heri";
echo strtolower($username) . " ";
echo strtoupper($username) . "_ ";

//mencari jumlah pada kalimat
$kata = "hello world";
echo "jumlah kata " . strlen($kata) . " ";

if (strlen($kata) > 8) {
    echo "kata '$kata' memiliki lebih dari 8 kalimat";
}else {
    echo "kata '$kata' kurang dari 8 kalimat";
}

echo "_ ";

//mencari akar dari 100
echo sqrt(100) . "_ ";

$str = "hello world";
echo $str . "_ ";

$array = array(0,1,2,3,4,5,6);
sort($array);
print_r($array);

$string = "wajib ngulik";
echo "sebelum '$string' ";
echo "sesudah " . ucfirst($string) . "_ ";

for($i=0; $i<10; $i+=2){
    echo $i . ', ';
}

for($i=7; $i>0; $i--){
    echo $i . ', ';
}

$data = [
    [
        'nama' => 'andi',
        'kelas' => 'pplg xi-3',
        'rayon' => 'wikrama 2',
    ],

    [
        'nama' => 'bodo',
        'kelas' => 'pplg xi-3',
        'rayon' => 'tajur 3',
    ]
    ];

    echo print_r($data);



//tugas 3 soal
echo"<h2>tugas hari ke 3</h2>";

//soal 1
function length($kalimat){
    $kata = str_replace(' ', '', $kalimat);
    echo "Jumlah huruf: " . strlen($kata) . " ";
    echo "Jumlah kata: " . str_word_count($kalimat);
}

length('Halo Nama Saya');


?>