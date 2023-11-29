<?php

namespace App\Livewire;

use App\Models\File;
use App\Models\ShareHolder;
use Livewire\Component;
use Livewire\WithFileUploads;
use Storage;

class LWFileReferrence extends Component
{
    use WithFileUploads;
    public $date;
    public $name;
    public $link;
    public $share_hoder_id = 0;
    public $type = 0;
    public $date_update = [];
    public $name_update = [];
    public $link_update = null;
    public $share_hoder_id_update = [];
    public $type_update = [];
    public $data = [];
    public $dataShareholder = [];
    public $dataType = [];
    public function mount()
    {
        $this->dataType = [
            '1' => 'Tạp chí',
            '2' => 'Thông cáo báo trí',
        ];
        $this->data = File::all();
        $this->dataShareholder = ShareHolder::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->date_update[$item->id] = $item->date;
                $this->name_update[$item->id] = $item->name;
                $this->share_hoder_id_update[$item->id] = $item->share_hoder_id;
                $this->type_update[$item->id] = $item->type;
            }
        }
    }
    public function save()
    {
        $this->validate([
            'date' => 'required',
            'name' => 'required',
            'link' => 'required|mimes:pdf',
        ]);
        $path = $this->link->store('public/files/');
        File::create([
            'date' => $this->date,
            'name' => $this->name,
            'link' => $path,
            'share_hoder_id' => $this->share_hoder_id,

        ]);
        $this->data = File::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->date_update[$item->id] = $item->date;
                $this->name_update[$item->id] = $item->name;
                $this->share_hoder_id_update[$item->id] = $item->share_hoder_id;
                $this->type_update[$item->id] = $item->type;

            }
        }
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function update($id)
    {
        $this->validate([
            "date_update.$id" => 'required',
            "name_update.$id" => 'required',
        ]);
        $file = File::find($id);
        if (!$file) {
            return;
        }
        if ($this->link_update !== null) {
            Storage::delete($file->link);
            $path = $this->link_update->store('public/files/');
            $file->update([
                'date' => $this->date_update[$id],
                'name' => $this->name_update[$id],
                'link' => $path,
                'share_hoder_id' => $this->share_hoder_id_update[$id],
                'type' => $this->type_update[$id],
            ]);
        } else {
            $file->update([
                'date' => $this->date_update[$id],
                'name' => $this->name_update[$id],
                'share_hoder_id' => $this->share_hoder_id_update[$id],
                'type' => $this->type_update[$id],
            ]);
        }
        $file->save();
        $this->data = File::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->date_update[$item->id] = $item->date;
                $this->name_update[$item->id] = $item->name;
                $this->share_hoder_id_update[$item->id] = $item->share_hoder_id;
                $this->type_update[$item->id] = $item->type;
            }
        }
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function delete($id)
    {
        $file = File::find($id);
        Storage::delete($file->link);
        $file->delete();
        $this->data = File::all();
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function render()
    {
        return view('livewire.l-w-file-referrence');
    }
}
