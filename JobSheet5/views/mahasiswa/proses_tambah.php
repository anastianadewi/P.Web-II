<?php
//untuk memanggil database dan controller
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
//instansiasi class database
$database=new database();
$db=$database->getKoneksi();

if(isset($_POST['submit'])){
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];

    $mahasiswaController=new MahasiswaController($db);
    $result=$mahasiswaController->creatMahasiswa($nim, $nama, $alamat);

    if($result){
        header("location:mahasiswa");
    }else{
        header("location:tambah");
    }
}