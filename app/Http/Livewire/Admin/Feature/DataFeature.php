<?php

namespace App\Http\Livewire\Admin\Feature;

use App\Http\Controllers\LogController;
use App\Models\Feature;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class DataFeature extends Component
{
    use WithFileUploads, WithPagination;
    public $name, $icon, $showImage, $image, $description, $title, $f;

    public function render()
    {
        return view('livewire.admin.feature.data-feature', [
            "data" => Feature::all(),
        ]);
    }

    protected $rules = [
        'name' => 'required|string|max:255',
    ];

    public function form($add, $id = null)
    {
        if ($add == "tambah") {
            $this->title = "Thema Create";
            $this->emit('form');
            $this->resets();
        } elseif ($add == "edit" && $id != null) {
            $this->title = "Thema Edit";
            $data = Feature::find($id);
            $this->name = $data->name;
            $this->description = $data->description;
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

    public function save()
    {
        if ($this->f == null) {
            try {
                $this->create();
            } catch (\Exception $e) {
                $this->dispatchBrowserEvent('alert', [
                    'type' => 'error',
                    'message' => $e->getMessage(),
                ]);
            }
        } elseif ($this->f != null) {
            try {
                $this->update($this->f);
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
        $this->icon = null;
        $this->description = null;
        $this->f = null;
    }

    public function create()
    {
        $this->validate($this->rules);
        Feature::create([
            'name' => $this->name,
            'icon' => $this->image->store('features', 'public'),
            'description' => $this->description,
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
        $Feature = Feature::findOrFail($id);
        if ($this->image == null) {
            $image = $Feature->icon;
        } else {
            Storage::delete('public/' . $Feature->icon);
            $image = $this->image->store('features', 'public');
        }
        $Feature->update([
            'name' => $this->name,
            'icon' => $image,
            'description' => $this->description,
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
        Feature::destroy($id);
    }

    public function show($image, $title)
    {
        // dd($item);
        $this->emit('showimage');
        $this->showImage = $image;
        $this->title = $title;
    }
}
