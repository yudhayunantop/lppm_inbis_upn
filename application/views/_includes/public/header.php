<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?= $title; ?></title>
    
    <meta content="" name="description">
    <!-- KATA KUNCI MASUKKAN SINI -->
    <meta content="Inbistechnopark, Inbisupnjatim, Technoparkupnjatim, ibttechnopark" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>assets/dist/img/logoinbis2.png" rel="icon">
    <link href="<?= base_url(); ?>assets/dist/img/logoinbis2.png" rel="apple-touch-icon">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- CSS files Tabler-->
    <link href="<?= base_url(); ?>assets/dist/libs/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/demo.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/infinite-slider.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">
            
        <div class="logo">
            <h1 class="text-light">
                <a href="https://www.upnjatim.ac.id/">
                    <img src="<?= base_url(); ?>assets/dist/img/logoupnbaru.png" alt="" class="img-fluid">
                </a>
                <a href="<?= base_url(); ?>">
                    <span>IBT Technopark</span>
                    <!-- <span class="enter">Technopark</span> -->
                </a>
            </h1>
        </div>
        
        <nav id="navbar" class="navbar">
            <ul>
                <li class="dropdown"><a href="<?= base_url(); ?>"><span>Beranda</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="<?= base_url(); ?>#pengumuman">Pengumuman</a></li>
                        <li><a href="<?= base_url(); ?>#berita">Berita</a></li>
                        <li><a href="<?= base_url(); ?>#video">Video</a></li>
                        <li><a href="<?= base_url(); ?>#galeri">Galeri</a></li>
                        <li><a href="<?= base_url(); ?>#tenant">Tenant</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Tentang IBT Technopark</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="<?= base_url('/post/showIBT/IBT Technopark')?>">IBT Technopark</a></li>
                        <li><a href="<?= base_url('/post/showIBT/Profil Pimpinan dan Staff')?>">Profil Pimpinan dan Staff</a></li>
                        <li><a href="<?= base_url('/post/showIBT/Struktur Organisasi')?>">Struktur Organisasi</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Inkubasi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="<?= base_url('/post/showIBT/Program Internal')?>">Program Internal</a></li>
                        <li><a href="<?= base_url('/post/showIBT/Program Eksternal')?>">Program Eksternal</a></li>
                    </ul>
                </li>
                <li><a href="<?= base_url('uploadf/index');?>">Download</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
        
        </div>
    </header>
    <!-- End Header -->


