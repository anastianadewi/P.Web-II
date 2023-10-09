<?php
//membuat class induk atau superclass
class manusia
{
    //property
    public $nama_saya;
    protected $umur;
    //method
    function panggil_nama($saya)
    {
        $this->nama_saya = $saya;
    }
    function panggil_umur()
    {
        //nilai kembalian
        return "Umur saya : 20";
    }
}
//class turunan atau subclass manusia
class mahasiswa extends manusia
{
    public $nama_mahasiswa;
    private $nim = "220302029";
    function panggil_mahasiswa($mahasiswa)
    {
        $this->nama_mahasiswa = $mahasiswa;
    }
    function tampilkan_nim()
    {
        //nilai kembalian
        return $this->nim;
    }
}
//intansiasi class mahasiswa
$informatika = new mahasiswa();
$nim = new mahasiswa();

$informatika->panggil_nama("Anastiana");
$informatika->panggil_mahasiswa("Dewi");

//tampilkan isi dari properti
echo "Nama Depan Saya : " . $informatika->nama_saya . "</br>";
echo "Nama Belakang Saya : " . $informatika->nama_mahasiswa  . "</br>";
echo $informatika->panggil_umur() . "</br>";
echo "NIM Saya : " . $nim->tampilkan_nim();
