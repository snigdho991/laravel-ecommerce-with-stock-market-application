<style type="text/css">
	.btn-info.disabled, .btn-info:disabled {
	    background-color: #5B93D3;
	    border-color: #5B93D3;
	    cursor: no-drop !important;
	}

  .alert-danger {
      color: #fff !important;
      background-color: #DC3545 !important;
      border-color: #DC3545 !important;
  }

  .thumb
  {
      width: 50px;
      height: 50px;
      margin: 0.2em -0.7em 0 0;
  }
  .remove_img_preview
  {
      position:relative;
      top:-96px;
      right:10px;
      background:black;
      color:white;
      border-radius:50px;
      font-size:1em;
      padding: 0 0.3em 0;
      text-align:center;
      cursor:pointer;
  }
  .remove_img_preview:before
  {
      content: "×";
  }
</style>

@extends('layouts.backend')

@section('backend-content')

	  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>View Product</h5>
        </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
                    
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label><br>
                 <strong>{{ $product->product_name }}</strong>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label><br>
                 <strong>{{ $product->product_code }}</strong>
                </div>
              </div><!-- col-4 -->
               
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label><br>
                  <strong>{{ $product->category->category_name }}</strong>
       
                </div>
              </div><!-- col-4 -->


              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Sub Category: <span class="tx-danger">*</span></label><br>
                  <strong>@if(!empty($product->subcategory)) {{ $product->subcategory->subcategory_name }} @else {{ "N/A" }} @endif</strong>
       
                </div>
              </div><!-- col-4 -->



              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
          <label class="form-control-label">Child Subcategory: <span class="tx-danger">*</span></label>
               <br>
                  <strong>@if(!empty($product->childsubcategory)) {{ $product->childsubcategory->childsubcategory_name }}  @else {{ "N/A" }} @endif</strong>
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Color: <span class="tx-danger">*</span></label>
                    <br>
                  <strong>{{ $product->colorway }}</strong>
 
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Retail Price: <span class="tx-danger">*</span></label>
                  <br>
                  <strong>{{ $product->product_price }}</strong>
                 
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
        <label class="form-control-label">Home Slider: <span class="tx-danger">*</span></label> <br>
         @if($product->home_slider == 1)
         <span class="badge badge-success">On</span>

         @else
       <span class="badge badge-danger">Off</span>
         @endif 
        </label>

        </div> <!-- col-4 --> 


               <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Product Details: <span class="tx-danger">*</span></label>
                  <br>
                 <p>   {!! $product->description !!} </p>
    
                </div>
              </div><!-- col-4 -->

                <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Video Link: <span class="tx-danger">*</span></label>
                  <br>
                  <strong>{{ $product->product_video }}</strong>
                   
                </div>
              </div><!-- col-4 -->


          <div class="row mg-t-20">
              <div class="col-lg">
                  <label><b> &#129191; Main image (*)</b></label><br>
                  @if(!empty($product->main_image) && file_exists('app/uploads/product_images/main_image/small/'.$product->main_image))
                      <img width="230px" height="180px" src="{{ asset('app/uploads/product_images/main_image/small/'.$product->main_image) }}">
                  @else
                    N/A
                  @endif

                  <div class="card bd-0 wd-xs-300">
                    <br>
                    <div id="preview"></div>
                    
                  </div>
              </div><!-- col -->
              <div class="col-lg mg-t-10 mg-lg-t-0">
                  <label><b> &#129191; First Optional image</b></label><br>
                  @if(!empty($product->second_image) && file_exists('app/uploads/product_images/second_image/small/'.$product->second_image))
                      <img width="230px" height="180px" src="{{ asset('app/uploads/product_images/second_image/small/'.$product->second_image) }}">
                  @else
                    N/A
                  @endif

                  
              </div><!-- col -->
              <div class="col-lg mg-t-10 mg-lg-t-0" style="margin-left: 70px;">
                  <label><b> &#129191; Second Optional image</b></label><br>
                  @if(!empty($product->third_image) && file_exists('app/uploads/product_images/third_image/small/'.$product->third_image))
                      <img width="230px" height="180px" src="{{ asset('app/uploads/product_images/third_image/small/'.$product->third_image) }}">
                  @else
                    N/A
                  @endif

                  <div class="card bd-0 wd-xs-300">
                    <br>
                    <div id="preview_three"></div>
                    
                  </div>
              </div><!-- col -->
          </div><!-- row -->

          
        </div><!-- row -->

  <br>

          <div class="row mg-t-20">
              <div class="col-lg">
                  
              </div><!-- col -->

              <div class="col-lg mg-t-10 mg-lg-t-0">
                  <a href="{{ route('products') }}" class="btn btn-primary btn-sm" id="coupon_delete"><i class="icon ion-eye"></i> Okay </a>

                  <a href="{{ route('product.edit', ['slug' => $product->product_slug]) }}" class="btn btn-info btn-sm" style="margin-left: 20px;" id="coupon_delete"><i class="fa fa-pencil"></i> Edit </a>
              </div>
                  
              <div class="col-lg mg-t-10 mg-lg-t-0" style="margin-left: 70px;">
                  
              </div><!-- col -->
          </div><!-- row -->

            
          </div><!-- form-layout -->
        </div><!-- card -->
 
        
        </div><!-- row -->

  
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
 

