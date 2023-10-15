<?php
//membuat class
class Dosen
{
    //atribut
    private $koneksi;
    //method
    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllDosen()
    {
        $query = "SELECT * FROM dosen";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function creatDosen($nidn, $nama, $tempat_lahir, $agama, $alamat)
    {
        $query = "INSERT INTO dosen (nidn, nama, tempat_lahir, agama, alamat) VALUES('$nidn', '$nama', '$tempat_lahir', '$agama', '$alamat')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getDosenById($id)
    {
        $query = "SELECT * FROM dosen where id=$id";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function updateDosen($id, $nidn, $nama, $tempat_lahir, $agama, $alamat)
    {
        $query = "UPDATE dosen set nidn='$nidn', nama='$nama', tempat_lahir='$tempat_lahir', agama='$agama', alamat='$alamat' where id=$id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteDosen($id)
    {
        $query = "DELETE FROM dosen where id=$id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
