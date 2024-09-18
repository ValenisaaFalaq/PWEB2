<?php
// kelas mewarisi properti dan metode dari kelas lain
class Produk {
    protected $nama;

public function __construct($nama) {
    $this->nama = $nama;
}

public function getNama() {
    return $this->nama;
}
}

// class buku disini merupakan turunan dari produk
class Buku extends Produk {
    private $penulis;

public function __construct($nama, $penulis) {
    parent::__construct($nama);
    $this->penulis = $penulis;
}

public function getPenulis() {
    return $this->penulis;
}
}

// kita dapat mengakses property nama pada class produk dengan menggunakan class buku
$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->getNama(); // Output: Pemrograman PHP

// parent class gabisa mengakses class tuurunannya. dalam hal ini class Produk tidak dapat mengakses method getPenulis
?>