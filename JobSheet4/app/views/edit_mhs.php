<?php
include '../classes/database.php';
$db = new database();
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div style="width:30%">
    <h3>Edit Data Mahasiswa</h3>
    <a class="btn btn-success" href="tampil_mhs.php">Kembali</a>
    <form action="proses_mhs.php?aksi=update" method="post">
        <?php
        foreach ($db->edit($_GET['id']) as $d) {

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
                        <input class="btn btn-primary" type="submit" value="Simpan">
                    </td>
                </tr>
            </table>
        <?php
        }
        ?>
    </form>
</div>