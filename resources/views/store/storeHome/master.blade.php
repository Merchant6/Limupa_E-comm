<html lang="zxx" class="no-js"><head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="/karma/img/fav.png">
	
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">

	<!--CSRF_TOKEN-->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	
	<!-- Site Title -->
	<title>Karma Shop</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="/karma/css/linearicons.css">
	<link rel="stylesheet" href="/karma/css/font-awesome.min.css">
	<link rel="stylesheet" href="/karma/css/themify-icons.css">
	<link rel="stylesheet" href="/karma/css/bootstrap.css">
	<link rel="stylesheet" href="/karma/css/owl.carousel.css">
	<link rel="stylesheet" href="/karma/css/nice-select.css">
	<link rel="stylesheet" href="/karma/css/nouislider.min.css">
	<link rel="stylesheet" href="/karma/css/ion.rangeSlider.css">
	<link rel="stylesheet" href="/karma/css/ion.rangeSlider.skinFlat.css">
	<link rel="stylesheet" href="/karma/css/magnific-popup.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>	

	<link rel="stylesheet" href="/karma/css/main.css">
	<script src="/karma/js/vendor/jquery-2.2.4.min.js"></script>
	
<body>

	<!-- Start Header Area -->
	<div id="undefined-sticky-wrapper" class="sticky-wrapper" style="height: 80px;">
        <header class="header_area sticky-header" style="">
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light main_box">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="/store"><img src="/karma/img/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href="/store">Home</a></li>
                                
								<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
								<li class="nav-item"><a class="nav-link" href="contact.html">About</a></li>

                                <li class="nav-item submenu dropdown my-auto">
                                    <a href="/cart" class="nav-link" aria-haspopup="true" aria-expanded="false"><span class="ti-bag"></span> <span class="badge badge-pill badge-danger font-weight-normal counter" style="font-size: 15px">0</span></a>
									
                            	 </li>

								 @if(!Auth::guard('web')->check())
									<li class="nav-item submenu dropdown my-auto">
										<a href="/UserLogin" class="nav-link" aria-haspopup="true" aria-expanded="false">Sign In / Sign Up</a>

									</li>
								@else	
								<li class="nav-item submenu dropdown my-auto">
									<a href="/profile" class="nav-link" aria-haspopup="true" aria-expanded="false"><span class="ti-user" style="font-size: 25px"></span></a>
								
								</li>

								<li class="nav-item submenu dropdown my-auto">
									<a href="/UserSignOut" class="nav-link" aria-haspopup="true" aria-expanded="false">Sign Out</a>
								</li>
								 @endif
                            </ul>
                            
                        </div>
                    </div>
                </nav>
            </div>
            
	    </header>
    </div>
	<!-- End Header Area -->

	@yield('content')

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
							magna aliqua.
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Instragram Feed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="/karma/img/i1.jpg" alt=""></li>
							<li><img src="/karma/img/i2.jpg" alt=""></li>
							<li><img src="/karma/img/i3.jpg" alt=""></li>
							<li><img src="/karma/img/i4.jpg" alt=""></li>
							<li><img src="/karma/img/i5.jpg" alt=""></li>
							<li><img src="/karma/img/i6.jpg" alt=""></li>
							<li><img src="/karma/img/i7.jpg" alt=""></li>
							<li><img src="/karma/img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    opyright ©<script>document.write(new Date().getFullYear());</script> All rights reserved.</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="/karma/js/vendor/bootstrap.min.js"></script>
	<script src="/karma/js/jquery.ajaxchimp.min.js"></script>
	<script src="/karma/js/jquery.nice-select.min.js"></script>
	<script src="/karma/js/jquery.sticky.js"></script>
	<script src="/karma/js/nouislider.min.js"></script>
	{{-- <script src="karma/js/countdown.js"></script> --}}
	<script src="/karma/js/jquery.magnific-popup.min.js"></script>
	<script src="/karma/js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script> --}}
	{{-- <script src="karma/js/gmaps.min.js"></script> --}}
	<script src="/karma/js/main.js"></script>

	{{--Custom Add To Cart--}}
	<script src="/karma/ajax/cart.ajax.js"></script>

	<!--Alertify-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js" integrity="sha512-JnjG+Wt53GspUQXQhc+c4j8SBERsgJAoHeehagKHlxQN+MtCCmFDghX9/AcbkkNRZptyZU4zC8utK59M5L45Iw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	



</body></html>