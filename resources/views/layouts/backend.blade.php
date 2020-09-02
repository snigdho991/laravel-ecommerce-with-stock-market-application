<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    
    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{ asset('backend/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">

    <link href="{{ asset('backend/lib/highlightjs/github.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/lib/rickshaw/rickshaw.min.css') }}" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/starlight.css') }}">

    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.css" />
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"> --}}
    <link href="https://parsleyjs.org/src/parsley.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    
  </head>

  <body id="body">
        

        @include('admin.inc.leftbar')

        @include('admin.inc.admin-header')

        @include('admin.inc.rightmsgbar')

        @yield('backend-content')
    

    <script src="{{ asset('backend/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('backend/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('backend/lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>

    <script src="{{ asset('backend/lib/highlightjs/highlight.pack.js') }}"></script>
    <script src="{{ asset('backend/lib/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('backend/lib/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('backend/lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('backend/lib/d3/d3.js') }}"></script>
    <script src="{{ asset('backend/lib/rickshaw/rickshaw.min.js') }}"></script>
    <script src="{{ asset('backend/lib/chart.js/Chart.js') }}"></script>
    <script src="{{ asset('backend/lib/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('backend/lib/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('backend/lib/Flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('backend/lib/flot-spline/jquery.flot.spline.js') }}"></script>

    <script src="{{ asset('backend/js/starlight.js') }}"></script>
    <script src="{{ asset('backend/js/ResizeSensor.js') }}"></script>
    <script src="{{ asset('backend/js/dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/toastr.min.js') }}"></script>
    
    <script type="text/javascript">
        @if(Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}")  
        @endif

        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}")  
        @endif

        @if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}")  
        @endif

        @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}")  
        @endif
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.js"></script>
    <script>        
        @if(Session::has('noty-success')) new Noty({ 
                type:'success', 
                layout:'bottomLeft', 
                text: '{{ Session::get('noty-success') }}', 
                timeout: 5000
            }).show(); 
        @endif

        @if(Session::has('noty-info')) new Noty({ 
                type:'info', 
                layout:'bottomLeft', 
                text: '{{ Session::get('noty-info') }}', 
                timeout: 5000
            }).show(); 
        @endif

        @if(Session::has('noty-error')) new Noty({ 
                type:'error', 
                layout:'bottomLeft', 
                text: '{{ Session::get('noty-error') }}', 
                timeout: 5000
            }).show(); 
        @endif

        @if(Session::has('noty-warning')) new Noty({ 
                type:'warning', 
                layout:'bottomLeft', 
                text: '{{ Session::get('noty-warning') }}', 
                timeout: 5000
            }).show(); 
        @endif
    </script>
    
    <script type="text/javascript">
        $('#datatable1').DataTable({
            responsive: true,
            language: {
              searchPlaceholder: 'Search...',
              sSearch: '',
              lengthMenu: '_MENU_ items/page',
            },
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
    </script>

    <script type="text/javascript">
        function buttonEnable() {
            if (document.getElementById("inputtext").value === "" || !document.getElementById("inputtext").value.trim()) { 
                document.getElementById('button').disabled = true; 
            } else { 
                document.getElementById('button').disabled = false;
            }
        }

        function buttonEnableForEdit() {
            if (document.getElementById("category_edit").value === "" || !document.getElementById("category_edit").value.trim()) { 
                document.getElementById('editbutton').disabled = true; 
            } else { 
                document.getElementById('editbutton').disabled = false;
            }
        }

        function buttonEnableForDiscount() {
            if (document.getElementById("coupdis_edit").value === "" || !document.getElementById("coupdis_edit").value.trim()) { 
                document.getElementById('editbutton').disabled = true; 
            } else { 
                document.getElementById('editbutton').disabled = false;
            }
        }

        function buttonEnableForStatus() {
            if (document.getElementById("selected_status").value === "" || !document.getElementById("selected_status").value.trim()) { 
                document.getElementById('editbutton').disabled = true; 
            } else { 
                document.getElementById('editbutton').disabled = false;
            }
        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript">
        $(document).on('click', '#delete', function(e){
            e.preventDefault();

            var link = $(this),
                url  = link.attr("href"),
                cat  = link.attr("data-title"),
                csrf_token = $('meta[name="csrf-token"]').attr('content');
            
            Swal.fire({
              title: 'Are you sure?',
              text: `You won't be able to revert category » ${cat}`,
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
                        var loadUrl = "{{ route('category') }}";

                        Swal.fire(
                          'Deleted!',
                          'Category has been removed successfully !',
                          'success'
                        ).then(function() {
                            $('body').load(loadUrl);
                        });
                        
                    }
                });

              } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire(
                  'Cancelled',
                  'Category deletion has been dismissed.',
                  'error'
                )
              }
            })
        })
    </script>

    @yield('subcategory-scripts')
    
    @yield('category-scripts')

    @yield('menu-scripts')

    @yield('social-scripts')

    @yield('product-scripts')

    @yield('addproduct-scripts')

    @yield('addproductattr-scripts')

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.3.4/parsley.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script type="text/javascript">
        $('#summernote').summernote({
            height: 150
        });
        /*$(document).ready(function() {
          $('#summernote').summernote();
        });*/
    </script>

    <script>
        $('#parval').parsley();
    </script>

  </body>
</html>
