<style type="text/css">
	.outer-top-xs {
	    margin-top: 0px !important;
	}

	.body-content .my-wishlist-page .my-wishlist table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
	    vertical-align: middle;
	    border: none;
	    padding: 10px !important;
	}

	#owl-main .owl-controls .owl-buttons .icon {
	    top: 14px !important;
	}

	#owl-main .owl-prev, #owl-main .owl-next {
	    top: 30px !important;
	}

	#myModal .modal-dialog {
	    -webkit-transform: translate(0,-50%);
	    -o-transform: translate(0,-50%);
	    transform: translate(0,-50%);
	    top: 50%;
	    margin: 0 auto;
	}

	.product_size {
		background-color: #f5f5f5;
	    color: #666666;
	    display: inline-block;
	    margin-bottom: 5px;
	    margin-right: 2px;
	    padding: 6px 12px;
    	border-radius: 3px;
	}

	.custom-tab{
		background: #ededed !important;
	    border-radius: 50px !important;
	    width: 55% !important;
	    height: 41px;
	    position: relative;
	}

	.custom-tab > li > a{
		border-radius: 55px !important;
		color: #3d3d3d;
	}
	
	.custom-tab > li{
		width: 49% !important;
		top: -7px;
	}

	.nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus {
	    color: #fff !important;
	    background-color: rgb(2, 158, 116) !important;
	}

	#pills-tabContent{
		border: 0px;
	}

	.alert-danger {
		color: #fff !important;
		background-color: #DC3545 !important;
		border-color: #DC3545 !important;
	}

</style>

@extends('layouts.frontend')

@section('content')

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled appendSize">
				
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->


<div class="body-content">
	<div class="container">
		<div class="my-wishlist-page">
			<div class="row">
				<div class="col-md-12 my-wishlist">
	<div class="table-responsive">
		@if(Session::has('info-msg'))
			<p class="alert alert-info alert-dismissible">{{ Session::get('info-msg') }}
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
		@endif
		<table class="table">
			<thead>
				<tr>
					<th colspan="4" class="heading-title" style="text-align: center;">Add Your Payment Method</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="col-md-12"> <a href="#" class="btn btn-info"><img src="{{ asset('app/images/payments/1.png') }}" style="width: 45px; height: 28px;" alt=""> Add PayPal</a></td>
					
				</tr>
				<tr>
					<td class="col-md-12"> <a href="{{ route('stripe.add') }}" class="btn btn-success"><img src="{{ asset('app/images/payments/2.png') }}" style="width: 45px; height: 28px;" alt=""> <img src="{{ asset('app/images/payments/3.png') }}" style="width: 45px; height: 28px;" alt=""> <img src="{{ asset('app/images/payments/4.png') }}" style="width: 45px; height: 28px;" alt=""> Add Credit Card</a></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>			</div><!-- /.row -->
	</div><!-- /.sigin-in-->
		
	</div><!-- /.container -->
</div>


@endsection

