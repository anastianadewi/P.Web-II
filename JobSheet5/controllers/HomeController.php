<?php
class HomeController{
    public function home(){
        header("location:http://localhost/JobSheet5/index.php");
    }
    public function mahasiswa()
    {
        header("location:http://localhost/JobSheet5/views/mahasiswa/index.php");
    }
    public function dosen()
    {
        header("location:http://localhost/JobSheet5/views/dosen/index.php");
    }
}