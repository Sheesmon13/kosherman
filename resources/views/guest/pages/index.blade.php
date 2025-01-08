@extends('guest.layouts.app')

@section('title',"Home")
@section('meta_description',"Kosher Man offers professional Law and Management Consultancy services, focusing on contracts, trade, intellectual property, civil law, criminal law, and more.")
@section('meta_keywords', "Law, Legal, Court, Justice, fundamental rights, training, consultancy, consultants, Customs, import, export, trade, international, management, training, service, contract, civil, industrial, IT, intellectual, mercantile")

@section('content')
<!--Banner Section-->
<section class="banner-section">
	<div class="main-slider-carousel owl-carousel owl-theme">
		<!-- Slide -->
		<div class="slide" style="background-image:url(guestassets/images/main-slider/1.jpg)">
			<div class="container">
				<div class="content">
					<div class="title">Kosher Man</div>
					<h1>Jurisprudence:Navigating  <br> Laws,Rights,<span> Justice.</span></h1> 
					<a href="{{ route('contact') }}" class="theme-btn btn-style-one">Contact us </a>
				</div>
			</div>
		</div>
		<!-- Slide -->
		<div class="slide" style="background-image:url(guestassets/images/main-slider/2.jpg)">
			<div class="container">
				<div class="content">
					<div class="title">Kosher Man</div>
					<h1>Legal Insights:Briefs, Cases <span>,Precedents</span></h1>
					<a href="{{ route('contact') }}" class="theme-btn btn-style-one">Contact us </a>
				</div>
			</div>
		</div>
		<!-- Slide -->
		<!-- <div class="slide" style="background-image:url(guestassets/images/main-slider/1.jpg)">
			<div class="container">
				<div class="content">
					<div class="title">Introduce with LawSight</div>
					<h1>We are here to protect <br> any kind of <span>Violance</span></h1>
					<a href="#" class="theme-btn btn-style-one">Contact us today</a>
				</div>
			</div>
		</div> -->
	</div>
</section>
<!--End Banner Section-->

<!-- Services Section -->
<section class="services-section">
	<div class="icon-one wow zoomIn" data-wow-delay="250ms" data-wow-duration="1500ms" style="background-image:url(guestassets/images/icons/icon-1.png)"></div>
	<div class="icon-two wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms" style="background-image:url(guestassets/images/icons/icon-2.png)"></div>
	<div class="container">
		<div class="row clearfix">
					
			<!-- Services Block -->
			<div class="services-block col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="border-one"></div>
					<div class="border-two"></div>
					<div class="content">
						<div class="icon-box">
							<span class="icon flaticon-family"></span>
						</div>
						<h6><a href="{{ route('services') }}">Logistics</a></h6>
						<div class="text">Logistics is the backbone of global commerce, encompassing the intricate web of processes</div>
					</div>
				</div>
			</div>
			
			<!-- Services Block -->
			<div class="services-block col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
					<div class="border-one"></div>
					<div class="border-two"></div>
					<div class="content">
						<div class="icon-box">
							<span class="icon flaticon-fingerprint-1"></span>
						</div>
						<h6><a href="{{ route('services') }}">Religious law</a></h6>
						<div class="text">Religious law refers to a system of rules and regulations derived from religious texts etc.</div>
					</div>
				</div>
			</div>
			
			<!-- Services Block -->
			<div class="services-block col-lg-4 col-md-6 col-sm-12">
				<div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
					<div class="border-one"></div>
					<div class="border-two"></div>
					<div class="content">
						<div class="icon-box">
							<span class="icon flaticon-non-stop-call"></span>
						</div>
						<h6><a href="{{ route('services') }}">Corporate law</a></h6>
						<div class="text">Corporate law encompasses the body of legal principles governing the formation.</div>
					</div>
				</div>
			</div>
		
		</div>
	</div>
</section>
<!-- End Services Section -->

