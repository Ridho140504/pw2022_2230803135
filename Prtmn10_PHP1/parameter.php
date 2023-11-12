<?php
function luas_dua_kubus($a, $b) {

    return $a * $a * $a + $b * $b * $b;

}
echo luas_dua_kubus(9,4); "</br>";//menghasilkan 793

$hasil = luas_dua_kubus(10, 2);
echo $hasil; // mengahasilkan 1008

$x = 4;
echo luas_dua_kubus($x*3, $x/2); //menghasilkan 1736
?>