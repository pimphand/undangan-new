<?php

namespace App\Http\Livewire\Customer\Invitation;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Event extends Component
{
    public $akad_date, $akad_time, $akad_place, $akad_address, $resepsi_date, $resepsi_time, $resepsi_place, $resepsi_address, $map;

    public function mount()
    {
        $data = Auth::user()->personal->event;
        $this->akad_date = $data->akad_date;
        $this->akad_time = $data->akad_time;
        $this->akad_place = $data->akad_place;
        $this->akad_address = $data->akad_address;
        $this->resepsi_date = $data->resepsi_date;
        $this->resepsi_time = $data->resepsi_time;
        $this->resepsi_place = $data->resepsi_place;
        $this->resepsi_address = $data->resepsi_address;
        $this->map = $data->google_maps;
    }

    public function render()
    {
        return view('livewire.customer.invitation.event');
    }

    public function save()
    {
        // dd($this->akad_date);
        try {
            Auth::user()->personal->event->update([
                "akad_date" => $this->akad_date,
                "akad_time" => date("H:i", strtotime($this->akad_time)),
                "akad_place" => $this->akad_place,
                "akad_address" => $this->akad_address,
                "resepsi_date" => $this->resepsi_date,
                "resepsi_time" => date("H:i", strtotime($this->resepsi_time)),
                "resepsi_place" => $this->resepsi_place,
                "resepsi_address" => $this->resepsi_address,
                "google_maps" => $this->map,
            ]);

            $this->dispatchBrowserEvent('alert', [
                'type' => 'success',
                'message' => "Data berhasil disimpan",
            ]);
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('swal', [
                'type' => 'error',
                'title' => "Terjadi kesalahan! Silahkan coba lagi",
                'icon' => 'error',
            ]);
        }
    }
}
