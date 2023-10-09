<?php
//membuat class mahasiswa

use mahasiswa as GlobalMahasiswa;

class mahasiswa
{
    //property public dan private
    public $nama;
    private $nim = "220302029";
    //membuat public method
    public function tampilkan_nama()
    {
        //nilai kembalian
        return "Nama Saya Anastiana Dewi </br>";
    }
    //membuat private method
    function tampilkan_nim()
    {
        //nilai kembalian
        return "NIM Saya " . $this->nim;
    }
}
//intansiasi objek mahasiswa kedalam var mahasiswa
$mahasiswa = new mahasiswa();
$nim = new mahasiswa();
//memanggil method tampilkan_nama
echo $mahasiswa->tampilkan_nama();
echo $nim->tampilkan_nim();
