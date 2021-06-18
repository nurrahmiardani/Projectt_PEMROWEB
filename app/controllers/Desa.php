<?php 

class Desa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Lihat Desa';
        $data['villages'] = $this->model('Village_model')->getAll();

        $this->view('templates/header', $data);
        $this->view('desa/index', $data);
        $this->view('templates/footer');
    }

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

    public function delete($id)
    {
        if ($this->model('Village_model')->delete($id) > 0)
        {
            Flasher::setFlasH('Data Desa', 'Berhasil dihapus', 'success');
            header("Location: " . BASEURL . "/desa");
            exit;
        }
    }
}