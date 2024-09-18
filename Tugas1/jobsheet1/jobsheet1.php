<?php
// membuat class dan object
class mahasiswa {
   
        public $nama;
        public $nim;
        public $jurusan;
  
    // mimplemantasi constructor terhadap nama, nim, jurusan
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    
    // Metode atau Function
    public function tampilkanData() {
        return "Nama : $this->nama <br> Nim : $this->nim <br> 
        Jurusan : $this->jurusan";
    }

    public function updateJurusan() {
        $this->jurusan = "Teknik Elektro";
        return "Nama : $this->nama <br> Nim : $this->nim <br> 
        Jurusan : $this->jurusan";
    }

    public function setNIM() {
        $this->nim = "23030200";
        return "Nama : $this->nama <br> Nim : $this->nim <br> 
        Jurusan : $this->jurusan";
    }
    }

    //instansiasi objek dari class mahasiswa
    
    $mahasiswa1 = new mahasiswa("Valenisaa Falaq Hendratmoko", "230302094", "Teknik Informatika");
    echo $mahasiswa1->tampilkanData();
    echo "<hr>";
    echo $mahasiswa1->updateJurusan();
    echo "<hr>";
    echo $mahasiswa1->setNIM();

    ?> 