<?php

namespace App\Livewire;

use App\Models\ActivationField;
use App\Models\Field;
use Livewire\Component;
use Livewire\WithFileUploads;
use Storage;

class LWActivationField extends Component
{
    use WithFileUploads;
    public $title;
    public $field_id;
    public $description;
    public $active_in = 'SẢN XUẤT';
    public $link;
    public $image = null;
    public $data = [];
    public $dataField = [];
    public function mount()
    {
        $this->dataField = Field::all();
        $this->getData();
    }
    public function save()
    {
        if ($this->field_id == null) {
            $this->field_id = Field::first()->id;
        }

        $path = null;
        if ($this->image) {
            $path = $this->image->store('public/activation_fields/');
        }
        ActivationField::create([
            'field_id' => $this->field_id,
            'title' => $this->title,
            'description' => $this->description,
            'image' => $path,
            'active_in' => $this->active_in,
            'link' => $this->link,

        ]);
        $this->getData();
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function delete($id)
    {
        $activation_field = ActivationField::find($id);
        if ($activation_field->image)
            Storage::delete($activation_field->image);
        $activation_field->delete();
        $this->getData();
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function render()
    {
        return view('livewire.l-w-activation-field');
    }
    private function getData()
    {
        $this->data = ActivationField::join('fields', 'activation_fields.field_id', 'fields.id')
            ->select(
                'activation_fields.id as id',
                'activation_fields.title as title',
                'activation_fields.description as description',
                'activation_fields.image as image',
                'fields.name as field_name',
                'activation_fields.active_in as field_active_in',
                'activation_fields.link as link',
            )
            ->orderBy('id', 'desc')
            ->get();
    }
}
