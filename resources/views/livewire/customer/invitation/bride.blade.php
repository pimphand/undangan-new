<div>
    <div class="row">

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header text-center">
                    <h3 class=" mb-2">{{ __("Mempelai Pria") }}</h3>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-5">
                            <div class="">
                                <div class="col-md-6 mr-4">

                                    @if ($photo)
                                    <img src="{{ $photo->temporaryUrl() }}">
                                    @else
                                    <img class="rounded me-2" alt="200x200" width="200"
                                        src="https://cdn1.iconfinder.com/data/icons/finance-1-3/128/4-512.png"
                                        data-holder-rendered="true">
                                    @endif

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 ms-auto">
                            {{-- Image --}}
                            <br>
                            <br>
                            <br>
                            <div class="mb-3">
                                <label class="form-label" for="formrow-firstname-input">Upload Foto</label>
                                <input type="file" class="form-control" id="formrow-firstname-input">
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="mb-3 mt-4">
                            <label class="form-label" for="formrow-firstname-input">Nama Lengkap</label>
                            <input type="text" class="form-control" id="formrow-firstname-input">
                        </div>
                        <div class="mb-3 ">
                            <label class="form-label" for="formrow-firstname-input">Nama Panggilan</label>
                            <input type="text" class="form-control" id="formrow-firstname-input">
                        </div>
                        <div class="mb-3 ">
                            <label class="form-label" for="formrow-firstname-input">Nama Ayah</label>
                            <input type="text" class="form-control" id="formrow-firstname-input">
                        </div>
                        <div class="mb-3 ">
                            <label class="form-label" for="formrow-firstname-input">Nama Ibu</label>
                            <input type="text" class="form-control" id="formrow-firstname-input">
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header text-center">
                    <h3 class=" mb-2">{{ __("Mempelai Wanita") }}</h3>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-5">
                            <div class="">
                                <div class="col-md-6 mr-4">
                                    <img class="rounded me-2" alt="200x200" width="200"
                                        src="https://propami.com/assets/corals/images/avatars/avatar_9.png"
                                        data-holder-rendered="true">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 ms-auto">
                            {{-- Image --}}
                            <br>
                            <br>
                            <br>
                            <div class="mb-3">
                                <label class="form-label" for="formrow-firstname-input">Upload Foto</label>
                                <input type="file" class="form-control" id="formrow-firstname-input">
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="mb-3 mt-4">
                            <label class="form-label" for="formrow-firstname-input">Nama Lengkap</label>
                            <input type="text" class="form-control" id="formrow-firstname-input">
                        </div>
                        <div class="mb-3 ">
                            <label class="form-label" for="formrow-firstname-input">Nama Panggilan</label>
                            <input type="text" class="form-control" id="formrow-firstname-input">
                        </div>
                        <div class="mb-3 ">
                            <label class="form-label" for="formrow-firstname-input">Nama Ayah</label>
                            <input type="text" class="form-control" id="formrow-firstname-input">
                        </div>
                        <div class="mb-3 ">
                            <label class="form-label" for="formrow-firstname-input">Nama Ibu</label>
                            <input type="text" class="form-control" id="formrow-firstname-input">
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-12">
                <button class="btn btn-success">{{ __("Simpan") }}</button>
            </div>
        </div>

    </div>

</div>