@endsection

@section('addproduct-scripts')
    <script type="text/javascript">
          $('select[name="category_slug"]').on('change', function(){
                /*var category_slug = $(this).val();*/
                var option = document.getElementById("catslug");
                var category_slug = option.options[option.selectedIndex].getAttribute('data-catslug');
                console.log(category_slug);

                if (category_slug) {
                  
                  $.ajax({
                    url: "{{ url('admin/category-wise-subcategory/') }}/" + category_slug,
                    type: "GET",
                    dataType: "json",
                    success: function(data) { 
                        var d = $('select[name="subcategory_slug"]').empty();
                        $('select[name="subcategory_slug"]').append('<option value="">Chose One</option>');
                          $.each(data, function(key, value){                    
                            $('select[name="subcategory_slug"]').append('<option value="'+ value.id + '" data-subslug="'+ value.subcategory_slug + '">' + value.subcategory_name + '</option>');
                          });
                    },
                  });
                } else {
                    $('select[name="subcategory_slug"]').empty();
                    $('select[name="subcategory_slug"]').append('<option value="">Select a category first</option>');
                    $('select[name="childsubcategory_slug"]').empty();
                    $('select[name="childsubcategory_slug"]').append('<option value="">Select a subcategory first</option>');
                }
          });
      
    </script>

    <script type="text/javascript">
          $('select[name="subcategory_slug"]').on('change', function(){
                /*var subcategory_slug = $(this).val();*/
                var option = document.getElementById("subslug");
                var subcategory_slug = option.options[option.selectedIndex].getAttribute('data-subslug');
                console.log(subcategory_slug);

                if (subcategory_slug) {
                  
                  $.ajax({
                    url: "{{ url('admin/subcategory-wise-childsubcategory/') }}/" + subcategory_slug,
                    type: "GET",
                    dataType: "json",
                    success: function(data) { 
                        var d = $('select[name="childsubcategory_slug"]').empty();
                        $('select[name="childsubcategory_slug"]').append('<option value="">Chose One</option>');
                        $.each(data, function(key, value){                  
                          $('select[name="childsubcategory_slug"]').append('<option value="'+ value.id + '">' + value.childsubcategory_name + '</option>');
                        });
                    },
                  });
                } else {
                    $('select[name="childsubcategory_slug"]').empty();
                    $('select[name="childsubcategory_slug"]').append('<option value="">Select a subcategory first</option>');
                }
          });
      
    </script>

    <script type="text/javascript">
        function handleFileSelect(event) 
        {
            console.log(event)
            var input = this;
            if (input.files && input.files[0])
              {
                var reader = new FileReader();
                  console.log(reader)
                  reader.onload = (function (e)
                  {
                    var span = document.createElement('span');
                    span.innerHTML = ['<img class="card-img-top img-fluid" style="height:200px; width:270px;" src="',e.target.result, '" title="Preview Image"/><span class="remove_img_preview"></span>'].join('');
                    document.getElementById('preview').insertBefore(span, null);
                  });
                  reader.readAsDataURL(input.files[0]);
              }
        }
        
        $('#file2').change(handleFileSelect); 
        
        $('#preview').on('click', '.remove_img_preview',function ()
        {
            $(this).parent('span').remove();
            $(this).val("");
            $('#file2').val("");
        });
    </script>

    <script type="text/javascript">
        function handleFileSelectTwo(event) 
        {
            var input = this;
            if (input.files && input.files[0])
              {
                var reader = new FileReader();
                  console.log(reader)
                  reader.onload = (function (e)
                  {
                    var span = document.createElement('span');
                    span.innerHTML = ['<img class="card-img-top img-fluid" style="height:200px; width:270px;" src="',e.target.result, '" title="Preview Image"/><span class="remove_img_preview"></span>'].join('');
                    document.getElementById('preview_two').insertBefore(span, null);
                  });
                  reader.readAsDataURL(input.files[0]);
              }
        }
        
        $('#file3').change(handleFileSelectTwo); 
        
        $('#preview_two').on('click', '.remove_img_preview',function ()
        {
            $(this).parent('span').remove();
            $(this).val("");
            $('#file3').val("");
        });
    </script>

@endsection