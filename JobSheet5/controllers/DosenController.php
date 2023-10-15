<?php
//menghubungkan dengan models
include_once '../../models/Dosen.php';

class DosenController
{
    //atribut
    private $model;
    //method
    public function __construct($db)
    {
        $this->model = new Dosen($db);
    }

    public function getAllDosen()
    {
        return $this->model->getAllDosen();
    }

    public function creatDosen($nidn, $nama, $tempat_lahir, $agama, $alamat)
    {
        return $this->model->creatDosen($nidn, $nama, $tempat_lahir, $agama, $alamat);
    }

    public function getDosenById($id)
    {
        return $this->model->getDosenById($id);
    }

    public function updateDosen($id, $nidn, $nama, $tempat_lahir, $agama, $alamat)
    {
        return $this->model->updateDosen($id, $nidn, $nama, $tempat_lahir, $agama, $alamat);
    }

    public function deleteDosen($id)
    {
        return $this->model->deleteDosen($id);
    }
}
