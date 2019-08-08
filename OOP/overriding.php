<?php

class Produk {
    public $judul, $penulis, $penerbit, $harga;
    function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
    function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}
class Komik extends Produk{
    public $jmlHalaman;
    function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)

}

$produk1 = new Produk("Forexpreneur", "Sundara", "Muhammad Sundara", 50000);
echo "Buku : ". $produk1->getLabel();



// class Mobil {
//     public $nama, $merk, $warna, $kecepatanMaksimal, $jumlahPenumpang;
//     public function tambahKecepatan(){
//         return "Kecepatan bertambah";
//     }
// }

// class MobilSport extends Mobil {
//     public $turbo = false;

//     public function jalankanTurbo(){
//         $this->turbo = true;
//         return "Turbo dijalankan!";
//     }
// }
// $mobil1 = new MobilSport;

// class Kendaraan {
//     public $kendaraanApa, $merk, $tahun, $harga, $jenis, $type;
//     public function __construct($jenis = "Jenis Motor / Mobil", $kendaraanApa = "Nama Kendaraan", $merk = "Merk", $tahun = "Tahun", $harga = 0, $type = "Matic/Manual"){
//         $this->kendaraanApa = $kendaraanApa;
//         $this->merk = $merk;
//         $this->tahun = $tahun;
//         $this->harga = $harga;
//         $this->jenis = $jenis;
//         $this->type = $type;
//     }

//     public function getNama(){
//         return "$this->kendaraanApa, $this->merk";
//     }
//     public function getInfoKendaraan(){
//         return "{$this->getNama()} {$this->tahun} RP. ({$this->harga})";
//     }
// }

// class Mobil extends Kendaraan {
//     public function getDetailKendaraan(){
//         return "{$this->jenis} : {$this->getNama()} {$this->getInfoKendaraan()} {$this->type}";
//     }
// }

// class Motor extends Kendaraan {
//     public function getDetailKendaraan(){
//         return "{$this->jenis} : {$this->getNama()} {$this->getInfoKendaraan()} {$this->type}";
//     }
// }

// $kendaraan1 = new Mobil("Mobil","Toyota", "Avanza", "2017", 250000000, "Manual");
// $kendaraan2 = new Motor("Motor","Yamaha", "N-Max", "2020", 25000000, "Matic");
// echo $kendaraan1->getDetailKendaraan();
// echo "<br>";
// echo $kendaraan2->getDetailKendaraan();