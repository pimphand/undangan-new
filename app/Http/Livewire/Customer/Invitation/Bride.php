<?php

namespace App\Http\Livewire\Customer\Invitation;

use Livewire\Component;
use Livewire\WithFileUploads;

class Bride extends Component
{
    use WithFileUploads;

    public $foto;
    public function render()
    {
        return view('livewire.customer.invitation.bride');
    }
}
