<div>
    <form action="">
        <button class="btn text-white btn-info btn-sm" wire:click.prevent="add({{$i}})">Add</button>
        @foreach($inputs as $key => $value)
        <div class="form-group">
            <input type="date" class="form-control" placeholder="Enter Name" wire:model="date.{{ $value }}">
            @error('date.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter Name" wire:model="title.{{ $value }}">
            @error('date.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter Name" wire:model="content.{{ $value }}">
            @error('date.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
        </div>
        <br>
        <button class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">remove</button>
        @endforeach
        <button type="submit" wire:click.prevent="save()">Kirim</button>
    </form>

</div>