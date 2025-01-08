@extends('guest.layouts.app')

@section('title', "Contact")
@section('meta_description', "Contact Kosher Man for professional legal services, covering contracts, trade, intellectual property, civil law, criminal law, and management consultancy.")
@section('meta_keywords', "Law, Legal, Court, Justice, fundamental rights, training, consultancy, consultants, Customs, import, export, trade, international, management, training, service, contract, civil, industrial, IT, intellectual, mercantile")


@section('content')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(guestassets/images/background/4.jpg)">
    	<div class="container">
			<div class="content">
				<h1>Contact</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Contact</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Contact Page Section -->
	
	<section class="contact-page-section">
		<div class="map-section">
			<!--Map Outer-->
			<div class="map-outer">
				<!--Map Canvas-->
				<div class="map-canvas"
					data-zoom="12"
					data-lat="-37.817085"
					data-lng="144.955631"
					data-type="roadmap"
					data-hue="#ffc400"
					data-title="Envato"
					data-icon-path="guestassets/images/icons/map-marker.png"
					data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="inner-container">
				<h2>Get <span> in Touch</span></h2>
				<div class="row clearfix">
					
					<!-- Info Column -->
					@if($info)
					@foreach($info as $key => $inf)
					<div class="info-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="text">Please contact us using the information below. For additional information please visit our office.</div>
							<ul class="list-style-six">
								<li><span class="icon fa fa-building"></span>{!!$inf->infoaddress!!}</li>  
								<li><span class="icon fa fa-fax"></span>
									@foreach(explode(',', $inf->infophone) as $phn)
									  <a href="tel:{{ trim($phn) }}">{{ trim($phn) }}</a><br>
									@endforeach</li>
								<li><span class="icon fa fa-envelope-o"></span><a href="mailto:{{$inf->infoemail}}">{{$inf->infoemail}}</a></li>
								<li><span class="icon fa fa-globe"></span><a href="https://koshermanlegal.com">koshermanlegal.com</a></li>
							</ul>
						</div>
					</div>
					@endforeach
					@endif
					
					<!-- Form Column -->
					<div class="form-column col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column">
							
							<!--Contact Form-->
							<div class="contact-form">

								@if (session('success'))
								<div class="alert alert-success">
									{{ session('success') }}
								</div>
								@endif

								<form method="post" action="{{ route('contact') }}" id="contact-form">
									@csrf
									<div class="form-group">
										<input type="text" name="name" value="{{ old('name') }}" placeholder="Full name" required>
										@error('name')
										<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
									
									<div class="form-group">
										<input type="text" name="email" value="{{ old('email') }}" placeholder="Email" required>
										@error('email')
										<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
									
									<div class="form-group">
										<select class="custom-select-box" name="topic" required>
											<option value="" disabled selected>Select topic</option>
											<option value="Legal" {{ old('topic') == 'Legal' ? 'selected' : '' }}>Legal</option>
											<option value="Management" {{ old('topic') == 'Management' ? 'selected' : '' }}>Management</option>
										</select>
										@error('topic')
										<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
									
									<div class="form-group">
										<textarea name="message" placeholder="Write your message..." required>{{ old('message') }}</textarea>
										@error('message')
										<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
									
									<div class="form-group">
										<button type="submit" class="theme-btn btn-style-one">Submit</button>
									</div>                                        
									
								</form>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	
	<!-- End Team Page Section -->
	
	<!-- Contact Info Section -->
	<section class="contact-info-section" style="background-image:url(guestassets/images/background/5.jpg)">
		<div class="container">
			@if($info)
			@foreach($info as $key => $inf)
			<div class="row clearfix">
				
				<div class="column col-lg-4 col-md-6 col-sm-12">
					<h4>Address</h4>
					<ul class="list-style-seven">
						<li><span class="icon flaticon-map-1"></span>{!!$inf->infoaddress!!}</li>
						<li><span class="icon fa fa-globe"></span><a href="https://koshermanlegal.com">koshermanlegal.com</a></li>
					</ul>
				</div>
				<div class="column col-lg-4 col-md-6 col-sm-12">
					<h4>Phone Number</h4>
					<ul class="list-style-seven">
						<li><span class="icon fa fa-fax"></span>
							@foreach(explode(',', $inf->infophone) as $phn)
								<a href="tel:{{ trim($phn) }}">{{ trim($phn) }}</a><br>
							@endforeach
						</li>
					</ul>
				</div>
				<div class="column col-lg-4 col-md-6 col-sm-12">
					<h4>Email Address</h4>
					<ul class="list-style-seven">
						<li><span class="icon fa fa-envelope-o"></span><a href="mailto:{{$inf->infoemail}}">{{$inf->infoemail}}</a></li>
					</ul>
				</div>
				
			</div>
			@endforeach
	      @endif
		</div>
	</section>
	<!-- End Contact Info Section -->
	 @endsection