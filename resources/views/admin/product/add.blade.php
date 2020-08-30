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
      <!-- <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Tables</a>
        <span class="breadcrumb-item active">Data Table</span>
      </nav> -->

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Add Product</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          @if($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
          @endif
          <h6 class="card-body-title mg-b-20 mg-sm-b-20 text-center">Product Portion</h6>
          <p class="mg-b-20 mg-sm-b-30"></p>
        <form action="{{ route('product.store') }}" method="post" id="parval" enctype="multipart/form-data">
        @csrf
          <div class="row">
            <div class="col-lg">
              <label><b>&#129191; Product Name (*)</b></label>
              <input class="form-control" name="product_name" id="product_name" value="{{ old('product_name') }}" type="text" required>
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
              <label><b> &#129191; Product Code (*)</b></label>
              <input class="form-control" name="product_code" id="product_code" value="{{ old('product_code') }}" type="text" required>
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
              <label><b> &#129191; Product Price (*)</b></label>
              <input class="form-control" name="product_price" id="product_price" step="any" min="1" value="{{ old('product_price') }}" type="number" required>
            </div><!-- col -->
          </div><!-- row -->

          <div class="row mg-t-20">
            <div class="col-lg">
              <label><b> &#129191; Product Weight</b></label>
              <input class="form-control" name="product_weight" id="product_weight" value="{{ old('product_weight') }}" type="text">
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
              <label><b> &#129191; Product Discount</b></label>
              <input class="form-control" name="product_discount" id="product_discount" value="{{ old('product_discount') }}" step="any" min="0.1" type="number">
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
              <label><b> &#129191;  Product Video Link</b></label>
              <input class="form-control" name="product_video" id="product_video" value="{{ old('product_video') }}" type="text">
            </div><!-- col -->
          </div><!-- row -->

          

          <div class="row mg-t-20">
              <div class="col-lg">
                  <label><b> &#129191; Meta Title</b></label>
                  <input class="form-control" name="meta_title" id="meta_title" value="{{ old('meta_title') }}" type="text">
              </div><!-- col -->
              <div class="col-lg mg-t-10 mg-lg-t-0">
                  <label><b> &#129191; Meta Keywords</b></label>
                  <input class="form-control" name="meta_keywords" id="meta_keywords" value="{{ old('meta_keywords') }}" type="text">
              </div><!-- col -->
              <div class="col-lg mg-t-10 mg-lg-t-0">
                  <label><b> &#129191; Meta Description</b></label>
                  <input class="form-control" name="meta_description" id="meta_description" value="{{ old('meta_description') }}" type="text">
              </div><!-- col -->
          </div><!-- row -->

          <div class="row mg-t-20">
              <div class="col-lg">
                  <label><b> &#129191; Color Way</b></label>
                  <input class="form-control" name="colorway" id="colorway" value="{{ old('title') }}" type="text">
              </div><!-- col -->
              <div class="col-lg mg-t-10 mg-lg-t-0">

                  <label><b> &#129191; Select Ocassion Type</b></label>
                  <select name="occasion" class="form-control">
                        <option value="">Select any</option>
                      @foreach($occasionArray as $occasion)
                        <option value="{{ $occasion }}">{{$occasion}}</option>
                      @endforeach
                      
                  </select>
              </div><!-- col -->
              <div class="col-lg mg-t-10 mg-lg-t-0">

                  <label class="ckbox" style="margin-top: 40px; cursor: pointer; font-weight: bold;">
                      <input type="checkbox" name="home_slider"><span> Home Slider</span>
                  </label>
                  
              </div><!-- col -->
          </div><!-- row -->

          <h6 class="card-body-title mg-b-20 mg-t-50 mg-sm-b-20 text-center">Image Portion</h6>
          <p class="mg-b-20 mg-sm-b-30"></p>

          <div class="row mg-t-20">
              <div class="col-lg">
                  <label><b> &#129191; Main image (*)</b></label><br>
                  <label class="custom-file">
                    <input type="file" id="file2" name="main_image" class="custom-file-input" required>
                    <span class="custom-file-control custom-file-control-primary"></span>
                  </label>

                  <div class="card bd-0 wd-xs-300">
                    <br>
                    <div id="preview"></div>
                    
                  </div>
              </div><!-- col -->
              <div class="col-lg mg-t-10 mg-lg-t-0">
                  <label><b> &#129191; First Optional image</b></label><br>
                  <label class="custom-file">
                    <input type="file" id="file3" class="custom-file-input" name="second_image">
                    <span class="custom-file-control custom-file-control-primary"></span>
                  </label>

                  <div class="card bd-0 wd-xs-300">
                    <br>
                    <div id="preview_two"></div>
                    
                  </div>
              </div><!-- col -->
              <div class="col-lg mg-t-10 mg-lg-t-0">
                  <label><b> &#129191; Second Optional image</b></label><br>
                  <label class="custom-file">
                    <input type="file" id="file4" class="custom-file-input" name="third_image">
                    <span class="custom-file-control custom-file-control-primary"></span>
                  </label>

                  <div class="card bd-0 wd-xs-300">
                    <br>
                    <div id="preview_three"></div>
                    
                  </div>
              </div><!-- col -->
          </div><!-- row -->

          <h6 class="card-body-title mg-b-20 mg-t-60 mg-sm-b-20 text-center">Catalogues Portion</h6>
          <p class="mg-b-20 mg-sm-b-30"></p>

          <div class="row mg-t-20">
              <div class="col-lg">
                  
                  <label><b> &#129191; Main Category (*)</b></label><br>
                  
                  <select class="form-control select2" id="catslug" name="category_slug" required>
                      
                        <option value="">Choose One</option>
                      @foreach($categories as $category)
                        <option value="{{ $category->id }}" data-catslug="{{ $category->category_slug }}" @if(!empty(@old('id')) && $category->id == @old('id')) selected="" @endif>{{ $category->category_name }}</option>
                      @endforeach
                  
                  </select>
                                     
              </div><!-- col -->
              <div class="col-lg mg-t-10 mg-lg-t-0">
                  <label><b> &#129191; Subcategory</b></label><br>
                  <select class="form-control" id="subslug" name="subcategory_slug">
                      <option value="">Select a category first</option>
                  </select>
              </div><!-- col -->
              <div class="col-lg mg-t-10 mg-lg-t-0">
                  <label><b> &#129191; Child Subcategory</b></label><br>
                  <select class="form-control" name="childsubcategory_slug">
                      <option value="">Select a subcategory first</option>
                  </select>
              </div><!-- col -->
          </div><!-- row -->

          <h6 class="card-body-title mg-b-20 mg-t-60 mg-sm-b-20 text-center">Product Description</h6>
          <p class="mg-b-20 mg-sm-b-30"></p>

          <div class="row mg-t-20">
              <div class="col-lg mg-t-10 mg-lg-t-0">
                  <textarea id="summernote" name="description" required></textarea>
              </div>
                 
          </div><!-- row -->

          <div class="row mg-t-20">
              <div class="col-lg mg-t-10 mg-lg-t-0">
                  <button type="submit" style="cursor: pointer;margin-top: 30px;width: 100%;" class="btn btn-info pd-x-35">Save Product</button>
              </div>
          </div>

        </form>
        </div>
          
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

    <script type="text/javascript">
        function handleFileSelectThree(event) 
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
                    document.getElementById('preview_three').insertBefore(span, null);
                  });
                  reader.readAsDataURL(input.files[0]);
              }
        }
        
        $('#file4').change(handleFileSelectThree); 
        
        $('#preview_three').on('click', '.remove_img_preview',function ()
        {
            $(this).parent('span').remove();
            $(this).val("");
            $('#file4').val("");
        });
    </script>
@endsection