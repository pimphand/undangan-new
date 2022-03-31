<?php

namespace App\Http\Livewire\Customer\Invitation;

use App\Models\Invitation\Log as InvitationLog;
use Livewire\Component;

class Log extends Component
{
    public function render()
    {
        return view('livewire.customer.invitation.log')->with([
            'data' => InvitationLog::where('invite_id', auth()->user()->personal->id)->get(),
        ]);
    }
}
