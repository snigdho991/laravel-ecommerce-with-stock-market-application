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
</style>

@extends('layouts.frontend')

@section('content')

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li><a href="#">Clothing</a></li>
				<li class='active'>Floral Print Buttoned</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	<div class='container'>
               
		<div class='row single-product'>
            <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            <div class="item" style="background-image: url({{ asset('app/images/products/p6.jpg') }});">
              <div class="container-fluid">
                
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->
            
            <div class="item" style="background-image: url({{ asset('app/images/products/p2.jpg') }});">
              <div class="container-fluid">
                
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item --> 
            
          </div>
          <!-- /.owl-carousel --> 
        </div>
        
			<div class="col-md-12" style="margin-top: 130px;">
	            <div class="detail-block">
					<div class="row wow fadeInUp">
	                			
						<div class='col-sm-12 col-md-12 product-info-block'>
							<div class="product-info">
								<h1 class="name">Floral Print Buttoned</h1>
	                                <div class="col-sm-2 custom-style" style="float: right; margin-top: -50px;">
	                                    <div class="favorite-button m-t-10">
	                                        <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
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
								
								<div class="rating-reviews m-t-20">
									<div class="row">
										<div class="col-sm-3">
											<div class="rating rateit-small"></div>
										</div>
										<div class="col-sm-8">
											<div class="reviews">
												<a href="#" class="lnk">(13 Reviews)</a>
											</div>
										</div>
									</div><!-- /.row -->		
								</div><!-- /.rating-reviews -->

								<div class="stock-container info-container m-t-10">
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
									</div><!-- /.row -->	
								</div><!-- /.stock-container -->

								<div class="description-container m-t-20">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</div><!-- /.description-container -->

								
								<div class="quantity-container info-container">
									<div class="row">
																			
										<div class="col-sm-12">
											<a href="#" class="btn btn-primary" style="background: rgb(2, 158, 116);"><i class="fa fa-shopping-cart inner-right-vs"></i> Buy or Bid</a>
	                                        <a href="#" class="btn btn-primary" style="background: #ff5a5f; margin-left: 15px;"><i class="fa fa-shopping-cart inner-right-vs"></i> Sell or Ask</a>
										</div>
										
									</div><!-- /.row -->
								</div><!-- /.quantity-container -->

								
	                            <div class="price-container info-container m-t-20">
	                                <div class="row">
	                                    

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
