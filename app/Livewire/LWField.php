<?php

namespace App\Livewire;

use App\Models\Field;
use App\Models\Member;
use Livewire\Component;
use Livewire\WithFileUploads;
use Storage;

class LWField extends Component
{
    use WithFileUploads;
    public $name;
    public $belong_to;
    public $detail;
    public $image;
    public $imageupdate = null;
    public $nameupdate = [];
    public $detailUpdate = [];
    public $belong_toUpdate = [];
    public $data = [];
    public $dataMember = [];
    public function mount()
    {
        $this->belong_to = Member::first()->id;
        $this->dataMember = Member::all();
        $this->data = Field::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->nameupdate[$item->id] = $item->name;
                $this->belong_toUpdate[$item->id] = $item->belong_to;
                $this->detailUpdate[$item->id] = implode(';', json_decode($item->detail));
            }
        }
    }
    public function save()
    {
        $this->validate([
            'name' => 'required|max:255',
            'detail' => 'required|max:255',
            'image' => 'required|image',

        ]);
        if ($this->belong_to == null) {
            $this->belong_to = Member::first()->id;
        }
        $path = $this->image->store('public/members/');
        Field::create([
            'name' => $this->name,
            'belong_to' => $this->belong_to,
            'detail' => json_encode(explode(';', $this->detail)),
            'image' => $path,
        ]);
        $this->data = Field::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->nameupdate[$item->id] = $item->name;
                $this->belong_toUpdate[$item->id] = $item->belong_to;
                $this->detailUpdate[$item->id] = implode(';', json_decode($item->detail));
            }
        }
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function update($id)
    {
        $this->validate([
            "nameupdate.$id" => 'required|max:255',
            "detailUpdate.$id" => 'required|max:255',
        ]);
        $field = Field::find($id);
        if ($field) {
            if ($this->imageupdate == null) {
                $field->update([
                    'name' => $this->nameupdate[$id],
                    'belong_to' => $this->belong_toUpdate[$id],
                    'detail' => json_encode(explode(';', $this->detailUpdate[$id])),
                ]);
            } else {
                Storage::delete($field->image);
                $path = $this->imageupdate->store('public/fields/');
                $field->update([
                    'name' => $this->nameupdate[$id],
                    'belong_to' => $this->belong_toUpdate[$id],
                    'detail' => json_encode(explode(';', $this->detailUpdate[$id])),
                    'image' => $path,
                ]);
            }
            $field->save();
            $this->data = Field::all();
            if ($this->data) {
                foreach ($this->data as $item) {
                    $this->nameupdate[$item->id] = $item->name;
                    $this->belong_toUpdate[$item->id] = $item->belong_to;
                    $this->detailUpdate[$item->id] = implode(';', json_decode($item->detail));
                }
            }
        }
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function delete($id)
    {
        $field = Field::find($id);
        $field->delete();
        $this->data = Field::all();
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function render()
    {
        return view('livewire.l-w-field');
    }
}
