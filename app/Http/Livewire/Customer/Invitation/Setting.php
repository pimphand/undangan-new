<?php

namespace App\Http\Livewire\Customer\Invitation;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;

class Setting extends Component
{
    public $url;

    public function mount()
    {
        $this->url = Auth::user()->personal->subdomain;
    }

    public function render()
    {
        return view('livewire.customer.invitation.setting', [
            "item" => Auth::user()->setting->first(),
        ]);
    }

    public function save($f, $val)
    {
        sleep(1);
        Auth::user()->setting->update([
            $f => $val == true ? 0 : 1,
        ]);

        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Data berhasil disimpan",
        ]);
    }

    public function change()
    {
        try {
            $this->validate([
                'url' => 'required|unique:invites,subdomain,' . Auth::user()->personal->user_id,
            ]);
            Auth::user()->personal->update([
                "subdomain" => Str::slug($this->url),
            ]);

            $this->dispatchBrowserEvent('alert', [
                'type' => 'success',
                'message' => "Data berhasil disimpan",
            ]);
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('alert', [
                'type' => 'error',
                'message' => "Url sudah digunakan",

            ]);
        }
    }
}
