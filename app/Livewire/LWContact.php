<?php

namespace App\Livewire;

use App\Models\Letter;
use Livewire\Component;

class LWContact extends Component
{
    public function delete($id)
    {
        $music = Letter::find($id);
        $music->delete();
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function render()
    {
        return view('livewire.l-w-contact', ['data' => Letter::all()]);
    }
}
