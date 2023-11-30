<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Storage;

class Member extends Component
{
    use WithFileUploads;
    public $name;
    public $description;
    public $link;
    public $image;
    public $nameupdate = [];
    public $descriptionupdate = [];
    public $linkupdate = [];
    public $imageupdate = null;
    public $data = [];

    public function mount()
    {
        $this->data = \App\Models\Member::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->nameupdate[$item->id] = $item->name;
                $this->descriptionupdate[$item->id] = $item->description;
                $this->linkupdate[$item->id] = $item->link;
            }
        }
    }
    public function save()
    {
        $this->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:2000',
            'image' => 'required|image',
        ]);
        $path = $this->image->store('public/members/');
        \App\Models\Member::create([
            'name' => $this->name,
            'description' => $this->description,
            'link' => $this->link,
            'image' => $path,
        ]);
        $this->data = \App\Models\Member::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->nameupdate[$item->id] = $item->name;
                $this->descriptionupdate[$item->id] = $item->description;
                $this->linkupdate[$item->id] = $item->link;

            }
        }
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function update($id)
    {
        $this->validate([
            "nameupdate.$id" => 'required|max:255',
            "descriptionupdate.$id" => 'required|max:2000',
        ]);
        $member = \App\Models\Member::find($id);
        if (!$member) {
            return;
        }
        if ($this->imageupdate !== null) {
            Storage::delete($member->image);
            $path = $this->imageupdate->store('public/members/');
            $member->update([
                'name' => $this->nameupdate[$id],
                'description' => $this->descriptionupdate[$id],
                'link' => $this->linkupdate[$id],
                'image' => $path,
            ]);
        } else {
            $member->update([
                'name' => $this->nameupdate[$id],
                'description' => $this->descriptionupdate[$id],
                'link' => $this->linkupdate[$id],

            ]);
        }
        $member->save();
        $this->data = \App\Models\Member::all();
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function delete($id)
    {
        $member = \App\Models\Member::find($id);
        if ($member->image)
            Storage::delete($member->image);
        $member->delete();
        $this->data = \App\Models\Member::all();
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function render()
    {
        return view('livewire.member');
    }
}
