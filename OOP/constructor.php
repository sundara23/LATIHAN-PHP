<?php

class Produk {
    public $judul, $penulis, $penerbit, $harga;
    function __construct($judul, $penulis, $penerbit, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("Forexpreneur", "Sundara", "Muhammad Sundara", 50000);
echo "Buku : ". $produk1->getLabel();