<?php

namespace App\Livewire;

use App\Models\Achievement;
use Livewire\Component;
use Livewire\WithFileUploads;
use Storage;

class LWAchievement extends Component
{
    use WithFileUploads;
    public $year;
    public $description;
    public $image;
    public $whose = 1;
    public $yearupdate = [];
    public $descriptionupdate = [];
    public $imageupdate = null;
    public $whoseupdate = [];
    public $data = [];
    public function mount()
    {
        $this->data = Achievement::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->yearupdate[$item->id] = $item->year;
                $this->descriptionupdate[$item->id] = $item->description;
                $this->whoseupdate[$item->id] = $item->whose;
            }
        }
    }
    public function save()
    {
        $this->validate([
            'year' => 'required|max:255',
            'description' => 'required|max:2000',
            'image' => 'required|image',

        ]);
        $path = $this->image->store('public/achievements/');
        Achievement::create([
            'year' => $this->year,
            'description' => $this->description,
            'image' => $path,
            'whose' => $this->whose

        ]);
        $this->data = Achievement::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->yearupdate[$item->id] = $item->year;
                $this->descriptionupdate[$item->id] = $item->description;
                $this->whoseupdate[$item->id] = $item->whose;

            }
        }
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function update($id)
    {
        $this->validate([
            "yearupdate.$id" => 'required|max:255',
            "descriptionupdate.$id" => 'required|max:2000',
        ]);
        $achievement = Achievement::find($id);
        if (!$achievement) {
            return;
        }
        if ($this->imageupdate !== null) {
            Storage::delete($achievement->image);
            $path = $this->imageupdate->store('public/achievements/');
            $achievement->update([
                'year' => $this->yearupdate[$id],
                'description' => $this->descriptionupdate[$id],
                'image' => $path,
                'whose' => $this->whosenupdate[$id],

            ]);
        } else {
            $achievement->update([
                'year' => $this->yearupdate[$id],
                'description' => $this->descriptionupdate[$id],
                'whose' => $this->whoseupdate[$id],
            ]);
        }
        $achievement->save();
        $this->data = Achievement::all();
        foreach ($this->data as $item) {
            $this->yearupdate[$item->id] = $item->year;
            $this->descriptionupdate[$item->id] = $item->description;
            $this->whoseupdate[$item->id] = $item->whose;

        }
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function delete($id)
    {
        $achievement = Achievement::find($id);
        Storage::delete($achievement->image);
        $achievement->delete();
        $this->data = Achievement::all();
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function render()
    {
        return view('livewire.l-w-achievement');
    }
}
