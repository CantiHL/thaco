<?php

namespace App\Livewire;

use App\Models\MainValue;
use Livewire\Component;
use Livewire\WithFileUploads;
use Storage;

class LWMainValue extends Component
{
    use WithFileUploads;
    public $title;
    public $des;
    public $image;
    public $logo;
    public $title_update = [];
    public $des_update = [];
    public $image_update = null;
    public $logo_update = null;
    public $data = [];

    public function mount()
    {
        $this->data = MainValue::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->title_update[$item->id] = $item->title;
                $this->des_update[$item->id] = $item->des;
            }
        }
    }
    public function save()
    {
        $this->validate([
            'title' => 'required|max:255',
            'des' => 'required|max:2000',
            'image' => 'required|image',
            'logo' => 'required|image',
        ]);
        $path = $this->image->store('public/mainvalues/image/');
        $path1 = $this->logo->store('public/mainvalues//logo');
        MainValue::create([
            'title' => $this->title,
            'image' => $path,
            'logo' => $path1,
            'des' => $this->des,
        ]);
        $this->data = MainValue::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->title_update[$item->id] = $item->title;
                $this->des_update[$item->id] = $item->des;
            }
        }
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function update($id)
    {
        $this->validate([
            "title_update.$id" => 'required|max:255',
            "des_update.$id" => 'required|max:2000',
        ]);
        $mainvalue = MainValue::find($id);
        if (!$mainvalue) {
            return;
        }
        if ($this->image_update && $this->logo_update == null) {
            Storage::delete($mainvalue->image);
            $path = $this->image_update->store('public/mainvalues/image/');
            $mainvalue->update([
                'title' => $this->title_update[$id],
                'image' => $path,
                'des' => $this->des_update[$id],
            ]);
        } elseif ($this->logo_update && $this->image_update == null) {
            Storage::delete($mainvalue->logo);
            $path1 = $this->image_update->store('public/mainvalues/logo/');
            $mainvalue->update([
                'title' => $this->title_update[$id],
                'logo' => $path1,
                'des' => $this->des_update[$id],
            ]);
        } elseif ($this->logo_update && $this->image_update) {
            Storage::delete($mainvalue->image);
            Storage::delete($mainvalue->logo);
            $path = $this->image_update->store('public/mainvalues/image/');
            $path1 = $this->logo_update->store('public/mainvalues/logo');
            $mainvalue->update([
                'title' => $this->title_update[$id],
                'image' => $path,
                'logo' => $path1,
                'des' => $this->des_update[$id],
            ]);
        } else {
            $mainvalue->update([
                'title' => $this->title_update[$id],
                'des' => $this->des_update[$id],
            ]);
        }
        $mainvalue->save();
        $this->data = MainValue::all();
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function delete($id)
    {
        $mainvalue = MainValue::find($id);
        Storage::delete($mainvalue->image);
        $mainvalue->delete();
        $this->data = MainValue::all();
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function render()
    {
        return view('livewire.l-w-main-value');
    }
}
