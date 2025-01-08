<footer class="main-footer">
    	<div class="container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--Column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
						
                        	<!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
										<a href="index.html"><img src="guestassets/images/kosherlogo.webp" alt="" /></a>
									</div>
									<div class="text">An experienced person of 36 years in large multinational industries along with teaching and training experience of 20 years is heading this organization. </div>
									
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4>Links</h4>
									<ul class="list-link">
										<li><a href="{{ route('index') }}">Home</a></li>
										<li><a href="{{ route('about') }}">About us</a></li>
										<li><a href="{{ route('services') }}">Services</a></li>
										<li><a href="{{ route('gallery') }}">Gallery</a></li>
										<li><a href="{{ route('contact') }}">Contact us</a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					
					<!--Column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
						
                        	<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h4>Support</h4>
									<ul class="list-link">
							
										<li><a href="">Support System</a></li>
										<li><a href="services">Legal Services</a></li>
										<li><a href="services"> Management Services</a></li>
									</ul>
								</div>
							</div>
							
							<!--Footer Column-->
							@if($info)
							@foreach($info as $key => $inf)
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget gallery-widget">
									<h4>Contact Us</h4>
									<ul class="list-style-three">
										<li><span class="icon fa fa-building"></span>{!!$inf->infoaddress!!}</li>
										<li><span class="icon fa fa-fax"></span>
											@foreach(explode(',', $inf->infophone) as $phn)
											<a href="tel:{{ trim($phn) }}">{{ trim($phn) }}</a><br>
											@endforeach
										</li>
										<li><span class="icon fa fa-envelope-o"></span><a href="mailto:{{$inf->infoemail}}">{{$inf->infoemail}}</a></li>
										<li><span class="icon fa fa-globe"></span><a href="https://koshermanlegal.com">koshermanlegal.com</a></li>
									</ul>
								</div>
							</div>
							@endforeach
							@endif
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row clearfix">
					
					<!-- Copyright Column -->
					<div class="copyright-column col-lg-6 col-md-6 col-sm-12">
						<div class="copyright">2024 &copy; All rights reserved by <a href="#">Eyednext</a></div>
					</div>
					
					<!-- Social Column -->
					<div class="social-column col-lg-6 col-md-6 col-sm-12">
						<ul>
							<li class="follow">Follow us: </li>
							<li><a href="https://www.facebook.com/profile.php?id=61561188651171&mibextid=ZbWKwL"><span class="fa fa-facebook-square"></span></a></li>
							<li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
							<li><a href="https://www.instagram.com/_kosher_man?igsh=MTJod2M5YTZnN2ltMQ=="><span class="fa fa-instagram"></span></a></li>
							<li><a href="https://youtube.com/@koshermanlegal?si=3L_kR3rr80OLYwX_"><span class="fa fa-youtube"></span></a></li>
						</ul>
					</div>
					
				</div>
			</div>
		</div>
	</footer>