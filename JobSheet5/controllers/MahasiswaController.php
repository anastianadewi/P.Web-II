<?php
//menghubungkan dengan models
include_once '../../models/Mahasiswa.php';

class MahasiswaController
{
    //atribut
    private $model;
    //method
    public function __construct($db)
    {
        $this->model = new Mahasiswa($db);
    }

    public function getAllMahasiswa()
    {
        return $this->model->getAllMahasiswa();
    }

    public function creatMahasiswa($nim, $nama, $alamat){
        return $this->model->creatMahasiswa($nim, $nama, $alamat);
    }

    public function getMahasiswaById($id){
        return $this->model->getMahasiswaById($id);
    }

    public function updateMahasiswa($id, $nim, $nama, $alamat){
        return $this->model->updateMahasiswa($id, $nim, $nama, $alamat);
    }

    public function deleteMahasiswa($id){
        return $this->model->deleteMahasiswa($id);
    }
}
