<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Notification extends Component
{
    public $count = 0, $data;

    protected $listeners = [
        'storeWedding' => 'handleNotification',
    ];
    public function mount()
    {
        $this->count = auth()->user()->personal->count();
        $this->data = auth()->user()->organizer;
    }
    public function render()
    {
        return view('livewire.components.notification', []);
    }

    public function handleNotification()
    {
        $this->count = auth()->user()->personal->count();
        $this->data = auth()->user()->organizer;
    }
}
