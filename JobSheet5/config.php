<?php
//membuat class
class database{
    //atribut
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "akademik";
    var $koneksi;
    //method
    function getKoneksi(){
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        if (!$this->koneksi){
            die("Koneksi database gagal: " . mysqli_connect_error());
        }
        return $this->koneksi;
    }
}