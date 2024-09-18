<?php
// implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa.
class person {
    protected $name;
    protected $role;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

// Polymorphism membuat methode get role
  public function getRole() {
    return $this->role;
  }
}

// membuat class dosen yang merupakan anak kelas dari class Person

class dosen extends person {
// encapsulation untukmelindungi atribut nidn pada kelas dosen
    private $nidn;

    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }
// ovviride method getRole di kelas dosen
    public function getRole() {
        return "Role = Dosen";
    }
}

class mahasiswa extends person {
// encapsulation untuk melindungi atribut nim di kelas mahasiswa
    private $nim;

    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }

// override getRole di kelas mahasiswa
    public function getRole() {
        return "Role = Mahasiswa";
    }
}

// abstraction
abstract class jurnal {
    abstract public function pengajuan();
}

// kelas jurnal dosen turunan dari induk kelas jurnal
class jurnalDosen extends jurnal {
    private $juduljurnaldosen;
    
    public function __construct($juduljurnaldosen){
        $this->juduljurnaldosen = $juduljurnaldosen;
    }
    public function pengajuan() {
        return $this->juduljurnaldosen;
    }
}

class jurnalMahasiswa extends jurnal {
    private $juduljurnalmhs;
    
    public function __construct($juduljurnalmhs){
        $this->juduljurnalmhs = $juduljurnalmhs;
    }
    public function pengajuan() {
        return $this->juduljurnalmhs;
    }
}


$dosen = new dosen ("Bpk. Abda'u", "78908909");
echo $dosen->getName();
echo "<br>";
echo $dosen->getRole();
echo "<br>";
echo $dosen->getNidn();
echo "<hr>";

$mahasiswa = new mahasiswa ("Valenisaa Falaq", "230302094");
echo $mahasiswa->getName();
echo "<br>";
echo $mahasiswa->getRole();
echo "<br>";
echo $mahasiswa->getNim();
echo "<hr>";

$jurnalDosen = new jurnalDosen("Methode Abstraction");
echo "judul jurnal yang diajukan : ".$jurnalDosen->pengajuan();
echo "<br>";
$jurnalMahasiswa = new jurnalMahasiswa("Metode polymorphism");
echo "judul jurnal yang diajukan : ".$jurnalMahasiswa->pengajuan();
?>
