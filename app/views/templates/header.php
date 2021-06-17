<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= $data['judul'] ?></title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= BASEURL ?>/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top" class="pt-5">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="<?= BASEURL ?>/assets/img/navbar-logo.svg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="<?= BASEURL ?>/home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Benefits</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Desa</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Tutorial</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= BASEURL ?>/desa/showaddform">Tambah Desa</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= BASEURL ?>/auth/signupform">Daftar</a></li>
                        <?php if(isset($_SESSION['email'])): ?>
                            <li class="nav-item"><a class="nav-link" href="<?= BASEURL ?>/auth/logout">Logout</a></li>
                        <?php else: ?>
                            <li class="nav-item"><a class="nav-link" href="<?= BASEURL ?>/auth">Login</a></li>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
        </nav>