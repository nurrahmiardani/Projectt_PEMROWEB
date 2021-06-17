<?php

class Auth extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('user/login');
        $this->view('templates/footer');
    }

    public function login()
    {
        $data = $_POST;

        
        $credential = $this->model('User_model')->checkCredential($data['email']);
        

        if ($credential['password'] == $data['password'])
        {
            $_SESSION['email'] = $data['email'];
            
        } else {
            Flasher::setFlasH('Login', 'Gagal', 'danger');
            header("Location: " . BASEURL . "/auth");
            exit;
        }
    }

    public function logout()
    {
        unset($_SESSION['email']);
        header("Location: " . BASEURL . "/auth");
        exit;
    }

    public function signupForm()
    {
        $data['judul'] = 'Daftar';
        $this->view('templates/header', $data);
        $this->view('user/signup');
        $this->view('templates/footer');
    }

    public function signUp()
    {
        if ($_POST['password'] != $_POST['password_confirm'])
        {
            Flasher::setFlasH('Konfirmasi Password', 'Tidak Sama', 'danger');
            header("Location: " . BASEURL . "/auth/signupform");
            exit;
        }

        if ($this->model('User_model')->add($_POST) > 0)
        {
            Flasher::setFlasH('Pendaftaran', 'Berhasil', 'success');
            header("Location: " . BASEURL . "/auth/index");
            exit;
        }
    }
}