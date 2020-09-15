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

  .parsley-required 
  {
      margin-left: 7px !important;
  }
</style>

@extends('layouts.backend')

@section('backend-content')

	  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Product Attributes</h5>
        </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">
                    
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="form-control-label"><b>Product Name : </b></label><br>
                  <strong> &#129191;</strong> {{ $product->product_name }}
                </div>
              </div><!-- col-md-6 -->


            <div class="col-md-2">
                <div class="form-group">
                  <label class="form-control-label"><b>Product Code : </b></label><br>
                 <strong> &#129191;</strong> {{ $product->product_code }}
 
                </div>

                <div class="form-group mg-b-10-force">
                  <label class="form-control-label"><b>Category : </b></label><br>
                  <strong> &#129191;</strong> {{ $product->category->category_name }}
       
                </div>
              
            </div>

            <div class="col-md-2">
                <div class="form-group">
                  <label class="form-control-label"><b>Retail Price : </b></label>
                  <br>
                  <strong> &#129191;</strong> {{ $product->product_price }}
 
                </div>

                <div class="form-group">                  
                  <label class="form-control-label"><b>Product Color : </b></label>
                    <br>
                  <strong> &#129191;</strong> {{ $product->colorway }}
  
                </div>
              
            </div>

            <div class="col-md-4">
                <div class="form-group">
                  <label class="form-control-label"><b>&#129191; Main Image </b></label>
                  <br>
                  
                  @if(!empty($product->main_image) && file_exists('app/uploads/product_images/main_image/small/'.$product->main_image))
                      <img width="250px" height="180px" src="{{ asset('app/uploads/product_images/main_image/small/'.$product->main_image) }}">
                  @else
                      N/A
                  @endif
 
                </div>

                
            </div>
          
        </div><!-- row -->

        <div class="row mg-b-35">
            <div class="col-md-6">

              <form action="{{ route('product.attributes.store', ['id' => $product->id]) }}" id="parval" method="post">
                @csrf

                {{-- @if($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                @endif --}}

                <div class="form-group">
                  <label for=""><h6>Add Attributes</h6></label>
                    <div class="field_wrapper">
                      <div>
                        <div class="d-md-flex pd-y-20 pd-md-y-0">
                            <input type="text" id="size" name="size[]" class="form-control" placeholder="Size" required>
                            <input type="text" id="sku" name="sku[]" class="form-control mg-md-l-10 mg-t-10 mg-md-t-0" placeholder="SKU" required>
                            <input type="number" min="1" id="stock" name="stock[]" class="form-control mg-md-l-10 mg-t-10 mg-md-t-0" placeholder="Stock" required>
                            <a href="javascript:void(0);" class="btn btn-primary pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0" id="add_button" title="Add field">Add</a>
                        </div>
                          {{-- <input type="text" id="size" name="size[]" placeholder="Size" style="width: 120px;" />
                          <input type="text" id="sku" name="sku[]" placeholder="SKU" style="width: 120px;" />
                          <input type="text" id="stock" name="stock[]" placeholder="Stock" style="width: 120px;" />
                          <a href="javascript:void(0);" class="add_button" title="Add field">Add</a> --}}
                      </div>
                    </div>
                      
                </div>

                <div class="form-group">
                    <button class="btn btn-success" style="cursor: pointer;
                    " type="submit">Save Attributes</button>
                </div>
              </form>
            </div>
        </div>


        <div class="row mg-b-25">
            <div class="col-md-12">
                <div class="form-group">
                  <label for=""><h6>Already Added Attributes</h6></label>
                </div>

                <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Serial No.</th>
                  <th class="wd-25p">Size</th>
                  <th class="wd-25p">SKU</th>
                  <th class="wd-15p">Stock</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
      
            @foreach($productattr['attributes'] as $key => $attr)

                <tr>
                  <td> {{ $key + 1 }} </td>
                  <td> {{ $attr['size'] }} </td>
                  <td> {{ $attr['sku'] }} </td>
                  <td> {{ $attr['stock'] }} </td>
                  
                  <td> 
                    <a href="{{ route('attribute.destroy', ['id' => $attr['id']]) }}" data-attrsize="{{ $attr['size'] }}" class="btn btn-sm btn-danger" id="attr_delete"><i class="icon ion-trash-a"></i> </a>
                  </td>
                </tr>

            @endforeach
                
              </tbody>
            </table>
          </div><!-- table-wrapper -->
            </div>
        </div>

  <br>

            
          </div><!-- form-layout -->
        </div><!-- card -->
 
        
        </div><!-- row -->

  
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
 

@endsection

@section('addproductattr-scripts')
    <script type="text/javascript">
        
            var maxField = 10; //Input fields increment limitation
            var addButton = $('#add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var fieldHTML = '<div><div class="d-md-flex pd-y-20 pd-md-y-0" style="margin-top:10px;"><input type="text" id="size" name="size[]" class="form-control" placeholder="Size" required style="width: 156px;"><input type="text" id="sku" name="sku[]" class="form-control mg-md-l-10 mg-t-10 mg-md-t-0" placeholder="SKU" required style="width: 156px;"><input type="number" id="stock" min="1" name="stock[]" class="form-control mg-md-l-10 mg-t-10 mg-md-t-0" placeholder="Stock" required style="width: 156px;"><a href="javascript:void(0);" class="btn btn-danger pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 remove_button">Remove</a></div></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            
            //Once add button is clicked
            $(addButton).click(function(){
                //Check maximum number of input fields
                if(x < maxField){ 
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); //Add field html
                }
            });
            
            //Once remove button is clicked
            $(wrapper).on('click', '.remove_button', function(e){
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        
    </script>

    <script type="text/javascript">
        $(document).on('click', '#attr_delete', function(e){
            e.preventDefault();

            var link = $(this),
                url  = link.attr("href"),
                attrsize  = link.attr("data-attrsize"),
                csrf_token = $('meta[name="csrf-token"]').attr('content');
            
            Swal.fire({
              title: 'Are you sure?',
              text: `Attribute will be permanently lost! Product size » ${attrsize}`,
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.value) {
                $.ajax({
                    url: url,
                    type: "POST",
                    data: {
                        '_method': 'DELETE',
                        '_token': csrf_token
                    },

                    success: function(response){
                        var loadUrl = "{{ route('product.attributes', ['slug' => $product->product_slug]) }}";

                        Swal.fire(
                          'Deleted!',
                          'Attribute has been removed successfully !',
                          'success'
                        ).then(function() {
                            $('body').load(loadUrl);
                        });
                        
                    }
                });

              } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire(
                  'Cancelled',
                  'Attribute deletion has been dismissed.',
                  'error'
                )
              }
            })
        })
    </script>
    
@endsection