<?php

//class parent
class Profesi {
    public function bekerja() {
        return "Melakukan pekerjaan umum...";
    }
}

//Class Child 1
class Guru extends profesi {
    // Method Overriding (menimpa method parent)
    public function berkerja() {
        return "pergi kesekolah dan mengajar siswa smk.";
    }
 }
 
 // clas child 2
 class programmer extends profesi {
    // Method Overriding
    public function bekerja() {
       return "pergi ke kelas mengajar siswa SMK.";
    }
 }
 $pakGuru = new Guru();
 $anakRPL = new programmer();
 echo $pakGuru->bekerja(); // Output:pergi ke kelas dan mengajar siswa SMK.
 echo "<br>";
 echo $anakRPL->bekerja(); // Output: Membuka vs code,mengetik kode php, meminum kopi
 ?>


    
