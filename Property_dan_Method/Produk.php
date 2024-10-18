<?php

class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    // Method adalah function yang ada didalam kelas
    // public function sayHello()
    // {
    //     return "Hello World!";
    // }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hehee";
// var_dump($produk2);

$produk3 = new Produk;
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;
// var_dump($produk3);

$produk4 = new Produk;
$produk4->judul = "Tensei Shitara Slime Datta Ken";
$produk4->penulis = "Fuse";
$produk4->penerbit = "Shosetsuka dan Naro";
$produk4->harga = 50000;

// Jika ingin membuat label

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
echo "Komik : " . $produk3->getLabel(); // Memanggil Method
echo "<br>";
echo "Komik : " . $produk4->getLabel();
