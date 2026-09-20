<?php

// 1. Interface Bentuk dengan method hitungLuas()
interface Bentuk {
    public function hitungLuas();
}

// 2. Class Persegi mengimplementasikan interface Bentuk Persegi
class Persegi implements Bentuk {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas() {
        return $this->sisi * $this->sisi;
    }

    public function getSisi() {
        return $this->sisi;
    }
}

// 3. Class Lingkaran mengimplementasikan interface Bentuk Lingkaran
class Lingkaran implements Bentuk {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function hitungLuas() {
        return 3.14 * $this->radius * $this->radius;
    }

    public function getRadius() {
        return $this->radius;
    }
}

// 4. Menampung objek dalam satu array dan melakukan loop
$daftarBentuk = [
    new Persegi(5),
    new Lingkaran(7)
];

foreach ($daftarBentuk as $bentuk) {
    if ($bentuk instanceof Persegi) {
        echo "Luas Persegi (sisi=" . $bentuk->getSisi() . "): " . $bentuk->hitungLuas() . "\n";
    } elseif ($bentuk instanceof Lingkaran) {
        echo "Luas Lingkaran (radius=" . $bentuk->getRadius() . "): " . $bentuk->hitungLuas() . "\n";
    }
}