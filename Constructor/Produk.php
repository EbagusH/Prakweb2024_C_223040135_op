<?php

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    // Kenapa memakai -- karena construct merupakan bagian dari magic method
    // Setiap dipanggil harus memasukan parameter kedalam objeknya
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Tensei Shitara Slime Datta Ken", "Fuse", "Shosetsuka dan Naro", 50000);
$produk3 = new Produk("GTA San Andreass");

echo "Komik : " . $produk1->getLabel(); // Memanggil Method
echo "<br>";
echo "Komik : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);
