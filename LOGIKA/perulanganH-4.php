<?php

//hari ke 4

// soal1
//point 5

$sekolah = 'wikrama';

echo$hasil = substr($sekolah, -2, 1); 


//soal 2
//point 5

for ($i = 1; $i <= 10; $i++) {
    echo "{$i} <br>";
}

//soal 3

for ($i = 10; $i > 0; $i--) {
    echo "{$i} <br>";
}


//soal 4

for ($i = 1; $i <= 6; $i++) {
    echo "<h$i>HTML </h$i><br>";
}

//soal 5
//point

for ($i = 1; $i <= 30; $i++) {
    if ($i % 4 == 0) {
        echo "$i  <br>";
    }
}

//soal 6

$y=0;

for ($i=5; $i <= 25; $i +=5) { 
    if (225 % $i == 0) {
        $y++;
    }
}

echo "$y";

//soal 7
//point5

$nama = [
    [
    "nama" => "Andi",
    "rombel" => "PPLG XI-4",
    "rayon" => "ciawi 4",
    "jk" => "L"
    ],
    [
     "nama" => "Sasa",
     "rombel" => "PPLG XI-6",
     "rayon" => "sukasari 1",
     "jk" => "p"
    ],
    [
     "nama" => "Lala",
     "rombel" => "PPLG XI-3",
     "rayon" => "cisarua 3",
     "jk" => "p"
    ],
    [
     "nama" => "Beni",
     "rombel" => "PPLG XI-2",
     "rayon" => "cicurug 2",
     "jk" => "L"
    ]
 ];
 

foreach($nama as $siswa){ 
echo"<br>";
echo "nama :". $siswa["nama"];
echo"<br>";
echo "rombel :".$siswa["rombel"];
echo"<br>";
echo "rayon :".$siswa["rayon"];
echo"<br>";
echo "jk :".$siswa["jk"];
echo"<br><hr>";
}


//soal 8
//point


$bilangan = array(75, 77, 87, 70, 90, 81, 69, 87, 66);

$kompeten = array();
$belum_kompeten = array();

foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        $kompeten[] = $nilai;
    } else {
        $belum_kompeten[] = $nilai;
    }
}

echo "kompeten: ";
foreach ($kompeten as $nilai_kompeten) {
    echo $nilai_kompeten . ' ';
}

echo "<br>";

echo "Belum Kompeten : ";
foreach ($belum_kompeten as $nilai_belum_kompeten) {
    echo $nilai_belum_kompeten . ' ';
}

//soal 9
//point
for ($i = 1; $i <=3; $i++) {
    for ($j = 1; $j <=10; $j++) {
        echo "$i x $j = " . $i * $j . " | "; 
    }
}

echo "<br>";




//soal 10

$nama = [
    [
    "nama_barang" => "pasta gigi",
    "harga_barang" => 18000,
    "jumlah_beli" => 1,
    ],
    [
    "nama_barang" => "sabun mandi",
    "harga_barang" => 5000,
    "jumlah_beli" => 3,
    ],
    [
    "nama_barang" => "pasta gigi",
    "harga_barang" => 15000,
    "jumlah_beli" => 5,
    ],
   
 ];

 $total_harga = 0;

foreach ($nama as $barang) {
    $total_harga += $barang["harga_barang"] * $barang["jumlah_beli"];
}

echo "Jumlah Harga Barang: Rp " . number_format($total_harga, 0, ',', '.');
echo"<br>";


//soal 11

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$kelompok_pertama = [];
$kelompok_kedua = [];

foreach ($bil1 as $nilai) {
    if (in_array($nilai, $bil2)) {
        $kelompok_pertama[] = $nilai;
    } else {
        $kelompok_kedua[] = $nilai;
    }
}

foreach ($bil2 as $nilai) {
    if (!in_array($nilai, $kelompok_pertama)) {
        $kelompok_kedua[] = $nilai;
    }
}

echo "Kelompok Pertama: ";
foreach ($kelompok_pertama as $nilai) {
    echo $nilai . ' ';
}
echo "<br>";

echo "Kelompok Kedua: ";
foreach ($kelompok_kedua as $nilai) {
    echo $nilai . ' ';
}

echo"<br>";


//soal 12

$barang = [
    [
    'nama' => 'Ban', 
    'diskon' => '10'
    ],
    [
    'nama' => 'oli mesin'
    ],
    [
    'nama' => 'kampas rem'
    ],
    [
    'nama' => 'busi', 
    'diskon' => '9'
    ],
    [
    'nama' => 'akumulator', 
    'diskon' => '7'
    ],
        ];

foreach ($barang as $item) {
    if (isset($item['diskon'])) {
        echo "Nama: " . $item['nama'] . ", Diskon: " . $item['diskon'] . "<br>";
    }
}



echo"<br>";


///soal 13
$data = [
    [
      'nama' => 'Andi',
      'tahun' => '2008',
    ],
    [
        'nama' => 'Beni',
        'tahun' => '2001',
    ],
    [
        'nama' => 'Dani',
        'tahun' => '2004',
    ],
    [
        'nama' => 'Eko',
        'tahun' => '2006',
    ],
  ];
  
  $kabisat;
  
  foreach ($data as $datas) {
    if ($datas['tahun'] % 4 == 0 ) {
      echo $kabisat = $datas['nama'] ." ";
    };
  }
  
  echo"<br>";
  echo"<br>";
  
  //soal 14
  $student = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'Danii',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
    ],
  ];
  
  foreach ($student as $std) {
    $jumlah = array_sum($std['nilai']);
    echo "Jumlah Nilai " .$std['nama'] ." adalah "  .$jumlah  ."<br>";
  }



?>