<!-- About Section -->
<section class="about-section">
	<!-- Image Layer -->
	<div class="image-layer" style="background-image:url(guestassets/images/resource/about-1.jpg)"></div>
	<div class="container">
		<div class="row clearfix">
			
			<!-- Content Column -->
			<div class="content-column col-lg-7 col-md-12 col-sm-12">
				<div class="inner-column">
					
					<!-- Sec Title -->
					<div class="section-title">
						<div class="title">about us</div>
						<h3>We are here to <span>help you</span></h3>
					</div>
					
					<div class="text">
						<p>An experienced person of 36 years in large multinational industries along with teaching and training experience of 20 years is heading this organization. He has expertise in supply chain management at various functional areas like procurement, negotiation contracts, agreements, liaising, mediation, international trade and practices, import export related customs and excise , tax matters, auctioning , warehouse and stores management, planning , manufacturing, handling industrial disputes , labour issues, logistics , maritime management etc. compiled his legal profession to provide a complete solution to the industries and individuals in the matters of law and management.</p>
						<p>Our aim, as the logo “Kosher Man” suggests, to provide proper and fit solutions in the field of Law and Management for the needy in a speedy manner and in the most economical way.</p>
					</div>
					
					
					<!-- <div class="signature">
						<div class="signature-img"><img src="guestassets/images/icons/signature.png" alt=""/></div>
						<h5>Natalia Duke</h5>
						<div class="designation">(Chairman and founder)</div>
					</div> -->
				</div>
			</div>
			
			<!-- Image Column -->
			<div class="image-column col-lg-5 col-md-12 col-sm-12">
				<div class="s wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="image">
						<!-- <img src="guestassets/images/resource/adv1.JPG" alt=""/> -->
						<div class="overlay-box">
							<div class="overlay-inner">
								<div class="content">
									<!-- <h2>35 <span>years of experience</span></h2> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			
		</div>
	</div>
</section>
<!-- End About Section -->

<!-- Services Section Two -->
<section class="services-section-two" style="background-image: url(guestassets/images/background/1.jpg);">
	<div class="container">
		<!-- Sec Title -->
		<div class="section-title light centered">
			<div class="title">Services</div>
			<h3>We are here to help you for<br>  any<span> legel issues</span></h3>
		</div>
		<div class="row clearfix">
			
			<!-- Services Block Two -->
			<div class="services-block-two col-lg-6 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="icon flaticon-internet"></span>
					</div>
					<h3>Legel</h3>
					<div class="text">Civil Suits, Criminal Suits, Torts, Contracts, Family, Immigration, Labour, International Trade, Real Estate, etc.</div>
					<div class="overlay-box" style="background-image: url(guestassets/images/resource/service-1.jpg);">
						<div class="overlay-inner">
							<div class="content">
								<span class="icon flaticon-internet"></span>
								<h4><a href="services.php">Legel</a></h4>
								<a href="{{ route('services') }}" class="theme-btn btn-style-one">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Services Block Two -->
			<div class="services-block-two col-lg-6 col-md-6 col-sm-12">
				<div class="inner-box">
					<div class="icon-box">
						<span class="icon flaticon-museum"></span>
					</div>
					<h3>Management</h3>
					<div class="text">Procurement , Warehouse, Store, Logistics, Supply chain, Export & Import Management, 5S, Contract Management etc.</div>
					<div class="overlay-box" style="background-image: url(guestassets/images/resource/service-1.jpg);">
						<div class="overlay-inner">
							<div class="content">
								<span class="icon flaticon-museum"></span>
								<h4><a href="services.php">Management</a></h4>
								<a href="{{ route('services') }}" class="theme-btn btn-style-one">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			
		</div>
	
		<!-- Lower Section -->
		<div class="lower-section">
			<div class="carousel-box">
				<div class="content">
					<div class="single-item-carousel owl-carousel owl-theme">
						
						<!-- Testimonial Block -->
						<div class="testimonial-block">
							<div class="inner-box">
								<div class="testimonial-content">
									<span class="quote-icon flaticon-left-quote"></span>
									<div class="text">We had an excellent experiences with your team</div>
									<!-- Lower Box -->
									<div class="lower-box">
										<div class="box-inner">
											<div class="image">
												<img src="guestassets/images/resource/author-2.jpg" alt="" />
											</div>
											<h3>Willem Eduard</h3>
											<div class="designation">Accountant</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						
						<!-- Testimonial Block -->
						<div class="testimonial-block">
							<div class="inner-box">
								<div class="testimonial-content">
									<span class="quote-icon flaticon-left-quote"></span>
									<div class="text">You are providing practical and effective legal support.Your team members are experienced and responsive</div>
									<!-- Lower Box -->
									<div class="lower-box">
										<div class="box-inner">
											<div class="image">
												<img src="guestassets/images/resource/author-7.jpg" alt="" />
											</div>
											<h3>Jeena Eduard</h3>
											<div class="designation">Assistant Professor</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						
						<!-- Testimonial Block -->
						<div class="testimonial-block">
							<div class="inner-box">
								<div class="testimonial-content">
									<span class="quote-icon flaticon-left-quote"></span>
									<div class="text">Thank you for solving my legel issues.</div>
									<!-- Lower Box -->
									<div class="lower-box">
										<div class="box-inner">
											<div class="image">
												<img src="guestassets/images/resource/author-2.jpg" alt="" />
											</div>
											<h3>Willem Eduard</h3>
											<div class="designation">Accountant</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			<!-- <div class="image">
				<img src="guestassets/images/resource/author-1.png" alt="" />
			</div> -->
			
		</div>
	
	</div>
