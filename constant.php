<?php

// define('NAMA', 'Sandhika Galih');
// echo NAMA;
// echo "<br>";

// const UMUR = 23;
// echo UMUR;

// class Coba {
//     const NAMA = 'Sandhika';
// }
// echo Coba::NAMA;

// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class coba {
     public $kelas = __CLASS__;
}

$obj = new coba;
echo $obj->kelas;