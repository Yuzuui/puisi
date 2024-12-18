
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title><?= $judul_halaman ?></title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?= base_url() ?>assets/blogger/css/linearicons.css">
			<link rel="stylesheet" href="<?= base_url() ?>assets/blogger/css/font-awesome.min.css">
			<link rel="stylesheet" href="<?= base_url() ?>assets/blogger/css/bootstrap.css">
			<link rel="stylesheet" href="<?= base_url() ?>assets/blogger/css/owl.carousel.css">
			<link rel="stylesheet" href="<?= base_url() ?>assets/blogger/css/main.css">

            <style>
                .carousel-inner img {
                    width: 100%;
                    height: auto;
                    max-height: 500px; 
                    object-fit: cover; 
                }

				.img-fluid {
				width: 40%; 
				aspect-ratio: 1 / 1;
				object-fit: cover;
				border-radius: 5px; 
 			 	}
            </style>

		</head>
		<body>

			<!-- Start Header Area -->
			<header class="default-header">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						  <a class="navbar-brand" href="<?= base_url('auth')?>">
						  	<?= $konfig->judul_website?>
						  </a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
						    <ul class="navbar-nav">
								<li><a href="<?= base_url()?>">Home</a></li>
								<?php foreach ($kategori as $data){?>
								<li><a href="<? base_url('home/kategori/'.$data['id_kategori'])?>"">
									<?= $data['nama_kategori']?>
								</li></a>
								<?php }?>
								
							    								
						    </ul>
						  </div>						
					</div>
				</nav>
			</header>
			<!-- End Header Area -->

			<!-- start banner Area -->
			<section id="home">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>

                    <!-- Carousel Items -->
                    <div class="carousel-inner">
						<?php $no = 1; foreach ($craousel as $data){ ?>
                        <div class="carousel-item <?php if ($no==1) {echo 'active';}?>">
                            <img class="d-block w-100" src="<?= base_url('assets/upload/carousel/'.$data['foto']) ?>" alt="First slide">
                            
                        </div>
						<?php $no++; } ?>
                        
                    </div>

                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>

			<!-- End banner Area -->	


			<!-- Start category Area -->
			<!-- <section class="category-area section-gap" id="news">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Latest News from all categories</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
							</div>
						</div>
					</div>						
					<div class="active-cat-carusel">
						<div class="item single-cat">
							<img src="<?= base_url() ?>assets/blogger/img/c1.jpg" alt="">
							<p class="date">10 Jan 2018</p>
							<h4><a href="#">It S Hurricane Season Visiting Hilton</a></h4>
						</div>
						<div class="item single-cat">
							<img src="<?= base_url() ?>assets/blogger/img/c2.jpg" alt="">
							<p class="date">10 Jan 2018</p>
							<h4><a href="#">What Makes A Hotel Boutique</a></h4>
						</div>
						<div class="item single-cat">
							<img src="<?= base_url() ?>assets/blogger/img/c3.jpg" alt="">
							<p class="date">10 Jan 2018</p>
							<h4><a href="#">Les Houches The Hidden Gem Valley</a></h4>
						</div>							
					</div>												
				</div>	
			</section> -->
			<!-- End category Area -->
			
			<!-- Start travel Area -->
			<section class="travel-area section-gap" id="travel">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Hot topics from Travel Section</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
							</div>
						</div>
					</div>			
					
					
					<div class="row">
						<?php foreach ($konten as $data){ ?>
							<div class="col-lg-6 travel-left">
								<div class="single-travel media pb-70">
									<img class="img-fluid d-flex mr-3" 
										src="<?= base_url('assets/upload/konten/'.$data['foto']) ?>" 
										alt="">
									<div class="dates">
										<span>20</span>
										<p>Dec</p>
									</div>
									<div class="media-body align-self-center">
										<h4 class="mt-0"><a href="<?= base_url('home/artikel/'.$data['slug']) ?>"><?= $data['judul'] ?></a></h4>
										<p>inappropriate behavior Lorem ipsum dolor sit amet, consectetur.</p>
										<div class="meta-bottom d-flex justify-content-between">
											<p><span class="lnr lnr-heart"></span> 15 Likes</p>
											<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
										</div>                             
									</div>
								</div>                                                      
							</div>
						<?php } ?>
					</div>

						<!-- <div class="col-lg-6 travel-right">
							<div class="single-travel media pb-70">
							  <img class="img-fluid d-flex  mr-3" src="<?= base_url() ?>assets/blogger/img/t2.jpg" alt="">
							  <div class="dates">
							  	<span>20</span>
							  	<p>Dec</p>
							  </div>							  
							  <div class="media-body align-self-center">
							    <h4 class="mt-0"><a href="#">Addiction When Gambling
							    Becomes A Problem</a></h4>
							    <p>inappropriate behavior Lorem ipsum dolor sit amet, consectetur.</p>
								<div class="meta-bottom d-flex justify-content-between">
									<p><span class="lnr lnr-heart"></span> 15 Likes</p>
									<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
								</div>							 
							  </div>
							</div>
							<div class="single-travel media">
							  <img class="img-fluid d-flex  mr-3" src="<?= base_url() ?>assets/blogger/img/t4.jpg" alt="">
							  <div class="dates">
							  	<span>20</span>
							  	<p>Dec</p>
							  </div>							  
							  <div class="media-body align-self-center">
							    <h4 class="mt-0"><a href="#">Addiction When Gambling
							    Becomes A Problem</a></h4>
							    <p>inappropriate behavior Lorem ipsum dolor sit amet, consectetur.</p>
								<div class="meta-bottom d-flex justify-content-between">
									<p><span class="lnr lnr-heart"></span> 15 Likes</p>
									<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
								</div>							 
							  </div>
							</div>								
						</div>
						<a href="#" class="primary-btn load-more pbtn-2 text-uppercase mx-auto mt-60">Load More </a>		 -->
					</div>
					
				</div>					
			</section>
			<!-- End travel Area -->
			
			<!-- Start fashion Area -->
			<!-- <section class="fashion-area section-gap" id="fashion">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Fashion News This Week</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6 single-fashion">
							<img class="img-fluid" src="<?= base_url() ?>assets/blogger/img/f1.jpg" alt="">
							<p class="date">10 Jan 2018</p>
							<h4><a href="#">Addiction When Gambling
							Becomes A Problem</a></h4>
							<p>
								inappropriate behavior ipsum dolor sit amet, consectetur.
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div>									
						</div>
						<div class="col-lg-3 col-md-6 single-fashion">
							<img class="img-fluid" src="<?= base_url() ?>assets/blogger/img/f2.jpg" alt="">
							<p class="date">10 Jan 2018</p>
							<h4><a href="#">Addiction When Gambling
							Becomes A Problem</a></h4>
							<p>
								inappropriate behavior ipsum dolor sit amet, consectetur.
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div>									
						</div>
						<div class="col-lg-3 col-md-6 single-fashion">
							<img class="img-fluid" src="<?= base_url() ?>assets/blogger/img/f3.jpg" alt="">
							<p class="date">10 Jan 2018</p>
							<h4><a href="#">Addiction When Gambling
							Becomes A Problem</a></h4>
							<p>
								inappropriate behavior ipsum dolor sit amet, consectetur.
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div>									
						</div>
						<div class="col-lg-3 col-md-6 single-fashion">
							<img class="img-fluid" src="<?= base_url() ?>assets/blogger/img/f4.jpg" alt="">
							<p class="date">10 Jan 2018</p>
							<h4><a href="#">Addiction When Gambling
							Becomes A Problem</a></h4>
							<p>
								inappropriate behavior ipsum dolor sit amet, consectetur.
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div>									
						</div>	
						<a href="#" class="primary-btn load-more pbtn-2 text-uppercase mx-auto mt-60">Load More </a>						
					</div>
				</div>	
			</section> -->
			<!-- End fashion Area -->
			
			<!-- Start team Area -->
			<!-- <section class="team-area section-gap" id="team">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">About Blogger Team</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row justify-content-center d-flex align-items-center">
						<div class="col-lg-6 team-left">
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that.
							</p>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women.
							</p>
						</div>
						<div class="col-lg-6 team-right d-flex justify-content-center">
							<div class="row active-team-carusel">
								<div class="single-team">
								    <div class="thumb">
								        <img class="img-fluid" src="<?= base_url() ?>assets/blogger/img/team1.jpg" alt="">
								        <div class="align-items-center justify-content-center d-flex">
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-linkedin"></i></a>
								        </div>
								    </div>
								    <div class="meta-text mt-30 text-center">
									    <h4>Dora Walker</h4>
									    <p>Senior Core Developer</p>									    	
								    </div>
								</div>
								<div class="single-team">
								    <div class="thumb">
								        <img class="img-fluid" src="<?= base_url() ?>assets/blogger/img/team2.jpg" alt="">
								        <div class="align-items-center justify-content-center d-flex">
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-linkedin"></i></a>
								        </div>
								    </div>
								    <div class="meta-text mt-30 text-center">
									    <h4>Lena Keller</h4>
									    <p>Creative Content Developer</p>			    	
								    </div>
								</div>													
							</div>
						</div>
					</div>
				</div>	
			</section> -->
			<!-- End team Area -->
			
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-12">
							<div class="single-footer-widget">
								<h6>Top Products</h6>
								<ul class="footer-nav">
									<li><a href="#">Managed Website</a></li>
									<li><a href="#">Manage Reputation</a></li>
									<li><a href="#">Power Tools</a></li>
									<li><a href="#">Marketing Service</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6  col-md-12">
							<div class="single-footer-widget newsletter">
								<h6>Newsletter</h6>
								<p>You can trust us. we only send promo offers, not a single spam.</p>
								<div id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

										<div class="form-group row" style="width: 100%">
											<div class="col-lg-8 col-md-12">
												<input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
												<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
											</div> 
										
											<div class="col-lg-4 col-md-12">
												<button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
											</div> 
										</div>		
										<div class="info"></div>
									</form>
								</div>		
							</div>
						</div>
												
					</div>

					<div class="row footer-bottom d-flex justify-content-between">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<p class="col-lg-8 col-sm-12 footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="<?= $konfig->facbook ?>"><i class="fa fa-facebook"></i></a>
							<a href="<?= $konfig->facbook ?>"><i class="fa fa-twitter"></i></a>
							<a href="<?= $konfig->instagram ?>"><i class="fa fa-instagram"></i></a>
							<a href="<?= $konfig->instagram ?>"><i class="fa fa-whatsapp"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->		

			<script src="<?= base_url() ?>assets/blogger/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="<?= base_url() ?>assets/blogger/js/vendor/bootstrap.min.js"></script>
			<script src="<?= base_url() ?>assets/blogger/js/jquery.ajaxchimp.min.js"></script>
			<script src="<?= base_url() ?>assets/blogger/js/parallax.min.js"></script>			
			<script src="<?= base_url() ?>assets/blogger/js/owl.carousel.min.js"></script>		
			<script src="<?= base_url() ?>assets/blogger/js/jquery.magnific-popup.min.js"></script>				
			<script src="<?= base_url() ?>assets/blogger/js/jquery.sticky.js"></script>
			<script src="<?= base_url() ?>assets/blogger/js/main.js"></script>	
		</body>
	</html>