<?php
class Rumah {
    private $spesifikasi, $daerah, $provinsi, $harga;
    private $potongan;
    
    function __construct($spesifikasi, $daerah, $provinsi, $harga, $potongan){
        $this->spesifikasi = $spesifikasi;
        $this->daerah = $daerah;
        $this->provinsi = $provinsi;
        $this->potongan = $potongan;
        $this->harga = $harga;
    }
    public function getSpesifikasi(){
        return $this->spesifikasi;
    }

    public function getDaerah(){
        return $this->daerah;
    }

    public function getProvinsi(){
        return $this->provinsi;
    }

    public function getHarga(){
        return $this->harga;
    }
    
    public function getPotongan(){
        return $this->potongan;
    }
}

class P_pondokIndah extends Rumah{
    public function getHargaPotongan(){
        $diskon = $this->getHarga() * $this->getPotongan() / 100;
        $hargaFix = $this->getHarga() - $diskon;
        return $hargaFix;
    }
}

class P_gadingSerpong extends Rumah{
    public function getHargaPotongan(){
        $diskon = $this->getHarga() * $this->getPotongan() / 100;
        $hargaFix = $this->getHarga() - $diskon;
        return $hargaFix;
    }
}

$perumahanPI = new P_pondokIndah("Rumah 3 Lantai", "Jakarta Timur", "DKI Jakarta", 1000000000, 50);
$perumahanGS = new P_gadingSerpong("Rumah 2 Lantai", "Serpong", "Banten", 150000000, 50);


?>