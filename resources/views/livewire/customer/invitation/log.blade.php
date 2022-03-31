<div>
    <div class="row">
        <div class="col-xl-12">

            <div class="card">
                <div class="card-header">
                    <button wire:click="form('create')" type="button" class="btn btn-info btn-sm"
                        data-bs-toggle="modal">
                        <i class="fa fa-plus"></i>
                    </button>
                    <button wire:click="store" type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
                <div class="card-body">
                    <livewire:customer.invitation.chart :column-chart-model="$chart" />
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>
</div>

@push('js')
<script src="//unpkg.com/alpinejs" defer></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endpush