@extends('frontend.layoutsFront.app')


@section('title_Css')
<title>الصفحة الرئيسية</title>


@endsection

@section('content')

<section class="header">


	<div data-aos="zoom-in" class="container-lg px-0 wow fadeIn">


		<div id="carouselExample" data-bs-ride="carousel" class="carousel slide carousel-dark carousel-fade">
			<div class="carousel-inner">
				<div class="carousel-item item active" data-bs-interval="2000">

					<img src="{{URL::asset('assets/frontend/img/main/img1.jpg')}}" class="d-block w-100">
				</div>
				<div class="carousel-item item" data-bs-interval="10000">
					<img src="{{URL::asset('assets/frontend/img/main/img2.jpg')}}" class="d-block w-100" alt="...">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>

	</div>

{{-- 
	<div data-aos="zoom-in" class="d-none container-lg px-0 wow fadeIn">

		<div class="owl-carousel owl-theme d-none" id="header-carousel">
			<figure class="item" data-interval="1000">
				<img src="{{URL::asset('assets/frontend/img/main/img1.jpg')}}" alt="">
			</figure>
			<figure class="item" data-interval="10000">
				<img src="{{URL::asset('assets/frontend/img/main/img2.jpg')}}" alt="">
			</figure>
		</div>

	</div> --}}

</section>

<section class="sections mb-3 mb-lg-4">
	<div class="container">

		<h2 class="zoomIn wow hd-of-all-page" data-aos="zoom-in">
			أقسام المتجر
		</h2>

		<div class="row">
			<a class="col-6 wow  fadeInRight" href="/youtube-premium" data-aos="fade-left">
				<img src="{{URL::asset('assets/frontend/img/other/i1.jpg')}}" alt="">
			</a>
			<a class="col-6 wow  fadeInLeft" href="/plus" data-aos="fade-right">
				<img src="{{URL::asset('assets/frontend/img/other/i2.jpg')}}" alt="">
			</a>
		</div>
	</div>
</section>

<section class="customer">
	<div class="container">

		<h3 class="zoomIn wow hd-of-all-page hh" data-aos="zoom-in">
			عدد العملاء
			<span class="num-increase ms-1" data-goal="{{ $numValue }}">0</span>
		</h3>



	</div>
</section>

<section class="order">
	<div data-aos="zoom-in" class="container-lg px-0  wow fadeIn">
		<figure class="item">
			<img src="{{URL::asset('assets/frontend/img/main/img3.jpg')}}" alt="">
		</figure>
	</div>
</section>



<section class="customer-reviews my-4  wow fadeInUp">
	<div data-aos="zoom-in" class="container">
		<h2 class="h3 fw-bold mb-3 hh">
			آراء العملاء:
		</h2>
		<div class="owl-carousel owl-theme" id="customer-reviews">
			@foreach ($clients as $client)
			<section class="item">
				<div class="d-flex p-1">
					<div class=" text-start hd me-auto">
						<h5>{{$client->name}}</h5>
						<span>{{$client->dateR}}</span>
					</div>

					<i class="fa fa-quote-left"></i>

				</div>
				<p class=" text-start">
					{{$client->review}}
				</p>
			</section>
			@endforeach
		</div>
	</div>
</section>


<section class="order">
	<div data-aos="zoom-in" class="container-lg px-0  wow fadeIn">
		<a href="{{$whatsAppNumber}}" class="item">
			<img src="{{URL::asset('assets/frontend/img/main/order.jpg')}}" alt="">
		</a>
	</div>
</section>

@endsection

@section('Js')


<script>
	$(document).ready(function () {

// animation number

var value = $('.customer .hh span').attr('data-goal');
if (value >= 0 && value < 300) {
	var speed = 3000;
} else if (value >= 300 && value <= 500) {
	var speed = 2000;
} else if (value > 500 && value < 1000) {
	var speed = 1500;
} else if (value >= 1000 && value < 5000) {
	var speed = 1000;
} else if (value >= 7000 && value < 14000) {
	var speed = 800;
} else if (value >= 14000 && value < 50000) {
	var speed = 1100;
} else {
	var speed = 1100;
}

const counters = document.querySelectorAll('.num-increase');
let section = document.querySelector(".customer .hh");
var windowHeight = $(window).height();
var windowWidth = $(window).width();

// the position of number - 20px like aos animation
var numberOffsetTop = section.offsetTop;
var numberOffsetTopM100 = section.offsetTop - 3000;


if ((window.scrollY  >= numberOffsetTopM100) || (windowWidth < 700)) {

	counters.forEach(counter => {
		const startCount = () => {
			const goal = +counter.getAttribute('data-goal');
			const count = +counter.innerText;
			const inc = goal / speed;
			if (count < goal) {
				counter.innerText = Math.ceil(count + inc);
				setTimeout(startCount, 10, 100);
			} else {
				counter.innerText = goal;
			}
		};
		startCount();
	});
}

window.onscroll = function () {

	if (window.scrollY  >= numberOffsetTopM100) {

		counters.forEach(counter => {
			const startCount = () => {
				const goal = +counter.getAttribute('data-goal');
				const count = +counter.innerText;
				const inc = goal / speed;
				if (count < goal) {
					counter.innerText = Math.ceil(count + inc);
					setTimeout(startCount, 10, 100);
				} else {
					counter.innerText = goal;
				}
			};
			startCount();
		});
	}
};

// End animation number

}); //End ready() ==> End Code JQuery
</script>
<script>
	$(document).ready(function () {
        $("#customer-reviews").owlCarousel({
          loop: true,
          margin: 30,
          rtl: true,
 
          autoplay: true,
          autoplayTimeout: 2500,
       

					autoplayHoverPause:true,
	nav: true,
	dots: false,
          responsive: {
            0: {
              items: 1
            },
            768: {
              items: 2
            },
            992: {
              items: 3
            },
            1200: {
              items: 3
            },
            1700: {
              items: 4
            }
          }
        });
      });
</script>
@endsection