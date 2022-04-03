<div>
    <form action="" wire:submit.prevent="save">

        <div class="row">

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class=" mb-2">{{ __("Data Akad") }}</h3>
                    </div>
                    <div class="card-body">

                        <div class="row">

                            <div class="mb-3 mt-4">
                                <label class="form-label" for="formrow-firstname-input">{{ __("Tanggal Akad") }}</label>
                                <input type="date" wire:model.defer='akad_date' class="form-control">
                            </div>
                            <div class="mb-3 ">
                                <label class="form-label" for="formrow-firstname-input">{{ __("Waktu Akad") }}</label>
                                <x-datepicker wire:model.defer="akad_time" id="appointmentTime" :error="'time'" />
                                <span class="blockquote-footer mt-3">AM = Pagi , PM = Malam</span>
                                </span>
                            </div>
                            <div class="mb-3 ">
                                <label class="form-label" for="formrow-firstname-input">{{ __("Tempat Akad") }}</label>
                                <input type="text" wire:model.defer='akad_place' class="form-control"
                                    placeholder="Contoh : Kediaman Mempelai Wanita " id="formrow-firstname-input">
                            </div>
                            <div class="mb-3 ">
                                <label class="form-label" for="formrow-firstname-input">{{ __("Alamat Akad") }}</label>
                                <input type="text" wire:model.defer='akad_address' class="form-control"
                                    id="formrow-firstname-input">
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class=" mb-2">{{ __("Data Resepsi") }}</h3>
                    </div>
                    <div class="card-body">

                        <div class="row">

                            <div class="mb-3 mt-4">
                                <label class="form-label" for="formrow-firstname-input">{{ __("Tanggal Resepsi")
                                    }}</label>
                                <input type="date" wire:model.defer='resepsi_date' class="form-control"
                                    id="formrow-firstname-input">
                            </div>
                            <div class="mb-3 ">
                                <label class="form-label" for="formrow-firstname-input">{{ __("Waktu Resepsi")
                                    }}</label>
                                <x-resepsi wire:model.defer="resepsi_time" id="resepsi" :error="'time'" />
                                <span class="blockquote-footer mt-3">AM = Pagi , PM = Malam</span>
                                </span>
                            </div>
                            <div class="mb-3 ">
                                <label class="form-label" for="formrow-firstname-input">{{ __("Tempat Resepsi")
                                    }}</label>
                                <input type="text" wire:model.defer='resepsi_place' class="form-control"
                                    placeholder="Contoh : Kediaman Mempelai Wanita " id="formrow-firstname-input">
                            </div>
                            <div class="mb-3 ">
                                <label class="form-label" for="formrow-firstname-input">{{ __("Alamat Resepsi")
                                    }}</label>
                                <input type="text" wire:model.defer='resepsi_address' class="form-control"
                                    id="formrow-firstname-input">
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <div class="row">

                            <div class="mb-3 ">
                                <label class="form-label" for="formrow-firstname-input">{{ __("Google Map")
                                    }}</label>
                                <textarea style="height: 142px;" wire:model='map' class="form-control mb-4"></textarea>
                                <span class="card-1 mb-3 text-center" data-bs-toggle="modal" data-bs-target="#map">Cara
                                    menambahkan Google Maps!</span>
                            </div>
                            <button type="submit" class="btn btn-success">{{ __("Simpan") }}</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="" style="height: 262px;width: 100%;display: inline-block;overflow: hidden">
                            {!!str_replace('width="600"','width="100%"',$map) !!}
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </form>

    <div class="modal fade" id="map" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Cara Menambahkan Google Maps</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>1. Buka <a href="https://www.google.com/maps" target="_blank">www.google.com/maps</a> tentukan
                        dan cari
                        lokasi pernikahan
                        kamu</p>
                    <p>2. Jika sudah kira-kira tampilannya seperti gambar di bawah ini, kemudian tekan tombol Share</p>
                    <img src="{{ asset('google_map/google_map_1.png') }}" class="mb-3" width="800px" alt="">
                    <p>3. Akan muncul tampilan seperti gambar di bawah ini, pilih Embed Maps</p>
                    <img src="{{ asset('google_map/google_map_2.png') }}" class="mb-3" width="800px" alt="">
                    <p>4. Lalu akan tampil seperti gambar di bawah ini dan klik Copy HTML</p>
                    <img src="{{ asset('google_map/google_map_3.png') }}" class="mb-3" width="800px" alt="">
                    <p>5. Terakhir tinggal kamu masukkan linknya ke dalam form yang sudah disediakan kemudian simpan</p>
                    <img src="{{ asset('google_map/form_tutorial.png') }}" class="mb-3" width="800px" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Selesai</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>

@push('css')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
<link rel="stylesheet"
    href="https://raw.githubusercontent.com/clovon/Multipurpose-Laravel-and-Livewire-Application/main/public/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
@endpush
@push('js')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
<script>
    var picker = new Pikaday({
    field: document.getElementById('datepicker'),
    format: 'M/D/YYYY',
    toString(date, format) {
        // you should do formatting based on the passed format,
        // but we will just return 'D/M/YYYY' for simplicity
        const day = date.getDate();
        const month = date.getMonth() + 1;
        const year = date.getFullYear();
        return `${day}/${month}/${year}`;
    },
    parse(dateString, format) {
        // dateString is the result of `toString` method
        const parts = dateString.split('/');
        const day = parseInt(parts[0], 10);
        const month = parseInt(parts[1], 10) - 1;
        const year = parseInt(parts[2], 10);
        return new Date(year, month, day);
    }
});
    var picker = new Pikaday({
    field: document.getElementById('datepickers'),
    format: 'M/D/YYYY',
    toString(date, format) {
        // you should do formatting based on the passed format,
        // but we will just return 'D/M/YYYY' for simplicity
        const day = date.getDate();
        const month = date.getMonth() + 1;
        const year = date.getFullYear();
        return `${day}/${month}/${year}`;
    },
    parse(dateString, format) {
        // dateString is the result of `toString` method
        const parts = dateString.split('/');
        const day = parseInt(parts[0], 10);
        const month = parseInt(parts[1], 10) - 1;
        const year = parseInt(parts[2], 10);
        return new Date(year, month, day);
    }
});

</script>
@endpush