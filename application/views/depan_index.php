<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $judul_halaman ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/depan/vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/depan/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/depan/vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/depan/vendors/linericon/style.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/depan/vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/depan/vendors/owl-carousel/owl.carousel.min.css">

    <link rel="stylesheet" href="<?= base_url()?>assets/depan/css/style.css">

    <style>
    .carousel-inner img {
        width: 100%;
        height: auto;
        max-height: 500px;
        object-fit: cover;
    }

    .single-recent-blog-post .thumb img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 8px;
    }

    .link-footer li {
        list-style: none;
        margin: 5px 0;
    }

    .link-footer li a {
        text-decoration: none;
        color: white;
        font-size: 16px;
        transition: color 0.3s, font-size 0.3s;
    }


    .link-footer li a:hover {
        color: #ff9907;
        font-size: 18px;
        text-decoration: underline;
        cursor: pointer;
    }


    /* Container Styling */
    .blog-post {
        display: flex;
        align-items: flex-start;
        margin-bottom: 30px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 20px;
    }

    /* Thumbnail Styling */
    .blog-post .thumb img {
        width: 100%;
        max-width: 200px;
        height: auto;
        border-radius: 5px;
    }

    /* Details Section */
    .blog-post .details {
        flex: 2;
        margin-top: 10px;
    }

    .blog-post .title {
        font-size: 22px;
        color: #000;
        margin-bottom: 10px;
        font-weight: bold;
        text-decoration: none;
    }

    .blog-post .info-list {
        list-style: none;
        padding: 0;
        display: flex;
        gap: 10px;
        font-size: 14px;
        color: #777;
    }

    .blog-post .info-list li {
        display: flex;
        align-items: center;
    }

    .blog-post .info-list i {
        margin-right: 5px;
        color: #ff9800;
    }

    /* Read More Button */
    /* Read More Link Styling */
    .read-more {
        color: #000;
        /* Default black color */
        text-decoration: none;
        font-weight: bold;
        display: inline-block;
        margin-top: 10px;
        transition: color 0.3s ease;
        /* Smooth color transition */
    }

    .read-more i {
        margin-left: 5px;
        transition: margin 0.2s ease;

    }

    .read-more:hover {
        color: #ff9800;

    }

    .read-more:hover i {
        margin-left: 10px;

    }



    /* Sidebar Recent Post Styling */
    .popular-post-list {
        display: flex;
        align-items: center;
    }

    .popular-post-list .thumb-info {
        font-size: 14px;
        color: #777;
    }

    .popular-post-list .thumb-info li {
        margin-bottom: 5px;
        display: flex;
        align-items: center;
    }

    .popular-post-list .thumb-info i {
        margin-right: 5px;
        color: #ff9800;
    }

    .popular-post-list .post-title {
        font-size: 16px;
        font-weight: bold;
        color: #000;
        transition: color 0.3s ease;
        text-decoration: none;
    }

    .popular-post-list .post-title:hover {
        color: #ff9800;
        /* Warna hover senada */
    }

    .single-sidebar-widget__title {
        font-size: 18px;
        font-weight: bold;
        color: #000;
        margin-bottom: 20px;
        border-bottom: 2px solid #ff9800;
        display: inline-block;
        padding-bottom: 5px;
    }

    .read-more {
        font-size: 16px;
        /* Ukuran font */
        color: #000;
        /* Warna default hitam */
        text-decoration: none;
        /* Menghilangkan garis bawah */
        transition: color 0.3s ease;
        /* Efek transisi warna */
    }

    .read-more i {
        margin-left: 5px;
        /* Margin default */
        transition: margin 0.2s ease;
        /* Efek transisi pergerakan ikon */
    }

    .read-more:hover {
        color: #ff9800;
        /* Warna oranye saat hover */
    }

    .read-more:hover i {
        margin-left: 10px;
        /* Ikon bergeser ke kanan */
    }
    </style>
</head>

