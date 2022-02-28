<div class="card-body">
    <button wire:click="form('tambah')" type="button" class="btn btn-info btn-sm" data-bs-toggle="modal">
        <i class="fa fa-plus"></i>
    </button>
    <div class="table-responsive">
        <table class="table align-middle mb-0">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->image }}</td>
                    <td>{{ $item->type }}</td>
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