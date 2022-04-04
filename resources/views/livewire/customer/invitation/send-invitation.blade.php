<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Kirim Undangan</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" wire:click="update">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Kirim Undangan</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <button wire:click="form" type="button" class="btn btn-info btn-sm" data-bs-toggle="modal">
                        <i class="fa fa-plus"></i>
                    </button>
                    {{-- <button wire:click="$emit('import')" type="button" class="btn btn-success btn-sm"
                        data-bs-toggle="modal">
                        <i class="fa fa-file-excel"></i> Import Excel
                    </button> --}}
                    {{-- <button wire:click="export" type="button" class="btn btn-warning btn-sm"
                        data-bs-toggle="modal">
                        <i class="fa fa-file-excel"></i>
                    </button> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Nomor WA</th>
                                    <th>Alamat Undangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>
                                        <div>
                                            <input type="text" class="form-control" id="copy_{{ $item->id }}"
                                                value="{{ $item->url }}?nama={{ str_replace(" ", " -",$item->name) }}">
                                            <button value="copy"
                                                onclick="copyToClipboard('copy_{{ $item->id }}')">Copy!</button>
                                        </div>
                                    </td>
                                    <td>
                                        @php
                                        $id = $item->id;
                                        @endphp
                                        {{-- <button wire:click="form('edit','{{ encrypt($id) }}')" type="button"
                                            class="btn btn-warning btn-sm"> --}}
                                            <button wire:click="update('{{ encrypt($id) }}')" type="button"
                                                class="btn btn-warning btn-sm">
                                                <i class="fa fa-edit"></i></button>
                                            <button type="button"
                                                wire:click="$emit('triggerDelete','{{ encrypt($id) }}')"
                                                class="btn btn-danger btn-sm">
                                                <div class="fa fa-trash"></div>
                                            </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="data" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <form wire:submit.prevent="save('create')">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-firstname-input">Name</label>
                                            <input type="text" wire:model.lazy='name' class="form-control"
                                                id="formrow-firstname-input">
                                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-email-input">Nomor WA</label>
                                            <input type="text" wire:model.lazy='phone' class="form-control"
                                                id="formrow-email-input">
                                            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="import" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Import Kontak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <form action="{{ route('customer.contact.export') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-firstname-input">File</label>
                                            <input type="file" name="file" class="form-control"
                                                id="formrow-firstname-input">
                                            @error(' excel') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

@push('js')
<script>
    function copyToClipboard(id) {
        document.getElementById(id).select();
        document.execCommand('copy');
    }
</script>
<script type="text/javascript">
    window.livewire.on('form', () => {
                $('#data').modal('show');
            });
    window.livewire.on('save', () => {
                $('#data').modal('hide');
            });
    window.livewire.on('import', () => {
                $('#import').modal('show');
            });
</script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        @this.on('triggerDelete', contactId => {
            Swal.fire({
                title: 'Are You Sure?',
                text: 'Invitation record will be deleted!',
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#aaa',
                confirmButtonText: 'Delete!'
            }).then((result) => {
         //if user clicks on delete
                if (result.value) {
             // calling destroy method to delete
                    @this.call('destroy',contactId)
             // success response
                    Swal.fire({title: message, icon: type});
                } else {
                    Swal.fire({
                        title: 'Operation Cancelled!',
                        icon: 'success'
                    });
                }
            });
        });
    })

     document.addEventListener('DOMContentLoaded', function () {
        @this.on('update', contactId => {
            Swal.fire({
                title: 'Are You Sure?',
                text: 'Invitation record will be deleted!',
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#aaa',
                confirmButtonText: 'Delete!'
            }).then((result) => {
         //if user clicks on delete
                if (result.value) {
             // calling destroy method to delete
                    @this.call('destroy',contactId)
             // success response
                    Swal.fire({title: message, icon: type});
                } else {
                    Swal.fire({
                        title: 'Operation Cancelled!',
                        icon: 'success'
                    });
                }
            });
        });
    })
</script>
@endpush