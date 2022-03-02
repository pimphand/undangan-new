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
                @foreach ($customers as $customer)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $customer->name }} </td>
                    <td>
                        @php
                        $image = substr($customer->image,0,5)
                        @endphp
                        @if ($customer->image == null)
                        <img src="https://ui-avatars.com/api/?name={{ substr($customer->name,0,1) }}&color=7F9CF5&background=EBF4FF"
                            alt="" class="rounded avatar-lg">
                        @else
                        @if ($image == 'https')
                        <img src="{{ $customer->image }}" alt="" class="rounded avatar-lg">
                        @else
                        <img src="{{ asset('storage/'. $customer->image) }}" alt="" class="rounded avatar-lg">
                        @endif
                        @endif

                    </td>
                    <td>{{ $customer->type }}</td>
                    <td>
                        <button wire:click="form('edit','{{ $customer->id }}')" type="button"
                            class="btn btn-warning btn-sm">
                            <i class="fa fa-edit"></i></button>
                        <button type="button" wire:click="$emit('triggerDelete',{{ $customer->id }})"
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