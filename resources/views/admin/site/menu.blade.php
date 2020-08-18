<style type="text/css">
	.btn-info.disabled, .btn-info:disabled {
	    background-color: #5B93D3;
	    border-color: #5B93D3;
	    cursor: no-drop !important;
	}
</style>

@extends('layouts.backend')

@section('backend-content')

	<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <!-- <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Tables</a>
        <span class="breadcrumb-item active">Data Table</span>
      </nav> -->

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Site Settings</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title mg-b-20 mg-sm-b-20 text-center">Header & Menu Settings</h6>
          <p class="mg-b-20 mg-sm-b-30"></p>
        <form action="{{ route('menusettings.update', ['id' => 1]) }}" method="post">
        @csrf
          <div class="row">
            <div class="col-lg">
              <label><b>Default &#129191; My Account</b></label>
              <input class="form-control" value="{{ $menusettings->my_account }}" name="my_account" id="my_account" type="text">
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
              <label><b>Default &#129191; Wishlist</b></label>
              <input class="form-control" value="{{ $menusettings->wishlist }}" name="wishlist" id="wishlist" type="text">
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
              <label><b>Default &#129191; Login</b></label>
              <input class="form-control" value="{{ $menusettings->login }}" name="login" id="login" type="text">
            </div><!-- col -->
          </div><!-- row -->

          <div class="row mg-t-20">
            <div class="col-lg">
              <label><b>Default &#129191; Registration</b></label>
              <input class="form-control" value="{{ $menusettings->registration }}" name="registration" id="registration" type="text">
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
              <label><b>Default &#129191; Home</b></label>
              <input class="form-control" value="{{ $menusettings->home }}" name="home" id="home" type="text">
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
              <label><b>Default &#129191; Shop all</b></label>
              <input class="form-control" value="{{ $menusettings->shop_all }}" name="shop_all" id="shop_all" type="text">
            </div><!-- col -->
          </div><!-- row -->

          <div class="row mg-t-20">
            <div class="col-lg">
              <label><b>Default &#129191; Browse</b></label>
              <input class="form-control" value="{{ $menusettings->browse }}" name="browse" id="browse" type="text">
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
              <label><b>Default &#129191; Portfolio</b></label>
              <input class="form-control" value="{{ $menusettings->portfolio }}" name="portfolio" id="portfolio" type="text">
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
              <label><b>Default &#129191; Help</b></label>
              <input class="form-control" value="{{ $menusettings->help }}" name="help" id="help" type="text">
            </div><!-- col -->
          </div><!-- row -->

          <div class="row mg-t-20">
            <div class="col-lg">
              <label><b>Default &#129191; Sell</b></label>
              <input class="form-control" value="{{ $menusettings->sell }}" name="sell" id="sell" type="text">
            </div><!-- col -->

            <div class="col-lg mg-t-10 mg-lg-t-0">
              <label class="ckbox" style="margin-top: 40px;">
                <input type="checkbox" id="header_menu" onclick="defaultMenu()"><span id="menutextCng" style="">&#129191; Click to set default settings</span> (Latest: {{ $menusettings->updated_at->diffForHumans() }})
              </label>
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
                <button type="submit" style="cursor: pointer;margin-top: 30px;width: 100%;" class="btn btn-info pd-x-35">Save Changes</button>
            </div><!-- col -->
          </div><!-- row -->

        </form>
        </div>
          
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

@endsection

@section('menu-scripts')
  <script type="text/javascript">
      function defaultMenu() {
          // Get the checkbox
          var checkBox = document.getElementById("header_menu");
          console.log(checkBox);

          // If the checkbox is checked, display the output text
          if (checkBox.checked == true) {
              document.getElementById('menutextCng').innerHTML = "&#129191; Uncheck to show latest updated settings";

              $('#my_account').val("My Account");
              $('#wishlist').val("Wishlist");
              $('#login').val("Login");
              $('#registration').val("Registration");
              $('#home').val("Home");
              $('#shop_all').val("Shop all");
              $('#browse').val("Browse");
              $('#portfolio').val("Portfolio");
              $('#help').val("Help");
              $('#sell').val("Sell");
          } else {
              document.getElementById("my_account").value = "";
              document.getElementById("wishlist").value = "";
              document.getElementById("login").value = "";
              document.getElementById("registration").value = "";
              document.getElementById("home").value = "";
              document.getElementById("shop_all").value = "";
              document.getElementById("browse").value = "";
              document.getElementById("portfolio").value = "";
              document.getElementById("help").value = "";
              document.getElementById("sell").value = "";
              
              var loadUrl = "{{ route('menusettings') }}"
              $('body').load(loadUrl);
              
          }
      }
  </script>

@endsection
