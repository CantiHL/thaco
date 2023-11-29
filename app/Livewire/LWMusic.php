<?php

namespace App\Livewire;

use App\Models\MusicTrandition;
use Livewire\Component;
use Livewire\WithFileUploads;
use Storage;

class LWMusic extends Component
{
    use WithFileUploads;
    public $title;
    public $lyrics;
    public $mp3;
    public $mp4;
    public $title_update = [];
    public $lyrics_update = [];
    public $mp3_update = null;
    public $mp4_update = null;
    public $data = [];

    public function mount()
    {
        $this->data = MusicTrandition::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->title_update[$item->id] = $item->title;
                $this->lyrics_update[$item->id] = $item->lyrics;
                $this->mp4_update[$item->id] = $item->mp4;
            }
        }
    }
    public function save()
    {
        // dd($this->title, $this->lyrics, $this->mp4);
        $this->validate([
            'title' => 'required|max:255',
            'lyrics' => 'required|max:2000',
            'mp4' => 'required',
        ]);
        $path = null;
        if ($this->mp3) {
            $path = $this->mp3->store('public/music/mp3/');
        }
        MusicTrandition::create([
            'title' => $this->title,
            'lyrics' => $this->lyrics,
            'mp3' => $path,
            'mp4' => $this->mp4,
        ]);
        $this->data = MusicTrandition::all();
        if ($this->data) {
            foreach ($this->data as $item) {
                $this->title_update[$item->id] = $item->title;
                $this->lyrics_update[$item->id] = $item->lyrics;
                $this->mp4_update[$item->id] = $item->mp4;
            }
        }
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function update($id)
    {
        $this->validate([
            "title_update.$id" => 'required|max:255',
            "lyrics_update.$id" => 'required|max:2000',
            "mp4_update.$id" => 'required|max:2000',
        ]);
        $music = MusicTrandition::find($id);
        if (!$music) {
            return;
        }
        if ($this->mp3_update) {
            if ($music->mp3)
                Storage::delete($music->mp3);
            $path = $this->mp3_update->store('public/music/mp3/');
            $music->update([
                'title' => $this->title_update[$id],
                'lyrics' => $this->lyrics_update[$id],
                'mp3' => $path,
                'mp4' => $this->mp4_update[$id],
            ]);
        } else {
            $music->update([
                'title' => $this->title_update[$id],
                'lyrics' => $this->lyrics_update[$id],
                'mp4' => $this->mp4_update[$id],
            ]);
        }
        $music->save();
        $this->data = MusicTrandition::all();
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function delete($id)
    {
        $music = MusicTrandition::find($id);
        if ($music->mp3)
            Storage::delete($music->mp3);
        $music->delete();
        $this->data = MusicTrandition::all();
        $this->dispatch('toastr', ['message' => 'Success']);
    }
    public function render()
    {
        return view('livewire.l-w-music');
    }
}
