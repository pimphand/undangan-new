<?php

namespace App\Http\Livewire\Customer\Invitation;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Setting extends Component
{
    use WithFileUploads;
    public $url, $music;

    public function mount()
    {
        $this->url = Auth::user()->personal->subdomain;
    }

    public function render()
    {
        return view('livewire.customer.invitation.setting', [
            "item" => Auth::user()->setting->first(),
            "playMusic" => Auth::user()->personal->first()->music
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
                'url' => 'required|unique:invites,subdomain,' . Auth::user()->personal->id,
                'music' => 'nullable|mimes:mp3,wav|max:2048',
            ]);

            // if ($this->music != null) {
            // } else {

            // }
            Auth::user()->personal->update([
                "subdomain" => Str::slug($this->url),
                "music" => $this->music != null ?  $this->music->store('music/', 'public') : $music = Auth::user()->personal->first()->music

            ]);

            $this->dispatchBrowserEvent('alert', [
                'type' => 'success',
                'message' => "Data berhasil disimpan",
            ]);
        } catch (\Throwable $e) {
            $this->dispatchBrowserEvent('alert', [
                'type' => 'error',
                'message' => $e->getMessage(),
            ]);
        }
    }
}
