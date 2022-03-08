<div>
    <div class="row">
        <div class="col-xl-4">
            <div class="card text-center">
                <div class="card-header">
                    <h4 class="card-title">
                        Premium
                    </h4>
                </div>
                <div class="card-body">

                    <img class="rounded me-2" alt="200x200" width="400"
                        src="{{ asset('admin/assets') }}/images/small/img-4.jpg" data-holder-rendered="true" />
                </div>
                <div class="card-header">
                    @if (auth()->user()->role == 0)
                    <button class="btn btn-info"><i class="fas fa-image"></i></button>
                    <button class="btn btn-success"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    @else
                    <button class="btn btn-success"><i class="fas fa-check-circle"></i> Pilih</button>
                    <button class="btn btn-warning"><i class="fas fa-check-circle"></i> Aktif</button>
                    <button class="btn btn-info"><i class="fas fa-image"></i> Demo</button>
                    @endif
                </div><!-- end card header -->
            </div><!-- end col -->
        </div>
    </div>
</div>