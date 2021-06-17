<?php 

class Desa extends Controller
{
    public function showAddForm()
    {
        $data['judul'] = 'Tambah Desa';
        $this->view('templates/header', $data);
        $this->view('desa/tambah');
        $this->view('templates/footer');
    }

    public function add()
    {

        if ($this->model('Village_model')->add($_POST, $_FILES) > 0)
        {
            Flasher::setFlasH('Data Desa', 'Berhasil Ditambahkan', 'success');
            header("Location: " . BASEURL . "/desa/showaddform");
            exit;
        }
    }
}