<style type="text/css">
	.heading-title {
		position: relative;
    	left: 10px !important;
	}
</style>

@extends('layouts.frontend')

@section('content')

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				
				<b> &raquo; </b> <li class='active'>Asks</li>

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
		<table class="table table-hover" id="datatable">
			<thead>
				<tr>
					<th class="heading-title">Image</th>
					<th class="heading-title">Product</th>
					<th class="heading-title">Ask Price</th>
					<th class="heading-title">Highest Ask</th>
					<th class="heading-title">Lowest Ask</th>
					<th class="heading-title">Action</th>
					
				</tr>
			</thead>
			<tbody>

			@foreach ($asks as $ask)				
				<tr>
					<td class="col-md-2"><img src="{{ asset('app/uploads/product_images/main_image/small/'.$ask->main_image) }}" style="height: 60px; width: 75px;" alt="image"></td>
					<td class="col-md-3">
						<div class="product-name"><a href="{{ route('frontend.product', ['slug' => $ask->product_slug]) }}">{{ $ask->product_name }}</a>
							<P>Size : <b>{{ $ask->size }}</b></P>
						</div>
						
						
							{{-- <span style="font-size: 14px; font-weight: 550;">Retail Price : {{ $ask->product_price }} USD</span> --}}
							{{-- <span>$900.00</span> --}}
						
					</td>
					<td class="col-md-2">
						{{ $ask->ask_amount }} USD
					</td>

					<td class="col-md-2">
						{{ $ask->ask_amount }} USD
					</td>

					<td class="col-md-2">
						{{ $ask->ask_amount }} USD
					</td>

					<td class="col-md-1">
						{{-- <a href="" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-pencil"></i> </a>
 --}}
                      <a href="" class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-trash"></i> </a>
					</td>
				</tr>
			@endforeach	
			</tbody>
		</table>
	</div>
</div>		
</div><!-- /.row -->
	</div><!-- /.sigin-in-->
	</div><!-- /.container -->
</div>

@endsection
