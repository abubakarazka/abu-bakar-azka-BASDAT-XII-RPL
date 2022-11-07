<?php

//cara membuat functiom
function ngoding()
{
}
//function bisa di kategorikan menggunakan publik ,protected,privete
class vscode
{
    public function coding_php()
    {
    }
}

//mencoba membuat fungsi yang ada pramater
//mencoba buat fungsi
function sapa_teman()
{
    echo "<h1>hai gais</h1>";
    echo "<h3>bertemu lagi bersama guweh, guwh young lex, adek gw ga mirip young lex</h3>";
}
function temen()
{
    $temen_1 = "young lex";
    echo "<h2>hey disini gw sama $temen_1 ,young lex anjjing</h2>";
}


//cara panggil fungsi
//tuliskan nama fungsinya bersamaan
sapa_teman();

//jika fungsi menggunakan pramenter harus ditulis saat pemanggilanya
temen("young lex,pandu,lampu");
temen("adek gw gak mirip young lex");
temen("");

//mencoba membuat menggunakan percabangakan
function kasir($nama, $jumlah)
{

    echo "<h3>hai ($nama) terimakasih telah berkunjung </h3>";
    echo "<h3>dan jangan lupa kempabi lagi</h3>";
    //menbuat perulangan menggunakan if 
    if ($jumlah > 10) {
        echo "<h3>gokilll kamu dapet mobil karna telah berkunjung sebanyak ($jumlah) kali</h3>";
    }
}
//panggil fungsinya
kasir("young", 11);
