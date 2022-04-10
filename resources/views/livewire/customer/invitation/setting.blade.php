<div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Setting</h4>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="change" enctype="multipart/form-data">
                        <div class=" row">
                            <div class="col-4">
                                <div class="input-group">
                                    <div class="input-group-text">apk-demo.my.id/</div>
                                    <input type="text" class="form-control" wire:model='url'>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="input-group">
                                    <div class="input-group-text mr-1">Musik</div>
                                    <input type="file" class="form-control" wire:model='music'>
                                </div>
                                <span class="text-sm text-danger">Musik Maximal 2mb</span>
                            </div>

                            <div class="col-2">
                                <button class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive mt-4">
                        <table class="table mb-0">

                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <th scope="row">1</th>
                                    <th scope="row"> Mempelai</th>
                                    <th scope="row">
                                        <button type="checkbox" data-toggle="toggle"
                                            class="btn btn-{{ $item->bride == true ? 'success' : 'danger' }}"
                                            wire:click='save("bride", {{ $item->bride }})'>
                                            {{ $item->bride == true ?'aktif' : 'tidak aktif' }}
                                        </button>
                                    </th>
                                </tr>

                                <tr>
                                    <th scope="row">2</th>
                                    <th scope="row"> Gallery</th>
                                    <th scope="row">
                                        <button type="checkbox" data-toggle="toggle"
                                            class="btn btn-{{ $item->gallery == true ? 'success' : 'danger' }}"
                                            wire:click='save("gallery", {{ $item->gallery }})'>
                                            {{ $item->gallery ==true ? 'aktif' : 'tidak aktif' }}
                                        </button>
                                    </th>
                                </tr>

                                <tr>
                                    <th scope="row">3</th>
                                    <th scope="row"> Acara</th>
                                    <th scope="row">
                                        <button type="checkbox" data-toggle="toggle"
                                            class="btn btn-{{ $item->event == true ? 'success' : 'danger' }}"
                                            wire:click='save("event", {{ $item->event }})'>
                                            {{ $item->event == true ?'aktif' : 'tidak aktif' }}
                                        </button>
                                    </th>
                                </tr>

                                <tr>
                                    <th scope="row">4</th>
                                    <th scope="row"> Google Map</th>
                                    <th scope="row">
                                        <button type="checkbox" data-toggle="toggle"
                                            class="btn btn-{{ $item->map == true ? 'success' : 'danger' }}"
                                            wire:click='save("map", {{ $item->map }})'>
                                            {{ $item->map == true ?'aktif' : 'tidak aktif' }}
                                        </button>
                                    </th>
                                </tr>

                                <tr>
                                    <th scope="row">5</th>
                                    <th scope="row"> Love Story</th>
                                    <th scope="row">
                                        <button type="checkbox" data-toggle="toggle"
                                            class="btn btn-{{ $item->love_story == true ? 'success' : 'danger' }}"
                                            wire:click='save("love_story", {{ $item->love_story }})'>
                                            {{$item->love_story == true ? 'aktif' : 'tidak aktif' }}
                                        </button>
                                    </th>
                                </tr>

                                <tr>
                                    <th scope="row">6</th>
                                    <th scope="row"> Video</th>
                                    <th scope="row">
                                        <button type="checkbox" data-toggle="toggle"
                                            class="btn btn-{{ $item->video == true ? 'success' : 'danger' }}"
                                            wire:click='save("video", {{ $item->video }})'>
                                            {{ $item->video == true ?'aktif' : 'tidak aktif' }}
                                        </button>
                                    </th>
                                </tr>

                                <tr>
                                    <th scope="row">7</th>
                                    <th scope="row"> Buku Tamu</th>
                                    <th scope="row">
                                        <button type="checkbox" data-toggle="toggle"
                                            class="btn btn-{{ $item->guest_book == true ? 'success' : 'danger' }}"
                                            wire:click='save("guest_book", {{ $item->guest_book }})'>
                                            {{$item->guest_book == true ? 'aktif' : 'tidak aktif' }}
                                        </button>
                                    </th>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>
</div>