</section>
<!-- End Services Section Two -->

<!-- Counter Section -->
<section class="counter-section">
	<div class="icon-one wow zoomIn" data-wow-delay="250ms" data-wow-duration="1500ms" style="background-image:url(guestassets/images/icons/icon-3.png)"></div>
	<div class="icon-two wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms" style="background-image:url(guestassets/images/icons/icon-4.png)"></div>
	<div class="container">
		<!-- Title Box -->
		<div class="title-box">
			<div class="section-title">
				<div class="row clearfix">
					<div class="column col-lg-6 col-md-12 col-sm-12">
						<div class="title">Fun fact</div>
						<h3>We feel very proud for our <br> great <span>achievement</span></h3>
					</div>
					<!-- <div class="column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
							
							<div class="col-lg-6 col-md-6 col-sm-12">
								<p>Aenean tincidunt id mauris idology auctor. Donec at ligula lacus. Nulla dignissimmi quis neque interdum.</p>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12">
								<p>Aenean tincidunt id mauris idology auctor. Donec at ligula lacus. Nulla dignissimmi quis neque interdum.</p>
							</div>
							
						</div>
					</div> -->
				</div>
			</div>
		</div>
		
		<!-- Fact Counter -->
		<div class="fact-counter">
			<div class="row clearfix">
			
				<!--Column-->
				<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
					<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="count-outer count-box">
							<span class="count-text" data-speed="3000ms" data-stop="1825">0</span>+
							<div class="counter-title">Completed works</div>
						</div>
					</div>
				</div>
		
				<!--Column-->
				<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
					<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="count-outer count-box">
							<span class="count-text" data-speed="2000" data-stop="532">0</span>+
							<div class="counter-title">Satisfied clients</div>
						</div>
					</div>
				</div>
		
				<!--Column-->
				<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
					<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="count-outer count-box">
							<span class="count-text" data-speed="2000" data-stop="69">0</span>+
							<div class="counter-title">Winning awards</div>
						</div>
					</div>
				</div>
		
				<!--Column-->
				<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
					<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
						<div class="count-outer count-box">
							<span class="count-text" data-speed="1500" data-stop="32">0</span>+
							<div class="counter-title">Team members</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
	</div>
</section>

