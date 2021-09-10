@if(Session::has('success_message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="mdi mdi-check-all mr-2"></i>
    {{session('success_message')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>

@endif
@if(Session::has('error_message'))
<div class="col-12 mb-30 mt-4 alert alert-danger alert-dismissible " role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>

    <ul>
        <i class="zmdi zmdi-alert-polygon">{{session('error_message')}}</i>
    </ul>

</div>
@endif