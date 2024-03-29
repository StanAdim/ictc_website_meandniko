<div class="row" style="margin-top: 20px">
    <div class="col-md-12" style="padding: 0 20px">
        @if (Session::has('success'))
            <div class="alert alert-success">
                <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
                <b>Well done!</b> {{ Session::get('success') }}
            </div>
        @endif

        @if (Session::has('failed'))
            <div class="alert alert-danger">
                <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
                <b>Something Wrong!</b> {{ Session::get('failed') }}
            </div>
        @endif
    </div>
</div>
