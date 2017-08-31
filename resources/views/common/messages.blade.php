@if (Session::has('message'))
    <div class="alert alert-info alert-dismissible" role="alert" style="margin-top: 20px">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="fa fa-btn fa-close"></i></span>
        </button>
        {{ Session::get('message') }}
    </div>
@endif