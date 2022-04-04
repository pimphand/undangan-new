<?php

namespace App\Http\Livewire\Admin;

use App\Models\Faq as ModelsFaq;
use Livewire\Component;

class Faq extends Component
{

    public $title = "Add Faq", $question, $answer, $status, $f, $trash = false;
    public function render()
    {
        return view('livewire.admin.faq', [
            'data' => ModelsFaq::all(),
        ]);
    }

    protected $rules = [
        'question' => 'required',
        'answer' => 'required',
    ];

    protected $messages = [
        'question.required' => 'Question tidak boleh kosong',
        'answer.required' => 'Answer tidak boleh kosong',
    ];

    public function save()
    {
        $this->validate();
        ModelsFaq::create([
            'question' => $this->question,
            'answer' => $this->answer,
        ]);
        $this->emit('save');
        $this->resetInput();
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Data berhasil disimpan",
        ]);
    }

    public function delete($id)
    {
        ModelsFaq::findOrFail($id)->delete();
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Data berhasil dihapus",
        ]);
    }

    public function edit($data)
    {
        // dd($data);
        $this->title = "Edit Faq";
        $this->f = $data['id'];
        $this->question = $data['question'];
        $this->answer = $data['answer'];
        $this->emit('form');
    }

    public function update()
    {
        $this->validate();
        ModelsFaq::findOrFail($this->f)->update([
            'question' => $this->question,
            'answer' => $this->answer,
        ]);
        $this->emit('save');
        $this->resetInput();
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => "Data berhasil diubah",
        ]);
    }

    public function resetInput()
    {
        $this->question = null;
        $this->answer = null;
        $this->status = null;
        $this->f = null;
    }

    public function destroy($id)
    {
        ModelsFaq::destroy($id);
    }

    public function trash($data = null)
    {
        if ($data == "open") {
            $this->trash = true;
            $this->trashs = ModelsFaq::onlyTrashed()->get();
        } elseif ($data == "close") {
            $this->trash = false;
            $this->trashs = ModelsFaq::onlyTrashed()->get();
        } else {
            $this->dispatchBrowserEvent('alert', [
                'type' => 'error',
                'message' => "Telah terjadi kesalahan",
            ]);
        }
    }

    public function restore($id)
    {
        ModelsFaq::onlyTrashed()->where('id', $id)->restore();
        $this->trashs = ModelsFaq::onlyTrashed()->get();
    }
}
