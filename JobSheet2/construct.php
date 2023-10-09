<?php
//membuat class
class mahasiswa
{
    //membuat property
    var $nim;
    var $nama;
    var $alamat;
    function __construct()
    {
        echo "Saya Mahasiswa Teknik Informatika";
        echo "<br>";
    }
    function __destruct()
    {
        echo "Politeknik Negeri Cilacap";
        echo "<br>";
    }
    //method untuk menampilkan nama
    function tampil_nama()
    {
        //isi method
        return "Nama Saya adalah Anastiana Dewi </br>";
    }
    function tampil_mahasiswa()
    {
        return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah </br>";
    }
    //method menampilkan alamat
    function tampil_alamat()
    {
        //isi method
    }
}
//membuat objek mahasiswa
$nama_mahasiswa = new mahasiswa();
//menampilkan objek ke layar
echo $nama_mahasiswa->tampil_nama();
echo $nama_mahasiswa->tampil_mahasiswa();
