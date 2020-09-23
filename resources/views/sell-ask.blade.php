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
	    background-color: #ff5a5f !important;
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
				<li><a href="#">{{ $product->category->category_name }}</a></li>
				@if(!empty($product->subcategory)) <b> &raquo; </b> <li><a href="#">{{ $product->subcategory->subcategory_name }}</a></li>
				@endif

				@if(!empty($product->childsubcategory)) <b> &raquo; </b> <li><a href="#">{{ $product->childsubcategory->childsubcategory_name }}</a></li>
				@endif

				<b> &raquo; </b> <li class='active'>{{ $product->product_name }}</li>
				<b> &raquo; </b> <li class='active'>{{ $probuy_attr->size }}</li>

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
	                                        	<p style="font-weight:600; font-size: 16px; color: #999;">Selected Size <a href="" id="redirectDom" data-prodslug="{{ $product->product_slug }}"><span class="price"> <span class="btn btn-warning btn-xs selectedSize" style="font-size: 17px;margin-left: 5px;"> <span class="badge"><i class="fa fa-pencil"></i></span> </span> </span> </a></p>
	                                			<span style="font-weight:650; font-size: 24px; color: #3D3D3D; margin-left: 35px;position: relative; top: -7px;">{{ $probuy_attr->size }}</span>
	                                		</div>
	                                	
	                                    </div>
	                            </div>
								
	                            <span style="width: 500px; display: inline-block; margin-top: -8px;"><h5 style="font-weight: 600; color: #888;" class="appendSKU">Ticker : <span style="color:rgb(2, 158, 116); font-weight: 700;">{{ $product->product_code }}</span> <b style="position: relative; top: -1px;">|</b> 
	                            @if($probuy_attr->stock > 0) <span class="hideStockText"> Stocks :</span>
	                            <span style="color:rgb(2, 158, 116); font-weight: 700;" id="getStock">{{ $probuy_attr->stock }}</span> @else <span style="color:#ff5a5f;" id="getStockOut">Out of stock</span> @endif
	                            <b style="position: relative; top: -1px;">|</b> 
	                            <span class="hideStockText"> SKU :</span>
	                            <span style="color:rgb(2, 158, 116); font-weight: 700;" id="getStock">{{ $probuy_attr->sku }}</span>
	                        		</h5> 
	                        	</span>

	                            <div class="sidebar-widget product-tag wow fadeInUp outer-top-vs animated" style="visibility: visible; animation-name: fadeInUp; border: 0px;">
					              {{-- <h3 class="section-title">Product tags</h3> --}}
					              <div class="sidebar-widget-body outer-top-xs" style="margin-left: -15px !important; margin-top: -35px !important;">
					                <div class="tag-list"> <a class="item">Colorway : <b>{{ $product->colorway }}</b></a> <a class="item">Retail Price : <b>{{ $product->product_price }} USD</b></a> <a class="item">Release : <b class="releaseDate">{{ date("F j, Y - g:i a", strtotime($probuy_attr->created_at)) }}</b></a> <a class="item">Views : <b class="proViews">{{ $product->views }}</b></a> </div> 
					                <!-- /.tag-list --> 
					              </div>
					              <!-- /.sidebar-widget-body --> 
					            </div>
								
								<div class="rating-reviews m-t-20">
									<div class="row">
										{{-- <div class="col-sm-3">
											<div class="rating rateit-small"></div>
										</div>
										<div class="col-sm-8">
											<div class="reviews">
												<a href="#" class="lnk">(13 Reviews)</a>
											</div>
										</div> --}}
									</div><!-- /.row -->		
								</div><!-- /.rating-reviews -->

								{{-- <div class="stock-container info-container m-t-10">
									<div class="row">
										<div class="col-sm-2">
											<div class="stock-box">
												<span class="label">Availability :</span>
											</div>	
										</div>
										<div class="col-sm-9">
											<div class="stock-box">
												<span class="value">In Stock</span>
											</div>	
										</div>
									</div>
								</div> --}}

								
								<div class="quantity-container info-container">
									<div class="row">
																
										<div class="col-sm-12">

											{{-- <a href="" class="btn btn-primary" id="buyBid" data-produslug="{{ $product->product_slug }}" style="background: rgb(2, 158, 116);"><i class="fa fa-shopping-cart inner-right-vs"></i> Buy or Bid</a>

	                                        <a href="" class="btn btn-primary" style="background: #ff5a5f; margin-left: 15px;"><i class="fa fa-checkout inner-right-vs"></i> Sell or Ask</a> --}}

	                                        <ul class="btn btn-default nav nav-pills mb-3 custom-tab" id="pills-tab custom-tab" role="tablist">
											  <li class="nav-item active">
											    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" style="margin-left: -1px;" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Place Ask</a>
											  </li>
											  <li class="nav-item">
											    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" style="width: 313px;" aria-selected="false">Sell Now</a>
											  </li>
											  
											</ul>
										</div>
										
									</div><!-- /.row -->
								</div><!-- /.quantity-container -->
								<!-- Button trigger modal -->

								<div class="tab-content" id="pills-tabContent">
									<div class="tab-pane fade in active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
										<div class="col-md-9 contact-form">	
										<form class="register-form" role="form" action="{{ route('product.ask', ['slug' => $product->product_slug ]) }}" method="get">
											
											<input type="hidden" name="product_id" value="{{ $product->id }}">
											<div class="col-md-8">
											@if($errors->any())
								              <div class="alert alert-danger alert-dismissible">
								              	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								                <ul>
								                  @foreach($errors->all() as $error)
								                      <li><b>{{ $error }}</b></li>
								                  @endforeach
								                </ul>
								              </div>
									        @endif

											<input type="hidden" name="size" value="{{ $probuy_attr->size }}">

											<div class="form-group">
												<label class="info-title" for="exampleInputTitle"><h4>Enter Amount ($)</h4> <span></span></label>
												<input type="number" step="any" min="1" name="ask_amount" class="form-control unicase-form-control text-input ask_amount" id="exampleInputTitle" placeholder="Ask Amount">
											</div>

											<div class="form-group enterCoupon" style="display: none;">
												<label class="info-title" for="exampleInputTitle"><h4>Enter Coupon </h4> <span></span></label>
												<input type="text" name="coupon_code" class="form-control unicase-form-control text-input coupon_code" id="exampleInputTitle" placeholder="Coupon Code"><br>
												<a href="#" class="cancelCoupon"><i class="fa fa-times"></i> Cancel</a>

												<input type="hidden" name="total_pay" value="" id="ask_payout">	
												<input type="hidden" name="transaction_fee_in" value="" id="transaction_fee_in">	
												<input type="hidden" name="payment_proc_in" value="" id="payment_proc_in">	
											</div>

											</div>

											<div class="col-md-12 outer-bottom-small m-t-20">
												<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Review Ask</button>
											</div>
										</form>
										</div>

										<div class="col-md-3 payable" style="display: none;">
											<h4>Total Payout Amount</h4><p style="font-size: 15px;">Ask Amount : <b id="ask_total"></b></p><p style="font-size: 15px;">Transaction Fee (9.5%) : <b>$</b><b id="transaction_fee"></b></p><p style="font-size: 15px;">Payment Proc. (3%) : <b>$</b><b id="payment_proc"></b></p><span class="coupon_input"></span><a href="#" class="coupon_dis">Do you have any coupon ?</a><hr><p style="font-size: 15px;">Total Amount : <b>$<span id="total_payout"></span></b></p>

										</div>
									</div>

									<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><b>Buy Now Content</b>
									</div>
								  
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

