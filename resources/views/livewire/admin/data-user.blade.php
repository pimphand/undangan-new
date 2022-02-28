<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">User</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" wire:click="update">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <!-- Nav tabs -->
                <ul class="nav nav-pills nav-justified" role="tablist">
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link {{ $nav == 'admin'? " active" : "" }}" wire:click="tab('admin')">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Admin</span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link {{ $nav == 'personal'? " active" : "" }}" wire:click="tab('personal')"
                            role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Personal</span>
                        </a>
                    </li>
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link {{ $nav == 'organization'? " active" : "" }}"
                            wire:click="tab('organization')" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                            <span class="d-none d-sm-block">Organization</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    @if ($nav == 'admin')
                    <div class="tab-pane active" id="home-1" role="tabpanel">
                        @include('livewire.admin.user.admin')
                    </div>
                    @endif

                    @if ($nav == 'personal')
                    <div class="tab-pane" id="profile-1" role="tabpanel">
                        Personal
                    </div>
                    @endif
                    @if ($nav == 'organization')
                    <div class="tab-pane" id="messages-1" role="tabpanel">
                        Orabniization
                    </div>
                    @endif

                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

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
                            @if ($f == null)
                            <form wire:submit.prevent="save('create')">
                                @else
                                <form wire:submit.prevent="save('update','{{ $f }}')">
                                    @endif
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-firstname-input">Name</label>
                                        <input type="text" wire:model.lazy='name' class="form-control"
                                            id="formrow-firstname-input">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-email-input">Image</label>
                                                <input type="file" wire:model.lazy='image' class="form-control"
                                                    id="formrow-email-input">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-password-input">Type</label>
                                                <select name="" required wire:model.lazy='type' class="form-control"
                                                    id="">
                                                    <option value="">-=Select Type=-</option>
                                                    <option value="Premium">Premium</option>
                                                    <option value="Basic">Basic</option>
                                                    <option value="Free">Free</option>
                                                </select>
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
<script type="text/javascript">
    window.livewire.on('form', () => {
                $('#data').modal('show');
            });
    window.livewire.on('save', () => {
                $('#data').modal('hide');
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