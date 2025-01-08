@extends('guest.layouts.app')

@section('title', "Services")
@section('meta_description', "Expert legal and management consulting services in areas such as law, justice, trade, customs, import/export, maritime, civil, criminal, IT, intellectual property, and more.")
@section('meta_keywords', "Law, Legal, Court, Justice, fundamental rights, training, consultancy, consultants, Customs, import, export, trade, international, management, training, service, contract, civil, industrial, IT, intellectual, mercantile")

@section('content')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(guestassets/images/background/6.jpg)">
    	<div class="container">
			<div class="content">
				<h1>Services</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Services</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Services Section Two -->
	<section class="services-section-four">
		<div class="container">
			<!-- Sec Title -->
			<div class="section-title centered">
				<div class="title">Services</div>
				<h3>We are here to help you for<br>  any<span> legal issues</span></h3>
			</div>
			<div class="row clearfix">
				@if($service)
				@foreach($service as $key => $ser)
				<!-- Services Block Two -->
				<div class="services-block-two style-two col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon"><img src="/uploads/services/{{ $ser->serviceicon }}"></span>
						</div>
						<h3>{{ $ser->servicename }}</h3>
						<div class="text">{!! $ser->servicecontent !!}</div>
						<div class="overlay-box" style="background-image:url( /uploads/services/{{ $ser->serviceimage }});">
							<div class="overlay-inner">
								<div class="content">
									<span class="icon"><img src="/uploads/services/{{ $ser->serviceicon }}"></span>
									<h4><a href="services.php">{{ $ser->servicename }}</a></h4>
									<a href="{{ route('services') }}" class="theme-btn btn-style-one">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				@endif
				
				
				<!-- Services Block Two -->
				{{-- <div class="services-block-two style-two col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon"><img src="guestassets/images/icons/s2.webp"></span>
						</div>
						<h3>Management</h3>
						<div class="text">Procurement , Warehouse, Store, Logistics, Supply chain, Export & Import Management, 5S, Contract Management etc.Intellectual property right, Negotiation, Agreements, Documentation, etc.</div>
						<div class="overlay-box" style="background-image: url(guestassets/images/resource/service-1.jpg);">
							<div class="overlay-inner">
								<div class="content">
									<span class="icon"><img src="guestassets/images/icons/s2.webp"></span>
									<h4><a href="services.php">Management</a></h4>
									<a href="{{ route('services') }}" class="theme-btn btn-style-one">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div> --}}
				
				
				
			</div>
		
		</div>
	</section>
	<!-- End Services Section Two -->
	
	<!-- Pricing Section -->
	<section class="pricing-section">
		<div class="container">
			<!-- Sec Title -->
			<div class="section-title centered">
				<div class="title">Pricing</div>
				<h3>Choose the best option to<br> associate <span> with us</span></h3>
			</div>
			
			<!--Pricing Info Tabs-->
			<div class="pricing-info-tabs">
				<!--Pricing Tabs-->
				<div class="pricing-tabs tabs-box">
				
					<!--Tab Btns-->
                <!--<ul class="tab-btns tab-buttons clearfix">
						<li data-tab="#package-monthly" class="tab-btn active-btn"><span class="circle"></span> Monthly</li>
						<li data-tab="#package-yearly" class="tab-btn"><span class="circle"></span> Yearly <span class="save">Save 20%</span></li>
					</ul> -->
					
					<!--Tabs Container-->
					<div class="tabs-content">
						
						
						<div class="tab active-tab" id="package-monthly">
							<div class="content">
								
								<div class="row clearfix">
									@if('$data')
									@foreach($data as $key => $link	)
									<!-- Price Block -->
									<div class="price-block col-lg-4 col-md-6 col-sm-12">
										<div class="inner-box">
											<!-- Title Box -->
											<iframe width="100%" height="403px" src="{{$link->link}}" frameborder="0" allowfullscreen></iframe>
										</div>
									</div>
									@endforeach
									@endif
									
									
								</div>
								
							</div>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Pricing Section -->
	 @endsection