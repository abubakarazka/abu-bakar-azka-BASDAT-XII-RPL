<?php

function kelas()
{
    static $kelas = 'saya adalah siswa XII RPL';
    echo "hai : {$kelas} <br>";
    $kelas++;
}

kelas();
