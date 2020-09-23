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

	a.disabledtag {
		  pointer-events: not-allowed;
		  cursor: not-allowed !important;
		  opacity: 0.7;
	}
</style>

@extends('layouts.frontend')

@section('content')

<div class="modal fade" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="font-weight: 650;">Select any prefarable size</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="position: relative; bottom: 20px;">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                	<div class="row">
				    	<div class="col-md-12 ml-auto product_size" style="border: 1px solid #ddd; margin-bottom: 12px;"><a href=""><h5 style="text-align: center; color: #333; font-size: 17px; font-weight: 550;">US ALL SIZE </h5></a></div>			      
				    </div>

				
				    <div class="row">

					    <?php $stock_sum = 0; ?>
					    @foreach($productattr['attributes'] as $key => $attr)
					    	<?php $stock_sum += $attr['stock']; ?>
					    	<div data-size="{{ $attr['size'] }}" data-stock="{{ $attr['stock'] }}" data-sku="{{ $attr['sku'] }}" data-release="{{ date("F j, Y - g:i a", strtotime($attr['created_at'])) }}" data-proid="{{ $attr['product_id'] }}" class="changeAttr"><a href="#"><div class="col-md-2 ml-auto product_size" style="border: 1px solid #ddd;"><h5 style="text-align: center; color: #333; font-size: 15px; font-weight: 550;" class="activeSize"> {{ $attr['size'] }} </h5></div></a></div>
						@endforeach		
				    	
				    </div>
				
				</div>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div> --}}
        </div>
    </div>
