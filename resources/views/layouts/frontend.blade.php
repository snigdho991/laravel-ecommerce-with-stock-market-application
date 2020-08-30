<!DOCTYPE html>
<html lang="en">

<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="MediaCenter, Template, eCommerce">
<meta name="robots" content="all">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Stock E-commerce</title>

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="{{ asset('app/css/bootstrap.min.css') }}">

<!-- Customizable CSS -->
<link rel="stylesheet" href="{{ asset('app/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('app/css/blue.css') }}">
<link rel="stylesheet" href="{{ asset('app/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('app/css/owl.transitions.css') }}">
<link rel="stylesheet" href="{{ asset('app/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('app/css/rateit.css') }}">
<link rel="stylesheet" href="{{ asset('app/css/bootstrap-select.min.css') }}">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="{{ asset('app/css/font-awesome.css') }}">
<link rel="stylesheet" href="{{ asset('app/css/simple-line-icons.css') }}">
<link rel="stylesheet" href="{{ asset('app/css/simple-line-icons.css') }}">

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

@yield('mar-styles')

<style>
.same-style {
    margin-top: 0px !important;
}

.social-sign-in a,
.social-sign-in a:hover,
.social-sign-in a:focus {
  border-radius: 3px;
  padding: 14px 30px;
  font-size: 15px;
  display: inline-block;
  color: #fff;
  text-align: center;
}
.social-sign-in a i {
  padding-right: 6px;
}
.social-sign-in .facebook-sign-in {
  background-color: #3d5c98;
  margin-right: 10px;
  width: 100%;
}
.social-sign-in .facebook-sign-in:hover,
.social-sign-in .facebook-sign-in:focus {
  background-color: #153470;
}
.social-sign-in .twitter-sign-in {
  background-color: #d44627;
  width: 100%;
  margin-top: 7px;
  margin-bottom: 15px;
}
.social-sign-in .twitter-sign-in:hover,
.social-sign-in .twitter-sign-in:focus {
  background-color: #B0201D;
}
    .form-wrap {
  background-color: #fff;
  width: 320px;
  margin: 3em auto;
  box-shadow: 0px 1px 8px #BEBEBE;
  -webkit-box-shadow: 0px 1px 8px #BEBEBE;
  -moz-box-shadow: 0px 1px 8px #BEBEBE; }
  .form-wrap .tabs {
    overflow: hidden; }
    .form-wrap .tabs h3 {
      float: left;
      width: 50%; }
      .form-wrap .tabs h3 a {
        padding: 0.5em 0;
        text-align: center;
        font-weight: 400;
        background-color: #e6e7e8;
        display: block;
        color: #666; }
        .form-wrap .tabs h3 a.active {
          background-color: #fff; }
  .form-wrap .tabs-content {
    padding: 1.5em; }
    .form-wrap .tabs-content div[id$="tab-content"] {
      display: none; }
    .form-wrap .tabs-content .active {
      display: block !important; }
  .form-wrap form .input {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    color: inherit;
    font-family: inherit;
    padding: .8em 0 10px .8em;
    border: 1px solid #CFCFCF;
    outline: 0;
    display: inline-block;
    margin: 0 0 .8em 0;
    padding-right: 2em;
    width: 100%; }
  .form-wrap form .button {
      width: 100%;
      padding: .8em 0 10px .8em;
      background-color: #28A55F;
      border: none;
      color: #fff;
      cursor: pointer;
      text-transform: uppercase; 
      border: 2px solid #28A55F;
      font-weight: bold;
      border-radius: 3px;
  }
  .form-wrap form .button:hover {
      background-color: #fff; /* 4FDA8C */
      border: 2px solid #3D3D3D;
      color: #3D3D3D;
      font-weight: bold;
      border-radius: 3px;
      transition: .5s;
  }

  .form-wrap form .button[disabled]{
      pointer-events: none;
      cursor: not-allowed;
      box-shadow: none;
      opacity: .63;
  }


  
  .form-wrap .help-text {
    margin-top: .6em; }
    .form-wrap .help-text p {
      text-align: center;
      font-size: 14px; }


    input[type=checkbox] {
         position: relative;
           cursor: pointer;
    }

    input[type=checkbox]:before {
         content: "";
         display: block;
         position: absolute;
         width: 20px;
         height: 20px;
         top: 0;
         left: 0;
         background-color:#e9e9e9;
    }
    input[type=checkbox]:checked:before {
         content: "";
         display: block;
         position: absolute;
         width: 20px;
         height: 20px;
         top: 0;
         left: 0;
         background-color:#28A55F;
    }

  input[type=checkbox]:checked:after {
         content: "";
         display: block;
         width: 6px;
         height: 11px;
         border: solid white;
         border-width: 0 2px 2px 0;
         -webkit-transform: rotate(45deg);
         -ms-transform: rotate(45deg);
         transform: rotate(45deg);
         position: absolute;
         top: 2.5px;
         left: 7px;
    }

</style>

<style type="text/css">

    .header-style-1 .header-nav {
        background: #fff;
        /* border-bottom: 3px #59B210 solid; */
        border-bottom: 1px solid #eaeaea !important;
    }

    .top-bar {
        border-bottom: 0px solid #eaeaea;
        background: #ffcc00;
        margin-top: 9px;
        font-weight: bold;
    }

    .main-header {
    	height: 65px;
    	padding: 0 !important;
        background: #ffcc00;
    }

    .main-header .logo-holder {
        margin-top: 0px !important;
    }

    .header-style-1 .header-nav .navbar-default .navbar-collapse .navbar-nav > li .menu-label {
        top: 9.6px;
        padding: 6px 23px;
        right: 0px;
        font-weight: bold;
        font-size: 12px;
    }

    .header-style-1 .header-nav .navbar-default .navbar-collapse .navbar-nav > li .menu-label.hot-sell:after {
        content: unset;
    }
    
    .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
        background-color: #eeeeee;
        color: #333 !important;
    }

    .header-style-1 .header-nav .navbar .navbar-nav > li > a:hover,
    .header-style-1 .header-nav .navbar .navbar-nav > li > a:focus {
      background: #fff;
      border-radius: 5px 5px 0px 0px;
      color: #333;
      border: 3px #fff solid !important;
      border-bottom: 3px #ffcc00 solid !important;
    }

    @media only screen and (min-width: 1200px) {
      .logo {
        margin-left: 474px;
        margin-top: -70px; 
        /* box-shadow: 0 2px 4px rgba(0,0,0,0.1); */
      }
    }

    @media only screen and (min-width: 992px) and (max-width: 1199px) {
      .logo {
        margin-left: 408px;
        margin-top: -70px;
      }
    }
       
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
</head>
<body class="cnt-home">
    
    @include('includes.header')

    @yield('content')

    @include('includes.footer')


<!-- For demo purposes – can be removed on production --> 

<!-- For demo purposes – can be removed on production : End --> 

<!-- JavaScripts placed at the end of the document so the pages load faster --> 
<script src="{{ asset('app/js/jquery-1.11.1.min.js') }}"></script> 
<script src="{{ asset('app/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('app/js/bootstrap-hover-dropdown.min.js') }}"></script> 
<script src="{{ asset('app/js/owl.carousel.min.js') }}"></script> 
<script src="{{ asset('app/js/countdown.js') }}"></script> 
<script src="{{ asset('app/js/echo.min.js') }}"></script> 
<script src="{{ asset('app/js/jquery.easing-1.3.min.js') }}"></script> 
<script src="{{ asset('app/js/bootstrap-slider.min.js') }}"') }}></script> 
<script src="{{ asset('app/js/jquery.rateit.min.js') }}"></script> 
<script src="{{ asset('app/js/lightbox.min.js') }}"></script> 
<script src="{{ asset('app/js/bootstrap-select.min.js') }}"></script> 
<script src="{{ asset('app/js/wow.min.js') }}"></script> 
<script src="{{ asset('app/js/scripts.js') }}"></script>
<!-- Hot Deals Timer 1--> 
	<script>
	  var dthen1 = new Date("12/25/17 11:59:00 PM");
		start = "08/04/15 03:02:11 AM";
		start_date = Date.parse(start);
		var dnow1 = new Date(start_date);
		if (CountStepper > 0)
		ddiff = new Date((dnow1) - (dthen1));
		else
		ddiff = new Date((dthen1) - (dnow1));
		gsecs1 = Math.floor(ddiff.valueOf() / 1000);
		
		var iid1 = "countbox_1";
		CountBack_slider(gsecs1, "countbox_1", 1);
		
		var dthen1 = new Date("05/25/17 11:59:00 PM");
		start = "08/04/15 03:02:11 AM";
		start_date = Date.parse(start);
		var dnow1 = new Date(start_date);
		if (CountStepper > 0)
		ddiff = new Date((dnow1) - (dthen1));
		else
		ddiff = new Date((dthen1) - (dnow1));
		gsecs1 = Math.floor(ddiff.valueOf() / 1000);
		
		var iid1 = "countbox_2";
		CountBack_slider(gsecs1, "countbox_2", 1);
		
	</script>

@yield('mar-scripts')

@yield('join-scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script> 
<script src="{{ asset('app/js/create-charts.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- <script type="text/javascript">
        $(document).click(function(e) {   
            if(e.target.id === 'hideable') {
                $("#hideable").toggle();   
            }
        })
    </script> -->

</body>

<!-- Mirrored from themesground.com/boxshop/demo/V1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Jul 2020 06:33:39 GMT -->
</html>