<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Notification extends Component
{
    public $count;
    public function render()
    {
        return view('livewire.components.notification', []);
    }
}
