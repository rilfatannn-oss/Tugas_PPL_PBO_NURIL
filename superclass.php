```php
<?php

// 1. Class Parent (Superclass)
class Rental
{
    // Enkapsulasi
    private $hargaSewaPerHari;

    public function __construct($hargaSewaPerHari)
    {
        $this->hargaSewaPerHari = $hargaSewaPerHari;
    }

    // Setter untuk mengatur harga sewa
    public function setHargaSewaPerHari($harga)
    {
        $this->hargaSewaPerHari = $harga;
    }

    // Getter untuk mengambil harga sewa
    public function getHargaSewaPerHari()
    {
        return $this->hargaSewaPerHari;
    }

    // Method untuk menghitung diskon
    public function hitungDiskon($lamaSewa)
    {
        return 0;
    }

    // Menghitung total biaya setelah diskon
    public function hitungTotalSewa($lamaSewa)
    {
        $total = $this->getHargaSewaPerHari() * $lamaSewa;
        $diskon = $this->hitungDiskon($lamaSewa);

        return $total - ($total * $diskon / 100);
    }
}

// 2. Class Child RentalMobil
class RentalMobil extends Rental
{
    // Method Overriding
    public function hitungDiskon($lamaSewa)
    {
        if ($lamaSewa > 3) {
            return 10;
        }

        return 0;
    }
}

// 3. Class Child RentalMotor
class RentalMotor extends Rental
{
    // Method Overriding
    public function hitungDiskon($lamaSewa)
    {
        if ($lamaSewa > 3) {
            return 5;
        }

        return 0;
    }
}

// 4. Pengujian program (Instansiasi Objek)

echo "<h2>Sistem Rental Kendaraan</h2>";

// Objek rental mobil
$mobil = new RentalMobil(300000);
$lamaSewaMobil = 5;

echo "<h3>Rental Mobil</h3>";
echo "Harga sewa per hari: Rp"
    . number_format($mobil->getHargaSewaPerHari(), 0, ',', '.') . "<br>";

echo "Lama sewa: " . $lamaSewaMobil . " hari<br>";
echo "Diskon: " . $mobil->hitungDiskon($lamaSewaMobil) . "%<br>";

echo "Total biaya: Rp"
    . number_format($mobil->hitungTotalSewa($lamaSewaMobil), 0, ',', '.') . "<br>";

// Objek rental motor
$motor = new RentalMotor(100000);
$lamaSewaMotor = 5;

echo "<h3>Rental Motor</h3>";
echo "Harga sewa per hari: Rp"
    . number_format($motor->getHargaSewaPerHari(), 0, ',', '.') . "<br>";

echo "Lama sewa: " . $lamaSewaMotor . " hari<br>";
echo "Diskon: " . $motor->hitungDiskon($lamaSewaMotor) . "%<br>";

echo "Total biaya: Rp"
    . number_format($motor->hitungTotalSewa($lamaSewaMotor), 0, ',', '.') . "<br>";

?>
```