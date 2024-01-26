<?php

//pertanyaan 1//
echo"<h2>HARI KE 1</h2>";
//point 3

$a='ikan';
$b='ikan';

if ($a == $b) {
    echo "sama";
}else{
    echo "beda";
}


//pertanyaan 2//
//3

$a = 8;
$b = 9;

    if ($a >= $b) {
        echo "sama,";
    }else {
        echo max($a, $b);
    }

echo "<br>";


//pertanyaan 3//
//2

$x="60";
$y="78";

if ($x>$y) {
    echo "kompeten";
}else{
    echo"tidak kompeten,";
}

echo "<br>";

//pertanyaan 4
//2

$a = 9;

if ($a >=0) {
    echo "positif";
}else {
     echo " negatif";
}

echo "<br>";
    
//pertanyaan 5
//2

$a=136;

if ($a % 2 == 1){ 
    echo "Merupakan Bilangan Genap"; 
}else {
    echo "Bilangan Ganjil"; 
}

echo "<br>";

//pertanyaan 6
//2

$a=176;

if ($a% 6 ==0) {
    echo "genap";
}else{
    echo "ganjil";
}

echo "<br>";

//pertanyaan 7
//3

$a = 7;

if (is_numeric ($b)) {
    echo "variabel $a numeric";
}else{
    echo "variabel $b string";
}

echo "<br>";

//pertanyaan 8
//2

$b = "";

if ($b === null) {
    echo "$b tidak ada value";
}else{  
    echo"$b tidak ada value";
}

echo "<br>";

//pertanyaan 9
//3

$a = 16;

if ($a>=17) {
    echo "andi bisa membuat ktp";
}else{
    echo "andi belum bisa membuat ktp";
}

echo "<br>";

//pertanyaan 10
//3

$harga=154000;
$promo=100000;

if ($harga>= $promo) {
    $harga* $promo * 0.7;
    echo " dapat diskon";
}else{
    $harga* promo;
    echo " tidak dapat diskon";
}

echo"<br>";

//total point 25


?>