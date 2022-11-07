<?php
//class smk jp1

class smkjp1
{
    //property
    var $guru;
    var $murid;

    //fucntion 
    function berdiri()
    {
        return "berdiri dengan selebrasi siuuuuuuuuuuuuuuuuu";
    }

    function berlari()
    {
        return "berlari 1000000 langkah";
    }
}

//instansiasi
$sekolah = new smkjp1();

$smkjpone = new smkjp1();

//isi peroperty
$sekolah->guru = "pak saipul";
$sekolah->murud = "ahmad k";

//tampilkan
echo $sekolah->guru, "", $sekolah->berdiri();
echo "<br />";
echo $sekolah->murid, "", $sekolah->berlari();
echo "<br />";

//tampolkan dari object $smkjp1
echo $sekolah->guru, "", $smkjpone->berdiri();
echo "<br />";
echo $sekolah->murid, "", $smkjpone->berlari();
