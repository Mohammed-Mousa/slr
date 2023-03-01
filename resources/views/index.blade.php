@extends('layouts.master')
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
<style>
	h2{
		text-align: center;
	
		margin:auto;
		width:100%;
		display: block !important; 
	}
</style>
@endsection
@section('page-header')

@endsection
@section('content')
<!-- row -->
<div class="row row-sm mt-3 text-center">

	<div class="col-xl-12 col-lg-12 col-md-12 col-xm-12">
		<div class="card overflow-hidden sales-card bg-info-gradient">
			<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
				<div class="">
					<h6 class="mb-3 tx-20 text-white">عدد زوار الموقع</h6>
				</div>
				<div class="pb-0 mt-0">
					<div class="d-block">
						<div class="">
							<h2 class=" font-weight-bold mb-1 text-white">{{$numberOfGuests}}</h2>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
		<div class="card overflow-hidden sales-card bg-success-gradient">
			<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
				<div class="">
					<h6 class="mb-3 tx-20 text-white">عدد المنتجات المتوفرة</h6>
				</div>
				<div class="pb-0 mt-0">
					<div class="d-block">
						<div class="">
							<h2 class="font-weight-bold mb-1 text-white">{{$availabelProduct}}</h2>

						</div>

					</div>
				</div>
			</div>
			<span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
		</div>
	</div>
	
	<div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
		<div class="card overflow-hidden sales-card bg-danger-gradient">
			<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
				<div class="">
					<h6 class="mb-3 tx-20 text-white">عدد المنتجات الغير المتوفرة</h6>
				</div>
				<div class="pb-0 mt-0">
					<div class="d-block">
						<div class="">
							<h2 class=" font-weight-bold mb-1 text-white">{{$notAvailabelProduct}}</h2>
						</div>

					</div>
				</div>
			</div>
			<span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
		</div>
	</div>

	<div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
		<div class="card overflow-hidden sales-card bg-primary-gradient">
			<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
				<div class="">
					<h6 class="mb-3 tx-20 text-white">عدد المشتركين  </h6>
				</div>
				<div class="pb-0 mt-0">
					<div class="d-block">
						<div class="">
							<h2 class=" font-weight-bold mb-1 text-white">{{$numOfSub}}</h2>
						</div>
						
					</div>
				</div>
			</div>
			<span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
		</div>
	</div>
	
	<div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
		<div class="card overflow-hidden sales-card bg-warning-gradient">
			<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
				<div class="">
					<h6 class="mb-3 tx-20 text-white">عدد المسؤولين على الموقع  </h6>
				</div>
				<div class="pb-0 mt-0">
					<div class="d-block">
						<div class="">
							<h2 class=" font-weight-bold mb-1 text-white">{{$numOfAdmin}}</h2>
						</div>
						
					</div>
				</div>
			</div>
			<span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
		</div>
	</div>

	<div class="col-xl-12 col-lg-12 col-md-12 col-xm-12">
		<div class="card overflow-hidden sales-card bg-info-gradient">
			<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
				<div class="">
					<h6 class="mb-3 tx-20 text-white">رابط الواتس الخاص بالموقع ككل</h6>
				</div>
				<div class="pb-0 mt-0">
					<div class="d-block">
						<div class="">
							<h2 class=" font-weight-bold mb-1 text-white"><a href="{{$whatsApp[0]->link}}" target="_blank">{{$whatsApp[0]->link}}</a></h2>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>




</div>
<!-- row closed -->




</div>
</div>
<!-- Container closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!--Internal  Flot js-->
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
<script src="{{URL::asset('assets/js/dashboard.sampledata.js')}}"></script>
<script src="{{URL::asset('assets/js/chart.flot.sampledata.js')}}"></script>
<!--Internal Apexchart js-->
<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>
<!-- Internal Map -->
<script src="{{URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{URL::asset('assets/js/modal-popup.js')}}"></script>
<!--Internal  index js -->
<script src="{{URL::asset('assets/js/index.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.vmap.sampledata.js')}}"></script>
@endsection