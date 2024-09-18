<?php
//kelas
class Mobil {
//atribut kelas mobil
    public $merk;
    public $warna;

//construct = nilai awal suatu objek
public function __construct($merk, $warna) {
    $this->merk = $merk;
    $this->warna = $warna;
}

// Metode atau Function
public function deskripsi() {
    return "Mobil ini adalah $this->merk berwarna $this->warna.";
}
}
// Instansiasi Objek
$mobil1 = new Mobil("Toyota", "Hitam");
echo $mobil1->deskripsi();
?>