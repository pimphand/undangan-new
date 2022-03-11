<div>

    <div class="col">

        @forelse ($data as $item)
        <div class="col-xl-4">
            <div class="card text-center">
                <div class="card-header">
                    <h3>
                        <span class="badge bg-{{ $item->class }}">
                            {{ $item->type }}
                        </span>
                    </h3>
                </div>
                <div class="card-body">

                    <img class="rounded me-2" alt="{{ $item->name }}" width="400" src="{{ asset($item->image) }}"
                        data-holder-rendered="true" />
                </div>
                <h4>
                    <span class="badge bg-{{ $item->class }}">
                        {{ $item->name }}
                    </span>
                </h4>
                <div class="card-header">
                    @if (auth()->user()->role == 0)
                    <button class="btn btn-info"><i class="fas fa-image"></i></button>
                    <button class="btn btn-success"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    @else
                    <button class="btn btn-success"><i class="fas fa-check-circle"></i> Pilih</button>
                    <button class="btn btn-warning"><i class="fas fa-check-circle"></i> Aktif</button>
                    <a href="{{ route('demo', $item->slug) }}" target="_blank" class="btn btn-info"><i
                            class="fas fa-image"></i>
                        Demo</a>
                    @endif
                </div><!-- end card header -->
            </div><!-- end col -->
        </div>
        @empty
        <div class="col-xl-12">
            <div class="card text-center">
                <h4>Tidak ada data</h4>
            </div><!-- end col -->
        </div>
        @endforelse
    </div>

</div>