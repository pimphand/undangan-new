<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Dashboard extends Component
{

    public function update()
    {
        dd("adf");
    }
    public function render()
    {
        return view('livewire.admin.dashboard')->layout('layouts.app');
    }
}
