<?php

namespace App\Exports;

use App\Models\Invitation\SendInvitation;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ContactExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function view(): View
    {
        return view('export.contact.index', [
            'data' => SendInvitation::where('invite_id', auth()->user()->personal->id)->get(),
        ]);
    }
}
