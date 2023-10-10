<?php
include '../classes/database_dsn.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_dsn($_POST['nidn'], $_POST['nama'], $_POST['tempat_lahir'], $_POST['agama'], $_POST['alamat']);
    header("location:tampil_dsn.php");
} else if ($aksi == "update") {
    $db->update($_POST['id'], $_POST['nidn'], $_POST['nama'], $_POST['tempat_lahir'], $_POST['agama'], $_POST['alamat']);
    header("location:tampil_dsn.php");
} else if ($aksi == "hapus") {
    $db->hapus($_GET['id']);
    header("location:tampil_dsn.php");
}
