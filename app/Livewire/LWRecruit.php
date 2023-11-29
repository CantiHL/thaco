<?php

namespace App\Livewire;

use App\Models\Recruit;
use Livewire\Component;

class LWRecruit extends Component
{
    public $name;
    public $link_job;
    public $link_job_update = [];
    public $nameupdate = [];
    public $data = [];
    public function mount()
    {
        $this->data = Recruit::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->nameupdate[$item->id] = $item->name;
                $this->link_job_update[$item->id] = $item->link_job;
            }
        }
    }
    public function save()
    {
        $this->validate([
            'name' => 'required',
            'link_job' => 'required',
        ]);
        Recruit::create([
            'name' => $this->name,
            'link_job' => $this->link_job,
        ]);
        $this->data = Recruit::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->nameupdate[$item->id] = $item->name;
                $this->link_job_update[$item->id] = $item->link_job;
            }
        }
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function update($id)
    {
        // dd($this->link_job_update[$id]);
        $this->validate([
            "nameupdate.$id" => 'required',
            "link_job_update.$id" => 'required',
        ]);
        $recruit = Recruit::find($id);
        if ($recruit) {
            $recruit->update([
                'name' => $this->nameupdate[$id],
                'link_job' => $this->link_job_update[$id],
            ]);
            $recruit->save();
            $this->data = Recruit::all();
        }

        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function delete($id)
    {
        $Recruit = Recruit::find($id);
        $Recruit->delete();
        $this->data = Recruit::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->nameupdate[$item->id] = $item->name;
            }
        }
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function render()
    {
        return view('livewire.l-w-recruit');
    }
}
