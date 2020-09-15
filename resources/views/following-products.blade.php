<style type="text/css">
	.heading-title{
		position: relative;
    	left: 28px;
	}
</style>

@extends('layouts.frontend')

@section('content')

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				
				<b> &raquo; </b> <li class='active'>Following Products</li>

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
		<table class="table table-hover">
			<thead>
				<tr>
					<th class="heading-title">Image</th>
					<th class="heading-title">Product</th>
					<th class="heading-title">Market Value</th>
					<th class="heading-title">Lowest Ask</th>
					<th class="heading-title">Action</th>
					
				</tr>
			</thead>
			<tbody>

			@foreach ($followed_products as $followed_product)				
				<tr>
					<td class="col-md-2"><img src="{{ asset('app/uploads/product_images/main_image/small/blog_big_01.jpg-45325.jpg') }}" style="height: 60px; width: 75px;" alt="image"></td>
					<td class="col-md-3">
						<div class="product-name"><a href="#">{{ $followed_product->product_name }}</a></div>
						
						
							{{-- <span style="font-size: 14px; font-weight: 550;">Retail Price : {{ $followed_product->product_price }} USD</span> --}}
							{{-- <span>$900.00</span> --}}
						
					</td>
					<td class="col-md-3">
						{{ $followed_product->product_price }} USD
					</td>

					<td class="col-md-2">
						{{ $followed_product->product_price }} USD
					</td>

					<td class="col-md-2 close-btn">
						<a href="#" class=""><i class="fa fa-times"></i></a>
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
