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
            header("Location: " . BASEURL . "/home");
            exit;
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
}