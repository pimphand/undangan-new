<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Feature</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" wire:click="update">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Thema</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">

            <div class="card">
                <div class="card-header">
                    <button wire:click="form('tambah')" type="button" class="btn btn-info btn-sm"
                        data-bs-toggle="modal">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <img src="{{ $item->icon }}"
                                            wire:click="show('{{ $item->image }}','{{ $item->name }}')" width="100"
                                            alt="">
                                    </td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <button wire:click="form('edit','{{ $item->id }}')" type="button"
                                            class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit"></i></button>
                                        <button type="button" wire:click="$emit('triggerDelete',{{ $item->id }})"
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

                            <form wire:submit.prevent="save">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-firstname-input">Name</label>
                                            <input type="text" wire:model.lazy='name' class="form-control"
                                                id="formrow-firstname-input">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-email-input">Icon</label>
                                            <input type="file" wire:model.lazy='image' class="form-control"
                                                id="formrow-email-input">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-password-input">Description</label>
                                    <textarea class="form-control" wire:model.lazy='description'></textarea>
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

    <div wire:ignore.self class="modal fade" id="showimage" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ $item->icon }}" width="700" alt="">
                </div>
            </div>
        </div>
    </div>
</div>



@push('js')
<script type="text/javascript">
    window.livewire.on('form', () => {
                $('#data').modal('show');
            });
    window.livewire.on('save', () => {
                $('#data').modal('hide');
            });
    window.livewire.on('showimage', () => {
                $('#showimage').modal('show');
            });
</script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        @this.on('triggerDelete', contactId => {
            Swal.fire({
                title: 'Are You Sure?',
                text: 'Theme record will be deleted!',
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
                    Swal.fire({title: 'Theme deleted successfully!', icon: 'success'});
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