</div>

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

			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	<div class='container'>
               
		<div class='row single-product'>
            <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            <div class="item" style="background-image: url({{ asset('app/uploads/product_images/main_image/large/'.$product->main_image) }});">
              <div class="container-fluid">
                
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->

        @if($product->second_image)
            
            <div class="item" style="background-image: url({{ asset('app/uploads/product_images/main_image/large/'.$product->second_image) }});">
              <div class="container-fluid">
                
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item --> 
        
        @endif

        @if($product->third_image)
            
            <div class="item" style="background-image: url({{ asset('app/uploads/product_images/main_image/large/'.$product->third_image) }});">
              <div class="container-fluid">
                
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item --> 
        
        @endif
          </div>
          <!-- /.owl-carousel --> 
        </div>
        
			<div class="col-md-12" style="margin-top: 130px;">
	            <div class="detail-block">
					<div class="row wow fadeInUp">
	                			
						<div class='col-sm-12 col-md-12 product-info-block'>
							<div class="product-info">
								<h1 class="name">{{ $product->product_name }}</h1>
								<div class="col-sm-2 custom-style" style="float: right; margin-top: -50px;">
	                                    <div class="favorite-button m-t-10">
	                                        <a class="btn btn-primary followProduct" data-toggle="tooltip" data-placement="right" title="Follow" href="#" data-proid="{{ $product->id }}" data-proslug="{{ $product->product_slug }}">
	                                            <i class="fa fa-heart"></i>
	                                        </a>
	                                        <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
	                                           <i class="fa fa-signal"></i>
	                                        </a>
	                                        <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
	                                            <i class="fa fa-envelope"></i>
	                                        </a>
	                                    </div>
	                            </div>

	                            <span style="width: 500px; display: inline-block; margin-top: -8px;"><h5 style="font-weight: 600; color: #888;" class="appendSKU">Ticker : <span style="color:rgb(2, 158, 116); font-weight: 700;">{{ $product->product_code }}</span> <b style="position: relative; top: -1px;">|</b> 
	                            @if($stock_sum > 0)	<span class="hideStockText"> Stocks :</span>
	                            <span style="color:rgb(2, 158, 116); font-weight: 700;" id="getStock">{{ $stock_sum }}</span> @else <span style="color:#ff5a5f;" id="getStockOut">Out of stock</span> @endif
	                            
	                        		</h5> 
	                        	</span>

	                            <div class="sidebar-widget product-tag wow fadeInUp outer-top-vs animated" style="visibility: visible; animation-name: fadeInUp; border: 0px;">
					              {{-- <h3 class="section-title">Product tags</h3> --}}
					              <div class="sidebar-widget-body outer-top-xs" style="margin-left: -15px !important; margin-top: -35px !important;">
					    @if($product->product_discount != null)  
                          <?php 
                              $subamount = $product->product_price - $product->product_discount;
                              $discount = $product->product_discount/$product->product_price*100;
                          ?>
                            {{-- <div class="tag hot"><span>{{ intval($discount) }}%</span></div> --}}
                        @endif
					                <div class="tag-list"> <a class="item">Colorway : <b>{{ $product->colorway }}</b></a> @if($product->product_discount != null) <a class="item">Retail Price : <b>{{ $subamount }} USD (Save: {{ $product->product_discount }} USD) </b></a> @else <a class="item">Retail Price : <b>{{ $product->product_price }} USD </b></a> @endif <a class="item">Release : <b class="releaseDate">{{ date("F j, Y - g:i a", strtotime($product->created_at)) }}</b></a> <a class="item">Views : <b class="proViews">{{ $product->views }}</b></a> </div> 
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

								<div class="description-container m-t-0" style="margin-top: -20px;">
									{!! $product->description !!}
								</div><!-- /.description-container -->

								
								<div class="quantity-container info-container">
									<div class="row">
																
										<div class="col-sm-12">
											<h4 style="margin-left: 38px !important;" id="hideUnlockText"> <i class="fa fa-hand-o-down"></i> Select size to continue <i class="fa fa-hand-o-down"></i><br></h4>

											<a href="#" class="btn btn-primary disabledtag" id="buyBid" data-produslug="{{ $product->product_slug }}" style="background: rgb(2, 158, 116);"><i class="fa fa-shopping-cart inner-right-vs"></i> Buy or Bid </a>

	                                        <a href="" class="btn btn-primary disabledtag" id="sellAsk" style="background: #ff5a5f; margin-left: 15px;"><i class="fa fa-checkout inner-right-vs"></i> Sell or Ask</a>
										</div>
										
									</div><!-- /.row -->
								</div><!-- /.quantity-container -->
								<!-- Button trigger modal -->
										
	                            <div class="price-container info-container m-t-20">
	                                <div class="row">
	                                    
	                                	<div class="col-sm-2">
	                                        <div class="price-box">
	                                        	<p style="font-weight:600; font-size: 15; color: #999;">Size</p>
	                                			<a href="#myModal" data-toggle="modal"><span class="price"> <span class="btn btn-warning btn-sm selectedSize" style="font-size: 17px;"> All <span class="badge"><i class="fa fa-unsorted"></i></span> </span> </span> </a>
	                                		</div>
	                                	</div>
										

	                                    <div class="col-sm-2">
	                                        <div class="price-box">
	                                            <p>Latest Sale:</p>
	                                            <span class="price">$800.00</span>
	                                            <!-- <span class="price-strike">$900.00</span> -->
	                                        </div>
	                                        
	                                    </div>

	                                    <div class="col-sm-2">
	                                        <div class="price-box">
	                                            <p>Highest Bid:</p>
	                                            <span class="price">$900.00</span>
	                                            <!-- <span class="price-strike">$900.00</span> -->
	                                        </div>
	                                        
	                                    </div>

	                                    <div class="col-sm-2">
	                                        <div class="price-box">
	                                            <p>Lowest Ask:</p>
	                                            <span class="price">$800.00</span>
	                                            <!-- <span class="price-strike">$900.00</span> -->
	                                        </div>
	                                        
	                                    </div>


	                                </div><!-- /.row -->
	                            </div><!-- /.price-container -->
								
								
							</div><!-- /.product-info -->
						</div><!-- /.col-sm-12 -->
					</div><!-- /.row -->

	            </div>
	            <div class="detail-block" style="margin-top:45px; background: rgb(250, 250, 250);">
	                <div class="row wow fadeInUp">
	                        
	                    <div class="col-sm-4">
	                        <div class="price-box">
	                            <span class="price" style="font-weight: bold;">52 WEEK HIGH $629 | LOW $220</span>
	                        </div>                       
	                    </div>

	                    <div class="col-sm-4">
	                        <div class="price-box">
	                            <span class="price" style="font-weight: bold;">TRADE RANGE (12 MOS.)$229 - $235</span>
	                        </div>                       
	                    </div>

	                    <div class="col-sm-4">
	                        <div class="price-box">
	                            <span class="price" style="font-weight: bold;">VOLATILITY1.3%</span>
	                        </div>                       
	                    </div>
	                </div>
	            </div>
					
					<div class="product-tabs inner-bottom-xs  wow fadeInUp">
						<div class="row">
							
						</div><!-- /.row -->
					</div><!-- /.product-tabs -->

					<!-- ============================================== UPSELL PRODUCTS ============================================== -->
		        <section class="section featured-product wow fadeInUp">
		        	<div class="more-info-tab clearfix" style="border-bottom: 2px solid #ffcc00;">
						<h3 class="section-title">related items</h3>
					</div>
						<div class="owl-carousel homepage-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
						    	
							<div class="item item-carousel">
								<div class="products">
									
						<div class="product">		
							<div class="product-image">
								<div class="image">
									<a href="detail.html"><img  src="{{ asset('app/images/products/p1.jpg') }}" alt=""></a>
								</div><!-- /.image -->			

								            <div class="tag sale"><span>sale</span></div>            		   
							</div><!-- /.product-image -->
								
							
							<div class="product-info text-left">
								<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
								<div class="rating rateit-small"></div>
								<div class="description"></div>

								<div class="product-price">	
									<span class="price">
										$650.99				</span>
															     <span class="price-before-discount">$ 800</span>
														
								</div><!-- /.product-price -->
								
							</div><!-- /.product-info -->
										<div class="cart clearfix animate-effect">
									<div class="action">
										<ul class="list-unstyled">
											<li class="add-cart-button btn-group">
												<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
													<i class="fa fa-shopping-cart"></i>													
												</button>
												<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
																		
											</li>
						                   
							                <li class="lnk wishlist">
												<a class="add-to-cart" href="detail.html" title="Wishlist">
													 <i class="icon fa fa-heart"></i>
												</a>
											</li>

											<li class="lnk">
												<a class="add-to-cart" href="detail.html" title="Compare">
												    <i class="fa fa-signal"></i>
												</a>
											</li>
										</ul>
									</div><!-- /.action -->
								</div><!-- /.cart -->
								</div><!-- /.product -->
					      
								</div><!-- /.products -->
							</div><!-- /.item -->
						
							<div class="item item-carousel">
								<div class="products">
									
						<div class="product">		
							<div class="product-image">
								<div class="image">
									<a href="detail.html"><img  src="{{ asset('app/images/products/p2.jpg') }}" alt=""></a>
								</div><!-- /.image -->			

								            <div class="tag sale"><span>sale</span></div>            		   
							</div><!-- /.product-image -->
								
							
							<div class="product-info text-left">
								<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
								<div class="rating rateit-small"></div>
								<div class="description"></div>

								<div class="product-price">	
									<span class="price">
										$650.99				</span>
															     <span class="price-before-discount">$ 800</span>
														
								</div><!-- /.product-price -->
								
							</div><!-- /.product-info -->
										<div class="cart clearfix animate-effect">
									<div class="action">
										<ul class="list-unstyled">
											<li class="add-cart-button btn-group">
												<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
													<i class="fa fa-shopping-cart"></i>													
												</button>
												<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
																		
											</li>
						                   
							                <li class="lnk wishlist">
												<a class="add-to-cart" href="detail.html" title="Wishlist">
													 <i class="icon fa fa-heart"></i>
												</a>
											</li>

											<li class="lnk">
												<a class="add-to-cart" href="detail.html" title="Compare">
												    <i class="fa fa-signal"></i>
												</a>
											</li>
										</ul>
									</div><!-- /.action -->
								</div><!-- /.cart -->
								</div><!-- /.product -->
					      
								</div><!-- /.products -->
							</div><!-- /.item -->
						
							<div class="item item-carousel">
								<div class="products">
									
						<div class="product">		
							<div class="product-image">
								<div class="image">
									<a href="detail.html"><img  src="{{ asset('app/images/products/p3.jpg') }}" alt=""></a>
								</div><!-- /.image -->			

								                        <div class="tag hot"><span>hot</span></div>		   
							</div><!-- /.product-image -->
								
							
							<div class="product-info text-left">
								<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
								<div class="rating rateit-small"></div>
								<div class="description"></div>

								<div class="product-price">	
									<span class="price">
										$650.99				</span>
															     <span class="price-before-discount">$ 800</span>
														
								</div><!-- /.product-price -->
								
							</div><!-- /.product-info -->
										<div class="cart clearfix animate-effect">
									<div class="action">
										<ul class="list-unstyled">
											<li class="add-cart-button btn-group">
												<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
													<i class="fa fa-shopping-cart"></i>													
												</button>
												<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
																		
											</li>
						                   
							                <li class="lnk wishlist">
												<a class="add-to-cart" href="detail.html" title="Wishlist">
													 <i class="icon fa fa-heart"></i>
												</a>
											</li>

											<li class="lnk">
												<a class="add-to-cart" href="detail.html" title="Compare">
												    <i class="fa fa-signal"></i>
												</a>
											</li>
										</ul>
									</div><!-- /.action -->
								</div><!-- /.cart -->
								</div><!-- /.product -->
					      
								</div><!-- /.products -->
							</div><!-- /.item -->
						
							<div class="item item-carousel">
								<div class="products">
									
						<div class="product">		
							<div class="product-image">
								<div class="image">
									<a href="detail.html"><img  src="{{ asset('app/images/products/p4.jpg') }}" alt=""></a>
								</div><!-- /.image -->			

								<div class="tag new"><span>new</span></div>                        		   
							</div><!-- /.product-image -->
								
							
							<div class="product-info text-left">
								<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
								<div class="rating rateit-small"></div>
								<div class="description"></div>

								<div class="product-price">	
									<span class="price">
										$650.99				
									</span>
									<span class="price-before-discount">$800</span>
														
								</div><!-- /.product-price -->
								
							</div><!-- /.product-info -->
										<div class="cart clearfix animate-effect">
									<div class="action">
										<ul class="list-unstyled">
											<li class="add-cart-button btn-group">
												<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
													<i class="fa fa-shopping-cart"></i>													
												</button>
												<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
																		
											</li>
						                   
							                <li class="lnk wishlist">
												<a class="add-to-cart" href="detail.html" title="Wishlist">
													 <i class="icon fa fa-heart"></i>
												</a>
											</li>

											<li class="lnk">
												<a class="add-to-cart" href="detail.html" title="Compare">
												    <i class="fa fa-signal"></i>
												</a>
											</li>
										</ul>
									</div><!-- /.action -->
								</div><!-- /.cart -->
								</div><!-- /.product -->
					      
								</div><!-- /.products -->
							</div><!-- /.item -->
						
							<div class="item item-carousel">
								<div class="products">
									
						<div class="product">		
							<div class="product-image">
								<div class="image">
									<a href="detail.html"><img  src="{{ asset('app/images/blank.gif') }}" data-echo="{{ asset('app/images/products/p5.jpg') }}" alt=""></a>
								</div><!-- /.image -->			

								                        <div class="tag hot"><span>hot</span></div>		   
							</div><!-- /.product-image -->
								
							
							<div class="product-info text-left">
								<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
								<div class="rating rateit-small"></div>
								<div class="description"></div>

								<div class="product-price">	
									<span class="price">
										$650.99				</span>
															     <span class="price-before-discount">$ 800</span>
														
								</div><!-- /.product-price -->
								
							</div><!-- /.product-info -->
										<div class="cart clearfix animate-effect">
									<div class="action">
										<ul class="list-unstyled">
											<li class="add-cart-button btn-group">
												<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
													<i class="fa fa-shopping-cart"></i>													
												</button>
												<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
																		
											</li>
						                   
							                <li class="lnk wishlist">
												<a class="add-to-cart" href="detail.html" title="Wishlist">
													 <i class="icon fa fa-heart"></i>
												</a>
											</li>

											<li class="lnk">
												<a class="add-to-cart" href="detail.html" title="Compare">
												    <i class="fa fa-signal"></i>
												</a>
											</li>
										</ul>
									</div><!-- /.action -->
								</div><!-- /.cart -->
								</div><!-- /.product -->
					      
								</div><!-- /.products -->
							</div><!-- /.item -->
						
							<div class="item item-carousel">
								<div class="products">
									
						<div class="product">		
							<div class="product-image">
								<div class="image">
									<a href="detail.html"><img  src="{{ asset('app/images/blank.gif') }}" data-echo="{{ asset('app/images/products/p6.jpg') }}" alt=""></a>
								</div><!-- /.image -->			

								<div class="tag new"><span>new</span></div>                        		   
							</div><!-- /.product-image -->
								
							
							<div class="product-info text-left">
								<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
								<div class="rating rateit-small"></div>
								<div class="description"></div>

								<div class="product-price">	
									<span class="price">
										$650.99				
									</span>
									
									<span class="price-before-discount">$ 800</span>
														
								</div><!-- /.product-price -->
								
							</div><!-- /.product-info -->
										<div class="cart clearfix animate-effect">
									<div class="action">
										<ul class="list-unstyled">
											<li class="add-cart-button btn-group">
												<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
													<i class="fa fa-shopping-cart"></i>													
												</button>
												<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
																		
											</li>
						                   
							                <li class="lnk wishlist">
												<a class="add-to-cart" href="detail.html" title="Wishlist">
													 <i class="icon fa fa-heart"></i>
												</a>
											</li>

											<li class="lnk">
												<a class="add-to-cart" href="detail.html" title="Compare">
												    <i class="fa fa-signal"></i>
												</a>
											</li>
										</ul>
									</div><!-- /.action -->
								</div><!-- /.cart -->
								</div><!-- /.product -->
					      
								</div><!-- /.products -->
							</div><!-- /.item -->
								</div><!-- /.home-owl-carousel -->
				</section>

				<section class="section featured-product wow fadeInUp">
		        	<div class="more-info-tab clearfix" style="border-bottom: 2px solid #ffcc00;">
						<h3 class="section-title">sales report</h3>
					</div>
					<div class="row" style="margin-bottom: 40px">
						<div class="col-md-8">
							<canvas id="newStockChart" width="100%" height="30%" style="margin-top: 60px; margin-bottom: 40px"></canvas>
							<button class="btn btn-info btn-sm">View all sales</button>
							<table class="table table-striped" style="margin-top: 25px; width: 94%;">
								<thead>
									<tr>
										<th scope="col">Size</th>
										<th scope="col">Sale Prize</th>
										<th scope="col">Date</th>
										<th scope="col">Time</th>
									</tr>
								</thead>
							  <tbody>
							    <tr>
							      <th scope="row">1</th>
							      <td>Mark</td>
							      <td>Otto</td>
							      <td>@mdo</td>
							    </tr>
							    <tr>
							      <th scope="row">2</th>
							      <td>Jacob</td>
							      <td>Thornton</td>
							      <td>@fat</td>
							    </tr>
							    <tr>
							      <th scope="row">3</th>
							      <td>Larry</td>
							      <td>the Bird</td>
							      <td>@twitter</td>
							    </tr>
							    <tr>
							      <th scope="row">4</th>
							      <td>Larry</td>
							      <td>the Bird</td>
							      <td>@twitter</td>
							    </tr>
							    <tr>
							      <th scope="row">5</th>
							      <td>Larry</td>
							      <td>the Bird</td>
							      <td>@twitter</td>
							    </tr>
							  </tbody>
							</table>
						</div>
						<div class="col-md-4" style="text-align: center; margin-top: 7px;">
							<h4 style="border-bottom: 2px solid #ddd;line-height: 50px; font-weight: bold;">HISTORICAL</h4>
							
							<h3>Total Sales</h3>
							<h3 style="color: rgba(2, 158, 116, 1);font-weight: bold;">115</h3>
							<hr>

							<h3>Average Sales</h3>
							<h3 style="color: rgba(2, 158, 116, 1);font-weight: bold;">$225.5</h3>
							<hr>

							<h3>Premium Price</h3>
							<h3 style="color: rgba(2, 158, 116, 1);font-weight: bold;">40.07%</h3>
							<hr>
						</div>
					</div>
				</section>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div><!-- /.body-content -->

