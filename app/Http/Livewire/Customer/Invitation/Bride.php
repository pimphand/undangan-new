<?php

namespace App\Http\Livewire\Customer\Invitation;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Bride extends Component
{
    use WithFileUploads;

    public $foto_man, $foto_woman;
    public
        $fullname_man, $username_man, $father_man, $mother_man, $photo_man,
        $fullname_woman, $username_woman, $father_woman, $mother_woman, $photo_woman;

    public function mount()
    {
        $data = Auth::user()->personal->bride;
        $this->fullname_man = $data->fullname_man;
        $this->username_man = $data->username_man;
        $this->father_man = $data->father_man;
        $this->mother_man = $data->mother_man;
        $this->photo_man = $data->photo_man;
        $this->fullname_woman = $data->fullname_woman;
        $this->username_woman = $data->username_woman;
        $this->father_woman = $data->father_woman;
        $this->mother_woman = $data->mother_woman;
        $this->photo_woman = $data->photo_woman;
    }
    public function render()
    {
        return view('livewire.customer.invitation.bride');
    }

    public function save()
    {
        try {
            if ($this->foto_man != null) {
                $foto = $this->foto_man->store('wedding/man/', 'public');
            } else {
                $foto = $this->photo_man;
            }

            if ($this->foto_man != null) {
                $woman = $this->foto_woman->store('wedding/woman/', 'public');
            } else {
                $woman = $this->photo_woman;
            }

            Auth::user()->personal->bride->update([
                "fullname_man" => $this->fullname_man,
                "username_man" => $this->username_man,
                "father_man" => $this->father_man,
                "mother_man" => $this->mother_man,
                "photo_man" => $foto,
                "fullname_woman" => $this->fullname_woman,
                "username_woman" => $this->username_woman,
                "father_woman" => $this->father_woman,
                "mother_woman" => $this->mother_woman,
                "photo_woman" => $woman
            ]);

            $this->dispatchBrowserEvent('alert', [
                'type' => 'success',
                'message' => "Data berhasil disimpan",
            ]);
        } catch (\Exception $r) {
            $this->dispatchBrowserEvent('alert', [
                'type' => 'error',
                'message' => "Telah terjadi kesalahan, silahkan coba lagi",
            ]);
        }
    }
}
