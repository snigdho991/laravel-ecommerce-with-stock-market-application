<script src="{{ asset('backend/lib/jquery/jquery.js') }}"></script>
<script src="{{ asset('backend/lib/popper.js/popper.js') }}"></script>
<script src="{{ asset('backend/lib/bootstrap/bootstrap.js') }}"></script>

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