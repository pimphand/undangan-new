<?php

namespace App\Http\Livewire\Customer\Invitation;

use App\Models\Invitation\Invite;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Create extends Component
{
    public $date, $title, $content;

    public $inputs = [];
    public $i = 1;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    public function render()
    {
        return view('livewire.customer.invitation.create');
    }

    public function save()
    {
        DB::beginTransaction();
        try {
            $invite = Invite::create([
                "user_id" => auth()->user()->id,
                // "theme" => $this->theme,
                // "cover" => $this->cover,
                // "status" => false,
            ]);
            // $invite->bride()->create([
            //     "fullname_man" => $this->fullname_man,
            //     "username_man" => $this->username_man,
            //     "father_man" => $this->father_man,
            //     "mother_man" => $this->mother_man,
            //     "photo_man" => $this->photo_man,
            //     "fullname_woman" => $this->fullname_woman,
            //     "username_woman" => $this->username_woman,
            //     "father_woman" => $this->father_woman,
            //     "mother_woman" => $this->mother_woman,
            //     "photo_woman" => $this->photo_woman,
            // ]);

            // $invite->event()->create([
            //     "akad_date" => $this->akad_date,
            //     "akad_time" => $this->akad_time,
            //     "akad_place" => $this->akad_place,
            //     "akad_address" => $this->akad_address,
            //     "resepsi_date" => $this->resepsi_date,
            //     "resepsi_time" => $this->resepsi_time,
            //     "resepsi_place" => $this->resepsi_place,
            //     "resepsi_address" => $this->resepsi_address,
            //     "google_maps" => $this->google_maps,

            // ]);
            if ($this->date > 0) {
                foreach ($this->date as $key => $value) {
                    // dd($this->date);
                    $invite->story()->create([
                        "date" => $this->date[$key],
                        "title" => $this->title[$key],
                        "content" => $this->content[$key],
                    ]);
                }
            }
            DB::commit();
        } catch (\Throwable $t) {
            DB::rollback();

            $this->dispatchBrowserEvent('alert', [
                'type' => 'error',
                'message' => $t->getMessage(),
            ]);
        }
    }
}
