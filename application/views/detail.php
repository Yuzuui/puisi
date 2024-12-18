<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $judul_halaman ?></title>
    <link rel="icon" href="<?= base_url()?>assets/depan/img/Fevicon.png" type="image/png">

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

    .main_blog_details img {
        width: 100%;
        height: auto;
        max-height: 400px;
        object-fit: cover;
        border-radius: 10px;
    }

    .header_area .main_menu {
        border-bottom: 1px solid #ccc;
        /* Warna abu-abu */
        box-shadow: none;
        /* Menghilangkan bayangan jika tidak diperlukan */
    }

    .navbar-border {
        width: 100%;
        height: 0.1px;
        /* Ketebalan garis */
        background-color: #ccc;
        /* Warna abu-abu */
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
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav justify-content-center">
                            <li class="nav-item active"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
                            <?php foreach ($kategori as $data) { ?>
                            <li class="nav-item"><a class="nav-link"
                                    href="<?= base_url('home/kategori/' . $data['id_kategori']) ?>">
                                    <?= $data['nama_kategori'] ?>
                                </a></li>
                            <?php } ?>
                        </ul>

                    </div>
                </div>
            </nav>
            <!-- Garis bawah -->
            <div class="navbar-border"></div>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================ Hero sm Banner start =================-->

    <!--================ Hero sm Banner end =================-->




    <!--================ Start Blog Post Area =================-->
    <section class="blog-post-area section-margin mb-30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="main_blog_details">

                        <img class="img-fluid" src="<?= base_url('assets/upload/konten/'.$konten->foto) ?>" alt="">
                        <h1><?= $konten->judul?></h1>
                        <div class="user_details">
                            <div class="float-left">
                                <a href="#"><?= $konten->nama_kategori?></a>
                                <a href="#">Gadget</a>
                            </div>
                            <div class="float-right mt-sm-0 mt-3">
                                <div class="media">
                                    <div class="media-body">
                                        <h5><?= $konten->username?></h5>
                                        <p><?= $konten->tanggal?></p>
                                    </div>
                                    <div class="d-flex">
                                        <img width="42" height="42"
                                            src="<?= base_url()?>assets/depan/img/blog/user-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p><?= nl2br($konten->keterangan)?></p>

                        <div class="news_d_footer flex-column flex-sm-row">

                            <a class="justify-content-sm-center ml-sm-auto mt-sm-0 mt-2" href="#"><span
                                    class="align-middle mr-2"><i
                                        class="ti-themify-favicon"></i></span><?= isset($komentar) ? count($komentar) : 0 ?>
                                Comments</a>
                        </div>
                    </div>

                    <div class="comments-area">

                        <div class="comment-list">
                            <?php if (isset($komentar) && !empty($komentar)) { ?>
                            <?php foreach ($komentar as $komentar_item) { ?>
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c1.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><?= $komentar_item['name'] ?></h5> <!-- Menggunakan notasi array -->
                                        <p class="date"><?= $komentar_item['tanggal'] ?></p>
                                        <p class="comment"><?= $komentar_item['message'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <?php } else { ?>
                            <p>No comments yet.</p>
                            <?php } ?>
                        </div>

                        <h4>Leave a Comment</h4>
                        <form method="post" action="<?= base_url('home/tambah_komentar') ?>">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Enter email address"
                                    required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mb-10" rows="5" name="message" placeholder="Message"
                                    required></textarea>
                            </div>
                            <!-- Hidden input for slug -->
                            <input type="hidden" name="slug" value="<?= $konten->slug ?>">
                            <button type="submit" name="submit" class="button submit_btn">Post Comment</button>
                        </form>

                    </div>
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





                    </div>
                </div>
            </div>
            <!-- End Blog Post Siddebar -->
        </div>
    </section>
    <!--================ End Blog Post Area =================-->

    <!--================ Start Footer Area =================-->
    <!-- Footer Area -->
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
    <script src="j<?= base_url()?>assets/depan/s/mail-script.js"></script>
    <script src="<?= base_url()?>assets/depan/js/main.js"></script>
</body>

</html>