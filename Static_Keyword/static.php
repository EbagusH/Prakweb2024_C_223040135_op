<?php

// class ContohStatic
// {
//     public static $angka = 1;

//     public static function halo()
//     {
//         return "Hallo" . self::$angka++ . "kali.";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();


class Contoh
{
    public static $angka = 1;

    public function halO()
    {
        return "Halo" . self::$angka++ . "kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->halO();
echo $obj->halO();
echo $obj->halO();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halO();
echo $obj2->halO();
echo $obj2->halO();
