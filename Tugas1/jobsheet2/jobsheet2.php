<?php

// Encapsulation
// membuat class mahasiswa 
class mahasiswa { 
    private $nama;
    private $nim;
    private $jurusan;

public function __construct($nama, $nim, $jurusan) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
}
// membuat fungsi/ methode getter untuk mengambil dan setter untuk mengubah
public function getNama() {
    return $this->nama;
}

public function setNama() {
    $this->nama = $nama;
}

public function getNim() {
    return $this->nim;
} 
public function setNim() {
    $this->nim = $nim;
}

public function getJurusan() {
    return $this->jurusan;
}

public function setJurusan() {
    $this->nama = $jurusan;
}
}

// instansiasi dengan objek mahasiswa1 dari class mahasiswa
$mahasiswa1 = new mahasiswa("Valenisaa Falaq Hendratmoko", "230302094", "Teknik Informatika");
echo "<b>Encapsulation </b><br>";
// mengambil nama mahasiswa
echo $mahasiswa1->getNama();
echo "<br>";
// mengambil nim mahasiswa
echo $mahasiswa1->getNim();
echo "<br>";
// mengambil jurusan mahasiswa
echo $mahasiswa1->getJurusan();
echo "<hr>";




// Inheritance
// membuat class pengguna sebagai indukclass
class pengguna {
    protected $nama;

public function __construct($nama) {
    $this->nama = $nama;
}

// membuat methode getNama untuk mengambil nilai Nama
public function getNama() {
    return $this->nama;
}
}

// membuat class dosen yang merupakan turunan dari induk class pengguna
class dosen extends pengguna {
    private $matakuliah;

public function __construct($nama, $matakuliah) {
    // menyebut parent class 
        parent::__construct($nama);
        $this->matakuliah = $matakuliah;
    }

public function getMataKuliah() {
        return $this->matakuliah;
    }
}

// instansiasi objek dosen dari class dosen dan tampilkan data dosen
$dosen = new dosen("Ratna Nur Hidayah", "Konsep Basis Data");

echo "<b>Inheritance </b><br>";
echo $dosen->getNama();
echo "<hr>";






// polymorphism
// membuat class pengguna2 sebagai induk class
class pengguna2 {
    public function aksesFitur();
}

// membuat class dosen2 yang merupakan anak dari induk class pengguna2
class dosen2 extends pengguna2 {
    public function aksesFitur() {
        return "Nama Dosen : Vigo Dewandra Hendratmoko <br>Nip : 23304938<br> Mata Kuliah : Matematika Diskrit";

    }
}

// membuat class dosen2 yang merupakan anak dari induk class pengguna2
class mahasiswa2 extends pengguna2 {
    public function aksesFitur() {
        return "<br>Nama Mhs : Valenisaa Falaq Hendratmoko<br> Nip : 230302094<br> Mata Kuliah : Matematika Diskrit";

    }
}

// instansiasi dosen2 dan mahasiswa2
echo "<b>Polymorphism</b><br>";
$dosen2 = new dosen2();
echo $dosen2->aksesFitur();

$mahasiswa2 = new mahasiswa2();
echo $mahasiswa2->aksesFitur();
echo "<hr>";






// Abstraction
// membuat class abstract pengguna3 dan method aksesfitur
abstract class pengguna3{
    abstract public function aksesFitur();

}
// membuat class dosen3 yang merupakan anak dari induk class pengguna3
class dosen3 extends pengguna3 {
    public function aksesFitur() {
        return "Nama Dosen : Vigo Dewandra Hendratmoko <br>Nip : 23304938<br> Mata Kuliah : Matematika Diskrit";

    }
}
// membuat class mahasiswa3 yang merupakan anak dari induk class pengguna 3
class mahasiswa3 extends pengguna3 {
    public function aksesFitur() {
        return "<br>Nama Mhs : Valenisaa Falaq Hendratmoko<br> Nip : 230302094<br> Mata Kuliah : Matematika Diskrit";

    }
}

// instansiasi objek dosen 3 dan mahasiswa3 dan menampilkan data
echo "<b>Abtraction</b><br>";
$dosen3 = new dosen3();
echo $dosen3->aksesFitur();

$mahasiswa3 = new mahasiswa3();
echo $mahasiswa3->aksesFitur();

?>

