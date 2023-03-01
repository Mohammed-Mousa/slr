@extends('layouts.master')
@section('title')
اضافة منتج

@endsection
@section('css')
<!--- Internal Select2 css-->
<link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="{{ URL::asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
<!---Internal Fancy uploader css-->
<link href="{{ URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
<!--Internal Sumoselect css-->
<link rel="stylesheet" href="{{ URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css') }}">
<!--Internal  TelephoneInput css-->
<link rel="stylesheet" href="{{ URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css') }}">
{{-- my css style --}}
<style>
	.alert-dismissible .close {
		position: absolute;
		top: 0;
		left: 0 !important;
		right: initial !important;
		opacity: initial !important;
		padding: 0.75rem 1.25rem;
		color: inherit;
	}

	.table-responsive {
		overflow-x: hidden !important;
	}

	table.dataTable {
		width: 99% !important;
	}

	label {
		font-weight: bold;
		color: black;
	}

	input,
	textarea,
	select,
	option {
		border: 2px solid #ddd !important;
	}
</style>


@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
	<div class="my-auto">
		<div class="d-flex">
			<h4 class="content-title mb-0 my-auto">المنتجات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
				عرض بيانات المنتج</span>
		</div>
	</div>

</div>
<div class="col-lg-12 margin-tb">
	<div class="pull-right">
		<a class="btn btn-primary btn-sm" href="{{ route('products.index') }}">رجوع</a>
	</div>
</div><br>
<!-- breadcrumb -->
@endsection

@section('content')



<!-- row -->
<div class="row">

	<div class="col-lg-12 col-md-12">
		<div class="card">
			<div class="card-body">

				<div method="post" enctype="multipart/form-data" autocomplete="off">
					@csrf
					{{-- 1 --}}

					<div class="row">
						<div class="col">
							<label for="inputName" class="control-label">اسم المنتج</label>
							<input disabled value="{{$product->product_name }}" type="text" class="form-control" id="inputName"
								name="product_name" required>
						</div>

						<div class="col">
							<label for="inputName" class="control-label">حالة المنتج</label>
							<input disabled value="{{$product->status }}" type="text" class="form-control" id="inputName"
								name="product_name" required>
						</div>



						<div class="col">
							<label for="inputName" class="control-label">القسم</label>
							<input disabled value="{{$product->section->section_name }}" type="text" class="form-control"
								id="inputName" name="section_id" required>

						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-12">
							<label for="exampleTextarea">عدد عمليات البيع
							</label>
							<textarea disabled class="form-control" id="exampleTextarea" name="countCus"
								rows="3">{{$product->countCus }}</textarea>
						</div>
						<div class="col">
							<label for="exampleTextarea">تقييم المنتج
							</label>
							<textarea disabled required class="form-control" id="exampleTextarea" name="description"
								rows="3">{{$product->description }}</textarea>
						</div>
					</div><br>

					{{-- 3 --}}

					<div class="row my-3">

						<div class="col">
							<label for="inputName" class="control-label">سعر المنتج</label>
							<input type="text" class="myFunction form-control form-control-lg" id="amount_commission"
								name="product_new_price" tt="يرجي ادخال سعر المنتج  "
								oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
								value="{{$product->product_new_price}}" disabled>
						</div>

						<div class="col">
							<label for="inputName" class="control-label">عملة </label>
							<input type="text" class="myFunction form-control form-control-lg" id="amount_commission"
								name="country_currency" value="{{$product->country_currency}}" disabled>
						</div>

						<div class="col">
							<label for="inputName" class="control-label">سعر المنتج القديم(قبل الخصم)</label>
							<input type="text" class="myFunction form-control form-control-lg" id="Discount" name="product_old_price"
								oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
								value="{{$product->product_old_price}}" disabled>
						</div>



					</div>

					{{-- 5 --}}




					<br><br>

					<div class="row">

						<div class="col-3">
							<h5 class="card-title">صور المنتج</h5>
							<img style="width:100%;" src="{{asset('public/img/'. $product->img_path)}}" alt="">
						</div><br>
						<div class="col-9">
							<label for="exampleTextarea">وصف صورة المنتج</label>
							<textarea required class="form-control" id="exampleTextarea" name="img_alt_text" rows="10"
								disabled>{{$product->img_alt_text}} </textarea>
						</div>
					</div>




				</div>
			</div>
		</div>
	</div>
</div>

</div>

<!-- row closed -->
</div>




<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Select2 js-->
<script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
<!--Internal Fileuploads js-->
<script src="{{ URL::asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
<!--Internal Fancy uploader js-->
<script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
<!--Internal  Form-elements js-->
<script src="{{ URL::asset('assets/js/advanced-form-elements.js') }}"></script>
<script src="{{ URL::asset('assets/js/select2.js') }}"></script>
<!--Internal Sumoselect js-->
<script src="{{ URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
<!--Internal  Datepicker js -->
<script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
<!--Internal  jquery.maskedinput js -->
<script src="{{ URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
<!--Internal  spectrum-colorpicker js -->
<script src="{{ URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js') }}"></script>
<!-- Internal form-elements js -->
<script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>




<script>
	var date = $('.fc-datepicker').datepicker({
            dateFormat: 'yy-mm-dd'
        }).val();

</script>





<script>
	var date = $('.fc-datepicker').datepicker({
            dateFormat: 'yy-mm-dd'
        }).val();

</script>

@endsection