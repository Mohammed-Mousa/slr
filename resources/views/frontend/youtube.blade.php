@extends('frontend.layoutsFront.app')


@section('title_Css')
<title>
	{{ $section2Name }}
</title>

@endsection

@section('content')

<section class="header">

	<div data-aos="zoom-in" class="container-lg px-0 wow fadeIn">


		<div id="carouselExample" data-bs-ride="carousel" class="carousel slide carousel-fade">
			<div class="carousel-inner">
				<div class="carousel-item item active" data-bs-interval="5000">

					<img src="{{URL::asset('assets/frontend/img/main/sec3.jpg')}}" class="d-block w-100">
				</div>
				<div class="carousel-item item" data-bs-interval="2500">
					<img src="{{URL::asset('assets/frontend/img/main/sec4.jpg')}}" class="d-block w-100">
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


	{{-- <div data-aos="zoom-in" class="container-lg px-0 wow fadeIn">
		<div class="owl-carousel owl-theme" id="header-carousel">
			<figure class="item">
				<img src="{{URL::asset('assets/frontend/img/main/sec3.jpg')}}" alt="">
			</figure>
			<figure class="item">
				<img src="{{URL::asset('assets/frontend/img/main/sec4.jpg')}}" alt="">
			</figure>
		</div>
	</div> --}}
</section>

<section class="products mb-3 mb-lg-4">
	<div class="container">

		<h1 class="zoomIn wow hd-of-all-page d-none" data-aos="zoom-in">
			منتجات
			{{ $section2Name }}
		</h1>

		<div class="row">
			@foreach ($productsYoutube as $prod )
			<div class="col-4 col-md-4 col-xxl-4  wow  zoomIn" data-aos="fade-left">
				<a href="{{$whatsAppNumber}}" class="product" target="_blank">
					<figure>

						<img src="{{asset('public/img/'. $prod->img_path)}}" alt="{{$prod->img_alt_text}}">
					</figure>
					<h2>{{$prod->product_name}}</h2>
					@if ($prod->countCus)
					<p class=" mb-2" style="height: auto !important;">
						تم شراؤه
						<span class="fw-bold text-danger">{{$prod->countCus}}</span>
						مرة
					</p>
					@endif

					@if ($prod->description)
					<p class=" mb-2" style="height: auto !important;">
						وتم تقييمه

					</p>
					@endif
					@if ($prod->description == "5")
					<fieldset class="rating">
						<label class="full yellow"></label>
						<label class="full yellow"></label>
						<label class="full yellow"></label>
						<label class="full yellow"></label>
						<label class="full yellow"></label>
					</fieldset>
					@elseif ($prod->description == "4.5")
					<fieldset class="rating">
						<label class="full yellow"></label>
						<label class="full yellow"></label>
						<label class="full yellow"></label>
						<label class="full yellow"></label>
						<label class="full h">
							<label class="half"></label>
						</label>
					</fieldset>
					@elseif ($prod->description == "4")
					<fieldset class="rating">
						<label class="full yellow"></label>
						<label class="full yellow"></label>
						<label class="full yellow"></label>
						<label class="full yellow"></label>
						<label class="full"></label>
					</fieldset>
					@elseif ($prod->description == "3.5")
					<fieldset class="rating">
						<label class="full yellow"></label>
						<label class="full yellow"></label>
						<label class="full yellow"></label>
						<label class="full h">
							<label class="half"></label>
						</label>
						<label class="full"></label>
					</fieldset>
					@elseif ($prod->description == "3")
					<fieldset class="rating">
						<label class="full yellow"></label>
						<label class="full yellow"></label>
						<label class="full yellow"></label>
						<label class="full"></label>
						<label class="full"></label>
					</fieldset>
					@endif


					<div>
						<span class="new">
							{{$prod->product_new_price}}{{$prod->country_currency}}
						</span>
						@if ($prod->product_old_price)
						<span class="before">
							{{$prod->product_old_price}}{{$prod->country_currency}}
						</span>
						@endif
					</div>
					
					<div>
						<button>أضف للسلة</button>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</section>


@endsection
