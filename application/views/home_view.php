<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?= base_url('theme/img/' . $icon); ?>">
	<!-- Author Meta -->
	<meta name="author" content="Unusia">
	<!-- Meta Description -->
	<meta name="description" content="<?php echo $site_desc; ?>" />
	<!-- Meta Keyword -->
	<meta name="keywords" content="Unusia, UNUSIA, Unusia Jakarta, Unusia Bogor, UNU, Nahdlatul Ulama">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title><?= $site_title; ?></title>
    <!-- SEO Tag -->
    <link rel="canonical" href="<?php echo site_url(); ?>" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $site_title; ?>" />
    <meta property="og:description" content="<?php echo $site_desc; ?>" />
    <meta property="og:url" content="<?php echo site_url(); ?>" />
    <meta property="og:site_name" content="<?php echo $site_name; ?>" />
    <meta property="og:image" content="<?php echo base_url() . 'theme/img/' . $site_image ?>" />
    <meta property="og:image:secure_url" content="<?php echo base_url() . 'theme/img/' . $site_image ?>" />
    <meta property="og:image:width" content="560" />
    <meta property="og:image:height" content="315" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo $site_desc; ?>" />
    <meta name="twitter:title" content="<?php echo $site_title; ?>" />
    <meta name="twitter:site" content="<?php echo $site_twitter; ?>" />
    <meta name="twitter:image" content="<?php echo base_url() . 'theme/img/' . $site_image ?>" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--CSS ============================================= -->
	<link rel="stylesheet" href="<?= base_url('theme/css/linearicons.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('theme/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('theme/css/bootstrap.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('theme/css/magnific-popup.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('theme/css/nice-select.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('theme/css/animate.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('theme/css/owl.carousel.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('theme/css/jquery-ui.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('theme/css/main.css'); ?>">
</head>

