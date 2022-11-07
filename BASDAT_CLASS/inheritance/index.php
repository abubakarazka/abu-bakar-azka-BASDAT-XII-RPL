<?php
//pewarisan atau inheritance

//class induk
class komputer
{
    public $merk;
    public $prosesor;
    public $memory;

    //fungsi /oprasi membuat beli komputer
    public function beli_komputer()
    {
        return "beli komputerbaru";
    }
}

//class turunan/ extends dari class komputer ke class
class laptop extends komputer
{
    public function lihat_spek()
    {
        return "merk : $this->merk, proses : $this->prosesor, memory: $this->memory";
    }
}

//instansiasi
//membuat objek baru dari class laptop (kelas turunan)
$laptop_baru = new laptop();

//isi propertynya
$laptop_baru->merk = "asus";
$laptop_baru->prosesor = "amd ryzen";
$laptop_baru->memory = "1 terabyte";

//panggil functionnya
echo $laptop_baru->beli_komputer();
echo "<br />";
echo $laptop_baru->lihat_spek();
