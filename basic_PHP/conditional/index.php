<?php
    // # sConditional Statement

    $umurAan = 24;

    // apabila umur aan < 20 tahun, maka aan akan meminum susu, selain itu aan akan meminum kopi

    if($umurAan < 20) {
        echo 'Minum Susu';
    } else {
        echo 'Minum Kopi';
    }

    echo '<br>';

    // aan punya uang 2000, harga coklat 3000, harga rokok 1000, harga permen 500

    $uangAan = 2000;
    $hargaCoklat= 3000;
    $hargaRokok = 1000;

    if ($uangAan >= $hargaCoklat) {
        echo 'Beli Coklat';
    } else if ($uangAan >= $hargaRokok) {
        echo ' Beli Rokok';
    } else {
        echo 'Beli Permen';
    }

    echo '<br>';

    // # Logical Operator

    // Jika umur aan sudah lebih dari 18 dan punya ktp, maka dia bisa menonton film Joker
    $umurAan = 24;
    $punyaKtp = true;

    if($umurAan > 18 && $punyaKtp) {
        echo 'Aan boleh menonton film Joker';
    } else {
        echo 'Aan tidak boleh menonton film Joker';
    }

    echo '<br>';

    // Jika aan menguasai javascript atau php, maka aan bisa membuat website
    $menguasaiPhp = false;
    $menguasaiJs = true;

    if($menguasaiPhp || $menguasaiJs) {
        echo 'Aan bisa membuat website';
    } else {
        echo 'Aan tidak bisa membuat website';
    }

?>

<!-- Conditional statement adalah dimana kita dapat memiliki beberapa buah statement tergantug kondisi -->
<!-- PHP Comparison Operator -->
<!-- # == (sama dengan)
     # != (tidak sama dengan)
     # > (lebih dari)
     # < (kurang dari)
     # >= (lebih dari sama dengan)
     # <= (kurang dari sama dengan) -->

<!-- Logical Operator -->
<!--
     Excample      Name     Result
     $a and $b     And      TRUE if both $a and $b are TRUE
     $a or $b      Or       TRUE if either $a or $b is TRUE
     $a xor $b     Xor      TRUE if either $a or $b is TRUE, but not both
     !$a           Not      TRUE if $a is not TRUE
     $a && $b      And      TRUE if both $a and $b are TRUE
     $a || $b      Or       TRUE if either $a or $b is TRUE
-->