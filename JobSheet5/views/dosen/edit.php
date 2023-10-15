<?php
//untuk memanggil database dan controller
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
//instansiasi class database
$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $dosenController = new DosenController($db);
    $dosenData = $dosenController->getDosenById($id);

    if ($dosenData) {
        if (isset($_POST['submit'])) {
            //dipanggil
            $nidn = $_POST['nidn'];
            $nama = $_POST['nama'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $agama = $_POST['agama'];
            $alamat = $_POST['alamat'];
            //dikirim ke update mahasiswa
            $result = $dosenController->updateDosen($id, $nidn, $nama, $tempat_lahir, $agama, $alamat);
            //jika berhasil
            if ($result) {
                header("location: /JobSheet5/dosen");
            //jika gagal
            } else {
                header("location:editdsn");
            }
        }
        // jika tidak ada
    } else {
        echo "Dosen tidak ditemukan";
    }
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<h3>Edit Data Dosen</h3>
<a class="btn btn-success" href="/JobSheet5/dosen">Kembali</a>
<?php
if ($dosenData) {
?>
    <!-- menampilkan tabel form -->
    <div style="width:30%">
        <form action="" method="post">
            <?php
            foreach ($dosenData as $d) {
            ?>
                <table>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">NIDN</label>
                        <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                        <input type="text" id="disabledTextInput" class="form-control" name="nidn" placeholder="" value="<?php echo $d['nidn'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Nama</label>
                        <input type="text" id="disabledTextInput" class="form-control" name="nama" placeholder="" value="<?php echo $d['nama'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Tempat Lahir</label>
                        <input type="text" id="disabledTextInput" class="form-control" name="tempat_lahir" placeholder="" value="<?php echo $d['tempat_lahir'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Agama</label>
                        <input type="text" id="disabledTextInput" class="form-control" name="agama" placeholder="" value="<?php echo $d['agama'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Alamat</label>
                        <textarea type="text" id="disabledTextInput" class="form-control" name="alamat" placeholder="" rows="4"><?php echo $d['alamat'] ?></textarea>
                    </div>
                    <tr>
                        <td></td>
                        <td>
                            <input class="btn btn-primary" name="submit" type="submit" value="Simpan">
                        </td>
                    </tr>
                </table>
        <?php
            }
        }
        ?>
        </form>
    </div>