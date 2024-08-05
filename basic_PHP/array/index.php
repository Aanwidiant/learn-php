<?php

    $arrayNama = ["Aan", "Aas", "Hana", "Ajeng", "Neta"];

    // Akses array
    echo $arrayNama[2];

    echo '<br>', '<br>';

    // Mencetak semua data pada array
    foreach($arrayNama as $arr) {
        echo $arr;
        echo '<br>';
    }

    echo '<br>';

    // Array Case
    // Aan memiliki keranjang berisi telur, daging, dan sayur
    // Tampilkan isi keranjang Aan

    $keranjangAan = ["Telur", "Daging", "Sayur"];

    foreach($keranjangAan as $keranjang) {
        echo "$keranjang, " ;
    }

    echo '<br>';    

    // Aan memiliki kelereng warna hitam, merah, dan emas
    // Tampilkan semua kelereng Aan
    // Jika kelereng Aan berwarna emas, maka tampilkan 'Ini kelereng mahal'

    $kelerengAan = ["Hitam", "Merah", "Emas"];

    foreach($kelerengAan as $kelereng) {
        if($kelereng == "Emas") {
            echo "Ini kelereng mahal: ";
        }
        echo "$kelereng, ";
    }


?>

<!-- Array / Kumpulan Data -->
<!-- Array adalah sebuah kumpulan data-data -->
<!-- Array vs Variable -->
<!-- Variable hanya bisa menyimpan 1 data -->
<!-- Array bisa menyimpan banyak data -->