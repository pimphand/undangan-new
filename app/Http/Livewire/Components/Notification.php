<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Notification extends Component
{
    public $count, $data;

    protected $listeners = [
        'storeWedding' => 'handleNotification',
    ];
    public function mount()
    {
        $this->count = auth()->user()->invitations->count();
        $this->data = auth()->user()->invitations;
    }
    public function render()
    {
        return view('livewire.components.notification', []);
    }

    public function handleNotification()
    {
        $this->count = auth()->user()->invitations->count();
        $this->data = auth()->user()->invitations;
    }
}
