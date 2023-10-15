<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';

//instansiasi class database
$database = new database;
$db = $database->getKoneksi();

$dosenController = new DosenController($db);
$dosen = $dosenController->getAllDosen();
?>

<div class="px-5">
    <h3>Data Dosen</h3>
    <a class="btn btn-primary mb-2 mt-2" href="tambahdsn">Tambah Dosen</a>
    <br>
    <table class="table" style="text-align:center;">
        <tr>
            <th>No</th>
            <th>NIDN</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($dosen as $x) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $x['nidn'] ?></td>
                <td><?php echo $x['nama'] ?></td>
                <td><?php echo $x['tempat_lahir'] ?></td>
                <td><?php echo $x['agama'] ?></td>
                <td><?php echo $x['alamat'] ?></td>
                <td>
                    <a class="btn btn-warning" href="editdsn/<?php echo $x['id']; ?>">Edit</a>
                    <a class="btn btn-danger" href="hapusdsn/<?php echo $x['id']; ?>" onclick="return confirm('Apakah yakin akan menghapus..?')">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
</div>