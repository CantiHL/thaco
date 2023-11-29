<?php

namespace App\Livewire;

use App\Models\ShareHolder;
use Livewire\Component;

class LWShareHolder extends Component
{
    public $name;
    public $nameupdate = [];
    public $data = [];

    public function mount()
    {
        $this->data = ShareHolder::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->nameupdate[$item->id] = $item->name;
            }
        }
    }
    public function save()
    {
        $this->validate([
            'name' => 'required|max:255',
        ]);
        ShareHolder::create([
            'name' => $this->name,
        ]);
        $this->data = ShareHolder::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->nameupdate[$item->id] = $item->name;
            }
        }
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function update($id)
    {
        $this->validate([
            "nameupdate.$id" => 'required|max:255',
        ]);
        $member = ShareHolder::find($id);
        if (!$member) {
            return;
        }
        $member->update([
            'name' => $this->nameupdate[$id],
        ]);
        $member->save();
        $this->data = ShareHolder::all();
        foreach ($this->data as $item) {
            $this->nameupdate[$item->id] = $item->name;
        }
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function delete($id)
    {
        $member = ShareHolder::find($id);
        $member->delete();
        $this->data = ShareHolder::all();

        $this->dispatch('toastr', ['message' => 'Success']);

    }
    public function render()
    {
        return view('livewire.l-w-share-holder');
    }
}
