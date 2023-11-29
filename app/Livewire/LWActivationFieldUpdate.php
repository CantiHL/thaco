<?php

namespace App\Livewire;

use App\Models\ActivationField;
use App\Models\Field;
use Livewire\Component;
use Livewire\WithFileUploads;
use Storage;

class LWActivationFieldUpdate extends Component
{
    use WithFileUploads;
    public $id;
    public $title;
    public $description;
    public $orimage;
    public $image;
    public $field_id;
    public $active_in;
    public $link;
    public $data = [];
    public $dataField = [];
    public function mount($id)
    {
        $this->id = $id;
        $this->data = ActivationField::find($id);
        $this->title = $this->data->title;
        $this->description = $this->data->description;
        $this->orimage = $this->data->image;
        $this->field_id = $this->data->field_id;
        $this->active_in = $this->data->active_in;
        $this->link = $this->data->link;
        $this->dataField = Field::all();
    }
    public function update()
    {
        if ($this->image) {
            if ($this->data->image) {
                Storage::delete($this->data->image);
            }
            $path = $this->image->store('public/activation_fields/');
            $this->data->update([
                'title' => $this->title,
                'description' => $this->description,
                'image' => $path,
                'field_id' => $this->field_id,
                'active_in' => $this->active_in,
                'link' => $this->link,
            ]);
        } else {
            $this->data->update([
                'title' => $this->title,
                'description' => $this->description,
                'field_id' => $this->field_id,
                'active_in' => $this->active_in,
                'link' => $this->link,
            ]);
        }
        $this->data->save();
        $this->orimage = $this->data->image;
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function render()
    {
        return view('livewire.l-w-activation-field-update');
    }
}
