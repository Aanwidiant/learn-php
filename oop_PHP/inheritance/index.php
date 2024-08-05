<?php

    class Handphone {
        public $warna;
        public $bahan;

        public function __construct($bahan, $warna){
            $this->warna = $warna;
            $this->bahan = $bahan;
        }

        // Akan di override
        function phoneCall() {
            echo 'Kringg...';
        }

        function kirimPesan() {
            echo 'Loading send message...';
        }
    }

    class Smartphone extends Handphone {
        public $os;

        public function __construct($bahan, $warna, $os){
            parent::__construct($bahan, $warna);
            $this->os = $os;
        }

        function playGame(){
            echo 'Game start...';
        }

        // overriding
        function phoneCall() {
            echo 'Tuut...Tuut...';
        }

        // overloading
        function kirimPesan($namaOrang) {
            echo 'Loading send message to ', $namaOrang;
        }
    }

    $nokia = new Handphone("Plastik", "Abu-abu");

    $realMe = new Smartphone("Alumunium", "Biru", "Android");

    echo 'Saya mempunyai handphone berbahan '. $nokia->bahan. ' dan berwarna '. $nokia->warna;

    echo '<br>';

    echo 'Saya mempunyai smartphone '.$realMe->os. ' berbahan '. $realMe->bahan. ' dan berwarna '. $realMe->warna;

    echo '<br>';

    echo 'Mari bermain permainan -> ',$realMe->playGame();

    echo '<br>';

    echo 'Saya akan menelepon dengan smartphone -> ', $realMe->phoneCall();

    echo '<br>';

    echo 'Saya akan menelepon dengan handphone -> ', $nokia->phoneCall();

    echo '<br>';

    echo 'Saya akan mengirim pesan dengan smartphone -> ', $realMe->kirimPesan("Aan");

    echo '<br>';

    echo 'Saya akan mengirim pesan dengan handphone -> ', $nokia->kirimPesan();

    echo '<br>';


?>

<!-- Inheritance (Penurunan Sifat) -->
<!-- Inheritance merupakan sebuah penurunan sifat dari class parent ke class child / subclass -->
<!-- Umum -> Spesifik -->

<!-- Overriding & Overloading -->
<!-- Overriding & Overloading adalah sebuah metode untuk mengganti isi dari function yang dimiliki oleh parent class di child class -->
<!-- Overriding vs Overloading  -->
<!-- Overriding -> mengganti statement dari function -->
<!-- Overloading -> mengganti statement dari parameter function-->