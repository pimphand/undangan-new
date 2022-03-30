<?php

namespace App\Http\Livewire\Customer\Invitation;

use App\Models\Invitation\SendInvitation as InvitationSendInvitation;
use Livewire\Component;

class SendInvitation extends Component
{
    public $title;

    public function render()
    {
        return view('livewire.customer.invitation.send-invitation', [
            "data" => InvitationSendInvitation::where('invite_id', auth()->user()->personal->id)->get(),
        ]);
    }

    public function form()
    {
        $this->title = "Tambah Kontak";
        $this->resets();
        $this->emit('form');
    }

    public function resets()
    {
        $this->name = "";
        $this->email = "";
        $this->phone = "";
        $this->message = "";
        $this->status = "";
    }
}
