<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Dasshboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">

                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">My Wallet</span>
                            <h4 class="mb-3">
                                $<span class="counter-value" data-target="865.2">0</span>k
                            </h4>
                        </div>

                        <div class="col-6">
                            <div id="mini-chart1" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                        </div>
                    </div>
                    <div class="text-nowrap">
                        <span class="badge bg-soft-success text-success">+$20.9k</span>
                        <span class="ms-1 text-muted font-size-13">Since last week</span>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end col -->

</div>

@push('css')
<link href="{{ asset('admin/assets') }}/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"
    rel="stylesheet" type="text/css" />
@endpush

@push('js')
<script src="{{ asset('admin/assets') }}/libs/apexcharts/apexcharts.min.js"></script>
<script src="{{ asset('admin/assets') }}/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{ asset('admin/assets') }}/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js">
</script>

<!-- dashboard init -->
<script src="{{ asset('admin/assets') }}/js/pages/dashboard.init.js"></script>
@endpush