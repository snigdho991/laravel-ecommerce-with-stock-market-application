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
      
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Subcategory</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title" style="margin-bottom: 25px;">All Subcategories
            <a href="" class="btn btn-sm btn-warning" style="float: right" data-toggle="modal" data-target="#modaldemo3"> <i class="fa fa-plus"></i> ADD NEW </a>
          </h6>
          
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Serial No.</th>
                  <th class="wd-25p">Category Name</th>
                  <th class="wd-25p">Subcategory Name</th>
                  <th class="wd-35p">Action</th>
                </tr>
              </thead>
              <tbody>
      
           @foreach($subcategories as $key=>$subcategory)

                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td> ‒ {{ $subcategory->category_name }}</td>
                  <td> ‒ ‒ {{ $subcategory->subcategory_name }}</td>
                  <td> <a href="" class="btn btn-sm btn-info" style="margin-right: 7px;" data-toggle="modal" data-target="#modaldemo2" data-subcatid="{{ $subcategory->id }}" data-catslug="{{ $subcategory->category_slug }}" data-subcategory="{{ $subcategory->subcategory_name }}"> <i class="fa fa-pencil"></i> Edit </a>
                    <a href="{{ route('subcategory.destroy', ['id' => $subcategory->id]) }}" data-subtitle="{{ $subcategory->subcategory_name }}" class="btn btn-sm btn-danger" id="subcat_delete"><i class="icon ion-trash-a"></i> Delete </a>
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

          <form action="{{ route('subcategory.store') }}" method="post">
            @csrf
            <div class="modal-body pd-25">
                  <div class="form-group">
                    <label for="Subcategory">Subcategory Name</label>
                    <input type="text" name="subcategory_name" id="inputtext" onkeyup="buttonEnable()" class="form-control" required autofocus placeholder="Enter subcategory name">
                  </div><!-- form-group -->

                  <div class="form-group">
                    <label for="Subcategory">Select Category</label>
                    <select name="category_slug" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->category_slug }}">{{ $category->category_name }}</option>   
                        @endforeach
                    </select>
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
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">EDIT SUBCATEGORY &#129191; <span id="edit_subcategory" style="text-transform: none;"></span></h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <form action="" id="subcat-edit-form" method="post">
            @csrf
            <div class="modal-body pd-25">
                  <div class="form-group">
                    <label for="Subcategory">Subcategory Name</label>
                    <input type="text" name="subcategory_name" id="category_edit" onkeyup="buttonEnableForEdit()" class="form-control" required>
                  </div><!-- form-group -->

                  <div class="form-group">
                    <label for="Subcategory">Pick Category</label>
                    <select name="category_slug" class="form-control" id="selected_cat">
                        @foreach($categories as $category)
                            <option selected="selected" value="{{ $category->category_slug }}">{{ $category->category_name }}</option>   
                        @endforeach
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


@section('subcategory-scripts')

    <script type="text/javascript">
        $(document).on('click', '#subcat_delete', function(e){
            e.preventDefault();

            var link = $(this),
                url  = link.attr("href"),
                subcat  = link.attr("data-subtitle"),
                csrf_token = $('meta[name="csrf-token"]').attr('content');
            
            Swal.fire({
              title: 'Are you sure?',
              text: `You won't be able to revert subcategory » ${subcat}`,
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
                        var loadUrl = "{{ route('subcategory') }}";

                        Swal.fire(
                          'Deleted!',
                          'Subcategory has been removed successfully !',
                          'success'
                        ).then(function() {
                            $('body').load(loadUrl);
                        });
                        
                    }
                });

              } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire(
                  'Cancelled',
                  'Subcategory deletion has been dismissed.',
                  'error'
                )
              }
            })
        })
    </script>


    <script type="text/javascript">
        $('#modaldemo2').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var subcategory = button.data('subcategory');
            var modal = $(this);
            document.getElementById("edit_subcategory").innerHTML = subcategory;
            modal.find(".modal-body #category_edit").val(subcategory);

            var catslug = button.data('catslug');
            $("#selected_cat").val(catslug);


            var subcatid = button.data('subcatid');
            var url = "{{ route('subcategory.update', ':id') }}";
            url = url.replace(':id', subcatid);
            document.getElementById('subcat-edit-form').action = url;
        });
    </script>


@endsection

