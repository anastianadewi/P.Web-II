<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<h3>Tambah Data Dosen</h3>
<a class="btn btn-success" href="dosen">Kembali</a>
<!-- tabel form -->
<div style="width:30%">
    <form action="prosestambahdsn" method="post">
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">NIDN</label>
            <input type="text" id="disabledTextInput" class="form-control" name="nidn" placeholder="Masukkan NIDN">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Nama</label>
            <input type="text" id="disabledTextInput" class="form-control" name="nama" placeholder="Masukkan Nama">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Tempat Lahir</label>
            <input type="text" id="disabledTextInput" class="form-control" name="tempat_lahir" placeholder="Masukkan Tempat Lahir">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Agama</label>
            <input type="text" id="disabledTextInput" class="form-control" name="agama" placeholder="Masukkan Agama">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Alamat</label>
            <textarea type="text" id="disabledTextInput" class="form-control" name="alamat" placeholder="Masukkan Alamat" rows="4"></textarea>
        </div>
        <tr>
            <td></td>
            <td><input class="btn btn-primary" type="submit" name="submit" value="Simpan"></td>
        </tr>
    </form>
</div>