@extends('guest.layouts.app')

@section('title',"About")
@section('meta_description', "Kosher Man provides professional Legal Management Consulting Services, focusing on areas such as law, justice, contracts, trade, intellectual property, and business solutions.")
@section('meta_keywords', "Law, Legal, Court, Justice, fundamental rights, training, consultancy, consultants, Customs, import, export, trade, international, management, training, service, contract, civil, industrial, IT, intellectual, mercantile")




@section('content')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(guestassets/images/background/ab-back.jpg)">
    	<div class="container">
			<div class="content">
				<h1>About Us</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>About us</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- About Section -->
	<section class="about-section">
		@if('$about')
		@foreach($about as $key => $abt)
		<!-- Image Layer -->
		<div class="image-layer" style="background-image:url(/uploads/about/{{ $abt->abmainpic }})"></div>
		<div class="container">
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Sec Title -->
						<div class="section-title">
							<div class="title">about us</div>
							<h3>{{ $abt->abtitle }} <span>{{$abt->absub}}</span></h3>
						</div>
						
						<div class="text">
							<p>{!! $abt->abcontent !!}</p>
						</div>
						
						
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-8 col-sm-12">
					<div class="wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="guestassets/images/resource/about-2.jpg" alt=""/>
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<!-- <h2>20 <span>years of experience</span></h2> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				
			</div>
		</div>
		@endforeach
		@endif
	</section>
	<!-- End About Section -->
	
	
	
	<!-- Counter Section -->
	<section class="counter-section style-two">
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

				@if('$staff')
				@foreach($staff as $key => $stf)
				<!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="#"><img src="/uploads/team/{{$stf->staffpic}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">{{$stf->staffname}}</a></h3>
							<div class="designation"></div>
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
				@endforeach
              @endif

			</div>
			
		</div>
	</section>
	<!-- End Team Section -->
@endsection