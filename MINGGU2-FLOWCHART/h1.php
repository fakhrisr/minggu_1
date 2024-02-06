<?php
function calculator($angka1, $angka2, $operator){
    if ($operator == '+') {
        echo $angka1 + $angka2;
    }elseif ($operator == '-') {
        echo $angka1 + $angka2;
    }elseif ($operator == '*') {
        echo $angka1 * $angka2;
    }elseif ($operator == '/') {
        echo $angka1 / $angka2;
    }else {
        echo 'tidak ada operator';
    }
}

calculator(10, 5, '+');
echo "<br>";
calculator(10, 5, '-');
echo "<br>";
calculator(10, 5, '*');
echo "<br>";
calculator(10, 5, '/');
echo "<br>";


//substr
echo substr("Hello world",6);
echo "<br>";
echo substr("Hello world",0,3);
echo "<br>";


//implode
$data = ['bahri', 'soleh', 'heni', 'hery', 'aas'];
print_r(implode(' ',$data));
echo "<br>";


//explode
$data = 'bahri, soleh, heni, hery, aas';
print_r(explode(' ',$data));
echo "<br>";
echo "<br>";


//tugas fungsi
echo"<h2>tugas mencari fungsi</h2>";

//huruf kapital di awal 
$words = ["hallo kak", "saya fakhri"];

foreach ($words as $word) {
    echo ucwords($word) . " ";
}

echo "<br>";


//nambah tanggal
$date = date_create("2024-05-01");
date_modify($date, "+3 day");
echo "Tanggal setelah ditambah 14 hari: " . date_format($date, "Y-m-d");
echo "<br>";

//huruf KAPITAL jadi kecil
$text = "HALLO KA, SAYA FAKHRI";
$hasil = strtolower($text);
echo $hasil;
echo "<br>";

//menghitung jumlah kata
$nama = "fakhri shiddiq rizkillah";
$hasil = str_word_count($nama);
echo "jumlah kata pada <b>$nama</b> adalah <b>$hasil</b> kata";


?>