@extends('layouts.master')
@section('title')
المنتجات
@endsection
@section('css')
<!-- Internal Data table css -->
<link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
<!--Internal   Notify -->
<link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
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

	.hoverable-table .btn-primary {
		margin-left: 0px ! important;
	}
</style>
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
	<div class="my-auto">
		<div class="d-flex">
			<h4 class="content-title mb-0 my-auto"> المنتجات</h4>
		</div>
	</div>
	<div class="d-flex my-xl-auto right-content">
		<div class="mb-3 mb-xl-0">

			<a target="_blank" href="{{ route('products.create') }}" type="button" class="btn btn-primary">
				<i class="mdi mdi-star ml-1"></i>
				إضافة منتج
			</a>

		</div>
	</div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')

@if (count($errors)>0)
@foreach ($errors->all() as $error)
<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<strong>{{$error}}</strong>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endforeach
@endif

@if ($msg= Session::get('msg'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
	<strong>{{$msg}}</strong>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif



<!-- row opened -->
<div class="row row-sm">


	<!--div container table-->
	<div class="col-xl-12">
		<div class="card">

			<div class="card-body">
				<div class="table-responsive">

					<table id="example1" class="table">
						<thead>
							<tr>


								<th class="wd-15p border-bottom-0">اسم المنتج</th>
								<th class="wd-15p border-bottom-0">حالة المنتج</th>

								<th class="wd-15p border-bottom-0">القسم</th>

								<th class="wd-15p border-bottom-0">السعر بعد الخصم</th>
								<th class="wd-15p border-bottom-0">السعر قبل الخصم</th>

								<th class="wd-15p border-bottom-0">صورة المنتج</th>
								<th class="wd-15p border-bottom-0">العمليات</th>
							</tr>
						</thead>
						<tbody>


							@foreach ($products as $product)
							<tr>




								<td>
									{{ $product->product_name }}
								</td>

								<td>
									@if ($product->value_status == 1)
									<span class="text-success">{{ $product->status }}</span>
									@else
									<span class="text-danger">{{ $product->status }}</span>
									@endif
								</td>


								<td>{{ $product->section->section_name }}</td>

								<td>{{ $product->product_new_price }}</td>
								<td>{{ $product->product_old_price }}</td>



								<td style="padding:3px;">
									<img style="width:30px;" src="{{asset('public/img/'. $product->img_path)}}" alt="">
								</td>

								<td>

									<div class="dropdown text-center d-flex">


										<a target="_blank" title="عرض" class="btn btn-sm btn-success "
											href="{{ route('products.show', $product->id) }}"><i class="fas fa-eye"></i>
										</a>

										<a class="btn btn-sm btn-info d-inline-block mx-1" target="_blank"
											href="{{ route('products.edit', $product->id) }}" title="تعديل"><i class="las la-pen"></i> </a>


										<a class="  btn btn-sm btn-danger" href="#" data-product_id="{{ $product->id }}"
											data-product_name="{{ $product->product_name }}" data-toggle="modal"
											data-target="#force_delete_prod">
											<i class="text-white fas fa-trash-alt"></i>

										</a>

									</div>



								</td>

							</tr>
							@endforeach



						</tbody>

					</table>
				</div>
			</div>
		</div>
	</div>
	<!--end div container table-->



	<!-- حذف الفاتورة -->
	<div class="modal fade" id="force_delete_prod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">حذف المنتج نهائيا</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<form action="products/destroy" method="post">
						@csrf
						@method('DELETE')
				</div>
				<div class="modal-body">
					<p>هل انت متاكد من عملية حذف المنتج التالي ؟</p>

					<input class="form-control" name="product_name" id="product_name" type="text" readonly>
					<br><br>
					<p class="text-danger">* لن تتمكن من استعادة المنتج أبدا </p>
					<input type="hidden" name="product_id" id="product_id" value="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
					<button type="submit" class="btn btn-danger">تاكيد</button>
				</div>
				</form>
			</div>
		</div>
	</div>



</div>
<!-- /row -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
<!--Internal  Notify js -->
<script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>


{{-- *********************************************************************************** --}}
<!--Internal  Datatable js -->
<script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
{{-- *********************************************************************************** --}}


<script>
	$('#force_delete_prod').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget)

      var product_id = button.data('product_id')
			var product_name = button.data('product_name')

      var modal = $(this)

      modal.find('.modal-body #product_id').val(product_id);
			modal.find('.modal-body #product_name').val(product_name);
    })
</script>





<script>

</script>
@endsection