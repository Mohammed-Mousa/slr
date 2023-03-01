@extends('frontend.layoutsFront.app')


@section('title_Css')
<title>الصفحة الرئيسية</title>


@endsection

@section('content')

<section class="order customer">
	<div data-aos="zoom-in" class="container-lg px-0  wow fadeIn">
		<figure class="item">
			<img src="{{URL::asset('assets/frontend/img/main/customer.jpg')}}" alt="">
		</figure>
	</div>
</section>

<section class="sections mb-3 mb-lg-4 formCustomer">
	<div class="container">

		{{-- <h2 class="zoomIn wow hd-of-all-page" data-aos="zoom-in">
			أدخل رقم الواتس هنا
		</h2> --}}
		@if ($msg= Session::get('msg'))
		<div class="alert alert-success fw-bold fs-5 text-center">
			تم إضافة الرقم بنجاح
		</div>
		@endif
		@if (count($errors)>0)
		@foreach ($errors->all() as $error)
		<div class="alert alert-danger fw-bold fs-5 text-center">
			{{$error}}
		</div>
		@endforeach
		@endif


		<div class="row zoomIn wow gx-3">
			<form id="addSection" action="{{route('customers.store')}}" class=" col-9 me-auto" method="POST">
				@csrf
				<div class="form-group">
					<input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required
						type="text" name="phone_number" id="phone_number" class="form-control" placeholder="اكتب رقم الواتس  "
						required>
				</div>

			</form>


			<button class="btn ripple btn-primary col-3" type="submit"
				onclick="document.getElementById('addSection').submit();">إضافة</button>
		</div>
	</div>
</section>





@endsection