@extends('guest.layouts.app')

@section('title', "Gallery")
@section('meta_description', "Explore our Gallery of Legal and Management Services, showcasing our expertise in contracts, trade, intellectual property, civil law, criminal law, and much more")
@section('meta_keywords', "Law, Legal, Court, Justice, fundamental rights, training, consultancy, consultants, Customs, import, export, trade, international, management, training, service, contract, civil, industrial, IT, intellectual, mercantile")


@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url(guestassets/images/background/7.jpg)">
    	<div class="container">
			<div class="content">
				<h1>Gallery</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Gallery</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Portfolio Section Two -->
	<section class="portfolio-section-two masonry-section">
		<div class="container">
			<!-- Sec Title -->
			<div class="section-title centered">
				<div class="title">Gallery</div>
				<h3>Here is our  <span>activities</span></h3>
			</div>
			
			<!--Isotope Galery-->
            <div class="sortable-masonry">
                
                <!--Filter-->
               <!--  <div class="filters clearfix">
                	
                	<ul class="filter-tabs filter-btns text-center clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">All</li>
                        <li class="filter" data-role="button" data-filter=".business">Legal</li>
                        <li class="filter" data-role="button" data-filter=".criminal">Management</li>
                        
                    </ul>
                    
                </div> -->
                
                <div class="items-container row clearfix">
					
					<!-- Portfolio Block Three -->
					@if($portrait)
					@foreach($portrait as $key => $port)
					<div class="project-block-three masonry-item all criminal personal col-lg-6 col-md-12 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="/uploads/gallery/{{ $port->portimg }}" alt="" />
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="title"></div>
										<h5><a href="#"></a></h5>
										<a href="/uploads/gallery/{{ $port->portimg }}" data-fancybox="gallery-4" data-caption="" class="plus flaticon-plus"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					@endif
					
					<!-- Portfolio Block Three -->
					@if($photo)
                    @foreach($photo as $key => $pht)
					<div class="project-block-three masonry-item all civil others business col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="/uploads/gallery/{{ $pht->photoimg }}" alt="" />
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="title"></div>
										<h5><a href="#"></a></h5>
										<a href="/uploads/gallery/{{ $pht->photoimg }}" data-fancybox="gallery-4" data-caption="" class="plus flaticon-plus"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					@endif
					<!-- Portfolio Block Three -->
					{{-- <div class="project-block-three masonry-item all business insurance col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="guestassets/images/gallery/gal3.jpg" alt="" />
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="title"></div>
										<h5><a href="#"></a></h5>
										<a href="guestassets/images/gallery/gal3.jpg" data-fancybox="gallery-4" data-caption="" class="plus flaticon-plus"></a>
									</div>
								</div>
							</div>
						</div>
					</div> --}}
					
					<!-- Portfolio Block Three -->
					{{-- <div class="project-block-three masonry-item all criminal others personal civil col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="guestassets/images/gallery/gal4.jpg" alt="" />
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="title"></div>
										<h5><a href="#"> </a></h5>
										<a href="guestassets/images/gallery/gal4.jpg" data-fancybox="gallery-4" data-caption="" class="plus flaticon-plus"></a>
									</div>
								</div>
							</div>
						</div>
					</div> --}}
					
					<!-- Portfolio Block Three -->
					{{-- <div class="project-block-three masonry-item all personal others criminal civil col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="guestassets/images/gallery/gal5.jpg" alt="" />
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="title"></div>
										<h5><a href="#"></a></h5>
										<a href="guestassets/images/gallery/gal5.jpg" data-fancybox="gallery-4" data-caption="" class="plus flaticon-plus"></a>
									</div>
								</div>
							</div>
						</div>
					</div> --}}
					
				</div>
			</div>
			
		</div>
	</section>
	@endsection