<?php
//untuk memanggil database dan controller
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
//instansiasi class database
$database=new database();
$db=$database->getKoneksi();

if(isset($_POST['submit'])){
    //dipanggil
    $nidn=$_POST['nidn'];
    $nama=$_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $agama = $_POST['agama'];
    $alamat=$_POST['alamat'];

    $dosenController=new DosenController($db);
    $result=$dosenController->creatDosen($nidn, $nama, $tempat_lahir, $agama, $alamat);
    //jika berhasil
    if($result){
        header("location:dosen");
    //jika gagal
    }else{
        header("location:tambahdsn");
    }
}