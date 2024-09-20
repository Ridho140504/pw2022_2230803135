<?php

class model {

    function __construct(){

    }
    function cetak(){
        echo "TEST";
    }
    function potong($bahan){
        echo "potong; ".$bahan.'<br>';
    }

    // Fungsi penjumlahan
    function tambah($a, $b) { 
        $hasil=$a+$b;
        return $hasil;

    }

    // Fungsi pengurangan
    function kurang($x, $y) {
        $z=$x-$y;
        return $z;
    }

    // Fungsi perkalian
    function perkalian($num1, $num2) {
        return $num1 * $num2;
    }

    // Fungsi pembagian
    function bagi($num1, $num2) {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return 'Error! Division by zero.';
        }
    }
}