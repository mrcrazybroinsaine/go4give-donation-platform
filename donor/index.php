<?php
include '../config.php';
$admin = new Admin();

$stmt = $admin->ret("SELECT * FROM `donor`");
$tot_donor = $stmt->rowCount();

$stmt2 = $admin->ret("SELECT * FROM `donation`");
$tot_amount = 0;
while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
	$tot_amount += $row2['do_amount'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Unicare - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
		rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">


	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<div class="wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-6 d-flex align-items-center">
					<p class="mb-0 phone pl-md-2">
						<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> 9876543210</a>
						<a href="#"><span class="fa fa-paper-plane mr-1"></span> go4give@gmail.com</a>
					</p>
				</div>
				<div class="col-md-6 d-flex justify-content-md-end">
					<div class="social-media">
						<p class="mb-0 d-flex">
							<a href="#" class="d-flex align-items-center justify-content-center"><span
									class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span
									class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span
									class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span
									class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'header.php'; ?>
	<!-- END nav -->

	<section class="hero-wrap js-fullheight">
		<div class="home-slider js-fullheight owl-carousel">
			<div class="slider-item js-fullheight" style="background-image:url(images/bg_1.jpg);">
				<div class="overlay-1"></div>
				<div class="overlay-2"></div>
				<div class="overlay-3"></div>
				<div class="overlay-4"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center">
						<div class="col-md-10 col-lg-7 ftco-animate">
							<div class="text w-100">
								<h2>Help the poor in need</h2>
								<h1 class="mb-3">Lend the helping hand get involved</h1>
								<div class="d-flex meta">
									<!-- <div class="">
										<p class="mb-0"><a href="#" class="btn btn-secondary py-3 px-2 px-md-4">Become A
												Volunteer</a></p>
									</div>
									<a href="#" class="d-flex align-items-center button-link">
										<div class="button-video d-flex align-items-center justify-content-center">
											<span class="fa fa-play"></span>
										</div>
										<span>Watch our video</span>
									</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item js-fullheight" style="background-image:url(images/bg_2.jpg);">
				<div class="overlay-1"></div>
				<div class="overlay-2"></div>
				<div class="overlay-3"></div>
				<div class="overlay-4"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center">
						<div class="col-md-10 col-lg-7 ftco-animate">
							<div class="text w-100">
								<h2>Raising Hope</h2>
								<h1 class="mb-3">Discover Non-Profit Charity Platform</h1>
								<div class="d-flex meta">
									<!-- <div class="">
										<p class="mb-0"><a href="#" class="btn btn-secondary py-3 px-2 px-md-4">Become A
												Volunteer</a></p>
									</div>
									<a href="#" class="d-flex align-items-center button-link">
										<div class="button-video d-flex align-items-center justify-content-center">
											<span class="fa fa-play"></span>
										</div>
										<span>Watch our video</span>
									</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item js-fullheight" style="background-image:url(images/bg_3.jpg);">
				<div class="overlay-1"></div>
				<div class="overlay-2"></div>
				<div class="overlay-3"></div>
				<div class="overlay-4"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center">
						<div class="col-md-10 col-lg-7 ftco-animate">
							<div class="text w-100">
								<h2>Raising Hope</h2>
								<h1 class="mb-3">Giving Hope to the Homeless People</h1>
								<div class="d-flex meta">
									<!-- <div class="">
										<p class="mb-0"><a href="#" class="btn btn-secondary py-3 px-2 px-md-4">Become A
												Volunteer</a></p>
									</div>
									<a href="#" class="d-flex align-items-center button-link">
										<div class="button-video d-flex align-items-center justify-content-center">
											<span class="fa fa-play"></span>
										</div>
										<span>Watch our video</span>
									</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<!-- <div class="col-md-5 order-md-last d-flex align-items-stretch">
					<div class="donation-wrap">
						<div class="total-donate d-flex align-items-center">
							<span class="fa flaticon-cleaning"></span>
							<h4>Donation Campaign <br>are running</h4>
							<p class="d-flex align-items-center">
								<span>$</span>
								<span class="number" data-number="24781">0</span>
							</p>
						</div>
						<form action="#" class="appointment">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="name">Full Name</label>
										<div class="input-wrap">
											<div class="icon"><span class="fa fa-user"></span></div>
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="name">Email Address</label>
										<div class="input-wrap">
											<div class="icon"><span class="fa fa-paper-plane"></span></div>
											<input type="email" class="form-control" placeholder="">
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="name">Select Causes</label>
										<div class="form-field">
											<div class="select-wrap">
												<div class="icon"><span class="fa fa-chevron-down"></span></div>
												<select name="" id="" class="form-control">
													<option value=""></option>
													<option value="">House Washing</option>
													<option value="">Roof Cleaning</option>
													<option value="">Driveway Cleaning</option>
													<option value="">Gutter Cleaning</option>
													<option value="">Patio Cleaning</option>
													<option value="">Building Cleaning</option>
													<option value="">Concrete Cleaning</option>
													<option value="">Sidewal Cleaning</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="name">Amount</label>
										<div class="input-wrap">
											<div class="icon"><span class="fa fa-money"></span></div>
											<input type="text" class="form-control" placeholder="$5">
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="name">Payment Method</label>
										<div class="d-lg-flex">
											<div class="form-radio mr-3">
												<div class="radio">
													<label>
														<input type="radio" name="radio-input" checked>
														<span class="checkmark"></span>
														<span class="fill-control-description">Credit Card</span>
													</label>
												</div>
											</div>
											<div class="form-radio mr-3">
												<div class="radio">
													<label>
														<input type="radio" name="radio-input">
														<span class="checkmark"></span>
														<span class="fill-control-description">Paypal</span>
													</label>
												</div>
											</div>
											<div class="form-radio">
												<div class="radio">
													<label>
														<input type="radio" name="radio-input">
														<span class="checkmark"></span>
														<span class="fill-control-description">Payoneer</span>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Donate Now" class="btn btn-secondary py-3 px-4">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div> -->
				<div class="col-md-7 wrap-about py-5">
					<div class="heading-section pr-md-5 pt-md-5">
						<span class="subheading">Welcome to Go4Give</span>
						<h2 class="mb-4">We are here to help everyone in need</h2>
						<p>Welcome to Go4Give website, dedicated to supporting orphanage and old age people in need. We are committed to providing a nurturing and caring environment for these vulnerable members of society. Through your generous donations of basic needs and financial support, we can make a profound difference in their lives. Your contributions enable us to provide essential resources such as food, shelter, clothing, healthcare, and education.</p><p> Every donation, no matter the size, brings us one step closer to ensuring a brighter future for these individuals. Join us in our mission to spread love and compassion by making a meaningful impact. Together, we can create a world where every orphan and elderly person receives the care and support they deserve. Donate now and be a part of this transformative journey.</p>
					</div>
					<div class="row my-md-5">
						<div class="col-md-6 d-flex counter-wrap">
							<div class="block-18 d-flex">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="flaticon-volunteer"></span>
								</div>
								<div class="desc">
									<div class="text">
										<strong class="number" data-number="<?php echo $tot_donor; ?>">0</strong>
									</div>
									<div class="text">
										<span>Total Donors</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex counter-wrap">
							<div class="block-18 d-flex">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="flaticon-piggy-bank"></span>
								</div>
								<div class="desc">
									<div class="text">
										<strong class="number" data-number="<?php echo $tot_amount; ?>">0</strong>
									</div>
									<div class="text">
										<span>Total Amount</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- <p><a href="#" class="btn btn-secondary btn-outline-secondary">Become A Volunteer</a></p> -->
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-3 d-flex align-items-stretch">
					<div class="services">
						<div class="text text-center bg-secondary">
							<h3>Start <br>Helping</h3>
							<p>

							Make a difference in the lives of the elderly – donate anything you can today. Your contribution brings joy and comfort to those who need it most.

</p>
						</div>
						<div class="img border-2" style="background-image: url(images/services-1.jpg);">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-volunteer"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-items-stretch">
					<div class="services">
						<div class="text text-center bg-tertiary">
							<h3>Quick <br>Fundraising</h3>
							<p>Together, let’s raise funds to make a real difference in the lives of those who need it most. Your support can bring hope, happiness, and a brighter future.”</p>
						</div>
						<div class="img border-3" style="background-image: url(images/services-2.jpg);">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-piggy-bank"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-items-stretch">
					<div class="services">
						<div class="text text-center bg-primary">
							<h3>Start <br>Donating</h3>
							<p>Start donating today and be the driving force behind positive change. Your contribution has the power create a brighter future for those in need. </p>
						</div>
						<div class="img border-1" style="background-image: url(images/services-3.jpg);">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-donation"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex align-items-stretch">
					<div class="services">
						<div class="text text-center bg-quarternary">
							<h3>Get <br>Involved</h3>
							<p>Get involved today and be part of the change by donating your time, resources, or skills. Together, we can make a meaningful difference in their life.</p>
						</div>
						<div class="img border-4" style="background-image: url(images/services-4.jpg);">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-ecological"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pb">
		<div class="container">
			<div class="row justify-content-center pb-5 mb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Our Causes</span>
					<h2>Donate to charity causes around the world</h2>
				</div>
			</div>
			<div class="row">
				<?php
				$stmt3 = $admin->ret("SELECT * FROM `fundraiser`");
				while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
					$id = $row3['fu_id'];
					$totamt = 0;
					$st = $admin->ret("SELECT * FROM `donation` where `fu_id`='$id'");

					while ($ro = $st->fetch(PDO::FETCH_ASSOC)) {
						$totamt += $ro['do_amount'];
					}

					$percentage = ($totamt / $row3['fu_amt']) * 100;

					?>

					<div class="col-md-6 col-lg-3">
						<div class="causes causes-2 text-center ftco-animate">
							<a href="#" class="img w-100"
								style="background-image: url('../controller/<?php echo $row3['poster']; ?>');"></a>
								
							<div class="text p-3">
								<h2><a href="#">
										<?php echo $row3['cause']; ?>
									</a></h2>
								<p>
									<?php echo $row3['fu_desc']; ?>
								</p>
								<div class="goal mb-4">
									<p><span>Rs.
											<?php echo $row3['fu_amt']; ?>
										</span> to go</p>
									<p><span>Rs.
											<?php echo $totamt; ?>
										</span> Donoted</p>
									<div class="progress" style="height:20px">
										<div class="progress-bar progress-bar-striped"
											style="width:<?php echo $percentage; ?>%; height:20px"><?php echo $percentage; ?>%
										</div>
									</div>
									<p> Last Date : <span>
											<?php echo $row3['lst_date']; ?>
										</span></p>

								</div>
								<p><a href="donate.php?fu_id=<?php echo $row3['fu_id']; ?>"
										class="btn btn-light w-100">Donate Now</a></p>
							</div>
						</div>
					</div>
				<?php } ?>

			</div>
		</div>
	</section>

	<section class="ftco-counter" id="section-counter">
		<div class="container">
			<div class="row">
				<div class="col-md-3 mb-5 mb-md-0 text-center text-md-left">
					<h2 class="font-weight-bold" style="color: #fff; font-size: 22px;">We're on a mission to help all
						your problems</h2>
					<a href="#" class="btn btn-white btn-outline-white">Donate Now</a>
				</div>
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<strong class="number" data-number="<?php echo $tot_donor; ?>">0</strong>
								</div>
								<div class="text">
									<span>Total Donors</span>
								</div>
							</div>
						</div>
						<?php
							$stt=$admin->ret("select * from `fundraiser`");
							$tot_fund=$stt->rowCount();

							$stt1=$admin->ret("select * from `orphanage`");
							$tot_orph=$stt1->rowCount();
						?>
						<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<strong class="number" data-number="<?php echo $tot_fund; ?>">0</strong>
								</div>
								<div class="text">
									<span>Total Fundraiser</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<strong class="number" data-number="<?php echo $tot_amount; ?>">0</strong>
								</div>
								<div class="text">
									<span>Total Amount</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<strong class="number" data-number="<?php echo $tot_orph; ?>">0</strong>
								</div>
								<div class="text">
									<span>Total Orphanage</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section testimony-section">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
					<span class="subheading">Feedbacks</span>
					<h2>Donor Feedbacks</h2>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">
						<?php
						$stmt0 = $admin->ret("SELECT * FROM `feedback` inner join `donor` on feedback.d_id=donor.d_id inner join `orphanage` on feedback.o_id=orphanage.o_id");
						while ($row0 = $stmt0->fetch(PDO::FETCH_ASSOC)) {
							?>
							<div class="item">
								<div class="testimony-wrap d-flex">
									<div class="user-img" style="background-image: url('../controller/<?php echo $row0['d_profile']; ?>')">
									

									</div>
									<div class="text pl-4">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="fa fa-quote-left"></i>
										</span>
										<p class="rate">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</p>
										<p><?php echo $row0['f_msg']; ?></p>
										<p class="name"><?php echo $row0['d_name']; ?></p>
										<span class="position"><?php echo $row0['o_name']; ?></span>
									</div>
								</div>
							</div>
						<?php } ?>

					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center pb-5 mb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Our Blog</span>
					<h2>Latest news from our blog</h2>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="blog-single.html" class="block-20"
							style="background-image: url('images/image_1.jpg');">
						</a>
						<div class="text p-4">
							<div class="meta mb-2">
								<div><a href="#">July 20, 2020</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
							</div>
							<h3 class="heading"><a href="#">Foods &amp; Water Need in Africa</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia
							</p>
							<p><a href="#" class="btn btn-secondary">Read more</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="blog-single.html" class="block-20"
							style="background-image: url('images/image_2.jpg');">
						</a>
						<div class="text p-4">
							<div class="meta mb-2">
								<div><a href="#">July 20, 2020</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
							</div>
							<h3 class="heading"><a href="#">Foods &amp; Water Need in Africa</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia
							</p>
							<p><a href="#" class="btn btn-secondary">Read more</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="blog-single.html" class="block-20"
							style="background-image: url('images/image_3.jpg');">
						</a>
						<div class="text p-4">
							<div class="meta mb-2">
								<div><a href="#">July 20, 2020</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
							</div>
							<h3 class="heading"><a href="#">Foods &amp; Water Need in Africa</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia
							</p>
							<p><a href="#" class="btn btn-secondary">Read more</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
						<a href="blog-single.html" class="block-20"
							style="background-image: url('images/image_4.jpg');">
						</a>
						<div class="text p-4">
							<div class="meta mb-2">
								<div><a href="#">July 20, 2020</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
							</div>
							<h3 class="heading"><a href="#">Foods &amp; Water Need in Africa</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia
							</p>
							<p><a href="#" class="btn btn-secondary">Read more</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->


	<!-- <section class="ftco-section ftco-no-pt">
		<div class="container">
			<div class="row justify-content-center pb-5 mb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Volunteer</span>
					<h2>Our Expert Volunteer</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-3">
					<div class="volunteer">
						<div class="img" style="background-image: url(images/team-1.jpg);"></div>
						<div class="text text-1">
							<h3>Alex Martin</h3>
							<span>Volunteer</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="volunteer">
						<div class="img" style="background-image: url(images/team-2.jpg);"></div>
						<div class="text text-2">
							<h3>Cedrick Brown</h3>
							<span>Volunteer</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="volunteer">
						<div class="img" style="background-image: url(images/team-3.jpg);"></div>
						<div class="text text-3">
							<h3>John Wick</h3>
							<span>Volunteer</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="volunteer">
						<div class="img" style="background-image: url(images/team-4.jpg);"></div>
						<div class="text text-4">
							<h3>Max Love</h3>
							<span>Volunteer</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<!-- <section class="ftco-hireme bg-secondary">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-8 col-lg-8 d-flex align-items-center">
					<div class="w-100">
						<h2>Best Way to Make a Difference in the Lives of Others</h2>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 d-flex align-items-center justify-content-end">
					<p class="mb-0"><a href="#" class="btn btn-primary py-3 px-4">Become A Volunteer</a></p>
				</div>
			</div>
		</div>
	</section> -->


	<?php include 'footer.php'; ?>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

</body>

</html>