<body>
	<header id="header" id="home">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
						</ul>
					</div>
					<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
						<a href="tel:+62213906501"><span class="lnr lnr-phone-handset"></span> <span class="text">(+6221)
								390 6501</span></a>
						<a href="mailto:office@unusia.ac.id"><span class="lnr lnr-envelope"></span> <span
								class="text">office@unusia.ac.id</span></a>
					</div>
				</div>
			</div>
		</div>
	<?php echo $header; ?>
	</header>
	<!-- #header -->

	<!-- start banner Area  overlay-bg-->
	<section class="banner-area relative" id="home">
		<div class="overlay"></div>
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-between">
				<div class="banner-content col-lg-9 col-md-12">
					<h3 class="text-uppercase">
						Pendaftaran
					</h3>
					<h1 class="text-uppercase">
						Mahasiswa Baru
					</h1>
					<p class="pt-10 pb-10">
						Unusia membuka pendaftaran Mahasiswa baru.
					</p>
					<a href="#" class="primary-btn text-uppercase">Get Started</a>
				</div>
			</div>
			
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start feature Area -->
	<section class="feature-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="single-feature">
						<div class="title">
							<h4>Learn Online Courses</h4>
						</div>
						<div class="desc-wrap">
							<p>
								Usage of the Internet is becoming more common due to rapid advancement
								of technology.
							</p>
							<a href="#">Join Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-feature">
						<div class="title">
							<h4>No.1 of universities</h4>
						</div>
						<div class="desc-wrap">
							<p>
								For many of us, our very first experience of learning about the celestial bodies begins
								when we saw our first.
							</p>
							<a href="#">Join Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-feature">
						<div class="title">
							<h4>Huge Library</h4>
						</div>
						<div class="desc-wrap">
							<p>
								If you are a serious astronomy fanatic like a lot of us are, you can probably remember
								that one event.
							</p>
							<a href="#">Join Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End feature Area -->

	<!-- Start popular-course Area -->
	<section class="popular-course-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Popular Courses we offer</h1>
						<p>There is a moment in the life of any aspiring.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="active-popular-carusel">
					<div class="single-popular-carusel">
						<div class="thumb-wrap relative">
							<div class="thumb relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="theme/img/p1.jpg" alt="">
							</div>
							<div class="meta d-flex justify-content-between">
								<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
								<h4>$150</h4>
							</div>
						</div>
						<div class="details">
							<a href="#">
								<h4>
									Learn Designing
								</h4>
							</a>
							<p>
								When television was young, there was a hugely popular show based on the still popular
								fictional characte
							</p>
						</div>
					</div>
					<div class="single-popular-carusel">
						<div class="thumb-wrap relative">
							<div class="thumb relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="theme/img/p2.jpg" alt="">
							</div>
							<div class="meta d-flex justify-content-between">
								<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
								<h4>$150</h4>
							</div>
						</div>
						<div class="details">
							<a href="#">
								<h4>
									Learn React js beginners
								</h4>
							</a>
							<p>
								When television was young, there was a hugely popular show based on the still popular
								fictional characte
							</p>
						</div>
					</div>
					<div class="single-popular-carusel">
						<div class="thumb-wrap relative">
							<div class="thumb relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="theme/img/p3.jpg" alt="">
							</div>
							<div class="meta d-flex justify-content-between">
								<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
								<h4>$150</h4>
							</div>
						</div>
						<div class="details">
							<a href="#">
								<h4>
									Learn Photography
								</h4>
							</a>
							<p>
								When television was young, there was a hugely popular show based on the still popular
								fictional characte
							</p>
						</div>
					</div>
					<div class="single-popular-carusel">
						<div class="thumb-wrap relative">
							<div class="thumb relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="theme/img/p4.jpg" alt="">
							</div>
							<div class="meta d-flex justify-content-between">
								<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
								<h4>$150</h4>
							</div>
						</div>
						<div class="details">
							<a href="#">
								<h4>
									Learn Surveying
								</h4>
							</a>
							<p>
								When television was young, there was a hugely popular show based on the still popular
								fictional characte
							</p>
						</div>
					</div>
					<div class="single-popular-carusel">
						<div class="thumb-wrap relative">
							<div class="thumb relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="theme/img/p1.jpg" alt="">
							</div>
							<div class="meta d-flex justify-content-between">
								<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
								<h4>$150</h4>
							</div>
						</div>
						<div class="details">
							<a href="#">
								<h4>
									Learn Designing
								</h4>
							</a>
							<p>
								When television was young, there was a hugely popular show based on the still popular
								fictional characte
							</p>
						</div>
					</div>
					<div class="single-popular-carusel">
						<div class="thumb-wrap relative">
							<div class="thumb relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="theme/img/p2.jpg" alt="">
							</div>
							<div class="meta d-flex justify-content-between">
								<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
								<h4>$150</h4>
							</div>
						</div>
						<div class="details">
							<a href="#">
								<h4>
									Learn React js beginners
								</h4>
							</a>
							<p>
								When television was young, there was a hugely popular show based on the still popular
								fictional characte
							</p>
						</div>
					</div>
					<div class="single-popular-carusel">
						<div class="thumb-wrap relative">
							<div class="thumb relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="theme/img/p3.jpg" alt="">
							</div>
							<div class="meta d-flex justify-content-between">
								<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
								<h4>$150</h4>
							</div>
						</div>
						<div class="details">
							<a href="#">
								<h4>
									Learn Photography
								</h4>
							</a>
							<p>
								When television was young, there was a hugely popular show based on the still popular
								fictional characte
							</p>
						</div>
					</div>
					<div class="single-popular-carusel">
						<div class="thumb-wrap relative">
							<div class="thumb relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="theme/img/p4.jpg" alt="">
							</div>
							<div class="meta d-flex justify-content-between">
								<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
								<h4>$150</h4>
							</div>
						</div>
						<div class="details">
							<a href="#">
								<h4>
									Learn Surveying
								</h4>
							</a>
							<p>
								When television was young, there was a hugely popular show based on the still popular
								fictional characte
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End popular-course Area -->


	<!-- Start search-course Area -->
	<section class="search-course-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-6 col-md-6 search-course-left">
					<h1 class="text-white">
						Get reduced fee <br>
						during this Summer!
					</h1>
					<p>
						inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
						standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on
						the job is beyond reproach.
					</p>
					<div class="row details-content">
						<div class="col single-detials">
							<span class="lnr lnr-graduation-hat"></span>
							<a href="#">
								<h4>Expert Instructors</h4>
							</a>
							<p>
								Usage of the Internet is becoming more common due to rapid advancement of technology and
								power.
							</p>
						</div>
						<div class="col single-detials">
							<span class="lnr lnr-license"></span>
							<a href="#">
								<h4>Certification</h4>
							</a>
							<p>
								Usage of the Internet is becoming more common due to rapid advancement of technology and
								power.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 search-course-right section-gap">
					<form class="form-wrap" action="#">
						<h4 class="text-white pb-20 text-center mb-30">Search for Available Course</h4>
						<input type="text" class="form-control" name="name" placeholder="Your Name"
							onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'">
						<input type="phone" class="form-control" name="phone" placeholder="Your Phone Number"
							onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'">
						<input type="email" class="form-control" name="email" placeholder="Your Email Address"
							onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'">
						<div class="form-select" id="service-select">
							<select>
								<option datd-display="">Choose Course</option>
								<option value="1">Course One</option>
								<option value="2">Course Two</option>
								<option value="3">Course Three</option>
								<option value="4">Course Four</option>
							</select>
						</div>
						<button class="primary-btn text-uppercase">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- End search-course Area -->


	<!-- Start upcoming-event Area -->
	<section class="upcoming-event-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Upcoming Events of our Institute</h1>
						<p>If you are a serious astronomy fanatic like a lot of us</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="active-upcoming-event-carusel">
					<div class="single-carusel row align-items-center">
						<div class="col-12 col-md-6 thumb">
							<img class="img-fluid" src="theme/img/e1.jpg" alt="">
						</div>
						<div class="detials col-12 col-md-6">
							<p>25th February, 2018</p>
							<a href="#">
								<h4>The Universe Through
									A Child S Eyes</h4>
							</a>
							<p>
								For most of us, the idea of astronomy is something we directly connect to “stargazing”,
								telescopes and seeing magnificent displays in the heavens.
							</p>
						</div>
					</div>
					<div class="single-carusel row align-items-center">
						<div class="col-12 col-md-6 thumb">
							<img class="img-fluid" src="theme/img/e2.jpg" alt="">
						</div>
						<div class="detials col-12 col-md-6">
							<p>25th February, 2018</p>
							<a href="#">
								<h4>The Universe Through
									A Child S Eyes</h4>
							</a>
							<p>
								For most of us, the idea of astronomy is something we directly connect to “stargazing”,
								telescopes and seeing magnificent displays in the heavens.
							</p>
						</div>
					</div>
					<div class="single-carusel row align-items-center">
						<div class="col-12 col-md-6 thumb">
							<img class="img-fluid" src="theme/img/e1.jpg" alt="">
						</div>
						<div class="detials col-12 col-md-6">
							<p>25th February, 2018</p>
							<a href="#">
								<h4>The Universe Through
									A Child S Eyes</h4>
							</a>
							<p>
								For most of us, the idea of astronomy is something we directly connect to “stargazing”,
								telescopes and seeing magnificent displays in the heavens.
							</p>
						</div>
					</div>
					<div class="single-carusel row align-items-center">
						<div class="col-12 col-md-6 thumb">
							<img class="img-fluid" src="theme/img/e1.jpg" alt="">
						</div>
						<div class="detials col-12 col-md-6">
							<p>25th February, 2018</p>
							<a href="#">
								<h4>The Universe Through
									A Child S Eyes</h4>
							</a>
							<p>
								For most of us, the idea of astronomy is something we directly connect to “stargazing”,
								telescopes and seeing magnificent displays in the heavens.
							</p>
						</div>
					</div>
					<div class="single-carusel row align-items-center">
						<div class="col-12 col-md-6 thumb">
							<img class="img-fluid" src="theme/img/e2.jpg" alt="">
						</div>
						<div class="detials col-12 col-md-6">
							<p>25th February, 2018</p>
							<a href="#">
								<h4>The Universe Through
									A Child S Eyes</h4>
							</a>
							<p>
								For most of us, the idea of astronomy is something we directly connect to “stargazing”,
								telescopes and seeing magnificent displays in the heavens.
							</p>
						</div>
					</div>
					<div class="single-carusel row align-items-center">
						<div class="col-12 col-md-6 thumb">
							<img class="img-fluid" src="theme/img/e1.jpg" alt="">
						</div>
						<div class="detials col-12 col-md-6">
							<p>25th February, 2018</p>
							<a href="#">
								<h4>The Universe Through
									A Child S Eyes</h4>
							</a>
							<p>
								For most of us, the idea of astronomy is something we directly connect to “stargazing”,
								telescopes and seeing magnificent displays in the heavens.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End upcoming-event Area -->

	<!-- Start review Area -->
	<section class="review-area section-gap relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row">
				<div class="active-review-carusel">
					<div class="single-review item">
						<div class="title justify-content-start d-flex">
							<a href="#">
								<h4>Fannie Rowe</h4>
							</a>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
							scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,
							printer, scanner, speaker.
						</p>
					</div>
					<div class="single-review item">
						<div class="title justify-content-start d-flex">
							<a href="#">
								<h4>Hulda Sutton</h4>
							</a>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
							scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,
							printer, scanner, speaker.
						</p>
					</div>
					<div class="single-review item">
						<div class="title justify-content-start d-flex">
							<a href="#">
								<h4>Fannie Rowe</h4>
							</a>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
							scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,
							printer, scanner, speaker.
						</p>
					</div>
					<div class="single-review item">
						<div class="title justify-content-start d-flex">
							<a href="#">
								<h4>Hulda Sutton</h4>
							</a>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
							scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,
							printer, scanner, speaker.
						</p>
					</div>
					<div class="single-review item">
						<div class="title justify-content-start d-flex">
							<a href="#">
								<h4>Fannie Rowe</h4>
							</a>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
							scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,
							printer, scanner, speaker.
						</p>
					</div>
					<div class="single-review item">
						<div class="title justify-content-start d-flex">
							<a href="#">
								<h4>Hulda Sutton</h4>
							</a>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
							scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,
							printer, scanner, speaker.
						</p>
					</div>
					<div class="single-review item">
						<img src="theme/img/p1.jpg" alt="">
						<div class="title justify-content-start d-flex">
							<a href="#">
								<h4>Fannie Rowe</h4>
							</a>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
							scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,
							printer, scanner, speaker.
						</p>
					</div>
					<div class="single-review item">
						<div class="title justify-content-start d-flex">
							<a href="#">
								<h4>Hulda Sutton</h4>
							</a>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
							scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,
							printer, scanner, speaker.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End review Area -->

	<!-- Start cta-one Area -->
	<section class="cta-one-area relative section-gap">
		<div class="container">
			<div class="overlay overlay-bg"></div>
			<div class="row justify-content-center">
				<div class="wrap">
					<h1 class="text-white">Become an instructor</h1>
					<p>
						There is a moment in the life of any aspiring astronomer that it is time to buy that first
						telescope. It’s exciting to think about setting up your own viewing station whether that is on
						the deck.
					</p>
					<a class="primary-btn wh" href="#">Apply for the post</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End cta-one Area -->

	<!-- Start blog Area -->
	<section class="blog-area section-gap" id="blog">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Latest posts from our Blog</h1>
						<p>In the history of modern astronomy there is.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 single-blog">
					<div class="thumb">
						<img class="img-fluid" src="theme/img/b1.jpg" alt="">
					</div>
					<p class="meta">25 April, 2018 | By <a href="#">Mark Wiens</a></p>
					<a href="blog-single.html">
						<h5>Addiction When Gambling Becomes A Problem</h5>
					</a>
					<p>
						Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend
						hours in front of their.
					</p>
					<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span
							class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
				</div>
				<div class="col-lg-3 col-md-6 single-blog">
					<div class="thumb">
						<img class="img-fluid" src="theme/img/b2.jpg" alt="">
					</div>
					<p class="meta">25 April, 2018 | By <a href="#">Mark Wiens</a></p>
					<a href="blog-single.html">
						<h5>Computer Hardware Desktops And Notebooks</h5>
					</a>
					<p>
						Ah, the technical interview. Nothing like it. Not only does it cause anxiety, but it causes
						anxiety for several different reasons.
					</p>
					<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span
							class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
				</div>
				<div class="col-lg-3 col-md-6 single-blog">
					<div class="thumb">
						<img class="img-fluid" src="theme/img/b3.jpg" alt="">
					</div>
					<p class="meta">25 April, 2018 | By <a href="#">Mark Wiens</a></p>
					<a href="blog-single.html">
						<h5>Make Myspace Your Best Designed Space</h5>
					</a>
					<p>
						Plantronics with its GN Netcom wireless headset creates the next generation of wireless headset
						and other products such as wireless.
					</p>
					<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span
							class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
				</div>
				<div class="col-lg-3 col-md-6 single-blog">
					<div class="thumb">
						<img class="img-fluid" src="theme/img/b4.jpg" alt="">
					</div>
					<p class="meta">25 April, 2018 | By <a href="#">Mark Wiens</a></p>
					<a href="blog-single.html">
						<h5>Video Games Playing With Imagination</h5>
					</a>
					<p>
						About 64% of all on-line teens say that do things online that they wouldn’t want their parents
						to know about. 11% of all adult internet
					</p>
					<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span
							class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
				</div>
			</div>
		</div>
	</section>
	<!-- End blog Area -->


	<!-- Start cta-two Area -->
	<section class="cta-two-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 cta-left">
					<h1>Mari bergabung bersama Unusia</h1>
				</div>
				<div class="col-lg-4 cta-right">
					<a class="primary-btn wh" href="#">Join now</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End cta-two Area -->

	<!-- start footer Area -->
	<?php echo $footer; ?>
	<!-- End footer Area -->

	<!-- Modal Search-->
    <div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index: 10000;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="<?php echo site_url('search'); ?>" method="GET">
                        <div class="input-group">
                            <input type="text" name="search_query" class="form-control input-search" style="height: 40px;" placeholder="Search..." required>
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit" style="height: 40px;background-color: #ccc;"><span class="fa fa-search"></span></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

	<script src="<?= base_url('theme/js/vendor/jquery-2.2.4.min.js'); ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
	</script>
	<script src="<?= base_url('theme/js/vendor/bootstrap.min.js'); ?>"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="<?= base_url('theme/js/easing.min.js'); ?>"></script>
	<script src="<?= base_url('theme/js/hoverIntent.js'); ?>"></script>
	<script src="<?= base_url('theme/js/superfish.min.js'); ?>"></script>
	<script src="<?= base_url('theme/js/jquery.ajaxchimp.min.js'); ?>"></script>
	<script src="<?= base_url('theme/js/jquery.magnific-popup.min.js'); ?>"></script>
	<script src="<?= base_url('theme/js/jquery.tabs.min.js'); ?>"></script>
	<script src="<?= base_url('theme/js/jquery.nice-select.min.js'); ?>"></script>
	<script src="<?= base_url('theme/js/owl.carousel.min.js'); ?>"></script>
	<script src="<?= base_url('theme/js/mail-script.js'); ?>"></script>
	<script src="<?= base_url('theme/js/main.js'); ?>"></script>
	
	<script type="text/javascript">
		// Set cursor focus to search form{
			$('.btn-search').on('click',function(){
    	$('#ModalSearch').modal('show');
    	$('#ModalSearch').on('shown.bs.modal', function () {
		    $('.input-search').focus();
		})  
    });
	</script>
</body>

</html>
