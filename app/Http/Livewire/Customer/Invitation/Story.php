<?php

namespace App\Http\Livewire\Customer\Invitation;

use App\Models\Invitation\Story as InvitationStory;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Story extends Component
{
    public $date, $title, $content, $ids, $count;

    public function render()
    {
        return view('livewire.customer.invitation.story', [
            "data" => Auth::user()->personal->story()->get()
        ]);
    }

    protected $rules = [
        'date' => 'required',
        'title' => 'required',
        'content' => 'required',
    ];

    public function mount()
    {
        $this->count = Auth::user()->personal->story()->count();
    }
    public function save()
    {
        try {
            $auth = Auth::user()->personal->story();

            if ($auth->count() >= 3) {
                $this->dispatchBrowserEvent('swal', [
                    'type' => 'error',
                    'title' => "Maksimal 3 Cerita",
                    'icon' => 'error',
                ]);
            } else {
                $this->validate();
                $auth->create([
                    "title" => $this->title,
                    "content" => $this->content,
                    "date" => $this->date,
                ]);
                $this->count = Auth::user()->personal->story()->count();
                $this->resets();
                $this->dispatchBrowserEvent('alert', [
                    'type' => 'success',
                    'message' => "Data berhasil disimpan",
                ]);
            }
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('swal', [
                'type' => 'error',
                // 'title' => "Data gagal disimpan",
                'title' => "Data gagal disimpan",
                'icon' => 'error',
            ]);
        }
    }

    public function delete($id)
    {
        try {
            $auth = Auth::user()->personal->story()->findOrFail($id);
            $auth->delete();
            $this->count = Auth::user()->personal->story()->count();
            $this->resets();
            $this->dispatchBrowserEvent('alert', [
                'type' => 'success',
                'message' => "Data berhasil dihapus",
            ]);
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('swal', [
                'type' => 'error',
                'title' => $e->getMessage(),
                'icon' => 'error',
            ]);
        }
    }

    public function edit($id)
    {
        $auth = Auth::user()->personal->story()->findOrFail($id);
        $this->date = $auth->date;
        $this->title = $auth->title;
        $this->content = $auth->content;
        $this->ids = $id;
    }

    public function resets()
    {
        $this->date = "";
        $this->title = "";
        $this->content = "";
        $this->ids = "";
    }

    public function update()
    {
        try {
            $auth = Auth::user()->personal->story()->findOrFail($this->ids);
            $auth->update([
                "title" => $this->title,
                "content" => $this->content,
                "date" => $this->date,
            ]);
            $this->count = Auth::user()->personal->story()->count();
            $this->resets();
            $this->dispatchBrowserEvent('alert', [
                'type' => 'success',
                'message' => "Data berhasil dihapus",
            ]);
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('swal', [
                'type' => 'error',
                'title' => $e->getMessage(),
                'icon' => 'error',
            ]);
        }
    }
}
