<div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ __("Data Cerita") }}</h4>
                </div>
                <div class="card-body p-4">

                    <div class="row justify-content-center">
                        <div class="col-lg-5 ">
                            <div>
                                <form wire:submit.prevent="save">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-email-input">Judul</label>
                                                <input type="text" wire:model.lazy='title' class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-password-input">Tanggal</label>
                                                <input type="date" wire:model.lazy='date' class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-firstname-input">Cerita</label>
                                            <textarea class="form-control" wire:model.lazy='content'></textarea>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-primary w-md">Simpan</button>
                                            @if ($ids != null)
                                            <button type="button" wire:click='resets()'
                                                class="btn btn-danger w-md">Reset</button>
                                            @endif
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">

        @forelse ($data as $item)
        <div class="col-lg-4">
            <div class="card border border-primary">
                <div class="card-header bg-transparent border-primary">
                    <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow me-3"></i>{{ $item->title }}</h5>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $item->date }}</h5>
                    <p class="card-text">
                        {{ $item->content }}
                    </p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success" wire:click='edit({{ $item->id }})'>
                        <i class="fa fa-edit"></i></button>
                    <button class="btn btn-danger" wire:click='delete({{ $item->id }})'>
                        <i class="fa fa-trash"></i></button>
                </div>
            </div>

        </div><!-- end col -->

        @empty
        <div class="col-lg-12 text-center">
            <h4>Belum mengisi cerita</h4>
        </div>
        @endforelse

    </div>
    <!-- end row -->
</div>