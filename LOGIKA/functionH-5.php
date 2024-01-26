<?php

//contoh

// function tabungan() {
//     $total = 0;
//     return 'Rp. '.number_format($total,0,'.','.');
// }

// tabungan(450000);

//contoh2


function ukuran($bb, $tb){
$metertb=$tb/100;
$imt=$bb/($metertb ** 2);
    if ($imt < 18.5) {
        return "berat kurang";
    }elseif ($imt >= 18.5 && $imt <= 22.9) {
        return "Berat Badan Normal";
    }elseif ($imt > 24.9 && $imt <= 24.9) {
        return "Berat Badan lebih";
    }else{
        return "Berat Badan Obesitas";
    }

};

echo ukuran(44, 148);
echo"<br>";


//soal day
function assada($tanggal){
$day = date('l', strtotime($tanggal));

    if ($day == 'Monday') {
        echo 'senin';
    }elseif ($day == 'Tuesday') {
        echo 'selasa';
    }elseif ($day == 'Wednesday') {
        echo 'rabu';
    }elseif ($day == 'Thursday ') {
        echo 'kamis';
    }elseif ($day == 'Friday') {
        echo 'jumat';
    }elseif ($day == 'Saturday ') {
        echo 'sabtu';
    }elseif ($day == 'Sunday ') {
        echo 'minggu';
    }else {
        echo 'nama hari tidak terdeteksi';
    }
}

echo assada('2024-01-26');



?>