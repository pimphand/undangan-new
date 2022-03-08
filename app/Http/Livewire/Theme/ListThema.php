<?php

namespace App\Http\Livewire\Theme;

use App\Models\Theme;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ListThema extends Component
{
    public function render()
    {
        $data = Theme::all();
        $data->map(function ($item) {
            if ($item->type == "Premium") {
                $item->class = "primary";
            } elseif ($item->type == "Free") {
                $item->class = "warning";
            } elseif ($item->type == "Basic") {
                $item->class = "info";
            } else {
                $item->class = "secondary";
            }
            $item->image = Storage::url($item->image);

            return $item;
        });
        return view('livewire.theme.list-thema', [
            'data' => $data,
        ]);
    }
}
