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
	label{
		font-weight: bold;
		color:black;
	}
	input, textarea, select, option{
		border:2px solid #ddd !important;
	}
</style>


@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
	<div class="my-auto">
		<div class="d-flex">
			<h4 class="content-title mb-0 my-auto">المنتجات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
				اضافة منتج</span>
		</div>
	</div>
</div>
<!-- breadcrumb -->
@endsection

@section('content')

@if ($msg= Session::get('msg'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
	<strong>{{$msg}}</strong>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif



<!-- row -->
<div class="row">

	<div class="col-lg-12 col-md-12">
		<div class="card">
			<div class="card-body">
				<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data"
					autocomplete="off">
					@csrf
					{{-- 1 --}}

					<div class="row">
						<div class="col">
							<label for="inputName" class="control-label">اسم المنتج</label>
							<input type="text" class="form-control" id="inputName" name="product_name"
								title="يرجى ادخال اسم المنتج" required>
						</div>


						<div class="col">
							<label for="inputName" class="control-label">القسم</label>
							<select name="section_id" class="form-control SlectBox" required>
								<!--placeholder-->
								<option value="" selected disabled>حدد القسم</option>

								@foreach ($sections as $section)
								<option value="{{ $section->id }}"> {{ $section->section_name }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-12">
							<label for="exampleTextarea">عدد عمليات البيع 
							<span class="text-danger">( يجب كتابة فقط الرقم ويمكنك ترك الحقل فارغا )</span>	
							</label>
							<textarea  class="form-control" id="exampleTextarea" name="countCus" rows="3" placeholder="عند كتابة رقم 5000 سيظهر في الواجهة تم شراؤه 5000 مرة"></textarea>
						</div>
						<div class="col-12 mt-3">
							<label for="exampleTextarea">تقييم المنتج
								<span class="text-danger fw-bold">( يجب كتابة فقط الرقم ويمكنك ترك الحقل فارغا )</span>	
							</label>
							
							<textarea class="form-control" id="exampleTextarea" name="description" rows="3"
							placeholder="التقييمات المتاحة هي حصرا 5 - 4.5 - 4 -3.5 - 3"
							></textarea>
						</div>
					</div><br>

					{{-- 3 --}}

					<div class="row my-3">

						<div class="col">
							<label for="inputName" class="control-label">سعر المنتج</label>
							<input  type="text" class="myFunction form-control form-control-lg" id="amount_commission"
								name="product_new_price" title="يرجي ادخال سعر المنتج  "
								oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
								required>
						</div>

						<div class="col">
							<label for="inputName" class="control-label">عملة </label>
							<input type="text" class="myFunction form-control form-control-lg" id="amount_commission"
								name="country_currency" title="يرجي ادخال  عملة  "
								value="ر.س"
								required>
						</div>

						<div class="col">
							<label for="inputName" class="control-label">سعر المنتج القديم(قبل الخصم)</label>
							<input type="text" class="myFunction form-control form-control-lg" id="Discount" name="product_old_price"
								placeholder="يمكنك ترك هذا الحقل فارغا"
								oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
								>
						</div>



					</div>

					{{-- 5 --}}
				

					<h5 class="card-title">صور المنتج</h5>
					<p class="text-danger">* صيغة الصور حصرا pdf, jpeg ,.jpg , png </p>

					<div class="col-sm-12 col-md-12">
						<input type="file" name="img_name" class="dropify" accept=".pdf,.jpg, .png, image/jpeg, image/png"
							data-height="70" required/>
					</div><br>

					<div class="row">
						<div class="col">
							<label for="exampleTextarea">وصف صورة المنتج</label>
							<textarea required class="form-control" id="exampleTextarea" name="img_alt_text" rows="3"></textarea>
						</div>
					</div><br>

					<div class="d-flex justify-content-center">
						<button type="submit" class="btn btn-primary">حفظ البيانات</button>
					</div>


				</form>
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