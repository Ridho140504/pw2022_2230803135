<?php
require_once './controller.php';

#objek baru dari model
$c=new controller();

$data=$c->hitung(1, 2, 3, 4,);
print_r($data);


#$c->cetak();

#$c->potong('bambu');
#$c->potong('kayu');
#$c->potong('kue');
#$c->potong('bebek');

#$hasil=$c->tambah(5,5);
#echo "penjumlahan :" .$hasil;
#echo "<br>";
#$z=$c->kurang(5,5);
#echo "Hasil kurang :" .$z;
