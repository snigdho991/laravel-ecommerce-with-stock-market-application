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
          <h5>Social Settings</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title" style="margin-bottom: 25px;">Social Media
          	<a href="" class="btn btn-sm btn-warning" style="float: right" data-toggle="modal" data-target="#modaldemo3"> <i class="fa fa-plus"></i> ADD NEW </a>
          </h6>
          
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-10p">Serial No.</th>
                  <th class="wd-20p">Social Website</th>
                  <th class="wd-35p">Link</th>
                  <th class="wd-15p">Status</th>
                  <th class="wd-20p">Action</th>
                </tr>
              </thead>
              <tbody>
			
			      @foreach($socials as $key=>$social)

                <tr>
                  <td>
                    @if($social->status == 1)
                      <span style="color: rgb(2, 158, 116);">{{ $key + 1 }}</span>
                    @else
                      <span style="color: #ff5a5f;">{{ $key + 1 }}</span>
                    @endif
                  </td>
                  <td> {{ $social->social_name }}</td>
                  <td> <a href="{{ $social->social_link }}"> {{ $social->social_link }} </a></td>
                  <td> 
                    @if($social->status == 1)
                      <span class="badge badge-success">Enabled</span>
                    @else
                      <span class="badge badge-danger">Disabled</span>
                    @endif
                  </td>
                  <td>
                    @if ($social->status == 1)
                        <a href="{{ route('socialsettings.change.status', ['id' => $social->id]) }}" class="btn btn-sm btn-danger">Disable</a>
                    @else
                        <a href="{{ route('socialsettings.change.status', ['id' => $social->id]) }}" class="btn btn-sm btn-success">Enable</a>
                    @endif
                    <a href="" class="btn btn-sm btn-info" style="margin-right: 7px;" data-toggle="modal" data-target="#modaldemo2" data-socialid="{{ $social->id }}" data-social="{{ $social->social_name }}" data-sociallink="{{ $social->social_link }}"> <i class="fa fa-pencil"></i> Edit </a>
                  </td>
                </tr>

            @endforeach
                
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
        
      
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


    <!-- EDIT MODAL -->
    <div id="modaldemo2" class="modal fade">
      <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header pd-y-20 pd-x-25">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">TITLE &#129191; <span id="edit_social" style="text-transform: none;"></span></h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <form action="" id="social-edit-form" method="post">
            @csrf
            <div class="modal-body pd-25">

                  <div class="form-group">
                    <label for="Social">Social Name</label>
                    <input type="text" name="social_name" id="edit_social" readonly="" class="form-control">
                  </div><!-- form-group -->

                  <div class="form-group">
                    <label for="Social">Social Link</label>
                    <input type="text" name="social_link" id="category_edit" onkeyup="buttonEnableForEdit()" class="form-control" required>
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


@section('social-scripts')
    
    <script type="text/javascript">
        $('#modaldemo2').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var social = button.data('social');
            var sociallink = button.data('sociallink');
            var modal = $(this);
            document.getElementById("edit_social").innerHTML = social;
            modal.find(".modal-body #edit_social").val(social);
            modal.find(".modal-body #category_edit").val(sociallink);

            var socialid = button.data('socialid');
            var url = "{{ route('socialsettings.update', ':id') }}";
            url = url.replace(':id', socialid);
            document.getElementById('social-edit-form').action = url;
        });
    </script>

@endsection