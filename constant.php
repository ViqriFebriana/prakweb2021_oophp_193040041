<?php

// define('NAMA', 'Muhammad Viqri Febriana');
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;


// class Coba
// {
//    const NAMA = 'Muhammad Viqri Ferbaiana';
// }

// echo Coba::NAMA;

// echo __FILE__;


// function Coba()
// {
//    return __FUNCTION__;
// }

// echo coba();

class Coba
{
   public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
