<?php
    // Buatlah objek mobil dengan atribut jenis mobil dan warna mobil dan memiliki method menyalakan mesin.

    class Car {

        public $warnaMobil;
        public $jenisMobil;

        function __construct($warnaMobil, $jenisMobil){
            $this->warnaMobil = $warnaMobil;
            $this->jenisMobil = $jenisMobil;
        }

        function startEngine() {
            echo 'Bremmm.............';
        }
    }

    $carSedan = new Car("Silver", "Sedan");
    echo 'Saya punya mobil '.$carSedan->jenisMobil.' dengan warna '.$carSedan->warnaMobil;

    echo '<br>';


    // Buatlah objek handphone dengan atribut kualitas kamera, nama handphonendan method untuk mengambil foto.

    class Handphone {

        public $kualitasKamera;
        public $namaHandphone;

        function __construct($kualitasKamera, $namaHandphone){
            $this->kualitasKamera = $kualitasKamera;
            $this->namaHandphone = $namaHandphone;
        }

        function takePhoto(){
            echo 'Cekrek...';
        }
    }

    $handphoneRealme = new Handphone("48 MP", "Realme");

    echo 'Saya mempunyai handphone '.$handphoneRealme->namaHandphone.' yang mempunyai kualitas kamera '.$handphoneRealme->kualitasKamera;

    echo '<br>';

    echo 'Mengambil foto 3,2,1 ',$handphoneRealme->takePhoto();

?>

<!-- Access Modifier -->
<!-- Bisakah kita mengakses atribut / method itu? -->
<!-- Access Modifier adalah sebuah access control yang dimiliki oleh seuah class, atribut, atau method. -->

<!-- Tipe Tipe Access Modifier -->
<!-- # Public
     # Protected
     # Private
     # No Access Modifier -->

<!-- # Public -> Those class properties and class methods which are set to be PUBLIC is accessed from any where in PHP script.(Every where) -->

<!-- Private -> Those Class properties and class methods which are set to be PRIVATE can only be access with in the class (This class only) -->

<!-- Protected -> Those class properties and class methods which are set to be PROTECTED can only be accessed in side a class and from its child class. (This class and sub class)  -->