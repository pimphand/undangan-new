<div>
    <form action="" wire:submit.prevent="save">

        <div class="row">

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class=" mb-2">{{ __("Data Foto") }} {{ $jumlah }}</h3>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            @if ($jumlah >= 6)
                            <div class="card-header text-center">
                                <h4 class=" mb-2">{{ __("Anda hanya dapat menggungah 6 foto") }}</h4>
                            </div>
                            @else
                            <div class="mb-3 mt-4">
                                <label class="form-label" for="formrow-firstname-input">{{ __("Foto") }}</label>
                                <input type="file" wire:model.defer='image' class="form-control">
                            </div>
                            @endif
                            <button class="btn btn-success mt-2">Simpan</button>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class=" mb-2">{{ __("Data Video") }}</h3>
                    </div>
                    <div class="card-body">

                        <div class="row">

                            <div class="mb-3 mt-4">
                                <label class="form-label" for="formrow-firstname-input">{{ __("Video Youtube")
                                    }}</label>
                                <input type="text" wire:model='youtube' class="mb-3 form-control"
                                    id="formrow-firstname-input">
                                <span class="card-1 text-center mt-3" data-bs-toggle="modal"
                                    data-bs-target="#youtube">{{
                                    __("Cara menambahkan Video Youtube!") }}</span>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            @foreach ($data as $album)
                            <div class="col-md-3 m-2" wire:click='show("{{ $album->id }}")'>
                                <img class="rounded me-2 card-1" alt="200x200" width="200"
                                    src="{{ asset('storage/'.$album->image) }}" data-holder-rendered="true">
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <div class="" style="height: 262px;width: 100%;display: inline-block;overflow: hidden">
                            {{-- {!!str_replace('width="600"','width="100%"',$map) !!} --}}
                            @if ($youtube != null)
                            <iframe width="100%" height="262px"
                                src="https://www.youtube.com/embed/{{ substr($youtube, 17) }}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            @else
                            @endif
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </form>

    <div class="modal fade" id="youtube" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Cara Menambahkan Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>{{ __("1. Pastikan video kamu sudah di upload di Youtube.com") }}</p>
                    <p>{{ ("2. Jika sudah kira-kira tampilannya seperti gambar di bawah ini, kemudian tekan tombol
                        Share") }}</p>
                    <img src="{{ asset('google_map/yt_1.png') }}" class="mb-3" width="800px" alt="">
                    <p>{{ __("3. Akan muncul tampilan seperti gambar di bawah ini, copy link nya dengan menekan tombol
                        salin") }}</p>
                    <img src="{{ asset('google_map/yt_2.png') }}" class="mb-3" width="800px" alt="">
                    <p>{{ __("4. Ingat!! pastikan link youtube nya formatnya sama seperti digambar https://youtu.be/ ")
                        }}</p>
                    <p>{{ __("5. Terakhir tinggal kamu masukkan linknya ke dalam form yang sudah disediakan kemudian
                        simpan") }}</p>
                    <img src="{{ asset('google_map/yt_3.png') }}" class="mb-3" width="800px" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Selesai</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <div wire:ignore.self class="modal fade" id="gambar" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Cara Menambahkan Google Maps</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <img src="{{ asset('storage/'. $tampilGambar) }}" alt="">
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" wire:click='delete()' data-bs-dismiss="modal">{{
                        __("Hapus Foto")
                        }}</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Selesai</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>

@push('js')
<script type="text/javascript">
    window.livewire.on('view', () => {
                    $('#gambar').modal('show');
                });
        window.livewire.on('delete', () => {
                    $('#gambar').modal('hide');
                });
</script>
@endpush