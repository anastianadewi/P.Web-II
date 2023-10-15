<?php
//untuk memanggil database dan controller
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
//instansiasi class database
$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    //dipanggil
    $id = $_GET['id'];

    $dosenController = new DosenController($db);
    $result = $dosenController->deleteDosen($id);
    //jika berhasil
    if ($result) {
        header("location: /JobSheet5/dosen");
    //jika gagal
    } else {
        echo "Gagal menghapus data";
    }
}
