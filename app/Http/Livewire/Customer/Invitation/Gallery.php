<?php

namespace App\Http\Livewire\Customer\Invitation;

use App\Models\Invitation\Gallery as InvitationGallery;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Gallery extends Component
{
    use WithFileUploads;
    public $youtube, $image, $jumlah, $tampilGambar, $ids;

    public function mount()
    {
        $this->youtube =  Auth::user()->personal->youtube;
        $this->jumlah =  Auth::user()->personal->albums()->count();
    }
    public function render()
    {
        // dd(Auth::user()->personal->albums()->get());
        return view('livewire.customer.invitation.gallery', [
            'data' => InvitationGallery::where('invite_id', Auth::user()->personal->id)->get(),
        ]);
    }

    public function save()
    {
        if ($this->image != null) {
            Auth::user()->personal->albums()->create([
                "image" => $this->image->store('albums', 'public'),
            ]);
        }

        if ($this->youtube != null) {
            Auth::user()->personal->update([
                "youtube" => $this->youtube,
            ]);
        }
        $this->jumlah =  Auth::user()->personal->albums()->count();
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Data berhasil disimpan",
        ]);
    }

    public function show($id)
    {
        $image = InvitationGallery::findOrFail($id);
        $this->ids = $id;
        $this->tampilGambar = $image->image;
        $this->emit('view');
    }

    public function delete()
    {
        $image = InvitationGallery::findOrFail($this->ids);
        if ($image->invite_id == Auth::user()->personal->id) {
            $image->delete();
            $this->jumlah =  Auth::user()->personal->albums()->count();
            $this->ids = "";
            $this->dispatchBrowserEvent('alert', [
                'type' => 'success',
                'message' => "Data berhasil dihapus",
            ]);
        } else {
            $this->dispatchBrowserEvent('swal', [
                'type' => 'error',
                'title' => "Telah terjadi kesalahan",
                'icon' => 'error',
            ]);
        }
    }
}
