<?php

// Membuat class Mobil
class Mobil
{
    // Properti mobil
    public $merek;
    public $warna;
    public $kecepatan;

    // Constructor
    public function __construct($merek, $warna, $kecepatan)
    {
        $this->merek = $merek;
        $this->warna = $warna;
        $this->kecepatan = $kecepatan;
    }

    // Method untuk menampilkan informasi mobil
    public function getInfo()
    {
        echo "Merek: " . $this->merek . "<br>";
        echo "Warna: " . $this->warna . "<br>";
        echo "Kecepatan: " . $this->kecepatan . " km/jam<br>";
    }

    // Method untuk menjalankan mobil
    public function jalankan()
    {
        echo "Mobil berjalan...<br>";
    }

    // Method untuk menghentikan mobil
    public function berhenti()
    {
        echo "Mobil berhenti<br>";
    }
}


// Membuat objek mobil pertama
$mobil1 = new Mobil("Mercedes", "Hitam", 110);

// Membuat objek mobil kedua
$mobil2 = new Mobil("Ferrari", "Merah", 120);

// Membuat objek mobil ketiga
$mobil3 = new Mobil("Hyundai", "Abu", 100);


// Menampilkan informasi mobil 1
echo "<h3>Mobil 1</h3>";
$mobil1->getInfo();
$mobil1->jalankan();
$mobil1->berhenti();

echo "<hr>";


// Menampilkan informasi mobil 2
echo "<h3>Mobil 2</h3>";
$mobil2->getInfo();
$mobil2->jalankan();
$mobil2->berhenti();

echo "<hr>";


// Menampilkan informasi mobil 3
echo "<h3>Mobil 3</h3>";
$mobil3->getInfo();
$mobil3->jalankan();
$mobil3->berhenti();

?>
