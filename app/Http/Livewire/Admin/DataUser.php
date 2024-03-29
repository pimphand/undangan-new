<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class DataUser extends Component
{
    use WithFileUploads, WithPagination;
    public $name, $slug, $image, $type, $status, $title, $f;

    public $nav = 'admin';
    public function render()
    {
        return view('livewire.admin.data-user', [
            "data" => User::where('role', 0)->get(),
            "customers" => User::where('role', 1)->get(),
        ]);
    }

    protected $rules = [
        'name' => 'required|string|max:255',
        'type' => 'required|in:Premium,Free,Basic',
    ];

    public function form($add, $id = null)
    {
        if ($add == "tambah") {
            $this->title = "Thema Create";
            $this->emit('form');
            $this->resets();
        } elseif ($add == "edit" && $id != null) {
            $this->title = "Thema Edit";
            $data = User::find($id);
            $this->name = $data->name;
            $this->type = $data->type;
            $this->f = $data->id;

            $this->emit('form');
        } elseif ($add == "delete" && $id != null) {
        } else {
            $this->dispatchBrowserEvent('alert', [
                'type' => 'warning',
                'message' => "Kamingsun",
            ]);
        }
    }

    public function save($s, $id = null)
    {
        if ($s == "create") {
            try {
                $this->create();
            } catch (\Exception $e) {
                $this->dispatchBrowserEvent('alert', [
                    'type' => 'error',
                    'message' => $e->getMessage(),
                ]);
            }
        } elseif ($s == "update" && $id != null) {
            try {
                $this->update($id);
            } catch (\Exception $e) {
                $this->dispatchBrowserEvent('alert', [
                    'type' => 'error',
                    'message' => $e->getMessage(),
                ]);
            }
        } else {
            $this->dispatchBrowserEvent('alert', [
                'type' => 'error',
                'message' => "Thema has been failed",
            ]);
            $this->resets();
        }
    }


    public function resets()
    {
        $this->name = null;
        $this->slug = null;
        $this->image = null;
        $this->type = null;
        $this->status = null;
        $this->f = null;
    }

    public function create()
    {
        $this->validate($this->rules);
        User::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'image' => $this->image->store('themes', 'public'),
            'type' => $this->type,
            'status' => true,
        ]);
        $this->emit('save');
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Thema has been created",
        ]);
        $this->resets();
    }

    public function update($id)
    {
        $this->validate($this->rules);
        $theme = User::findOrFail($id);
        if ($this->image == null) {
            $image = $theme->image;
        } else {
            Storage::delete('public/' . $theme->image);
            $image = $this->image->store('themes', 'public');
        }
        $theme->update([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'image' => $image,
            'type' => $this->type,
            'status' => true,
        ]);
        $this->emit('save');
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Thema has been updated",
        ]);
        $this->resets();
    }

    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => 'Are you sure?',
            'text' => '',
            'id' => $id,
        ]);
    }

    public function destroy($id)
    {
        User::destroy($id);
    }

    public function tab($id)
    {
        $this->nav = $id;
    }
}
