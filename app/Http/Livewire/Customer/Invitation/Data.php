<?php

namespace App\Http\Livewire\Customer\Invitation;

use App\Models\Wedding;
use Livewire\Component;

class Data extends Component
{
    public $title, $f;
    public $user;

    public function render()
    {
        return view('livewire.customer.invitation.data', [
            // 'data' => auth()->user()->invitations,
            'data' => Wedding::all(),
        ]);
    }

    public function form($r, $id = null)
    {
        try {
            if ($r == "create") {
                $this->title = "Invitation Create";
                $this->emit('form');
                // $this->resets();
            } elseif ($r == "edit" && $id != null) {
                $this->title = "Invitation Edit";
                $data = Wedding::find(decrypt($id));
                $this->f = $data->id;
                $this->emit('form');
            } else {
                $this->dispatchBrowserEvent('alert', [
                    'type' => 'error',
                    'message' => "Wops something wrong",
                ]);
            }
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('alert', [
                'type' => 'error',
                'message' => $e->getMessage(),
                // 'message' => "Wops something wrongs",
            ]);
        }
    }

    public function destroy($id)
    {
        try {
            $wedding = Wedding::find(decrypt($id));
            if ($wedding->user_id == auth()->user()->id) {
                $wedding->delete();
                $this->dispatchBrowserEvent('alert', [
                    'type' => 'success',
                    'message' => "Invitation has been deleted",
                ]);
                $this->emit('storeWedding');
            } else {
                $this->dispatchBrowserEvent('alert', [
                    'type' => 'error',
                    'message' => "You can't delete this invitation",
                ]);
            }
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('alert', [
                'type' => 'error',
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function store()
    {
        try {
            $user = auth()->user();
            $data = [
                "user_id" => auth()->id(),
                // "date" => $this->date,
                // "time" => $this->time,
                // "address" => $this->address,
                // "longitude" => $this->longitude,
                // "latitude" => $this->latitude,
                // "title" => $this->title,
            ];
            if ($user->status == 1) {
                $wedding = Wedding::create($data);
                $this->dispatchBrowserEvent('alert', [
                    'type' => 'success',
                    'message' => "Invitation has been created",
                ]);
            } elseif ($user->status == 0 && $user->personal->count() < 1) {
                $wedding = Wedding::create($data);
                $this->dispatchBrowserEvent('alert', [
                    'type' => 'success',
                    'message' => "Invitation has been created",
                ]);
            } else {
                $this->dispatchBrowserEvent('alert', [
                    'type' => 'error',
                    'message' => "Your must upgrade your account",
                ]);
            }
            $this->emit('storeWedding');
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('alert', [
                'type' => 'error',
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function update($id)
    {
        try {
            $wedding = Wedding::find(decrypt($id));
            if ($wedding->user_id == auth()->user()->id) {
                $wedding->update([
                    // "date" => $this->date,
                    // "time" => $this->time,
                    // "address" => $this->address,
                    // "longitude" => $this->longitude,
                    // "latitude" => $this->latitude,
                    // "title" => $this->title,
                ]);
                $this->dispatchBrowserEvent('alert', [
                    'type' => 'success',
                    'message' => "Invitation has been updated",
                ]);
            } else {
                $this->dispatchBrowserEvent('alert', [
                    'type' => 'error',
                    'message' => "You can't update this invitation",
                ]);
            }
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('alert', [
                'type' => 'error',
                'message' => $e->getMessage(),
            ]);
        }
    }
}
