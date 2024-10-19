<?php

// define('NAMA', 'Eggy Bagus H');
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;


// class Coba
// {
//     // define('NAMA', 'Eggy'); // Error
//     const NAMA = 'Eggy';
// }

// echo Coba::NAMA;

// Magic Constant
// __LINE__
// __FILE__
// __DIR__
// __FUNCTION__
// __CLASS__
// __TRAIT__
// __METHOD__
// __NAMESPACE__

// echo __FILE__;


// function coba()
// {
//     return __FUNCTION__;
// }

// echo coba();


class Coba
{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
