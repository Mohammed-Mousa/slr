@extends('layouts.master')

@section('title')
المسؤولين - قائمة المسؤولين
@endsection

@section('css')



<!-- Internal Data table css -->

<link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
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
<!-- breadcrumb  -->
<div class="breadcrumb-header justify-content-between">
	<div class="my-auto">
		<div class="d-flex">
			<h4 class="content-title mb-0 my-auto">المسؤولين</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ قائمة
				المسؤولين</span>
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
	<div class="col-xl-12">
		<div class="card">
			<div class="card-header pb-0">
				<div class="col-sm-1 col-md-2">
		
					<a class="btn btn-primary btn-sm" href="{{ route('users.create') }}">إضافة مسؤول</a>
	
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive ">
					<table class="table table-hover" id="example1"  style=" text-align: center;">
						<thead>
							<tr>
								<th class="wd-10p border-bottom-0">#</th>
								<th class="wd-15p border-bottom-0">اسم المسؤول</th>
								<th class="wd-20p border-bottom-0">البريد الالكتروني</th>
								<th class="wd-10p border-bottom-0">العمليات</th>
							</tr>
						</thead>
						<tbody>
							@php
							$i = 0;
							@endphp
							@foreach ($data as $user)

							<tr>
								<td>{{ ++$i }}</td>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
							

								

								<td>
								
											<a href="{{ route('users.edit', $user->id) }}"
												class="btn btn-sm btn-info" title="تعديل"><i class="las la-pen"></i></a>
											

										
											<a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
												data-user_id="{{ $user->id }}" data-username="{{ $user->name }}"
												data-toggle="modal" href="#modaldemo8" title="حذف"><i
													class="las la-trash"></i></a>
										
												
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!--/div-->

	<!-- Modal effects -->
	<div class="modal" id="modaldemo8">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content modal-content-demo">
				<div class="modal-header">
					<h6 class="modal-title">حذف المسؤول</h6><button aria-label="Close" class="close"
						data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
				</div>
				<form action="{{ route('users.destroy', 'test') }}" method="post">
					{{ method_field('delete') }}
					{{ csrf_field() }}
					<div class="modal-body">
						<p>هل انت متاكد من عملية الحذف ؟</p><br>
						<input type="hidden" name="user_id" id="user_id" value="">
						<input class="form-control" name="username" id="username" type="text" readonly>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
						<button type="submit" class="btn btn-danger">تاكيد</button>
					</div>
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
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
<!--Internal  Datatable js -->

<script src="{{URL::asset('assets/js/table-data-after-edit.js')}}"></script>
<!--Internal  Notify js -->
<script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>
<!-- Internal Modal js-->
<script src="{{ URL::asset('assets/js/modal.js') }}"></script>

<script>
	$('#modaldemo8').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var user_id = button.data('user_id')
        var username = button.data('username')
        var modal = $(this)
        modal.find('.modal-body #user_id').val(user_id);
        modal.find('.modal-body #username').val(username);
    })
</script>


@endsection