<body>
    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container box_1620">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="<?= base_url('auth') ?>">
                        <img src="<?= base_url('assets/depan/img/pp.png') ?>" alt="Logo" style="height: 50px;">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Navbar content -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <!-- Left menu -->
                        <ul class="nav navbar-nav menu_nav justify-content-center">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?= base_url() ?>">Home</a>
                            </li>
                            <?php foreach ($kategori as $data) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('home/kategori/' . $data['id_kategori']) ?>">
                                    <?= $data['nama_kategori'] ?>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>

                        <!-- Search bar -->
                        <form class="form-inline d-flex ml-lg-auto my-2 my-lg-0" action="<?= base_url('home/search') ?>"
                            method="GET">
                            <div class="input-group">
                                <input class="form-control w-75" type="search" name="query" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit">
                                        <i class="ti-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>



                        <!-- Right social icons -->

                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <main class="site-main">
        <!--================Hero Banner start =================-->
        <section class="mb-30px">
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <!-- Indikator -->
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>

                    <!-- Gambar Carousel -->
                    <div class="carousel-inner">
                        <?php $no = 1; foreach ($craousel as $data){ ?>
                        <div class="carousel-item <?php if ($no==1) {echo 'active';}?>">
                            <img class="d-block w-100 shadow-effect"
                                src="<?= base_url('assets/upload/carousel/'.$data['foto']) ?>" alt="Slide Pertama">

                        </div>
                        <?php $no++; } ?>

                    </div>

                    <!-- Tombol Navigasi -->
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>

        <!--================Hero Banner end =================-->

        <!--================ Blog slider start =================-->

        <!--================ Blog slider end =================-->

        <!--================ Start Blog Post Area =================-->
        <section class="blog-post-area section-margin mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <?php foreach ($konten as $data) { ?>
                        <div class="blog-post d-flex"
                            style="display: flex; flex-direction: row; align-items: center; margin-bottom: 20px;">
                            <!-- Image -->
                            <div class="thumb" style="flex: 1; margin-right: 20px; position: relative; height: 200px;">
                                <img class="img-fluid" src="<?= base_url('assets/upload/konten/' . $data['foto']) ?>"
                                    alt="Thumbnail" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>

                            <!-- Details -->
                            <div class="details"
                                style="flex: 2; display: flex; flex-direction: column; justify-content: center;">
                                <a href="<?= base_url('home/artikel/' . $data['slug']) ?>"
                                    style="text-decoration: none; color: inherit;">
                                    <h3 class="title" style="font-size: 24px; font-weight: bold; color: #333;">
                                        <?= $data['judul'] ?></h3>
                                </a>
                                <ul class="info-list"
                                    style="list-style: none; padding: 0; font-size: 14px; color: #777;">
                                    <li><i class="ti-user"></i> <?= $data['username'] ?></li>
                                    <li><i class="ti-notepad"></i> <?= $data['tanggal'] ?></li>
                                    <li><i class="ti-comment"></i><?= isset($komentar) ? count($komentar) : 0 ?></li>
                                </ul>
                                <p style="font-size: 16px; color: #555;"><?= substr($data['keterangan'], 0, 150) ?>...
                                </p>
                                <a class="read-more" href="<?= base_url('home/artikel/' . $data['slug']) ?>"
                                    style="text-decoration: none; color: #007bff;">
                                    <a href="<?= base_url('home/artikel/' . $data['slug']) ?>" class="read-more">
                                        Read More <i class="fas fa-arrow-right"></i>
                                    </a>

                                </a>
                            </div>
                        </div>
                        <?php } ?>


                        <div class="row">
                            <div class="col-lg-12">
                                <nav class="blog-pagination justify-content-center d-flex">
                                    <ul class="pagination">
                                        <?php if ($current_page > 1): ?>
                                        <li class="page-item">
                                            <a href="<?php echo site_url('home/index/' . ($current_page - 1)); ?>"
                                                class="page-link" aria-label="Previous">
                                                <span aria-hidden="true">
                                                    <i class="ti-angle-left"></i>
                                                </span>
                                            </a>
                                        </li>
                                        <?php endif; ?>

                                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                        <li class="page-item <?php echo ($i == $current_page) ? 'active' : ''; ?>">
                                            <a href="<?php echo site_url('home/index/' . $i); ?>"
                                                class="page-link"><?php echo $i; ?></a>
                                        </li>
                                        <?php endfor; ?>

                                        <?php if ($current_page < $total_pages): ?>
                                        <li class="page-item">
                                            <a href="<?php echo site_url('home/index/' . ($current_page + 1)); ?>"
                                                class="page-link" aria-label="Next">
                                                <span aria-hidden="true">
                                                    <i class="ti-angle-right"></i>
                                                </span>
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Start Blog Post Siddebar -->
                    <div class="col-lg-4 sidebar-widgets">
                        <div class="widget-wrap">


                            <div class="single-sidebar-widget popular-post-widget">
                                <h4 class="single-sidebar-widget__title">Recent Post</h4>
                                <?php foreach ($recentpost as $data) { ?>
                                <div class="popular-post-list d-flex"
                                    style="margin-bottom: 20px; border-bottom: 1px solid #ddd; padding-bottom: 10px;">
                                    <!-- Bagian Info Thumbnail -->
                                    <div class="thumb-info" style="flex: 1; margin-right: 15px;">
                                        <ul style="list-style: none; padding: 0; margin: 0;">
                                            <li><i class="ti-user"></i> <?= $data->username; ?></li>
                                            <li><i class="ti-notepad"></i> <?= $data->tanggal; ?></li>
                                        </ul>
                                    </div>

                                    <!-- Bagian Detail Post -->
                                    <div class="details" style="flex: 2;">
                                        <a href="<?= base_url('home/artikel/'.$data->slug); ?>">
                                            <h6 class="post-title"
                                                style="font-size: 16px; font-weight: bold; color: #000; margin: 0;">
                                                <?= substr($data->keterangan, 0, 50); ?>...
                                            </h6>
                                        </a>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>




                        </div>
                    </div>
                </div>
                <!-- End Blog Post Siddebar -->
            </div>
        </section>
        <!--================ End Blog Post Area =================-->
    </main>

    <!--================ Start Footer Area =================-->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- About Us Section -->
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <h6 class="footer-title">Tentang Website</h6>
                    <p>
                        <?= $konfig->profil_website ?>
                    </p>
                </div>

                <!-- Contact Section -->
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <h6 class="footer-title">Kontak</h6>
                    <ul class="footer-links">
                        <li>Email: <a href="mailto:info@website.com">info@website.com</a></li>
                        <li>Telepon: <a href="tel:+6281234567890">+62 812-3456-7890</a></li>
                        <li>Alamat: Jl. Contoh No. 123, Indonesia</li>
                    </ul>
                </div>

                <!-- Home Page Link Section -->
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <h6 class="footer-title">Halaman Utama</h6>
                    <ul class="footer-links">
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <?php foreach ($kategori as $data) { ?>
                        <li><a href="<?= base_url('home/kategori/'.$data['id_kategori']) ?>">
                                <?= $data['nama_kategori'] ?>
                            </a></li>
                        <?php } ?>
                    </ul>
                </div>

                <!-- Social Media Links Section -->
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <h6 class="footer-title">Ikuti Kami</h6>
                    <p>Temukan kami di media sosial:</p>
                    <div class="social-icons">
                        <a href="<?= $konfig->email ?>"><i class="fas fa-envelope"></i></a>
                        <a href="<?= $konfig->twitter ?>"><i class="fab fa-twitter"></i></a>
                        <a href="<?= $konfig->instagram ?>"><i class="fab fa-instagram"></i></a>
                        <a href="<?= $konfig->no_wa ?>"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <!-- Branding and Footer Bottom -->
            <div class="footer-branding text-center mt-4">

                <p class="footer-text">&copy; 2024 Amarta. Semua Hak Dilindungi.</p>
            </div>
        </div>
    </footer>

    <!-- CSS -->
    <style>
    /* Footer Base */
    .footer-area {
        background-color: #1d1d1d;
        color: #f5f5f5;
        padding: 40px 0;
        font-family: Arial, sans-serif;
    }

    .footer-title {
        font-size: 16px;
        font-weight: bold;
        color: #fff;
        margin-bottom: 15px;
    }

    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 10px;
        font-size: 14px;
        line-height: 1.6;
    }

    .footer-links a {
        color: #f5f5f5;
        text-decoration: none;
        transition: color 0.3s;
    }

    .footer-links a:hover {
        color: #ff9800;
    }

    .footer-branding img.footer-logo {
        width: 120px;
        margin-bottom: 10px;
    }

    .social-icons a {
        font-size: 20px;
        color: #f5f5f5;
        margin: 0 10px;
        transition: color 0.3s;
    }

    .social-icons a:hover {
        color: #ff9800;
    }

    .footer-text {
        font-size: 12px;
        color: #aaa;
        margin-top: 10px;
    }
    </style>


    <!--================ End Footer Area =================-->
    <script src="<?= base_url()?>assets/depan/vendors/jquery/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url()?>assets/depan/vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url()?>assets/depan/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url()?>assets/depan/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url()?>assets/depan/js/mail-script.js"></script>
    <script src="<?= base_url()?>assets/depan/js/main.js"></script>
</body>

</html>