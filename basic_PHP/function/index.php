<?php

    function getAanItem($barangAan){
        foreach($barangAan as $barang) {
            echo "$barang, ";
        }
    }

    function deleteArray(){
        $barangAan = ["Robot", "Tamiya", "Gasing", "Kelereng"];
        unset($barangAan[2]);
        getAanItem($barangAan);
    }

    // getAanItem();
    
    deleteArray();

    echo '<br>';

    // Function memiliki return value
    // String, Float, Int, Boolean
    function getName() {
        return "Ini Aan";
    }

    echo getName();

    echo '<br>';

    function getInt5() {
        return 5;
    }

    function getInt2() {
        return 2;
    }

    echo getInt5();

    echo '<br>';

    echo getInt5() + getInt2();

?>

<!-- Function -->
<!-- Function adalah section of code yang menjalankan task yang spesifik -->