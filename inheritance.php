<?php

// Class Induk (parent)
class kendaraan
{

   public $merk;
   public function __construct($merk)
   {

      $this->merk = $merk;
      }
      public function berjalan()
      {

          return $this->merk . " sedang melaju...";
      }
}
// Class Mobil (Child) mewarisi class kendaraan
class Mobil extends kendaraan
{
    public $jumlahPintu = 4;
    public function bukaPintu()
    {

       return "Membuka " . $this->jumlahPintu . " pintu mobil " .$this->merk;
    }  
}

$mobilRPL = new Mobil("Toyota");
echo $mobilRPL->berjalan(); // Menggunakan method warisan dari Parent
echo "<br>";
echo $mobilRPL->bukaPintu(); // Menggunakan method milik child sendiri

   
