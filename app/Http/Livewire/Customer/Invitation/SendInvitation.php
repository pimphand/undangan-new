<?php

namespace App\Http\Livewire\Customer\Invitation;

use App\Exports\ContactExport;
use App\Imports\ContactImport;
use App\Models\Invitation\SendInvitation as InvitationSendInvitation;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class SendInvitation extends Component
{
    use WithFileUploads;

    public $title, $excel;
    public $name, $phone;

    public function render()
    {
        $data = InvitationSendInvitation::where('invite_id', auth()->user()->personal->id)->get();
        $data->map(function ($item) {
            $item->url = route('undangan.index', auth()->user()->personal->subdomain);
            return $item;
        });
        return view('livewire.customer.invitation.send-invitation', [
            "data" => $data,
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

    protected $rules = [
        'name' => 'required|string|max:255',
        'phone' => 'required|numeric|digits_between:10,13',
    ];

    protected $messages = [
        "name.required" => "Nama harus diisi",
        "phone.required" => "Nomor telepon harus diisi",
        "phone.numeric" => "Nomor telepon harus angka",
        "phone.digits_between" => "Nomor telepon harus antara 10 sampai 13 digit",
    ];

    public function save()
    {
        try {
            $this->validate($this->rules, $this->messages);
            $data = new InvitationSendInvitation;
            $data->name = $this->name;
            $data->phone = $this->phone;
            $data->invite_id = auth()->user()->personal->id;
            $data->save();

            $this->emit('save');
            $this->resets();
            $this->dispatchBrowserEvent('alert', [
                'type' => 'success',
                'message' => "Kontak berhasil ditambahkan",
            ]);
            $this->resets();
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('alert', [
                'type' => 'error',
                'message' => "Telah terjadi kesalahan",
            ]);
        }
    }

    public function destroy($id)
    {
        InvitationSendInvitation::destroy(decrypt($id));
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Data berhasil dihapus",
        ]);
    }

    public function export()
    {
        return Excel::download(new ContactExport, 'kontact.xlsx');
    }
}
