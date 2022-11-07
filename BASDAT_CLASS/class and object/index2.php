<?php

//cara untuk mengakses class dan objeck
class mobil
{
    //property
    var $merk;
    var $roda;
    var $kecepatan;

    //membuat fungsi /oprasi berjalan (maju dan mundur)
    function jalan_maju()
    {
        return "vrommmm maju";
    }
    function jalan_mundur()
    {
        return "vrommmmmm citttt mundur";
    }
}

//instansiasi (menginstankan vatiabel yang menghubungkan dari class keluar class)
//mobil keren itu object
$mobil_keren = new mobil();

//set property
$mobil_keren->merk = "ferari";
$mobil_keren->roda = "hitam";
$mobil_keren->kecepatan = "1000KmH";

//tampilkan property nya
echo $mobil_keren->merk;
echo "<br />";
echo $mobil_keren->roda;
echo "<br />";
echo $mobil_keren->kecepatan;


//tampilkan function
echo $mobil_keren->jalan_maju();
echo "<br />";
echo $mobil_keren->jalan_mundur();
