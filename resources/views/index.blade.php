@php
    use Illuminate\Support\Facades\DB;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nakula Sadewa Technology</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('images/ns-kecil.png') }}" rel="icon">
  <link href="{{ asset('images/ns-besar.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
	<div class="preloader">
        <div class="loading">
            <img src="{{ asset('images/loader.gif') }}" width="100">
            <b><p>Please Wait...</p></b>
        </div>
    </div>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-end fixed-top topbar-transparent">
    <div class="container d-flex justify-content-end">
      <div class="social-links">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

      
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{url('/')}}" class="logo mr-auto"><img src="{{ asset('images/logo NS.png') }}" alt="" width="100%"></a>
	  

      <nav class="main-nav d-none d-lg-block">
        <ul>
          <!--<li class="active"><a href="{{url('/')}}">Home</a></li>-->
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">System Product</a></li>
          <li><a href="#brand">Product Brand</a></li>
          <li><a href="#clients">Our Clients</a></li>
          <!--<li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>-->
          <li><a href="#footer">Contact Us</a></li>
        </ul>
      </nav><!-- .main-nav-->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-md-6 intro-info order-md-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2 style="color:#413e66;"><span>Nakula Sadewa Technology</span><br>for Your Business!</h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>

        <div class="col-md-6 intro-img order-md-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img" data-aos="fade-right" data-aos-delay="100">
              <img src="assets/img/network.png" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content" data-aos="fade-left" data-aos-delay="100">
              <h2 style="color: #8B0000;">About Us</h2>
              <!--<h3>Odio sed id eos et laboriosam consequatur eos earum soluta.</h3>-->
			  
			  @php
				$about = DB::table('about')->get();
			  @endphp
			  
			  @foreach($about as $ab)
				<p>{{$ab->keterangan}}</p>
			  @endforeach
			  
              <!--<p>Dimulai dari sebuah ide dan niat yang kuat serta menggabungkan kemampuan Teamwork di berbagai bidang untuk menyediakan <b>SOLUSI</b> terutamanya dalam bidang infrastruktur elektronik, IT dan sistem IP lainnya.</p>
              <p>NS Tech sebuah perusahaan yang bergerak dibidang pengadaan barang dan jasa Network Infrastruktur, Elektronik & IT.</p>
			  <p>NS Tech hadir untuk menciptakan solusi dari setiap orang yang memerlukan teknologi masakini.</p>-->
              <!--<ul>
                <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>-->
            </div>
          </div>
        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 style="color: #8B0000;">System Product</h3>
          <!--<p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>-->
        </header>
		
		@php
			$product = DB::table('product')->get();
		@endphp
			  
		

        <div class="row">
		@foreach($product as $ab)
		  @php
			$isi_berita = htmlentities(strip_tags($ab->keterangan));
			$isi = substr($isi_berita,0,50);
			$isi = substr($isi_berita,0,strrpos($isi," "));
		  @endphp
          <div class="col-md-6 col-lg-3 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon" style="background: #fff;"><img src='uploads/product/{{ $ab->image }}' alt="" width="50px"></div>
              <h4 class="title"><a href="#" data-toggle="modal" data-target="#DetailModal{{$ab->id}}">{{$ab->judul}}</a></h4>
              <p class="description">{{$isi}}...</p>
            </div>
          </div>
		  
			
		@endforeach
		</div>

      </div>
    </section><!-- End Services Section -->
	
			<!--Modal System Product-->
			@foreach($product as $ab)
			<div class="modal fade" id="DetailModal{{$ab->id}}" data-backdrop="false" data-keyboard="true">
				<div class="modal-dialog modal-dialog-centered modal-lg" role="document" style="width: 75%">
					<div class="modal-content" id="closeModal" style="border-radius: 10px;">
						<div class="box-header header-custom">
							<br>
							<h4 class="modal-title box-title" style="text-align: center;">Description</h4>
							<div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool" data-dismiss="modal">
									<i class="fa fa-times-circle-o" aria-hidden="true" style="color: #FFFFFF;font-size: 18px;"></i>
								</button>
							</div>
						</div>
						<div class="box-body">
							<div class="modal-body">
								<table class="table table-bordered" style="margin-bottom: 0px; border: 0px;">
									<tbody>
									<tr>
										<td>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-3">
														Product
													</div>
													<div class="col-md-9">
														: {{$ab->judul}}
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-3">
														Detail
													</div>
													<div class="col-md-9">
														: {{$ab->keterangan}}
													</div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-3">
														
													</div>
													<div class="col-md-9">
														<img src='uploads/product/{{ $ab->image }}' alt="" width="150px">
													</div>
												</div>
											</div>
										</td>
									</tr>
									</tbody>
								</table>
							</div>
							<div class="col-md-12 modal-footer" style="text-align: center;">
								<button type="button" class="btn btn-secondary  btnFooterModal" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
			<!--End-->

	
	<section id="brand" class="brand">
      <div class="container" data-aos="zoom-in">

        <header class="section-header">
          <h3 style="color: #8B0000;">Product Brand</h3>
        </header>

		@php
			$brand = DB::table('brand')->get();
		@endphp
			  
		<div class="owl-carousel clients-carousel">
			@foreach($brand as $ab)
				<img src='uploads/brand/{{ $ab->image }}' alt="">
			@endforeach
        </div>

      </div>
    </section>
	
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <header class="section-header">
          <h3 style="color: #8B0000;">Our Clients</h3>
        </header>

		@php
			$client = DB::table('client')->get();
		@endphp
			  
		<div class="owl-carousel clients-carousel">
			@foreach($client as $ab)
				<img src='uploads/client/{{ $ab->image }}' alt="">
			@endforeach
        </div>

      </div>
    </section><!-- End Clients Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  @php
		$contact = DB::table('contact')->first();
	@endphp
  <section id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

			  <div class="col-sm-12">
				<div class="footer-links">
					<h4 style="color: #8B0000;">Our Location</h4>
					<iframe src="{{$contact->lokasi}}" width="550" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			  </div>
				
              <div class="col-sm-12">

                <div class="footer-links">
                  <h4 style="color: #8B0000;">Contact Us</h4>
                  <p>
                    <i class="fa fa-location-arrow"></i> {{$contact->alamat}}<br>
                    <i class="fa fa-phone"></i> {{$contact->telepon}}<br>
                    <i class="fa fa-envelope"></i> {{$contact->email}}<br>
                  </p>
                </div>

                <div class="social-links">
                  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                </div>

              </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">

              <h4 style="color: #8B0000;">Send us a message</h4>

              @if(Session::has('status'))
                <div class="alert alert-success">{{ Session::get('status') }}</div>
              @endif
              <!-- <p>Eos ipsa est voluptates. Nostrum nam libero ipsa vero. Debitis quasi sit eaque numquam similique commodi harum aut temporibus.</p> -->

              <form action="/sendmail" method="post" role="form" class="php-email-form">
              {{ csrf_field() }}
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validate"></div>
                </div>

                <!-- <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div> -->

                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>

            </div>

          </div>

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>SANDEV ID</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
      -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </section><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
	<script>
        $(document).ready(function(){
            $(".preloader").fadeOut("fast");
        })

        $('.container > a').on('click', function(e){
            e.preventDefault();
            var me = this;
            var href = $(me).attr('href');
            
            $('.preloader').fadeIn(400, function(){
                if(href){
                    window.location.href = href;
                }
            });
        });
		
		$('.logo > a').on('click', function(e){
            e.preventDefault();
            var me = this;
            var href = $(me).attr('href');
            
            $('.preloader').fadeIn(400, function(){
                if(href){
                    window.location.href = href;
                }
            });
        });
    </script>

</body>

</html>