@endsection

@section('pro-details')
	<script type="text/javascript">
		$(document).ready(function(){
	        $('.changeAttr').on('click', function(e){
	          	e.preventDefault();

				var size       = $(this).attr('data-size');
				var stock      = $(this).attr('data-stock');
				var sku        = $(this).attr('data-sku');
				var real       = $(this).attr('data-release');
				var product_id = $(this).attr('data-proid');

				$.ajax({
	                url: "{{ url('/get-product-attributes') }}",
	                type: "GET",
	                dataType: "json",
	                data: {size:size, stock:stock, sku:sku, real:real, product_id:product_id},
	                success: function(resp){
	                	// SIZE
	                	$('.emptyIcon').hide();
	                	$('.emptySize').hide();
	                	$('.appendSize').append('<b class="emptyIcon"> &raquo; </b><li class="active emptySize">' + resp.size + '</li>');

	                	// SKU
	                	$('.emptySKUIcon').hide();
	                	$('.removeText').hide();
	                	$('.emptySKU').hide();
	                	$('.appendSKU').append('<b style="position: relative; top: -1px;" class="emptySKUIcon">|</b> <span class="removeText">SKU : </span><span style="color:rgb(2, 158, 116); font-weight: 700;" class="emptySKU">' + resp.sku + '</span>');
	                	
	                	// DATE
	                	var options = {year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit'};
						var parday  = new Date(resp.created_at);
						$(".releaseDate").html(parday.toLocaleString("en-US", options));

						// VIEWS
						var domView = document.querySelector('.proViews').innerHTML;
						domView++;
						$(".proViews").html(domView);
	                	
	                	// STOCK
	                	if(resp.stock > 0){
	                		$('.hideStockText').show();
	                		$("#getStock").html(resp.stock);
	                	} else {
	                		$('.hideStockText').hide();
	                		$("#getStock").html("<span style='color: #ff5a5f;'>Out of stock</span>");
	                	}

	                	// SELECTED SIZE
	                	$(".selectedSize").html(resp.size + ' <span class="badge"><i class="fa fa-unsorted"></i></span>');

	                	// CHANGE BUY BUTTON LINK
	                	var produslug = $("#buyBid").attr('data-produslug');
	                	document.getElementById("buyBid").href = '/product/'+ produslug + '?action=buy-bid&size=' + resp.size;
	                	document.getElementById("sellAsk").href = '/product/'+ produslug + '?action=sell-ask&size=' + resp.size;

	                	// ENABLE BUY-SELL BUTTON
	                	$('#hideUnlockText').hide();
	                	$('#buyBid').removeClass('disabledtag');
	                	$('#sellAsk').removeClass('disabledtag');

	                	
	                	$('#myModal').modal('hide');

	                	var domItem = document.querySelector('.detail-block');
	                	domItem.scrollIntoView({behaviour: "smooth"});
	                		                	
	                    /*document.querySelector('.product_size h5').style.color = 'green';*/
	                },
	                error: function(resp){
	                	alert("error");
	                }
	            });
			});
		});

	</script>
@endsection
