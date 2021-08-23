<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?= $title; ?></title>
    
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>assets/img/favicon.png" rel="icon">
    <link href="<?= base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
            <h1 class="text-light">
                <a href="<?= base_url(); ?>">
                <img src="<?= base_url(); ?>assets/dist/img/logoupnbaru.png" alt="" class="img-fluid">
                <span>Moderna</span>
                </a>
            </h1>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li class="dropdown"><a href="<?= base_url(); ?>"><span>Beranda</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                                <li><a href="<?= base_url(); ?>#berita">Berita</a></li>
                                <li><a href="<?= base_url(); ?>#pengumuman">Pengumuman</a></li>
                                <li><a href="<?= base_url(); ?>#galeri">Galeri</a></li>
                            </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Tentang IBT Technopark</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                                <li><a href="#">IBT Technopark</a></li>
                                <li><a href="#">Profil Pimpinan dan Staff</a></li>
                                <li><a href="#">Struktur Organisasi</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Inkubasi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                                <li><a href="#">Program Internal</a></li>
                                <li><a href="#">Program Eksternal</a></li>
                    </ul>
                </li>
                <li><a href="#">Download</a></li>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    </div>
</header>
<!-- End Header -->
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <!-- Slide 1 -->
    <div class="carousel-item active">
        <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Moderna</span></h2>
            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
            <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
        <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
            <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
    </a>

    </div>
</section>
<!-- End Hero -->
<div class="content">
    <div class="container-xl">
