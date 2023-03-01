<!DOCTYPE html>
<html lang="ar" class="light overflow-x-hidden">

<head>
	<meta charset="utf-8">


	<meta name="viewport"
		content="width=device-width, minimum-scale=1 , initial-scale=1.0, shrink-to-fit=no, maximum-scale=1.0, user-scalable=no, target-densitydpi=device-dpi">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="theme-color" content="#000">

	<link rel="icon" href="{{URL::asset('assets/frontend/img/main/logo.png')}}">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />

	{{--
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.0.2/aos.css" /> --}}
	<!-- Or Wow -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />


	{{--
	<link rel="stylesheet" class="app-css" type="text/css" href="{{URL::asset('assets/frontend/css/ho	me-df.css')}}"
		media="all"> --}}
	<link rel="stylesheet" class="app-css" type="text/css" href="" media="all">


	@yield('title_Css')


	<style type="text/css">
		#cover {
			position: fixed;
			height: 100vh;
			width: 100%;
			top: 0;
			left: 0;
			background: #000;
			z-index: 10005;
			color: white;
			display: flex;
			justify-content: center;
			align-items: center;
			transition: 0.3s all linear;
		}

		#body {
			opacity: 0;
			transition: 0.3s all linear;
		}
	</style>


	<!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>

<body dir="rtl">

	<div id="cover" style="font-size: calc(1.3rem + .6vw);font-family: Verdana, Geneva, Tahoma, sans-serif;">
		{{-- <span class="spinner-grow text-light me-2" role="status">
			<span class="visually-hidden" style="opacity:.000000000001">Loading...</span>
		</span>
		الرجاء الانتظار... --}}
		<img src="{{URL::asset('assets/frontend/img/main/logo.png')}}" alt="slr pluls logo"
						width="270" height="270">
	</div>


	<div id="body">
		<nav class="navbar navbar-expand-lg bg-body-tertiary">
			<div class="container-fluid">

				<a class="nav-link" href="/" data-aos="fade-down">
					<img class=" wow fadeInDown" src="{{URL::asset('assets/frontend/img/main/logo.png')}}" alt="slr pluls logo"
						width="70" height="70">
					<span class="d-none d-lg-inline-block nav-link pt-4  wow fadeInDown"> الصفحة الرئيسية</span>
				</a>

				<li class="ms-auto d-lg-none  wow fadeInDown" data-aos="fade-down">
					<form action="" class="cont-darkmode">
						<input type="checkbox" class="checkbox" id="checkbox">
						<label for="checkbox" class="label">
							<i class="fas fa-sun"></i>
							<i class="fas fa-moon"></i>

							<div class="ball"></div>
						</label>
					</form>
				</li>

				<button data-aos="fade-down" class="navbar-toggler  wow fadeInDown" type="button" data-bs-toggle="offcanvas"
					data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

					<div class="offcanvas-header">
						<h5 class="offcanvas-title" id="offcanvasNavbarLabel">
							<img src="{{URL::asset('assets/frontend/img/main/logo.png')}}" alt="slr pluls logo" width="100"
								height="100">
							Slr Plus
						</h5>
						<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>

					<div class="offcanvas-body">
						<ul data-aos="fade-down" class="navbar-nav justify-content-start flex-grow-1 pe-3 wow fadeInDown">

							<li class="nav-item d-lg-none">
								<a class="nav-link" aria-current="page" href="/">
									الصحفة الرئيسية
								</a>
							</li>

							<li class="nav-item mx-lg-1">
								<a class="nav-link" href="/plus">{{$section1Name}}</a>
							</li>

							<li class="nav-item mx-lg-1">
								<a class="nav-link" href="/youtube-premium">{{$section2Name}}</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="/customers">
									الانضمام للعملاء المميزين
								</a>
							</li>

							<li class="nav-item dark-mode ms-auto d-none d-lg-flex">
								<form action="" class="cont-darkmode">
									<input type="checkbox" class="checkbox" id="checkbox2">
									<label for="checkbox2" class="label">
										<i class="fas fa-sun"></i>
										<i class="fas fa-moon"></i>
										<div class="ball"></div>
									</label>
								</form>
							</li>

						</ul>

					</div>
				</div>


			</div>
		</nav>

		<section class="content p-0 m-0">
			@yield('content')
		</section>

		<footer class="text-center overflow-hidden">
			<div class="container">
				<div class="row">

					<div class="col-12 col-lg-6" data-aos="zoom-in">
						<h2 class="zoomIn wow hd-of-all-page">
							من نحن
						</h2>
						<p class="py-2  wow fadeInUp">
							متجر SLR متخصصون في بيع الخدمات الرقمية (اشتراكات بلس، يوتيوب بريميوم)، وهدفنا ان نكون الخيار الامثل لخدمة
							العملاء بأفضل صورة ممكنة.
						</p>


					</div>
					<div class="col-12 col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in">
						<h2 class="zoomIn wow hd-of-all-page">
							تواصل معنا
						</h2>
						<ul class="py-2 wow fadeInUp">
							<li>
								<a href="{{$whatsAppNumber}}">
									<figure>
										<img src="https://img.icons8.com/color/26/000000/whatsapp--v5.png" alt="">
									</figure><span>+966560759786</span>
								</a>
							</li>

							<li>
								<a href="{{$whatsAppNumber}}">
									<figure>
										<img src="https://img.icons8.com/color/24/000000/blackberry.png" alt="">
									</figure><span>+966560759786</span>
								</a>
							</li>

							<li>
								<a href="{{$whatsAppNumber}}">
									<figure>
										<img
											src="https://img.icons8.com/external-prettycons-flat-prettycons/17/000000/external-phone-call-commerce-prettycons-flat-prettycons.png"
											alt="">
									</figure><span>+966560759786</span>
								</a>
							</li>


						</ul>
					</div>

				</div>

				<hr class="mt-3 mb-3">

				<div class="col-12 text-center footer-dis">
					<p dir="rtl">
						©<span id="year"></span>
						جميع الحقوق محفوظة سلر بلس

					</p>




				</div>

			</div>
		</footer>

		<span class="fixed-whatsapp-icon wow rotateIn" data-aos="zoom-in">
			<a href="{{$whatsAppNumber}}">
				<img src="{{URL::asset('assets/frontend/img/main/whatsapp.png')}}" />
			</a>
		</span>
	</div>



	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.0.2/aos.js"></script> --}}
	<!-- Or Wow -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script>
		let mode = localStorage.getItem("mode") || 'default';

const homeDef = "/assets/frontend/css/home-df.css";
const homeDark = "/assets/frontend/css/home-dm.css";

if (mode == 'default') {
	$('.app-css').attr('href', homeDef);
} else {
	$("#checkbox , #checkbox2").attr('checked', 'checked');
	$('.app-css').attr('href', homeDark);
	
}


$("#checkbox , #checkbox2").change(function () {

	console.log('function run');
	
	if (mode == 'default') {
		localStorage.setItem("mode", 'dark');
		window.location.reload();
		// $('.app-css').attr('href', homeDark);

	} else {
		localStorage.setItem("mode", 'default');
		// $('.app-css').attr('href', homeDef);
		window.location.reload();
	}
});
	</script>

	<script type="text/javascript" src="{{URL::asset('assets/frontend/js/main.js')}}"></script>


	@yield('Js')

</body>

</html>