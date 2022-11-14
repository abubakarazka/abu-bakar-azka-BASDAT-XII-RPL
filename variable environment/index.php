<?php 

// function haloDunia () {
//   $nama = "Wahid Abdullah"; # variabel lokal
//   echo $nama  "<br>";
// }

// haloDunia();

// $nama = "Nurul Huda"; /* variabel global */

// function haloDunia () {
//   $nama = "Wahid Abdullah"; 
//   echo $nama  "<br>"; 
// }

// haloDunia();

// echo $nama; 

// $a = 5;
// $b = 3;

// function luas () {
//   global $a, $b;

//   $b = $a + $b;
// $_GLOBALS['b'] = $_GLOBALS['a'] + $_GLOBALS['b'];
// }

// luas();

// echo "a = {$a} <br>";
// echo "b = {$b} <br>";


function tes () {
    // $a = 0; # mendefinisikan variabel lokal
    static $a = 0; 
    echo "a: {$a} <br>";
  
    $a++; # increment variabel lokal
  }
  
  tes();
  tes();
  tes();
?>