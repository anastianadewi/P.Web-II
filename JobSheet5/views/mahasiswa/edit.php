<?php
//untuk memanggil database dan controller
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
//instansiasi class database
$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $mahasiswaController = new MahasiswaController($db);
    $mahasiswaData = $mahasiswaController->getMahasiswaById($id);

    if ($mahasiswaData) {
        if (isset($_POST['submit'])) {
            //dipanggil
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            //dikirim ke update mahasiswa
            $result = $mahasiswaController->updateMahasiswa($id, $nim, $nama, $alamat);
            //jika berhasil
            if ($result) {
                header("location:/jobsheet5/mahasiswa");
            //jika gagal
            } else {
                header("location:edit");
            }
        }
        // jika tidak ada
    } else {
        echo "Mahasiswa tidak ditemukan";
    }
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<h3>Edit Data Mahasiswa</h3>
<a class="btn btn-success" href="/JobSheet5/mahasiswa">Kembali</a>
<?php
if ($mahasiswaData) {
?>
    <!-- menampilkan tabel form -->
    <div style="width:30%">
        <form action="" method="post">
            <?php
            foreach ($mahasiswaData as $d) {
            ?>
                <table>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">NIM</label>
                        <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                        <input type="text" id="disabledTextInput" class="form-control" name="nim" placeholder="" value="<?php echo $d['nim'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Nama</label>
                        <input type="text" id="disabledTextInput" class="form-control" name="nama" placeholder="" value="<?php echo $d['nama'] ?>">
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