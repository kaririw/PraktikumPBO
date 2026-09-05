<?php

// Membuat class Product
class Product
{
    // Properti
    public $nama;
    public $harga;
    public $kategori;

    // Constructor
    public function __construct($nama, $harga, $kategori)
    {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->kategori = $kategori;
    }

    // Method untuk menampilkan informasi produk
    public function getInfo()
    {
        echo "Nama: " . $this->nama . "<br>";
        echo "Harga: Rp" . $this->harga . "<br>";
        echo "Kategori: " . $this->kategori . "<br>";
    }

    // Method untuk memberikan diskon
    public function applyDiskon($persen)
    {
        $diskon = $this->harga * $persen / 100;
        $this->harga = $this->harga - $diskon;
    }
}


// Membuat objek Product pertama
$product1 = new Product("Ipad", 7000000, "Elektronik");

// Membuat objek Product kedua
$product2 = new Product("Casing", 200000, "Aksesoris");


// Menampilkan informasi Product 1
echo "<h3>Product 1</h3>";
$product1->getInfo();

echo "<br>";

$product1->applyDiskon(10);

echo "Setelah diskon 10%:<br>";
$product1->getInfo();

echo "<hr>";


// Menampilkan informasi Product 2
echo "<h3>Product 2</h3>";
$product2->getInfo();

echo "<br>";

$product2->applyDiskon(20);

echo "Setelah diskon 20%:<br>";
$product2->getInfo();

?>