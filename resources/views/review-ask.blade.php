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

</style>

@extends('layouts.frontend')

@section('content')

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled appendSize">
				<li><a href="#">Ask</a></li>
				<b> &raquo; </b> <li class='active'>Review</li>
				
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	<div class='container'>
               
		<div class='row single-product'>
            
			<div class="col-md-12">
	            <div class="detail-block">
					<div class="row wow fadeInUp">
	                			
						<div class='col-sm-12 col-md-12 product-info-block'>
							<div class="product-info">
								<h1 class="name">{{ $product->product_name }}</h1>
								<div class="col-sm-4 custom-style" style="float: right; margin-top: -50px;">
	                                    <div class="favorite-button m-t-10">
	                                        <div class="price-box">
	                                        	<p style="font-weight:600; font-size: 16px; color: #999;">Selected Size </p>
	                                			<span style="font-weight:650; font-size: 24px; color: #3D3D3D; margin-left: 35px;position: relative; top: -7px;">{{ $probuy_attr->size }}</span>
	                                		</div>
	                                	
	                                    </div>
	                            </div>
								
	                            <span style="width: 500px; display: inline-block; margin-top: -8px;"><h5 style="font-weight: 600; color: #888;" class="appendSKU">Ticker : <span style="color:rgb(2, 158, 116); font-weight: 700;">{{ $product->product_code }}</span> <b style="position: relative; top: -1px;">|</b> 
	                           
	                            <span class="hideStockText"> SKU :</span>
	                            <span style="color:rgb(2, 158, 116); font-weight: 700;" id="getStock">{{ $probuy_attr->sku }}</span>
	                        		</h5> 
	                        	</span>

	                        	<div class="row">
		                        	<div class="col-md-8">
		                        		<span style="width: 300px; margin-top: 30px !important;"><img src="{{ asset('app/uploads/product_images/main_image/large/'.$product->main_image) }}" alt=""> </span>
		                        	</div>
		                        <form action="{{ route('ask.store') }}" method="post">
		                        	@csrf

		                        	<input type="hidden" name="product_id" value="{{ $product->id }}">
		                        	<input type="hidden" name="product_slug" value="{{ $product->product_slug }}">
		                        	<input type="hidden" name="size" value="{{ $probuy_attr->size }}">

		                        	<div class="col-md-4">
		                        		<input type="hidden" name="ask_amount" value="{{ $ask_amount }}">
		                        		<p style="font-size: 17px;">Ask Amount : <b>${{ $ask_amount }}</b></p>
		                        		<p style="font-size: 17px;">Transaction Fee : <b>- ${{ $transaction_fee_in }}</b></p>
		                        		<p style="font-size: 17px;">Payment Proc. : <b>- ${{ $payment_proc_in }}</b></p>
		                        	@if(!empty($dis_amount))
		                        		<p style="font-size: 17px;">Coupon Code : <b style="color: rgb(2, 158, 116); font-weight: 700;">{{ $cou_code }}</b></p>
		                        		<p style="font-size: 17px;">Coupon Discount : <b>+ ${{ $dis_amount }}</b></p>
		                        	@endif

		                        	@if(!empty($dis_amount))
		                        		<?php 
		                        			$payout_with_dis = $total_pay + $dis_amount;
		                        		?>
		                        		<input type="hidden" name="total_pay" value="{{ $payout_with_dis }}">
		                        		<hr><p style="font-size: 18px;">Total Payable Amount : <b>${{ $payout_with_dis }}</b></p>
		                        	@else
		                        		<?php 
		                        			$pay_without_dis = $total_pay;
		                        		?>
		                        		<input type="hidden" name="total_pay" value="{{ $pay_without_dis }}">
		                        		<hr><p style="font-size: 18px;">Total Payable Amount : <b>${{ $pay_without_dis }}</b></p>
		                        	@endif

		                        		<br><button type="submit" style="width: 100%;" class="btn-upper btn btn-primary checkout-page-button">Confirm Ask</button>
		                        	</div>
		                        </form>
	                        	</div>

	                            <div class="sidebar-widget product-tag wow fadeInUp outer-top-vs animated" style="visibility: visible; animation-name: fadeInUp; border: 0px;">
					              {{-- <h3 class="section-title">Product tags</h3> --}}
					              <div class="sidebar-widget-body outer-top-xs" style="margin-left: -15px !important; margin-top: -35px !important;">
					                 
					                <!-- /.tag-list --> 
					              </div>
					              <!-- /.sidebar-widget-body --> 
					            </div>
								
																		
	                            
							</div><!-- /.product-info -->
						</div><!-- /.col-sm-12 -->
					</div><!-- /.row -->

	            </div>
	            
					<div class="product-tabs inner-bottom-xs  wow fadeInUp">
						<div class="row">
							
						</div><!-- /.row -->
					</div><!-- /.product-tabs -->

					<!-- ============================================== UPSELL PRODUCTS ============================================== -->
		        
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div><!-- /.body-content -->

@endsection