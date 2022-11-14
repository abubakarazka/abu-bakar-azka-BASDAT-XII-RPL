<?php 

$warnaterang = ['kuning','hijau','pink'];
$warnagelap =['hitam','abu-abu','cokelat'];

// gabungkan 2 array tersebut menjadi 1 
$semua_warna = array_merge($warnaterang,$warnagelap);

// array_manage bisa ditambahkan lebih dari 2
$semua_warna = array_merge(
    $warnaterang,
    $warnagelap,
    ['magenta','cyan','hijau kelabu']
);

// unpaking untuk mengekstrak array menggunakan
$list_buah_lokal = ['mangga','rambutan'];
$list_buah = ['kurma','anggur', $list_buah_lokal, 'kismis'];

// kurma, anggur ,mangga,rambutan, kismis,

// explode array berfungsi memecah string lalu diubah kedalam array

// explode ada 2 paramenter : delimiter(pemisah), string sasaran(sasaran yang akan kita pecah menjadi arrya)

$siswa = "andi budi dono kasino indro";
// var_dump(explode(" ",$siswa))

// impload fungsi kebalikanya explode
// untuk impload dia 2 paramenter : glue (penggambungan ), array sasaranya yang akan kita gabung menjadi string

$siswa_pintar = ['refa','agus','novan'];//array

echo implode(' chann ',$siswa_pintar); //string



?>