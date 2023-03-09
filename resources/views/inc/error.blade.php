{{--
<!-- @if($errors->any()) @foreach($errors->all() as $e)
<div class="alert alert-sm alert-danger">{{ $e }}</div>
@endforeach @endif @if(session()->has('success'))

<div class="alert alert-sm alert-success">{{ session()->get('success') }}</div>

@endif @if(session()->has('delete'))

<div class="alert alert-sm alert-danger">{{ session()->get('delete') }}</div>

@endif --> --}}
<script>
    @if(Session::has('success'))
    toastr.options =
    {
    	"closeButton" : true,
    	"progressBar" : true
    }
    		toastr.success("{{ session('success') }}");
    @endif

    @if(Session::has('error'))
    toastr.options =
    {
    	"closeButton" : true,
    	"progressBar" : true
    }
    		toastr.error("{{ session('error') }}");
    @endif

    @if(Session::has('info'))
    toastr.options =
    {
    	"closeButton" : true,
    	"progressBar" : true
    }
    		toastr.info("{{ session('info') }}");
    @endif

    @if(Session::has('warning'))
    toastr.options =
    {
    	"closeButton" : true,
    	"progressBar" : true
    }
    		toastr.warning("{{ session('warning') }}");
    @endif
</script>