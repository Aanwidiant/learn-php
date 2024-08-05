<?php
    // Operasi Aritmatika
    // Penambahan -> +
    echo(10+10);
    echo '<br>';
    // Pengurangan -> -
    echo(10-7);
    echo '<br>';
    // Perkalian -> *
    echo(10*7);
    echo '<br>';
    // Pembagian -> /
    echo(4/3);
    echo '<br>';

    // Operasi Aritmatika dengan Variable
    $umurAan = 24;
    $umurAas = 18;
    $umurHana = 22;

    echo($umurAan + $umurAas + $umurHana);
    echo '<br>';

    // Shorthand Operator --> +=, -=, *=, /=
    $uangBapak = 2000;
    $hargaRokok = 1000;
    $uangBapak -= $hargaRokok;
    // $uangBapak = $uangBapak - $hargaRokok;

    echo("Uang bapak setelah beli rokok: $uangBapak");
    echo '<br>';

    $uangBapak += 1500;
    // $uangBapak = $uangBapak + 1500;

    echo("Uang bapak setelah dapat bonus: $uangBapak");

?>