<!-- Team Section -->
<section class="team-section">
	<div class="container">
	
		<!-- Sec Title -->
		<div class="section-title light">
			<div class="clearfix">
				<div class="pull-left">
					<div class="title">Our Team</div>
					<h3>We are very proud for our <br> <span>team members</span></h3>
				</div>
				<!-- <div class="pull-right">
					<div class="text">Aenean tincidunt id mauris idology auctor. Donec at ligula lacus. Nulla dig nissimmi quis neque interdum. An Ohio man allegedly punched his lawyer in the face in court Tuesday upon finding out he was sentenced.</div>
				</div> -->
			</div>
		</div>
		
		<div class="clearfix">
			
			<!-- Team Block -->
			<div class="team-block col-lg-3 col-md-6 col-sm-12">
				<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="image">
						<a href="#"><img src="guestassets/images/resource/team-1.jpg" alt="" /></a>
					</div>
					<div class="lower-content">
						<h3><a href="#">Jonson Leo</a></h3>
						<!-- <div class="designation">Civil Lawyer</div> -->
						<div class="overlay-box">
							<div class="overlay-content">
								<div class="title">Contact info</div>
								<ul class="social-icons">
									<li><a href="#"><span class="fa fa-facebook"></span></a></li>
									<li><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
									<li><a href="#"><span class="fa fa-vimeo"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Team Block -->
			<div class="team-block col-lg-3 col-md-6 col-sm-12">
				<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
					<div class="image">
						<a href="#"><img src="guestassets/images/resource/team-2.jpg" alt="" /></a>
					</div>
					<div class="lower-content">
						<h3><a href="#">Malina Leo</a></h3>
						<!-- <div class="designation">Terror Lawyer</div> -->
						<div class="overlay-box">
							<div class="overlay-content">
								<div class="title">Contact info</div>
								<ul class="social-icons">
									<li><a href="#"><span class="fa fa-facebook"></span></a></li>
									<li><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
									<li><a href="#"><span class="fa fa-vimeo"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Team Block -->
			<div class="team-block col-lg-3 col-md-6 col-sm-12">
				<div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
					<div class="image">
						<a href="#"><img src="guestassets/images/resource/team-3.jpg" alt="" /></a>
					</div>
					<div class="lower-content">
						<h3><a href="#">Linda George</a></h3>
						<!-- <div class="designation">Civil Lawyer</div> -->
						<div class="overlay-box">
							<div class="overlay-content">
								<div class="title">Contact info</div>
								<ul class="social-icons">
									<li><a href="#"><span class="fa fa-facebook"></span></a></li>
									<li><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
									<li><a href="#"><span class="fa fa-vimeo"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Team Block -->
			<div class="team-block col-lg-3 col-md-6 col-sm-12">
				<div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
					<div class="image">
						<a href="#"><img src="guestassets/images/resource/team-4.jpg" alt="" /></a>
					</div>
					<div class="lower-content">
						<h3><a href="#">Neobir Fro</a></h3>
						<!-- <div class="designation">Criminal Lawyer</div> -->
						<div class="overlay-box">
							<div class="overlay-content">
								<div class="title">Contact info</div>
								<ul class="social-icons">
									<li><a href="#"><span class="fa fa-facebook"></span></a></li>
									<li><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
									<li><a href="#"><span class="fa fa-vimeo"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
	</div>
</section>
<!-- End Team Section -->



<!-- Form Section -->
<section class="form-section" style="background-image: url(guestassets/images/background/2.jpg)">
	<div class="container">
		<!-- Upper Content -->
		
		<!-- Lower Content -->
		<div class="lower-content">
			
			<!-- Default Form -->
			<div class="default-form">
				<form method="post" action="blog.html">
					<div class="row clearfix">
						<div class="form-group col-lg-4 col-md-6 col-sm-12">
							<input type="text" name="firstname" value="" placeholder="First name.." required>
						</div>
						
						<div class="form-group col-lg-4 col-md-6 col-sm-12">
							<input type="text" name="email" value="" placeholder="Last name.." required>
						</div>
						
						<div class="form-group col-lg-4 col-md-12 col-sm-12">
							<input type="text" name="phone" value="" placeholder="Email Address.." required>
						</div>
						
						<div class="form-group col-lg-12 col-md-12 col-sm-12">
							<textarea name="message" placeholder="Write..."></textarea>
						</div>
						
						<div class="form-group col-lg-12 col-md-12 col-sm-12">
							<button type="submit" class="theme-btn btn-style-one">Submit</button>
						</div>                                        
					</div>
				</form>
			</div>
			<!--End Default Form-->
			
		</div>
	</div>
</section>
<!-- End Form Section -->
	
@endsection