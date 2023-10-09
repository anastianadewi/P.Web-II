<?php
//membuat class
class mahasiswa
{
    //membuat property
    var $nim;
    var $nama;
    var $alamat;
    //method untuk menampilkan nama
    function tampil_nama()
    {
        //isi method
        return "Nama Saya adalah Anastiana Dewi </br>";
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

//membuat class
class dosen
{
    //membuat property
    var $nidn;
    var $nama;
    var $prodi;
    //method untuk menampilkan nama
    function tampil_nama()
    {
        //isi method
        return "Nama Saya adalah Anastiana Dewi";
    }
}
//membuat objek dosen
$nama_dosen = new dosen();
//menampilkan objek ke layar
echo $nama_dosen->tampil_nama();
