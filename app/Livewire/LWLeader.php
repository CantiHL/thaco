<?php

namespace App\Livewire;

use App\Models\Leader;
use Livewire\Component;
use Livewire\WithFileUploads;
use Storage;

class LWLeader extends Component
{
    use WithFileUploads;
    public $name;
    public $position;
    public $image;
    public $level = 1;
    public $sex = 'Nam';
    public $nameupdate = [];
    public $positionupdate = [];
    public $levelupdate = [];
    public $sexupdate = [];
    public $imageupdate = null;
    public $data = [];
    public function mount()
    {
        $this->data = Leader::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->nameupdate[$item->id] = $item->name;
                $this->positionupdate[$item->id] = $item->position;
                $this->levelupdate[$item->id] = $item->level;
                $this->sexupdate[$item->id] = $item->sex;
            }
        }
    }
    public function save()
    {
        // dd($this->name, $this->position, $this->level);
        $this->validate([
            'name' => 'required|max:255',
            'position' => 'required|max:2000',
            'image' => 'required|image',
            'level' => 'required',
        ]);
        $path = $this->image->store('public/leaders/');
        Leader::create([
            'name' => $this->name,
            'position' => $this->position,
            'image' => $path,
            'level' => $this->level,
            'sex' => $this->sex,
        ]);
        $this->data = Leader::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->nameupdate[$item->id] = $item->name;
                $this->positionupdate[$item->id] = $item->position;
                $this->levelupdate[$item->id] = $item->level;
                $this->sexupdate[$item->id] = $item->sex;

            }
        }
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function update($id)
    {
        // dd($this->levelupdate[$id], $this->sexupdate[$id]);
        $this->validate([
            "nameupdate.$id" => 'required|max:200',
            "positionupdate.$id" => 'required|max:200',
        ]);
        $leader = Leader::find($id);
        if (!$leader) {
            return;
        }
        if ($this->imageupdate !== null) {
            Storage::delete($leader->image);
            $path = $this->imageupdate->store('public/leaders/');
            $leader->update([
                'name' => $this->nameupdate[$id],
                'position' => $this->positionupdate[$id],
                'image' => $path,
                'level' => $this->levelupdate[$id],
                'sex' => $this->sexupdate[$id],


            ]);
        } else {
            $leader->update([
                'name' => $this->nameupdate[$id],
                'position' => $this->positionupdate[$id],
                'level' => $this->levelupdate[$id],
                'sex' => $this->sexupdate[$id],

            ]);
        }
        $leader->save();
        $this->data = Leader::all();
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function delete($id)
    {
        $leader = Leader::find($id);
        Storage::delete($leader->image);
        $leader->delete();
        $this->data = Leader::all();
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function render()
    {
        return view('livewire.l-w-leader');
    }
}
