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
                                    <button class="btn btn-outline-Secondary" type="submit">
                                        <i class="ti-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>




                        <!-- Right social icons -->
                        <ul class="nav navbar-nav navbar-right navbar-social ml-lg-3">
                            <li><a href="mailto:<?= $konfig->email ?>"><i class="ti-email"></i></a></li>
                            <li><a href="<?= $konfig->twitter ?>"><i class="ti-twitter-alt"></i></a></li>
                            <li><a href="<?= $konfig->instagram ?>"><i class="ti-instagram"></i></a></li>
                            <li><a href="https://wa.me/<?= $konfig->no_wa ?>"><i class="ti-themify-favicon"></i></a>
                            </li>
                        </ul>
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
                    <h1>Search</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">search
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
                    <div class="row">
                        <?php if (!empty($results)): ?>
                        <?php foreach ($results as $result): ?>
                        <div class="col-md-6">
                            <div class="single-recent-blog-post card-view">
                                <div class="thumb">
                                    <img class="card-img rounded-0"
                                        src="<?= base_url('assets/upload/konten/' . (isset($result['foto']) ? $result['foto'] : 'default.jpg')) ?>"
                                        alt="">
                                    <ul class="thumb-info">
                                        <li><a href="#"><i
                                                    class="ti-user"></i><?= isset($result['username']) ? htmlspecialchars($result['username']) : 'Unknown' ?></a>
                                        </li>
                                        <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="details mt-20">

                                    <a href="<?php echo site_url('home/artikel/' . $result['slug']); ?>">
                                        <h3> <?php echo htmlspecialchars($result['judul']); ?></h3>
                                    </a>
                                    <p><?php echo isset($result['keterangan']) ? htmlspecialchars(substr($result['keterangan'], 0, 100)) . '...' : 'Keterangan tidak tersedia.'; ?>
                                    </p>
                                    <a class="button" href="<?= site_url('home/artikel/' . $result['slug']) ?>">Read
                                        More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php else: ?>
                        <p>Tidak ada hasil untuk pencarian "<?php echo htmlspecialchars($query); ?>".</p>
                        <?php endif; ?>
                    </div>


                </div>

                <!-- Start Blog Post Siddebar -->
                <div class="col-lg-4 sidebar-widgets">
                    <div class="widget-wrap">


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

                        <div class="single-sidebar-widget popular-post-widget">
                            <h4 class="single-sidebar-widget__title">Popular Post</h4>
                            <div class="popular-post-list">
                                <div class="single-post-list">
                                    <div class="thumb">
                                        <img class="card-img rounded-0" src="img/blog/thumb/thumb1.png" alt="">
                                        <ul class="thumb-info">
                                            <li><a href="#">Adam Colinge</a></li>
                                            <li><a href="#">Dec 15</a></li>
                                        </ul>
                                    </div>
                                    <div class="details mt-20">
                                        <a href="blog-single.html">
                                            <h6>Accused of assaulting flight attendant miktake alaways</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="single-post-list">
                                    <div class="thumb">
                                        <img class="card-img rounded-0" src="img/blog/thumb/thumb2.png" alt="">
                                        <ul class="thumb-info">
                                            <li><a href="#">Adam Colinge</a></li>
                                            <li><a href="#">Dec 15</a></li>
                                        </ul>
                                    </div>
                                    <div class="details mt-20">
                                        <a href="blog-single.html">
                                            <h6>Tennessee outback steakhouse the
                                                worker diagnosed</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="single-post-list">
                                    <div class="thumb">
                                        <img class="card-img rounded-0" src="img/blog/thumb/thumb3.png" alt="">
                                        <ul class="thumb-info">
                                            <li><a href="#">Adam Colinge</a></li>
                                            <li><a href="#">Dec 15</a></li>
                                        </ul>
                                    </div>
                                    <div class="details mt-20">
                                        <a href="blog-single.html">
                                            <h6>Tennessee outback steakhouse the
                                                worker diagnosed</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
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
    <footer class="footer-area section-padding">
        <div class="container d-flex flex-column align-items-center justify-content-center">
            <div class="row justify-content-center text-center">
                <!-- About Us Section -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            <?= $konfig->profil_website ?>
                        </p>
                    </div>
                </div>

                <!-- Links Section -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20">Links</h6>
                        <ul class="link-footer">
                            <li><a href="<?= base_url() ?>">Home</a></li>
                            <?php foreach ($kategori as $data) { ?>
                            <li><a href="<?= base_url('home/kategori/'.$data['id_kategori']) ?>">
                                    <?= $data['nama_kategori'] ?>
                                </a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>

                <!-- Instagram Feed Section -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20">Instagram Feed</h6>
                        <ul class="instafeed grid-container">
                            <li><img src="<?= base_url() ?>assets/depan/img/instagram/a.jpg" alt=""></li>
                            <li><img src="<?= base_url() ?>assets/depan/img/instagram/b.jpg" alt=""></li>
                            <li><img src="<?= base_url() ?>assets/depan/img/instagram/c.jpg" alt=""></li>
                            <li><img src="<?= base_url() ?>assets/depan/img/instagram/d.jpg" alt=""></li>
                            <li><img src="<?= base_url() ?>assets/depan/img/instagram/e.jpg" alt=""></li>
                            <li><img src="<?= base_url() ?>assets/depan/img/instagram/f.jpg" alt=""></li>
                            <li><img src="<?= base_url() ?>assets/depan/img/instagram/g.jpg" alt=""></li>
                            <li><img src="<?= base_url() ?>assets/depan/img/instagram/h.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>

                <!-- Follow Us Section -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <ul class="link-footer">
                            <li>
                                <a href="<?= $konfig->email ?>">
                                    <i class="fas fa-envelope"></i> Email
                                </a>
                            </li>
                            <li>
                                <a href="<?= $konfig->twitter ?>">
                                    <i class="fab fa-twitter"></i> Twitter
                                </a>
                            </li>
                            <li>
                                <a href="<?= $konfig->instagram ?>">
                                    <i class="fab fa-instagram"></i> Instagram
                                </a>
                            </li>
                            <li>
                                <a href="<?= $konfig->no_wa ?>">
                                    <i class="fab fa-whatsapp"></i> WhatsApp
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Footer Bottom Section -->
            <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
                <p class="footer-text m-0">
                    Copyright ©<script>
                    document.write(new Date().getFullYear());
                    </script> All rights reserved |
                    This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by
                    <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </p>
            </div>
        </div>
    </footer>

    <style>
    .footer-area {
        background-color: #000;
        color: #fff;
        padding: 40px 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .single-footer-widget h6 {
        font-weight: bold;
        color: #fff;
        margin-bottom: 20px;
    }

    .instafeed {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        /* 4 kolom */
        grid-gap: 10px;
        /* Jarak antar gambar */
        justify-items: center;
    }

    .instafeed li {
        width: 60px;
        height: 60px;
        overflow: hidden;
    }

    .instafeed li img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .footer-social a {
        margin: 0 10px;
        color: #fff;
        font-size: 20px;
        transition: 0.3s;
    }

    .footer-social a:hover {
        color: #ffc107;
    }

    .footer-bottom {
        margin-top: 20px;
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