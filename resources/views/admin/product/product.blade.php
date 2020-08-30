<style type="text/css">
	.btn-info.disabled, .btn-info:disabled {
	    background-color: #5B93D3;
	    border-color: #5B93D3;
	    cursor: no-drop !important;
	}
</style>

<style type="text/css">
  .wrapper{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 400px;
    margin: 50vh auto 0;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
  }

.switch_box{
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  max-width: 200px;
  min-width: 200px;
  height: 200px;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

/* Switch 1 Specific Styles Start */

.box_1{
  background: #eee;
}

input[type="checkbox"].switch_1{
  font-size: 30px;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  width: 3.5em;
  height: 1.5em;
  background: #ddd;
  border-radius: 3em;
  position: relative;
  cursor: pointer;
  outline: none;
  -webkit-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
  }
  
  input[type="checkbox"].switch_1:checked{
  background: #0ebeff;
  }
  
  input[type="checkbox"].switch_1:after{
  position: absolute;
  content: "";
  width: 1.5em;
  height: 1.5em;
  border-radius: 50%;
  background: #fff;
  -webkit-box-shadow: 0 0 .25em rgba(0,0,0,.3);
          box-shadow: 0 0 .25em rgba(0,0,0,.3);
  -webkit-transform: scale(.7);
          transform: scale(.7);
  left: 0;
  -webkit-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
  }
  
  input[type="checkbox"].switch_1:checked:after{
  left: calc(100% - 1.5em);
  }
  
/* Switch 1 Specific Style End */


/* Switch 2 Specific Style Start */

.box_2{
  background: #666;
}

input[type="checkbox"].switch_2{
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  width: 100px;
  height: 8px;
  background: #444;
  border-radius: 5px;
  position: relative;
  outline: 0;
  cursor: pointer;
}

input[type="checkbox"].switch_2:before,
input[type="checkbox"].switch_2:after{
  position: absolute;
  content: "";
  -webkit-transition: all .25s;
  transition: all .25s;
}

input[type="checkbox"].switch_2:before{
  width: 40px;
  height: 40px;
  background: #ccc;
  border: 5px solid #666;
  border-radius: 50%;
  top: 50%;
  left: 0;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

input[type="checkbox"].switch_2:after{
  width: 30px;
  height: 30px;
  background: #666;
  border-radius: 50%;
  top: 50%;
  left: 10px;
  -webkit-transform: scale(1) translateY(-50%);
          transform: scale(1) translateY(-50%);
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
}

input[type="checkbox"].switch_2:checked:before{
  left: calc(100% - 35px);
}

input[type="checkbox"].switch_2:checked:after{
  left: 75px;
  -webkit-transform: scale(0);
          transform: scale(0);
}

/* Switch 2 Specific Style End */

  
/* Switch 3 Specific Style Start */

.box_3{
  background: #19232b;
}

.toggle_switch{
  width: 100px;
  height: 45px;
  position: relative;
}

input[type="checkbox"].switch_3{
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  cursor: pointer;
  outline: 0;
  z-index: 1;
}

svg.checkbox .outer-ring{
  stroke-dasharray: 375;
  stroke-dashoffset: 375;
  -webkit-animation: resetRing .35s ease-in-out forwards;
          animation: resetRing .35s ease-in-out forwards;
}

input[type="checkbox"].switch_3:checked + svg.checkbox .outer-ring{
  -webkit-animation: animateRing .35s ease-in-out forwards;
          animation: animateRing .35s ease-in-out forwards;
}

input[type="checkbox"].switch_3:checked + svg.checkbox .is_checked{
  opacity: 1;
  -webkit-transform: translateX(0) rotate(0deg);
          transform: translateX(0) rotate(0deg);
}

input[type="checkbox"].switch_3:checked + svg.checkbox .is_unchecked{
  opacity: 0;
  -webkit-transform: translateX(-200%) rotate(180deg);
          transform: translateX(-200%) rotate(180deg);
}


svg.checkbox{
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

svg.checkbox .is_checked{
  opacity: 0;
  fill: yellow;
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
  -webkit-transform: translateX(200%) rotate(45deg);
          transform: translateX(200%) rotate(45deg);
  -webkit-transition: all .35s;
  transition: all .35s;
}

svg.checkbox .is_unchecked{
  opacity: 1;
  fill: #fff;
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
  -webkit-transform: translateX(0) rotate(0deg);
          transform: translateX(0) rotate(0deg);
  -webkit-transition: all .35s;
  transition: all .35s;
}

@-webkit-keyframes animateRing{
  to{
    stroke-dashoffset: 0;
    stroke: #b0aa28;
  }
}

@keyframes animateRing{
  to{
    stroke-dashoffset: 0;
    stroke: #b0aa28;
  }
}

@-webkit-keyframes resetRing{
  to{
    stroke-dashoffset: 0;
    stroke: #233043;
  }
}

@keyframes resetRing{
  to{
    stroke-dashoffset: 0;
    stroke: #233043;
  }
}

/* Switch 3 Specific Style End */


/* Switch 4 Specific Style Start */

.box_4{
  background: #eee;
}

.input_wrapper{
  width: 80px;
  height: 25px;
  position: relative;
  cursor: pointer;
}

.input_wrapper input[type="checkbox"]{
  width: 75px;
  height: 30px;
  cursor: pointer;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background: #315e7f;
  border-radius: 2px;
  position: relative;
  outline: 0;
  -webkit-transition: all .2s;
  transition: all .2s;
}

.input_wrapper input[type="checkbox"]:after{
  position: absolute;
  content: "";
  top: 3px;
  left: 3px;
  width: 30px;
  height: 24px;
  background: #dfeaec;
  z-index: 2;
  border-radius: 2px;
  -webkit-transition: all .35s;
  transition: all .35s;
}

.input_wrapper svg{
  position: absolute;
  top: 50%;
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
  fill: #fff;
  -webkit-transition: all .35s;
  transition: all .35s;
  z-index: 1;
}

.input_wrapper .is_checked{
  width: 18px;
  left: 14%;
  -webkit-transform: translateX(190%) translateY(-30%) scale(0);
          transform: translateX(190%) translateY(-30%) scale(0);
  top: 47%;
}

.input_wrapper .is_unchecked{
  width: 15px;
  right: 23%;
  -webkit-transform: translateX(0) translateY(-30%) scale(1);
          transform: translateX(0) translateY(-30%) scale(1);
}

/* Checked State */
.input_wrapper input[type="checkbox"]:checked{
  background: #23da87;
}

.input_wrapper input[type="checkbox"]:checked:after{
  left: calc(100% - 37px);
}

.input_wrapper input[type="checkbox"]:checked + .is_checked{
  -webkit-transform: translateX(0) translateY(-30%) scale(1);
          transform: translateX(0) translateY(-30%) scale(1);
}

.input_wrapper input[type="checkbox"]:checked ~ .is_unchecked{
  -webkit-transform: translateX(-190%) translateY(-30%) scale(0);
          transform: translateX(-190%) translateY(-30%) scale(0);
}

/* Switch 4 Specific Style End */
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
          <h5>Product</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title" style="margin-bottom: 25px;">All Products
          	<a href="" class="btn btn-sm btn-warning" style="float: right" data-toggle="modal" data-target="#modaldemo3"> <i class="fa fa-plus"></i> ADD NEW </a>
          </h6>
          
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-5p">No.</th>
                  <th class="wd-10p">Product Name</th>
                  <th class="wd-10p">Product Code</th>
                  <th class="wd-10p">Retail Price</th>
                  <th class="wd-20p">Catalogues</th>
                  <th class="wd-15p">Image</th>
                  <th class="wd-20p">Status</th>
                  <th class="wd-10p">Action</th>
                </tr>
              </thead>
              <tbody>
			
			      @foreach($products as $key=>$product)

                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td> {{ $product->product_name }}</td>
                  <td> {{ $product->product_code }} </td>
                  <td> {{ $product->product_price }} </td>
                  <td>
                    {{ $product->category->category_name }}<br>
                    <span style="margin-left: 15px;">&#10143; @if(!empty($product->subcategory)) {{ $product->subcategory->subcategory_name }} @else {{ "x" }} @endif </span><br>
                    <span style="margin-left: 30px;">&#10143; @if(!empty($product->childsubcategory)) {{ $product->childsubcategory->childsubcategory_name }}  @else {{ "x" }} @endif</span>
                  </td>
                  <td>
                    @if(!empty($product->main_image) && file_exists('app/uploads/product_images/main_image/small/'.$product->main_image))
                      <img width="50px" height="50px" src="{{ asset('app/uploads/product_images/main_image/small/'.$product->main_image) }}">
                    @else
                      N/A
                    @endif
                  </td>
                  <td> 
                                      
                      <div class="input_wrapper">
                          <input type="hidden" name="product_id" value="{{ $product->id }}">
                          <input type="checkbox" name="status" @if($product->status == 1) checked="" @endif class="switch_4" status="{{ $product->status }}" product_id="{{ $product->id }}">
                          <svg class="is_checked" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 426.67 426.67">
                          <path d="M153.504 366.84c-8.657 0-17.323-3.303-23.927-9.912L9.914 237.265c-13.218-13.218-13.218-34.645 0-47.863 13.218-13.218 34.645-13.218 47.863 0l95.727 95.727 215.39-215.387c13.218-13.214 34.65-13.218 47.86 0 13.22 13.218 13.22 34.65 0 47.863L177.435 356.928c-6.61 6.605-15.27 9.91-23.932 9.91z"></path>
                          </svg>
                      
                          <svg class="is_unchecked" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 212.982 212.982">
                          <path d="M131.804 106.49l75.936-75.935c6.99-6.99 6.99-18.323 0-25.312-6.99-6.99-18.322-6.99-25.312 0L106.49 81.18 30.555 5.242c-6.99-6.99-18.322-6.99-25.312 0-6.99 6.99-6.99 18.323 0 25.312L81.18 106.49 5.24 182.427c-6.99 6.99-6.99 18.323 0 25.312 6.99 6.99 18.322 6.99 25.312 0L106.49 131.8l75.938 75.937c6.99 6.99 18.322 6.99 25.312 0 6.99-6.99 6.99-18.323 0-25.313l-75.936-75.936z" fill-rule="evenodd" clip-rule="evenodd"></path>
                          </svg>
                      
                      </div>
                    
                  </td>
                  <td>
                      <a href="{{ route('product.view', ['slug' => $product->product_slug]) }}" class="btn btn-primary btn-sm" title="View"><i class="icon ion-eye"></i> </a>

                      <a href="{{ route('product.edit', ['slug' => $product->product_slug]) }}" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-pencil"></i> </a>

                  </td>
                </tr>

            @endforeach
                
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
        
      
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

@endsection


@section('product-scripts')

    <script type="text/javascript">
        $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
        });

        $(".switch_4").click(function(){
            var status = $(this).attr("status");
            var product_id = $(this).attr("product_id");
            
            $.ajax({
                url: '/admin/update-product-status',
                type: 'POST',
                data: {status:status, product_id:product_id},
                success: function(resp){
                    console.log(resp);
                    if (resp['status'] == 0) {
                        document.querySelector(".switch_4").checked === false;
                        new Noty({ 
                            type:'error', 
                            layout:'bottomLeft', 
                            text: 'Product has been deactivated !', 
                            timeout: 3000
                        }).show();
                    } else {
                        document.querySelector(".switch_4").checked === true;
                        new Noty({ 
                            type:'success', 
                            layout:'bottomLeft', 
                            text: 'Product has been activated successfully !', 
                            timeout: 3000
                        }).show();
                    }
                    /*window.location.reload();
                    console.log(resp);*/
                },
            })
        });
    </script>
    
    
@endsection