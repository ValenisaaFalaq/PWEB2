<?php
// membuat class dan object
class dosen {
   
        public $nama;
        public $nip;
        public $mataKuliah;
  
    // mimplemantasi constructor terhadap nama, nip, matakuliah
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
    
    // Metode atau Function
    public function tampilkanDosen() {
        return "Nama : $this->nama <br> Nim : $this->nip <br> 
        Mata Kuliah : $this->mataKuliah";
    }

    }

    //instansiasi objek dari class mahasiswa
    
    $dosen = new dosen("Vigo Dewandra Hendratmoko", "230302094", "Pemrograman Web");
    echo $dosen->tampilkanDosen();


    ?> 