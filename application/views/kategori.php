<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $judul_halaman ?></title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">

    <link rel="stylesheet" href="<?= base_url()?>assets/depan/vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/depan/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/depan/vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/depan/vendors/linericon/style.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/depan/vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/depan/vendors/owl-carousel/owl.carousel.min.css">

    <link rel="stylesheet" href="<?= base_url()?>assets/depan/css/style.css">

    <style>
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


    .card-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        object-position: center;
        border-radius: 0;
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
                        <?= $konfig->judul_website ?>
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


    <!--================ Hero sm Banner start =================-->
    <section class="mb-30px">
        <div class="container">
            <div class="hero-banner hero-banner--sm">
                <div class="hero-banner__content">
                    <h1><?= $nama_kategori;?></h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $nama_kategori;?>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--================ Hero sm Banner end =================-->


    <!--================ Start Blog Post Area =================-->
    <section class="blog-post-area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row"><?php foreach ($konten as $data){ ?>
                        <div class="col-md-6">
                            <div class="single-recent-blog-post card-view">
                                <div class="thumb">
                                    <img class="card-img rounded-0"
                                        src="<?= base_url('assets/upload/konten/'.$data['foto']) ?>" alt="">
                                    <ul class="thumb-info">
                                        <li><a href="#"><i class="ti-user"></i><?= $data['username'] ?></a></li>
                                        <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="details mt-20">
                                    <a href="<?= base_url('home/artikel/'.$data['slug']) ?>">
                                        <h3><?= $data['judul'] ?></h3>
                                    </a>
                                    <p><?= substr($data['keterangan'], 0, 100) ?>...</p>
                                    <a class="button" href="<?= base_url('home/artikel/'.$data['slug']) ?>">Read More <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </div>

                        </div>
                        <?php } ?>
                    </div>


                    <!-- <div class="row">
                        <div class="col-lg-12">
                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <?php if ($current_page > 1): ?>
                                    <li class="page-item">
                                        <a href="<?php echo site_url('kategori/' . $id . '/' . ($current_page - 1)); ?>"
                                            class="page-link" aria-label="Previous">
                                            <span aria-hidden="true">
                                                <i class="ti-angle-left"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <?php endif; ?>

                                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                    <li class="page-item <?php echo ($i == $current_page) ? 'active' : ''; ?>">
                                        <a href="<?php echo site_url('kategori/' . $id . '/' . $i); ?>"
                                            class="page-link"><?php echo $i; ?></a>
                                    </li>
                                    <?php endfor; ?>

                                    <?php if ($current_page < $total_pages): ?>
                                    <li class="page-item">
                                        <a href="<?php echo site_url('kategori/' . $id . '/' . ($current_page + 1)); ?>"
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
                    </div> -->
                </div>

                <!-- Start Blog Post Siddebar -->
                <div class="col-lg-4 sidebar-widgets">
                    <div class="widget-wrap">

                        <div class="single-sidebar-widget popular-post-widget">
                            <h4 class="single-sidebar-widget__title">Recent Ppost</h4>
                            <?php foreach ($recentpost as $data){ ?>
                            <div class="popular-post-list">
                                <div class="single-post-list">
                                    <div class="thumb">
                                        <img class="card-img rounded-0 img-fluid rounded w-50 h-50"
                                            src="<?= base_url('assets/upload/konten/'.$data->foto); ?>" alt="">
                                        <ul class="thumb-info">
                                            <li><a href="#"><?= $data->username; ?></a></li>
                                            <li><a href="#"><?= $data->tanggal; ?></a></li>
                                        </ul>
                                    </div>
                                    <div class="details mt-20">
                                        <a href="<?= base_url('home/artikel/'.$data->slug); ?>">
                                            <h6><?= substr($data->keterangan, 0, 50); ?>...</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>

                        <div class="single-sidebar-widget post-category-widget">
                            <h4 class="single-sidebar-widget__title">Catgory</h4>
                            <ul class="cat-list mt-20">
                                <?php foreach ($kategori as $data) { ?>
                                <li>
                                    <a href="<?= base_url('home/kategori/' . $data['id_kategori']) ?>">
                                        <?= $data['nama_kategori'] ?>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>



                        <div class="single-sidebar-widget tag_cloud_widget">
                            <h4 class="single-sidebar-widget__title">Popular Post</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">project</a>
                                </li>
                                <li>
                                    <a href="#">love</a>
                                </li>
                                <li>
                                    <a href="#">technology</a>
                                </li>
                                <li>
                                    <a href="#">travel</a>
                                </li>
                                <li>
                                    <a href="#">software</a>
                                </li>
                                <li>
                                    <a href="#">life style</a>
                                </li>
                                <li>
                                    <a href="#">design</a>
                                </li>
                                <li>
                                    <a href="#">illustration</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Post Siddebar -->
        </div>
    </section>
    <!--================ End Blog Post Area =================-->

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