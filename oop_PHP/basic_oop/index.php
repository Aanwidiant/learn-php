<?php

    class Cat {
        public $warnaKucing;
        public $jenisKucing;
        public $warnaMata;

        // constructor
        // constructor adalah sebuah function dimana dia akan dipanggil pertama setelah pembuatan objek

        function __construct($warnaKucing, $jenisKucing, $warnaMata) {
            $this->warnaKucing = $warnaKucing;
            $this->jenisKucing = $jenisKucing;
            $this->warnaMata = $warnaMata;
        }

        function mengeong() {
            echo 'Meoooongggg.....';
        }
    }

    $catPersia = new Cat("Hitam", "Persia", "Hitam");
    $catAnggora = new Cat("Oranye", "Anggora", "Merah");
    $catKampung = new Cat("Coklat", "Kampung", "Coklat");

    echo $catPersia->warnaKucing;
    echo '<br>';
    echo $catPersia->jenisKucing;
    echo '<br>';
    echo 'Saya punya kucing '.$catPersia->warnaKucing.' dan jenisnya adalah '.$catPersia->jenisKucing. ' dan punya mata '.$catPersia->warnaMata;
    echo '<br>';
    echo 'Saya punya kucing '.$catAnggora->warnaKucing.' dan jenisnya adalah '.$catAnggora->jenisKucing. ' dan punya mata '.$catAnggora->warnaMata;
    echo '<br>';
    echo 'Saya punya kucing '.$catKampung->warnaKucing.' dan jenisnya adalah '.$catKampung->jenisKucing. ' dan punya mata '.$catKampung->warnaMata;
    echo '<br>';
    $catPersia->mengeong();

?>

<!-- Object Oriented Programming / OOP-->
<!-- OOP adalah sebuah paradigma pemrograman dimana kita akan melakukan koding menggunakan objek -->

<!-- Class -> sebuah blueprint -->
<!-- Class adalah sebuah bluepriint atau rancangan dari sebuah objek yang akan dibuat -->

<!-- Attribute -->
<!-- Hal yang dimiliki oleh class -->
<!-- # Class Manusia -> Hidung, Mata, Tangan, dll.
     # Class Gitar -> Senar, Warna Gitar, Tuner, dll.
     # Class Handphone -> Kamera, Layar, Bahan Handphone, dll. -->

<!-- Method -->
<!-- Hal yang bisa dilakukan oleh class (Kata kerja) -->
<!-- # Class Manusia -> Mkan, Mandi, Olahraga, dll.
     # Class Gitar -> Ganti Pickup, Tune Gitar, Genjreng, dll.
     # Class Handphone -> Ambil Foto, Main Game, dll. -->