<?php
require_once './model.php';
class controller
{
    public $m;
    public function __construct()
    {
        $this->m = new model();
    }
    public function hitung($a, $b, $c, $d)
    {
        $hasil1= $this->m->tambah($a, $b);
        $hasil2= $this->m->tambah($c, $d);
        $arhasil=array();
        $arhasil[0]=$hasil1;
        $arhasil[1]=$hasil2;
        return $arhasil;
    }
}
