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
          <h5>Coupon</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title" style="margin-bottom: 25px;">All Coupons
          	<a href="" class="btn btn-sm btn-warning" style="float: right" data-toggle="modal" data-target="#modaldemo3"> <i class="fa fa-plus"></i> ADD NEW </a>
          </h6>
          
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Serial No.</th>
                  <th class="wd-25p">Coupon</th>
                  <th class="wd-25p">Discount</th>
                  <th class="wd-15p">Status</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
			
			      @foreach($coupons as $key=>$coupon)

                <tr>
                  <td>
                    @if($coupon->status == 1)
                      <span style="color: rgb(2, 158, 116);">{{ $key + 1 }}</span>
                    @else
                      <span style="color: #ff5a5f;">{{ $key + 1 }}</span>
                    @endif
                  </td>
                  <td> {{ $coupon->coupon_code }}</td>
                  <td> <b>{{ $coupon->coupon_discount }}%</b></td>
                  <td> 
                    @if($coupon->status == 1)
                      <span class="badge badge-success">Enabled</span>
                    @else
                      <span class="badge badge-danger">Disabled</span>
                    @endif
                  </td>
                  <td> 
                    <a href="" class="btn btn-sm btn-info" style="margin-right: 5px;" data-toggle="modal" data-target="#modaldemo2" data-coupid="{{ $coupon->id }}" data-coupon="{{ $coupon->coupon_code }}" data-coupstatus="{{ $coupon->status }}" data-coupdis="{{ $coupon->coupon_discount }}"> <i class="fa fa-pencil"></i> Edit </a>

                    <a href="{{ route('coupon.destroy', ['id' => $coupon->id]) }}" data-coupontitle="{{ $coupon->coupon_code }}" class="btn btn-sm btn-danger" id="coupon_delete"><i class="icon ion-trash-a"></i> Delete </a>
                  </td>
                </tr>

            @endforeach
                
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
        
      
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


    <!-- ADD MODAL -->
    <div id="modaldemo3" class="modal fade">
      <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header pd-y-20 pd-x-25">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">ADD NEW CATEGORY</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <form action="{{ route('coupon.store') }}" method="post">
            @csrf
	          <div class="modal-body pd-25">

                <div class="form-group">
                  <label for="Coupon">Coupon Code</label>
                  <input type="text" name="coupon_code" id="inputtext" onkeyup="buttonEnable()" class="form-control" required autofocus placeholder="Enter coupon code">
                </div><!-- form-group -->

                <div class="form-group">
                  <label for="Coupon">Coupon Discount (%)</label>
                  <input type="number" name="coupon_discount" id="inputtext" onkeyup="buttonEnable()" class="form-control" required autofocus placeholder="Enter discount">
                </div><!-- form-group -->

	          </div>
	          <div class="modal-footer">
	            <button type="submit" id="button" disabled style="cursor: pointer;" class="btn btn-info pd-x-40">Save</button>
	            <button type="button" class="btn btn-secondary pd-x-40" data-dismiss="modal">Close</button>
	          </div>
	       </form>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->


    <!-- EDIT MODAL -->
    <div id="modaldemo2" class="modal fade">
      <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header pd-y-20 pd-x-25">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">EDIT CATEGORY &#129191; <span id="edit_coupon" style="text-transform: none;"></span></h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <form action="" id="coupon-edit-form" method="post">
            @csrf
            <div class="modal-body pd-25">
                  <div class="form-group">
                  <label for="Coupon">Coupon Code</label>
                  <input type="text" name="coupon_code" id="category_edit" onkeyup="buttonEnableForEdit()" class="form-control" required autofocus placeholder="Enter coupon code">
                </div><!-- form-group -->

                <div class="form-group">
                  <label for="Coupon">Coupon Discount (%)</label>
                  <input type="number" name="coupon_discount" id="coupdis_edit" onkeyup="buttonEnableForDiscount()" class="form-control" required autofocus placeholder="Enter discount">
                </div><!-- form-group -->

                <div class="form-group">
                    <label for="Coupon">Select Status</label>
                    <select name="status" class="form-control" id="selected_status" onchange="buttonEnableForStatus()">                       
                        <option value="1">Enable</option>   
                        <option value="0">Disable</option>                        
                    </select>
                  </div><!-- form-group -->

            </div>
            <div class="modal-footer">
              <button type="submit" id="editbutton" disabled style="cursor: pointer;" class="btn btn-info pd-x-35">Update</button>
              <button type="button" class="btn btn-secondary pd-x-35" data-dismiss="modal">Close</button>
            </div>
          </form>

        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->

@endsection


@section('category-scripts')

    <script type="text/javascript">
        $(document).on('click', '#coupon_delete', function(e){
            e.preventDefault();

            var link = $(this),
                url  = link.attr("href"),
                coupon  = link.attr("data-coupontitle"),
                csrf_token = $('meta[name="csrf-token"]').attr('content');
            
            Swal.fire({
              title: 'Are you sure?',
              text: `You won't be able to revert coupon » ${coupon}`,
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
                        var loadUrl = "{{ route('coupon') }}";

                        Swal.fire(
                          'Deleted!',
                          'Coupon has been removed successfully !',
                          'success'
                        ).then(function() {
                            $('body').load(loadUrl);
                        });
                        
                    }
                });

              } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire(
                  'Cancelled',
                  'Coupon deletion has been dismissed.',
                  'error'
                )
              }
            })
        })
    </script>
    
    <script type="text/javascript">
        $('#modaldemo2').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var coupon = button.data('coupon');
            var modal = $(this);
            document.getElementById("edit_coupon").innerHTML = coupon;
            modal.find(".modal-body #category_edit").val(coupon);

            var coupdis = button.data('coupdis');
            modal.find(".modal-body #coupdis_edit").val(coupdis);

            var coupstatus = button.data('coupstatus');
            $("#selected_status").val(coupstatus);

            var coupid = button.data('coupid');
            var url = "{{ route('coupon.update', ':id') }}";
            url = url.replace(':id', coupid);
            document.getElementById('coupon-edit-form').action = url;
        });
    </script>

@endsection