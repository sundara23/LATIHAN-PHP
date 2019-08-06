<?php
//OOP
// CLASS, Method, Property ,Object
// class mobil {

//     //method
//     function mobil_edu(){
//         return "ini mobil Edu";
//     }

//     function merek_mobil(){
//         return "";
//     }
// }

// //Inisialisasi 
// $garasi = new mobil;
// echo $garasi-> mobil_edu();


// class mobil {
//     public $merek;
//     //method
//     function tampil_merek($toyota){
//         $this->merek = $toyota;
//     }
// }

// class kerangka extends mobil{
//     public $t_merek;
//     function inidalah($kerangka){
//         $this->t_merek = $kerangka;
//     }

// }
// $panggil_mobil = new kerangka;
// $panggil_mobil->tampil_merek("ini adalah mobil toyota");
// $panggil_mobil->inidalah("ini adalah mobil warna merah");

// echo "mobil : " . $panggil_mobil->merek . "<br>";
// echo "warna : " . $panggil_mobil->t_merek;

class Karyawan {
    public $nama_karyawan, $umur, $line;
    function tampil_data($nama_karyawan, $umur, $line){
        $this->nama_karyawan = $nama_karyawan;
        $this->umur = $umur;
        $this->line = $line;
    }

}
$data_karyawan = new Karyawan();
$data_karyawan->tampil_data("Adi", 26, "Backend Developer");
echo "Nama Karyawan : " . $data_karyawan->nama_karyawan . "<br>";
echo "Umur : " . $data_karyawan->umur . "<br>";
echo "Line : " . $data_karyawan->line . "<br>";
echo "--------------------------- <br>";
$data_karyawan->tampil_data("Ali", 24, "Frontend Developer");
echo "Nama Karyawan : " . $data_karyawan->nama_karyawan . "<br>";
echo "Umur : " . $data_karyawan->umur . "<br>";
echo "Line : " . $data_karyawan->line . "<br><br><br><br>";

// class Mobil{
//     private $roda;
    
//     function roda_mobil1(){
//         return $this->roda = "Roda 4";
//     }
//     function roda_mobil2(){
//        return $this->roda = "Roda 6";
//     }

// }

// $mobilku = new Mobil();

// echo "Mobil 1 : " . $mobilku->roda_mobil1() . "<br>";
// echo "Mobil 2 : " . $mobilku->roda_mobil2();

?>