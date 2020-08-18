<style>
    #owl-main .owl-controls .owl-buttons .icon {
        top: 14px !important;
    }

    .main-header .top-search-holder .search-area {
        width: 257% !important;
        text-align: center;
        border: 0px #ddd solid !important;
        webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        border-radius: 0px;
        margin: 80px -80px 0px 163px !important;
        background: #fff;
        border-radius: 999px;
    }

    .main-header .top-search-holder .search-area .search-field {
        border: medium none;
        -webkit-border-radius: 5px 0 0 5px;
        -moz-border-radius: 5px 0 0 5px;
        border-radius: 5px 0 0 5px;
        padding: 13px;
        width: 81% !important;
    }

</style>

@extends('layouts.frontend')

@section('content')

  <div class="body-content outer-top-vs" id="top-banner-and-menu">
  <div class="container">
    <div class="row">
  
        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            <div class="item" style="background-image: url({{ asset('app/images/products/p6.jpg') }});">

              <div class="container-fluid">

          <!-- /.search-area --> 
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> 
                
                  <div class="caption bg-color vertical-center">
                    <div class="main-header" style="background: none;">
                      <div class="top-search-holder"> 
                          <div class="search-area" style="border-block-end: 0 !important;">
                            <form>
                              <div class="control-group">
                                
                                <input class="search-field" placeholder="Search here...">
                                <a class="search-button" href="#"></a> 
                              </div>
                            </form>
                          </div>
                      </div>
                  </div> 

                  <!-- <div class="slider-header fadeInDown-1">Top Brands 2018</div>
                  <div class="big-text fadeInDown-1">Digital <span class="highlight">Watch</span></div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>Get 50% off on selected items</span> </div> -->
                  <!-- <div class="button-holder fadeInDown-3"> <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div> -->
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->
            
            <div class="item" style="background-image: url({{ asset('app/images/products/p3.jpg') }});">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center">
                    <div class="main-header" style="background: none;">
                      <div class="top-search-holder"> 
                          <div class="search-area" style="border-block-end: 0 !important;">
                            <form>
                              <div class="control-group">
                                
                                <input class="search-field" placeholder="Search here...">
                                <a class="search-button" href="#"></a> 
                              </div>
                            </form>
                          </div>
                      </div>
                  </div> 

                  <!-- <div class="slider-header fadeInDown-1">Top Brands 2018</div>
                  <div class="big-text fadeInDown-1">Digital <span class="highlight">Watch</span></div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>Get 50% off on selected items</span> </div> -->
                  <!-- <div class="button-holder fadeInDown-3"> <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div> -->
                </div>
              </div>
            </div>
            <!-- /.item --> 
            
          </div>
          <!-- /.owl-carousel --> 
        </div>
        
    </div>

  <!-- ============================================== INFO BOXES ============================================== -->
       
        <div class="info-boxes wow fadeInUp" style="margin-top: 110px;">
          <!-- <div class="info-boxes-inner">
            <div class="row">
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                     <div class="icon-img"><i class="fa fa-credit-card"></i></div>
                     <div class="icon-text">
                      <h4 class="info-box-heading green">Money Back Gaurantee</h4>
                  <h6 class="text">30 Days Money Back Guarantee</h6>
                  </div>
                </div>
              </div>
              .col
              
              <div class="hidden-md col-sm-4 col-lg-4">
                <div class="info-box">
                
                <div class="icon-img"> <i class="fa fa-truck"></i></div>
               <div class="icon-text">
                
                      <h4 class="info-box-heading green">Free Shipping & Return</h4>
           
                  <h6 class="text">Shipping on orders over $99</h6>
                  </div>
                </div>
              </div>
              .col
              
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box last">
                <div class="icon-img"><i class="fa fa-life-ring"></i></div>
                <div class="icon-text">
                      <h4 class="info-box-heading green">Online Support</h4>
                   
                  <h6 class="text">Call us 01678 311 160</h6>
                  </div>
                </div>
              </div>
              .col 
            </div>
            /.row 
          </div> -->
          <!-- /.info-boxes-inner --> 
          
        </div>
        <!-- /.info-boxes --> 
        
        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">Recently Viewed Items</h3>
            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
              <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">See All</a></li>
              
            </ul>
            <!-- /.nav-tabs --> 
          </div>
          <div class="tab-content">
            <div class="tab-pane in active" id="all">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p6.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->

                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p2.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src=" {{ asset('app/images/products/p4.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p3.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p30.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p29.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
            
            <div class="tab-pane" id="smartphone">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p5.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p6.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p7.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p8.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p9.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p10.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
            
            <div class="tab-pane" id="laptop">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p11.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p12.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p13.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="{{ asset('app/images/products/p14.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p15.jpg') }}" alt="image"></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="{{ asset('app/images/products/p16.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
            
            <div class="tab-pane" id="apple">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="{{ asset('app/images/products/p18.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p18.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p17.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p16.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p13.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p14.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane --> 
            
          </div>
          <!-- /.tab-content --> 
            </div>

            <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix">
            <h3 class="new-product-title pull-left">Popular Products</h3>
            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
              <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">See All</a></li>
              
            </ul>
            <!-- /.nav-tabs --> 
          </div>
          <div class="tab-content">
            <div class="tab-pane in active" id="all">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p6.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="{{ asset('app/images/products/p2.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="{{ asset('app/images/products/p4.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p3.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p30.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p29.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
            
            <div class="tab-pane" id="smartphone">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p5.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p6.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p7.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p8.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p9.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p10.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
            
            <div class="tab-pane" id="laptop">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p11.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p12.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p13.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="{{ asset('app/images/products/p14.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p15.jpg') }}" alt="image"></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="{{ asset('app/images/products/p16.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
            
            <div class="tab-pane" id="apple">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="{{ asset('app/images/products/p18.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p18.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p17.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p16.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p13.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p14.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane --> 
            
          </div>
          <!-- /.tab-content --> 
            </div>

            <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">New Lowest Asks</h3>
            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
              <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">See All</a></li>
              
            </ul>
            <!-- /.nav-tabs --> 
          </div>
          <div class="tab-content">
            <div class="tab-pane in active" id="all">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p6.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p2.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p4.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p3.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p30.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p29.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
            
            <div class="tab-pane" id="smartphone">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p5.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p6.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p7.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p8.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p9.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p10.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
            
            <div class="tab-pane" id="laptop">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p11.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p12.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p13.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="{{ asset('app/images/products/p14.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p15.jpg') }}" alt="image"></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="{{ asset('app/images/products/p16.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
            
            <div class="tab-pane" id="apple">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="{{ asset('app/images/products/p18.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p18.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p17.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p16.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p13.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p14.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane --> 
            
          </div>
          <!-- /.tab-content --> 
            </div>

            <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">New Highest Bids</h3>
            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
              <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">See All</a></li>
              
            </ul>
            <!-- /.nav-tabs --> 
          </div>
          <div class="tab-content">
            <div class="tab-pane in active" id="all">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p6.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p2.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p4.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p3.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p30.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p29.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
            
            <div class="tab-pane" id="smartphone">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p5.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p6.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p7.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p8.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p9.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p10.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
            
            <div class="tab-pane" id="laptop">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p11.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p12.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p13.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="{{ asset('app/images/products/p14.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p15.jpg') }}" alt="image"></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="{{ asset('app/images/products/p16.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
            
            <div class="tab-pane" id="apple">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="{{ asset('app/images/products/p18.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p18.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p17.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p16.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p13.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p14.jpg') }}" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <!-- <div class="rating rateit-small"></div> -->
                            <div class="product-price" style="margin-top: -7px;margin-bottom: -2px;"> <span class="price-before-discount">Lowest Ask</span></div>
                            <div class="product-price"> <span class="price-before-discount">3 hours ago</span></div>
                            <div class="product-price"> <span class="price-before-discount">Price :</span> <span class="price"> $450.99 </span>
                            <span style="float: right;"><span class="price-before-discount">Sold :</span> <span class="price"> 5 </span></span> </div>
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane --> 
            
          </div>
          <!-- /.tab-content --> 
            </div>
        <!-- /.scroll-tabs --> 
        <!-- ============================================== SCROLL TABS : END ============================================== --> 
        
        </div> 
    
      
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->
        <!-- <div class="container">
            <section class="section featured-product wow fadeInUp">
              <h3 class="section-title">Featured products</h3>
              <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                <div class="item item-carousel">
                  <div class="products">
                    <div class="product">
                      <div class="product-image">
                        <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p5.jpg') }}" alt=""></a> </div>
                        /.image
                        
                       
                      </div>
                      /.product-image
                      
                      <div class="product-info text-left">
                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>
                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$800</span> </div>
                        /.product-price 
                        
                      </div>
                      /.product-info
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                            <li class="add-cart-button btn-group">
                              <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                              <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                            </li>
                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                          </ul>
                        </div>
                        /.action 
                      </div>
                      /.cart 
                    </div>
                    /.product 
                    
                  </div>
                  /.products 
                </div>
                /.item
                
                       <div class="item item-carousel">
                  <div class="products">
                    <div class="product">
                      <div class="product-image">
                        <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p2.jpg') }}" alt=""></a> </div>
                        /.image
                        
                       
                      </div>
                      /.product-image
                      
                      <div class="product-info text-left">
                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>
                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$800</span> </div>
                        /.product-price 
                        
                      </div>
                      /.product-info
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                            <li class="add-cart-button btn-group">
                              <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                              <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                            </li>
                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                          </ul>
                        </div>
                        /.action 
                      </div>
                      /.cart 
                    </div>
                    /.product 
                    
                  </div>
                  /.products 
                </div>
                /.item
                
                <div class="item item-carousel">
                  <div class="products">
                    <div class="product">
                      <div class="product-image">
                        <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p6.jpg') }}" alt=""></a> </div>
                        /.image
                        
                        <div class="tag new"><span>new</span></div>
                      </div>
                      /.product-image
                      
                      <div class="product-info text-left">
                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>
                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$800</span> </div>
                        /.product-price 
                        
                      </div>
                      /.product-info
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                            <li class="add-cart-button btn-group">
                              <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                              <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                            </li>
                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                          </ul>
                        </div>
                        /.action 
                      </div>
                      /.cart 
                    </div>
                    /.product 
                    
                  </div>
                  /.products 
                </div>
                /.item
                
                <div class="item item-carousel">
                  <div class="products">
                    <div class="product">
                      <div class="product-image">
                        <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/blank.gif') }}" data-echo="{{ asset('app/images/products/p7.jpg') }}" alt=""></a> </div>
                        /.image
                        
                      
                      </div>
                      /.product-image
                      
                      <div class="product-info text-left">
                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>
                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$800</span> </div>
                        /.product-price 
                        
                      </div>
                      /.product-info
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                            <li class="add-cart-button btn-group">
                              <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                              <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                            </li>
                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                          </ul>
                        </div>
                        /.action 
                      </div>
                      /.cart 
                    </div>
                    /.product 
                    
                  </div>
                  /.products 
                </div>
                /.item
                
                <div class="item item-carousel">
                  <div class="products">
                    <div class="product">
                      <div class="product-image">
                        <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p8.jpg') }}" alt=""></a> </div>
                        /.image
                        
                        <div class="tag hot"><span>hot</span></div>
                      </div>
                      /.product-image
                      
                      <div class="product-info text-left">
                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>
                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$800</span> </div>
                        /.product-price 
                        
                      </div>
                      /.product-info
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                            <li class="add-cart-button btn-group">
                              <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                              <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                            </li>
                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                          </ul>
                        </div>
                        /.action 
                      </div>
                      /.cart 
                    </div>
                    /.product 
                    
                  </div>
                  /.products 
                </div>
                /.item
                
                <div class="item item-carousel">
                  <div class="products">
                    <div class="product">
                      <div class="product-image">
                        <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p9.jpg') }}" alt=""></a> </div>
                        /.image
                        
                      
                      </div>
                      /.product-image
                      
                      <div class="product-info text-left">
                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>
                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$800</span> </div>
                        /.product-price 
                        
                      </div>
                      /.product-info
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                            <li class="add-cart-button btn-group">
                              <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                              <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                            </li>
                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                          </ul>
                        </div>
                        /.action 
                      </div>
                      /.cart 
                    </div>
                    /.product 
                    
                  </div>
                  /.products 
                </div>
                /.item
                
                <div class="item item-carousel">
                  <div class="products">
                    <div class="product">
                      <div class="product-image">
                        <div class="image"> <a href="detail.html"><img  src="{{ asset('app/images/products/p10.jpg') }}" alt=""></a> </div>
                        /.image
                        
                        <div class="tag sale"><span>sale</span></div>
                      </div>
                      /.product-image
                      
                      <div class="product-info text-left">
                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>
                        <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$800</span> </div>
                        /.product-price 
                        
                      </div>
                      /.product-info
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                            <li class="add-cart-button btn-group">
                              <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                              <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                            </li>
                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                          </ul>
                        </div>
                        /.action 
                      </div>
                      /.cart 
                    </div>
                    /.product 
                    
                  </div>
                  /.products 
                </div>
                /.item 
              </div>
            </section>
        </div> -->
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 

    </div>

@endsection

@section('mar-styles')
    <style type="text/css">
        :root {
          --marquee-width: 100%;
          --marquee-height: 5.2vh;
          /* --marquee-elements: 12; */ /* defined with JavaScript */
          --marquee-elements-displayed: 5;
          --marquee-element-width: calc(var(--marquee-width) / var(--marquee-elements-displayed));
          --marquee-animation-duration: calc(var(--marquee-elements) * 4s);
        }

        .marquee {
          width: var(--marquee-width);
          height: var(--marquee-height);
          background-color: #111;
          color: #eee;
          overflow: hidden;
          position: relative;
          border-top: 1px solid #c5c5c5;
        }
        .marquee:before, .marquee:after {
          position: absolute;
          top: 0;
          width: 10rem;
          height: 100%;
          content: "";
          z-index: 1;
        }
        .marquee:before {
          left: 0;
          background: linear-gradient(to right, #111 0%, transparent 100%);
        }
        .marquee:after {
          right: 0;
          background: linear-gradient(to left, #111 0%, transparent 100%);
        }
        .marquee-content {
          list-style: none;
          height: 100%;
          display: flex;
          animation: scrolling var(--marquee-animation-duration) linear infinite;
        }

        .marquee-content:hover {
          animation-play-state: paused;
        }

        @keyframes scrolling {
          0% { transform: translateX(0); }
          100% { transform: translateX(calc(-1 * var(--marquee-element-width) * var(--marquee-elements))); }
        }
        .marquee-content li {
          display: flex;
          justify-content: center;
          align-items: center;
          /* text-align: center; */
          flex-shrink: 0;
          width: var(--marquee-element-width);
          max-height: 100%;
          font-size: 20px; /* calc(var(--marquee-height)*3/4); == */ /* 5rem; */
          white-space: nowrap;
        }

        .marquee-content li img {
          width: 100%;
          /* height: 100%; */
          border: 2px solid #eee;
        }

          @media (max-width: 600px) {
            html { font-size: 12px; }
            :root {
              --marquee-width: 100%;
              --marquee-height: 5vh;
              --marquee-elements-displayed: 3;
            }
            .marquee-content li {
              font-size: 15px;
            }
            .marquee:before, .marquee:after { width: 5rem; }

            .copyright-bar {
              background: #3D3D3D;
              padding: 15px 0px;
              /* margin-bottom: 20px!important; */
            }
          }

          .marquee {
            overflow: hidden;
            position: fixed;
            bottom: 0;
            width: 100%;
          }

          .copyright-bar {
            background: #3D3D3D;
            padding: 15px 0px;
            /* margin-bottom: 35px; */
          }

    </style>
@endsection

@section('mar-scripts')  
    <script type="text/javascript">
        const root = document.documentElement;
        const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
        const marqueeContent = document.querySelector("ul.marquee-content");

        root.style.setProperty("--marquee-elements", marqueeContent.children.length);

        for(let i=0; i<marqueeElementsDisplayed; i++) {
          marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
        }
    </script>
@endsection