<?php

// soal no 2.1 fungsi nilai akhir
 
class Nilai { //cetakan
    public $uts;  //role
    public $uas;
    public $tugas;

    public function hitungNilaiAkhir(){
        return (float)(($this->uts * 0.30)+ //tugasnya
                        ($this->uas  * 0.4) +
                        ($this->tugas * 0.30));
    }
}

$nilai = new Nilai(); //objek

$nilai->uts = 80; //orangnya
$nilai->uas = 90;
$nilai->tugas = 90;

echo "Nilai Akhir: " . $nilai->hitungNilaiAkhir();

echo "<br>"; 

// soal no 2.2 deret fibonacci

class Fibonacci{
    public function cetakDeret($jumlah){
        $s = 0;
        $r = 1;

        for ($i = 0; $i < $jumlah; $i++) {
            echo $s . " ";

            $c = $s + $r;
            $s = $r;
            $r = $c;
        }
    }
}

$fibonacci = new Fibonacci();

$fibonacci->cetakDeret(10);




?>
