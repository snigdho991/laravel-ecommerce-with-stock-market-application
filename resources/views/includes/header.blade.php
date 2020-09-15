
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

    .header-style-1 .header-nav .navbar-default .navbar-collapse .navbar-nav > li.active > a {
        border-radius: 0px 0px 0 0 !important;
        position: relative;
        top: 16px;
    }

    .header-style-1 .header-nav .navbar-default .navbar-collapse .navbar-nav > li > a {
        border-radius: 0px 0px 0 0 !important;
        position: relative;
        top: 16px;
    }

    .header-style-1 .header-nav .navbar .navbar-nav > li.active {
        background: none;
        border-radius: 0px 0px 0px 0px;
    }

    .header-style-1 .header-nav .navbar-default .navbar-collapse .navbar-nav > li > a {
        font-size: 15px !important;
        line-height: 22px !important;
    }

   

   .dropdown-menu > li.show > a {
      color: #3D3D3D !important;
   }

   nav ul li ul li{
      background: #fff !important;
   }

   nav ul li ul li a:hover{
      background: #ededed !important;
   }

   nav ul li ul li a:hover ul{
      display: block !important;
   }

   .dropdown-menu > li.show > a {
      color: #3D3D3D !important;
   }

   nav ul li ul li ul li{
      background: #fff !important;
   }

   nav ul li ul li ul li a:hover{
      background: #ededed !important;
   }

   nav ul li ul li ul li a:hover ul{
      display: block !important;
   }

    /*#navbarDropdownSub a:first-child:nth-last-child(2):before { 
      content: ""; 
      position: absolute; 
      height: 0; 
      width: 0; 
      border: 5px solid transparent !important;  
      top: 50% ;
      right:5px;  
 }
*/
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
            <li><a href="{{ url('login#login-tab-content') }}"><i class="icon fa fa-lock"></i>Login</a></li>
            <li><a href="{{ url('register#signup-tab-content') }}"><i class="fa fa-sign-in"></i>  Register</a></li>
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
          <div class="logo"> <a href="{{ route('index') }}"> <img src="{{ asset('app/images/logo3.png') }}" alt="logo"> </a> </div>
        </div>
      </div>
        
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 
  
  <!-- ============================================== NAVBAR ============================================== -->
      <div class="header-nav animate-dropdown" id="header-hide" style="box-shadow: 0 2px 8px -3px #999;">
        <div class="container">
          <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
           <button data-target="#navbarSupportedContent" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
           <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            
              <div class="navbar-collapse collapse" id="navbarSupportedContent">
                
                <nav class="navbar navbar-expand-lg navbar-light bg-light" id="bootnavbar">

        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown" id="test">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Browse
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-top: 9px;" id="fetchSub">
                                {{-- <li><a class="dropdown-item" href="#">Action</a></li> --}}
                              @foreach($allcategories as $category)
                                  <li class="nav-item dropdown" id="navbarDropdownSub">
                                  
                                      <a class="dropdown-item dropdown-toggle" href="#" name="category_slug" data-value="{{ $category->category_slug }}" id="navbarDropdown1" role="button" data-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false" onmouseover="showSubcategories(this);">
                                          {{ $category->category_name }}
                                      </a>
                                  
                                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown1" id="testMenu">
                                          <li class="nav-item dropdown navSubcategory">
                                                
                                              {{-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                                  <div class="dropdown-divider"></div>
                                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                              </ul> --}}

                                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown2"><li class="nav-item dropdown navChildSubcategory"></li></ul>
                                            
                                          </li>
                                          
                                      </ul>
                                  </li>
                              @endforeach
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Shop</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Portfolio</a>
                        </li>

                        {{-- @if(url()->current() !== url('/email/verify') && url()->current() !== url('/password/reset'))
                          <li class="nav-item">
                              <a class="nav-link" href="#">Sign Up</a>
                          </li>

                          <li class="nav-item">
                              <a class="nav-link" href="#">Login</a>
                          </li>
                        @endif --}}

                        <li class="dropdown navbar-right special-menu"> <a href="" style="color: #fff !important; border-bottom: 0px !important;"><span class="menu-label hot-sell hidden-xs">Sell</span> </a>
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
              <!-- /.navbar-collapse --> 
              
            
          </div>
          <!-- /.navbar-default --> 
        </div>
        <!-- /.container-class --> 
        
      </div>
    </div>


  <!-- /.header-nav --> 
  <!-- ============================================== NAVBAR : END ============================================== --> 
  
</header>

<!-- ============================================== HEADER : END ============================================== -->