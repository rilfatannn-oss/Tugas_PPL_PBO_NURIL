<?php
class Siswa {
    //Property private, tidak bisa diubah langsung dari luar class
    private $nama;
    private$nilaiPBO;

    // Mathod public untuk mengisi data (stter)
    public function setData($namaBaru, $nilaiBaru){
$this->nama = $namaBaru;
// validasi : Nilai tidak boleh lebih dari 100
if($nilaiBaru<= 100) {
    $this->nilaiPBO = $namaBaru;
    } else {
    $this->nilaiPBO = 100;
    }
    }// Method public mengambil data (Getter)

    public function getInfo() {
    
       return "Siswa: " . $this->nama . ", Nilai PBO: " . $this->nilaiPBO;

    }
    
    }

    $siswa1 = new Siswa();
    // $siswa1->nilaiPBO = 150; // INI AKAN EROR Karna private!
    $siswa1->setDATA("BUDI", 85);
    echo $siswa1->getInfo();
    ?>


 


    

