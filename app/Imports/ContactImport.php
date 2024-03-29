<?php

namespace App\Imports;

use App\Models\Invitation\SendInvitation;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ContactImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new SendInvitation([
            'name' => $row['name'],
            'phone' => $row['phone'],
            'invite_id' => auth()->user()->personal->id,
        ]);
    }
}
