<?php

// Parent class
class Produk
{
    protected $merek;
    protected $harga;

    // Constructor
    public function __construct($merek, $harga)
    {
        if ($harga < 0) {
            echo "Harga tidak boleh kurang dari 0";
            return;
        }

        $this->merek = $merek;
        $this->harga = $harga;
    }

    // Method dari parent
    public function getInfo()
    {
        return "Merek: " . $this->merek . 
               "<br>Harga: Rp " . number_format($this->harga, 0, ',', '.');
    }
}


// Child class Makanan
class Makanan extends Produk
{
    private $tanggalKadaluarsa;

    public function __construct($merek, $harga, $tanggalKadaluarsa)
    {
        parent::__construct($merek, $harga);
        $this->tanggalKadaluarsa = $tanggalKadaluarsa;
    }

    // Override getInfo()
    public function getInfo()
    {
        return "Produk: Makanan - Bubur Instan" .
               "<br>Merek: " . $this->merek .
               "<br>Harga: Rp " . number_format($this->harga, 0, ',', '.') .
               "<br>Tanggal Kadaluarsa: " . $this->tanggalKadaluarsa .
               "<br>Status: Segar";
    }
}


// Child class Elektronik
class Elektronik extends Produk
{
    private $garansi;

    public function __construct($merek, $harga, $garansi)
    {
        parent::__construct($merek, $harga);
        $this->garansi = $garansi;
    }

    // Override getInfo()
    public function getInfo()
    {
        return "Produk: Elektronik - Laptop" .
               "<br>Merek: " . $this->merek .
               "<br>Harga: Rp " . number_format($this->harga, 0, ',', '.') .
               "<br>Garansi: " . $this->garansi . " bulan";
    }
}


// Membuat objek makanan
$makanan = new Makanan("Super Bubur", 3500, "2025-07-20");

// Membuat objek elektronik
$elektronik = new Elektronik("Lenovo", 10000000, 12);


// Menampilkan informasi
echo $makanan->getInfo();

echo "<br><br>";

echo $elektronik->getInfo();

?>