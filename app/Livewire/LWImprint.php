<?php

namespace App\Livewire;

use App\Models\Imprint;
use Livewire\Component;

class LWImprint extends Component
{
    public $imprint;
    public $title;
    public $des;
    public $imprint_update = [];
    public $title_update = [];
    public $des_update = [];
    public $data;

    public function mount()
    {
        $this->data = Imprint::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->imprint_update[$item->id] = $item->imprint;
                $this->title_update[$item->id] = $item->title;
                $this->des_update[$item->id] = $item->description;
            }
        }
    }
    public function save()
    {
        $this->validate([
            'imprint' => 'required|integer',
            'title' => 'required|',
            'des' => 'required',
        ]);
        Imprint::create([
            'imprint' => $this->imprint,
            'title' => $this->title,
            'description' => $this->des,
        ]);
        $this->data = Imprint::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->imprint_update[$item->id] = $item->imprint;
                $this->title_update[$item->id] = $item->title;
                $this->des_update[$item->id] = $item->description;

            }
        }
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function update($id)
    {
        $this->validate([
            "imprint_update.$id" => 'required|integer',
            "title_update.$id" => 'required',
            "des_update.$id" => 'required',
        ]);
        $imprint = Imprint::find($id);
        if (!$imprint) {
            return;
        }
        $imprint->update([
            'imprint' => $this->imprint_update[$id],
            'title' => $this->title_update[$id],
            'description' => $this->des_update[$id],
        ]);
        $imprint->save();
        $this->data = Imprint::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->imprint_update[$item->id] = $item->imprint;
                $this->title_update[$item->id] = $item->title;
                $this->des_update[$item->id] = $item->description;

            }
        }
        $this->dispatch('toastr', ['message' => 'Success']);

    }
    public function delete($id)
    {
        $imprint = Imprint::find($id);
        $imprint->delete();
        $this->data = Imprint::all();
        $this->dispatch('toastr', ['message' => 'Success']);


    }
    public function render()
    {
        return view('livewire.l-w-imprint');
    }
}
