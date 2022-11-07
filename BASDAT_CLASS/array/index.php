<?php

// array adalah tipe data yang berisi beberapa tipe data (string maupun integer)
// keynya diawali dengan angka 0 dst

// array asosiatif
// keynya berubah menjadi tipe data string

$siswa = [
    // keynya bisa int/string
    'sipalingganteng' => 'arjuna',
    'sipalingcantik' => 'nita',
    'sipaling netral' => 'ahmad sandi',
];

// echo "siapa yang paling ganteng ? {$siswa[0]}";

$togel = [
    [1, 2, 3, 4, 5],
    [6, 7, 8, 9, 22],
    [12, 15, 13, 14, 51],
    [19, 21, 31, 47, 35],
];

// cara memanggil array
// echo $togel[2][3];

//array push 
// array push berguna untuk menerima 2 paramenter paramenter pertama :untuk target,paramenter kedua untuk yang akan dimsukan

$sayur = ['bayem', 'kangkung', 'sawi'];
$buah = ['pisang', 'kelapa', 'coklat'];

// cara pertama untuk menambah item
array_push($buah, 'timun');

// cara yang kedua 
$sayur[] = 'labu';

echo $buah[3];
echo $sayur[3];
