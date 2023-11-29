<?php

namespace App\Livewire;

use App\Models\DevelopmentProcess;
use Livewire\Component;
use Livewire\WithFileUploads;
use Storage;

class LWDevelopmentProcess extends Component
{
    use WithFileUploads;
    public $year;
    public $description;
    public $image;
    public $yearupdate = [];
    public $descriptionupdate = [];
    public $imageupdate = null;
    public $data = [];
    public function mount()
    {
        $this->data = DevelopmentProcess::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->yearupdate[$item->id] = $item->year;
                $this->descriptionupdate[$item->id] = $item->description;
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
        $path = $this->image->store('public/development-processes/');
        DevelopmentProcess::create([
            'year' => $this->year,
            'description' => $this->description,
            'image' => $path,

        ]);
        $this->data = DevelopmentProcess::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->yearupdate[$item->id] = $item->year;
                $this->descriptionupdate[$item->id] = $item->description;

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
        $developmentProcess = DevelopmentProcess::find($id);
        if (!$developmentProcess) {
            return;
        }
        if ($this->imageupdate !== null) {
            Storage::delete($developmentProcess->image);
            $path = $this->imageupdate->store('public/development-processes/');
            $developmentProcess->update([
                'year' => $this->yearupdate[$id],
                'description' => $this->descriptionupdate[$id],
                'image' => $path,

            ]);
        } else {
            $developmentProcess->update([
                'year' => $this->yearupdate[$id],
                'description' => $this->descriptionupdate[$id],
            ]);
        }
        $developmentProcess->save();
        $this->data = DevelopmentProcess::all();
        foreach ($this->data as $item) {
            $this->yearupdate[$item->id] = $item->year;
            $this->descriptionupdate[$item->id] = $item->description;

        }
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function delete($id)
    {
        $developmentProcess = DevelopmentProcess::find($id);
        Storage::delete($developmentProcess->image);
        $developmentProcess->delete();
        $this->data = DevelopmentProcess::all();
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function render()
    {
        return view('livewire.l-w-development-process');
    }
}
