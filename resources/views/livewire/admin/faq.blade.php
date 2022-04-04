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
                    <button wire:click="$emit('form')" type="button" class="btn btn-info btn-sm" data-bs-toggle="modal">
                        <i class="fa fa-plus"></i>
                    </button>
                    @if ($trash == false)
                    <button wire:click="trash('open')" type="button" class="btn btn-warning btn-sm">
                        <i class="fa fa-trash"></i>
                    </button>
                    @else
                    <button wire:click="trash('close')" type="button" class="btn btn-success btn-sm">
                        <i class="fa fa-list"></i>
                    </button>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @if ($trash != null)
                            <tbody>
                                @foreach ($trashs as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->question }}</td>
                                    <td>{{ $item->answer }}</td>
                                    <td>
                                        <button type="button" wire:click="$emit('restore',{{ $item->id }})"
                                            class="btn btn-success btn-sm">
                                            <div class="fa fa-check-square"></div>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            @else
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->question }}</td>
                                    <td>{{ $item->answer }}</td>
                                    <td>
                                        <button wire:click="edit({{ $item }})" type="button"
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
                            @endif
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

                            <form wire:submit.prevent="{{ $f != null ? 'update' : 'save' }}">

                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Question</label>
                                    <input type="text" wire:model.lazy='question' class="form-control"
                                        id="formrow-firstname-input">
                                    @error('question')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="formrow-password-input">Answer</label>
                                    <textarea class="form-control" wire:model.lazy='answer'></textarea>
                                    @error('answer')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
    document.addEventListener('DOMContentLoaded', function () {
        @this.on('restore', contactId => {
            Swal.fire({
                title: 'Are You Sure?',
                text: 'Faq will be restored!',
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#aaa',
                confirmButtonText: 'Restore!'
            }).then((result) => {
         //if user clicks on delete
                if (result.value) {
             // calling destroy method to delete
                    @this.call('restore',contactId)
             // success response
                    Swal.fire({title: 'FAQ restored successfully!', icon: 'success'});
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