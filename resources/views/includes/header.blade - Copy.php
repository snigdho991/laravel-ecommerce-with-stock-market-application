
<!-- ============================================== HEADER previous: #59B210 ============================================== -->
<style type="text/css">

    .js-search {
        position: relative;
        padding: 15px 40px 15px 20px;
        width: 150px;
        color: #424242;
        text-transform: uppercase;
        font-size: 16px;
        font-weight: 100;
        letter-spacing: 2px;
        border: none;
        border-radius: 5px;
        background: linear-gradient(to right, #FFFFFF 0%,#464747 #F9F9F9 100%);
        transition: width 0.4s ease;
        outline: none;
    }

    .js-search:focus {
        width: 455px;
        /* border-bottom: 1px rgb(2, 158, 116) solid; */
        border-radius: 0px;
    }

    #modified{
        position: relative;
        left: -37px;
        /* color: #8233C5 rgb(2, 158, 116); */
        top: -2px;
        font-size: 15px;
    }

    .cnt-account ul > li a:hover{
        color: #fff !important;
    }


    .top-bar .cnt-account .list-inline > li .dropdown-menu {
        box-shadow: rgb(51, 51, 51) -1px 2px 15px -7px;
        top: 100%;
        left: 5px;
        border-radius: 5px;
        border-width: initial;
        border-style: none;
        border-color: initial;
        border-image: initial;
        height: 176px;
    }

    .top-bar .cnt-account .list-inline li ul li {
        position: relative;
        right: -7px;
        border-radius: 5px 0 0 0;
        padding: 25px 45px;
        margin-left: -7px;
        margin-top: -5px;
        bottom: 0px;
        height: 62px !important;
    }

    /*.subMenu {
        position: absolute;
        display: none;
    }

    .nav>li:hover .subMenu {
        display: block;
    }*/

    .navbar-nav>li>.dropdown-menu {
        box-shadow: 0 4px 6px -1px rgba(0,0,0,0.4);
    }

    .yamm .dropdown-menu .yamm-content {
        padding: 0px 0px;
        text-align: center;
        max-height: 0;
    }

    .header-nav .navbar-default .dropdown .dropdown-menu.pages .links > li {
        border-bottom: 1px dashed #e5e5e5;
        padding: 9px 18px;
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    .yamm .dropdown-menu .yamm-content .links li a {
        padding: 4px 0px;
        font-family: 'Open Sans', sans-serif;
        letter-spacing: 0.2px;
        font-size: 14px;
        color: #565656;
    }

    .supersubmenu li {
        /*border-bottom: 1px dashed #e5e5e5;*/
        padding: 9px 18px;
        transition: all 0.3s ease 0s;
    }

    .supersubmenu li {
        padding: 4px 0px;
        font-family: 'Open Sans', sans-serif;
        letter-spacing: 0.2px;
        font-size: 14px;
        color: #565656;
    }

</style>


<header class="header-style-1"> 
  
  
  <div class="main-header">

    <div class="container">
      <div class="top-bar animate-dropdown">       
        
        <div class="cnt-block">
          <ul class="list-unstyled list-inline">
            <!-- <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">USD </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">USD</a></li>
                <li><a href="#">INR</a></li>
                <li><a href="#">GBP</a></li>
              </ul>
            </li> -->
            <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">English</a></li>
                <li><a href="#">French</a></li>
                <li><a href="#">German</a></li>
              </ul>
            </li>
          </ul>
          <!-- /.list-unstyled --> 
        </div>
        <!-- /.cnt-cart -->

        <div class="cnt-account">
          <ul class="list-unstyled list-inline">
          @if(Auth::user())
            <li class="dropdown dropdown-small"><a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><i class="icon fa fa-user"></i>My Account</a>
                <ul class="dropdown-menu" style="left: -265px; width: 400px;">
                  <div class="row"><div class="col-md-6">
                      <li><a href="{{ route('user.logout') }}">Logout</a></li>
                      <li><a href="#">Profile</a></li>
                      <li><a href="#">Portfolio</a></li>
                  </div>
                  <div class="w-100"></div>
                  <div class="col-md-6">
                      <li><a href="#">Buying</a></li>
                      <li><a href="#">Selling</a></li>
                      <li><a href="#">Demo</a></li>
                  </div></div>
                </ul>
            </li>
            <li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li>
          @else
            <li><a href="#"><i class="icon fa fa-lock"></i>Login</a></li>
            <li><a href="#"><i class="icon fa fa-heart"></i>Register</a></li>
          @endif
      
            <!-- <li><a href="#"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
            <li><a href="#"><i class="icon fa fa-check"></i>Checkout</a></li>
            <li><a href="#"><i class="icon fa fa-lock"></i>Login</a></li> -->
          </ul>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="row">


        <div class="logo-holder"> 
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="home.html"> <img src="{{ asset('app/images/logo3.png') }}" alt="logo"> </a> </div>
        </div>
      </div>
        
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 
  
  <!-- ============================================== NAVBAR ============================================== -->
      <div class="header-nav animate-dropdown" id="header-hide">
        <div class="container">
          <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
           <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
           <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="nav-bg-class">
              <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                <div class="nav-outer">
                <nav>
                  <ul class="nav navbar-nav">
                    <li class="active dropdown yamm-fw" id="hideable"> <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Home</a> </li>
                    <li class="dropdown yamm mega-menu"> <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Browse</a>
                      <ul class="dropdown-menu container">
                        <li>
                          <div class="yamm-content ">
                            <div class="row">
                              <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                <h2 class="title">Men</h2>
                                <ul class="links">
                                  <li><a href="#">Dresses</a></li>
                                  <li><a href="#">Shoes </a></li>
                                  <li><a href="#">Jackets</a></li>
                                  <li><a href="#">Sunglasses</a></li>
                                  <li><a href="#">Sport Wear</a></li>
                                  <li><a href="#">Blazers</a></li>
                                  <li><a href="#">Shirts</a></li>
                                </ul>
                              </div>
                              <!-- /.col -->
                              
                              <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                <h2 class="title">Women</h2>
                                <ul class="links">
                                  <li><a href="#">Handbags</a></li>
                                  <li><a href="#">Jwellery</a></li>
                                  <li><a href="#">Swimwear </a></li>
                                  <li><a href="#">Tops</a></li>
                                  <li><a href="#">Flats</a></li>
                                  <li><a href="#">Shoes</a></li>
                                  <li><a href="#">Winter Wear</a></li>
                                </ul>
                              </div>
                              <!-- /.col -->
                              
                              <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                <h2 class="title">Boys</h2>
                                <ul class="links">
                                  <li><a href="#">Toys & Games</a></li>
                                  <li><a href="#">Jeans</a></li>
                                  <li><a href="#">Shirts</a></li>
                                  <li><a href="#">Shoes</a></li>
                                  <li><a href="#">School Bags</a></li>
                                  <li><a href="#">Lunch Box</a></li>
                                  <li><a href="#">Footwear</a></li>
                                </ul>
                              </div>
                              <!-- /.col -->
                              
                              <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                <h2 class="title">Girls</h2>
                                <ul class="links">
                                  <li><a href="#">Sandals </a></li>
                                  <li><a href="#">Shorts</a></li>
                                  <li><a href="#">Dresses</a></li>
                                  <li><a href="#">Jwellery</a></li>
                                  <li><a href="#">Bags</a></li>
                                  <li><a href="#">Night Dress</a></li>
                                  <li><a href="#">Swim Wear</a></li>
                                </ul>
                              </div>
                              <!-- /.col -->
                              
                              <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image"> <img class="img-responsive" src="{{ asset('app/images/banners/top-menu-banner.jpg') }}" alt=""> </div>
                              <!-- /.yamm-content --> 
                            </div>
                          </div>
                        </li>
                      </ul>
                    </li>
                    
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Shop</a>
                      <ul class="dropdown-menu pages" style="margin-left: -92px;">
                        <li>
                          <div class="yamm-content">
                            <div class="row">
                              <div class="col-xs-12 col-menu">
                                <ul class="links">
                                  <li><a href="home.html">Home</a>
                                      <ul class="supersubMenu">
                                          <li><a href="#">LINK 1</a></li>
                                          <li><a href="#">LINK 2</a></li>
                                          <li><a href="#">LINK 3</a></li>
                                      </ul>
                                  </li>
                                  <li><a href="category.html">Category</a></li>
                                  <li><a href="detail.html">Detail</a></li>
                                  <li><a href="shopping-cart.html">Cart</a></li>
                                  <li><a href="faq.html">FAQ</a></li>
                                </ul>
                                  
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                        {{-- <ul class="subMenu">
                            <li><a href="#">LINK 1</a></li>
                            <li><a href="#">LINK 2</a></li>
                            <li><a href="#">LINK 3</a></li>
                        </ul> --}}
                    </li>
                    <li class="dropdown hidden-sm"> <a href="category.html">Portfolio  <!-- <span class="menu-label new-menu hidden-xs">new</span> --> </a> </li>
                
                {{-- @if(url()->current() !== url('/email/verify') && url()->current() !== url('/password/reset'))
                    <li class="dropdown" id="hideable"> <a href="{{ url('register#signup-tab-content') }}">Sign Up</a> </li>

                    <li class="dropdown" id="hideable"> <a href="{{ url('login#login-tab-content') }}">Login</a> </li>
                @endif --}}
                  
                    <li class="dropdown navbar-right special-menu"> <a href="" style="color: #fff !important;"><span class="menu-label hot-sell hidden-xs">Sell</span> </a>
                    </li>

                @if(url()->current() !== url('/') )
                    <li class="dropdown navbar-right" id="searchbar" style="margin-right: 85px; margin-top: 3px;"><input placeholder='Search...' class='js-search' type="text"><i id="modified" class="fa fa-search"></i>
                    </li>

                @endif
                  </ul>
                </nav>

                  <!-- <ul class="nav navbar-nav pull right">
                    
                  </ul> -->
                  <!-- /.navbar-nav -->
                  <div class="clearfix"></div>
                </div>
                <!-- /.nav-outer --> 
              </div>
              <!-- /.navbar-collapse --> 
              
            </div>
            <!-- /.nav-bg-class --> 
          </div>
          <!-- /.navbar-default --> 
        </div>
        <!-- /.container-class --> 
        
      </div>


  <!-- /.header-nav --> 
  <!-- ============================================== NAVBAR : END ============================================== --> 
  
</header>

<!-- ============================================== HEADER : END ============================================== -->