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
          <h5>Category</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title" style="margin-bottom: 25px;">All Categories
          	<a href="" class="btn btn-sm btn-warning" style="float: right" data-toggle="modal" data-target="#modaldemo3"> <i class="fa fa-plus"></i> ADD NEW </a>
          </h6>
          
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-20p">Serial No.</th>
                  <th class="wd-35p">Category Name</th>
                  <th class="wd-45p">Action</th>
                </tr>
              </thead>
              <tbody>
			
			      @foreach($categories as $key=>$category)

                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td> {{ $category->category_name }}</td>
                  <td> 
                    <a href="" class="btn btn-sm btn-info" style="margin-right: 5px;" data-toggle="modal" data-target="#modaldemo2" data-catid="{{ $category->id }}" data-category="{{ $category->category_name }}"> <i class="fa fa-pencil"></i> Edit </a>
                    
                  	<a href="{{ route('category.destroy', ['id' => $category->id]) }}" data-title="{{ $category->category_name }}" class="btn btn-sm btn-danger" id="delete"><i class="icon ion-trash-a"></i> Delete </a>
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

          <form action="{{ route('category.store') }}" method="post">
              @csrf
	          <div class="modal-body pd-25">
	                <div class="form-group">
	                  <label for="Category">Category Name</label>
	                  <input type="text" name="category_name" id="inputtext" onkeyup="buttonEnable()" class="form-control" required autofocus placeholder="Enter category name">
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
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">EDIT CATEGORY &#129191; <span id="edit_category" style="text-transform: none;"></span></h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <form action="" id="edit-form" method="post">
            @csrf
            <div class="modal-body pd-25">
                  <div class="form-group">
                    <label for="Category">Category Name</label>
                    <input type="text" name="category_name" id="category_edit" onkeyup="buttonEnableForEdit()" class="form-control" required>
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
        $('#modaldemo2').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var category = button.data('category');
            var modal = $(this);
            document.getElementById("edit_category").innerHTML = category;
            modal.find(".modal-body #category_edit").val(category);

            var catid = button.data('catid');
            var url = "{{ route('category.update', ':id') }}";
            url = url.replace(':id', catid);
            document.getElementById('edit-form').action = url;
        });
    </script>

@endsection