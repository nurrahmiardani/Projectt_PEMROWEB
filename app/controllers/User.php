<?php 

class User extends Controller {
    public function profile() {
        if (isset($_SESSION['email']))
        {
            $data['judul'] = 'Profile';
            $data['user'] = $this->model('User_model')->getCredential($_SESSION['email']);
            $this->view('templates/header', $data);
            $this->view('user/profile', $data);
            $this->view('templates/footer');
        }
    }

    public function showUpdateForm()
    {
        $data['judul'] = 'Update Profile';
        $data['user'] = $this->model('User_model')->getCredential($_SESSION['email']);
            $this->view('templates/header', $data);
            $this->view('user/update', $data);
            $this->view('templates/footer');
    }

    public function update()
    {
        if ($_POST['password'] != $_POST['password_confirm'])
        {
            Flasher::setFlasH('Konfirmasi Password', 'Tidak Sama', 'danger');
            header("Location: " . BASEURL . "/user/showUpdateForm");
            exit;
        }

        if ($this->model('User_model')->update($_POST) > 0)
        {
            Flasher::setFlasH('Update Profile', 'Berhasil', 'success');
            header("Location: " . BASEURL . "/user/showUpdateForm");
            exit;
        }
    }
}