@section('sell-ask')
	<script type="text/javascript">
		$('.ask_amount').keyup(function() {
			$('.payable').css('display', 'block');

		    var ask_amount = Number($('.ask_amount').val());   // get value of field
		    var transaction_fee = (ask_amount * 9.5) / 100;
		    var payment_proc    = (ask_amount * 3) / 100;
		    var total = ask_amount - transaction_fee - payment_proc;
		    
		    $('#ask_total').html(ask_amount);
		    $('#transaction_fee').html(transaction_fee);
		    $('#payment_proc').html(payment_proc);
		    $('#total_payout').html(total);

		    document.getElementById('ask_payout').value = total;
		    document.getElementById('transaction_fee_in').value = transaction_fee;
		    document.getElementById('payment_proc_in').value = payment_proc;

		    $('.coupon_dis').on('click', function() {
		    	$('.coupon_dis').hide();
		    	$('.enterCoupon').css('display', 'block');

		    	$('.coupon_code').keyup(function() {
		    		var coupondis = $('.coupon_code').val();
		    		$('.coupon_input').html('<p style="font-size: 15px;">Coupon Code : ' + '<b>' + coupondis + '</b></p>')
		    	});

		    	var domItem = document.querySelector('.product-info-block');
	            domItem.scrollIntoView({behaviour: "smooth"});
		    });


		    $('.cancelCoupon').on('click', function() {
		    	$('.enterCoupon').css('display', 'none');
		    	$('.coupon_input').empty();
		    	$('.coupon_dis').show();

		    	var domItem2 = document.querySelector('.product-info-block');
	            domItem2.scrollIntoView({behaviour: "smooth"});
		    });

		    
		// add them and output it
		});
	</script>
@endsection
