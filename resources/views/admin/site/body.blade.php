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
          <h5>Body Settings</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title mg-b-20 mg-sm-b-20 text-center">Index Page</h6>
          <p class="mg-b-20 mg-sm-b-30"></p>
        <form action="{{ route('bodysettings.update', ['id' => 1]) }}" method="post">
        @csrf
          <div class="row">
            <div class="col-lg">
              <label><b>Default &#129191; RECENTLY VIEWED ITEMS</b></label>
              <input class="form-control" value="{{ $bodysettings->recenty_view_items }}" name="recenty_view_items" id="recenty_view_items" type="text">
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
              <label><b>Default &#129191; POPULAR PRODUCTS</b></label>
              <input class="form-control" value="{{ $bodysettings->popular_products }}" name="popular_products" id="popular_products" type="text">
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
              <label><b>Default &#129191; NEW LOWEST ASKS</b></label>
              <input class="form-control" value="{{ $bodysettings->new_lowest_asks }}" name="new_lowest_asks" id="new_lowest_asks" type="text">
            </div><!-- col -->
          </div><!-- row -->

          <div class="row mg-t-20">
            <div class="col-lg">
              <label><b>Default &#129191; NEW HIGHEST BIDS</b></label>
              <input class="form-control" value="{{ $bodysettings->new_highest_bids }}" name="new_highest_bids" id="new_highest_bids" type="text">
            </div><!-- col -->

            <div class="col-lg mg-t-10 mg-lg-t-0">
              <label class="ckbox" style="margin-top: 40px;">
                <input type="checkbox" id="header_menu_two" onclick="defaultMenuBody()"><span id="menutextCngBody" style="">&#129191; Click to set default settings</span> (Latest: {{ $bodysettings->updated_at->diffForHumans() }})
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
      function defaultMenuBody() {
          // Get the checkbox
          var checkBoxTwo = document.getElementById("header_menu_two");
          
          // If the checkbox is checked, display the output text
          if (checkBoxTwo.checked == true) {
              document.getElementById('menutextCngBody').innerHTML = "&#129191; Uncheck to show latest updated settings";

              $('#recenty_view_items').val("RECENTLY VIEWED ITEMS");
              $('#popular_products').val("POPULAR PRODUCTS");
              $('#new_lowest_asks').val("NEW LOWEST ASKS");
              $('#new_highest_bids').val("NEW HIGHEST BIDS");
          } else {
              document.getElementById("recenty_view_items").value = "";
              document.getElementById("popular_products").value = "";
              document.getElementById("new_lowest_asks").value = "";
              document.getElementById("new_highest_bids").value = "";
              
              var loadUrlBody = "{{ route('bodysettings') }}"
              $('body').load(loadUrlBody);
              
          }
      }
  </script>

@endsection
