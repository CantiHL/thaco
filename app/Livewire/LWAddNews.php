<?php

namespace App\Livewire;

use App\Models\Field;
use App\Models\Tiding;
use Livewire\Component;
use Livewire\WithFileUploads;

class LWAddNews extends Component
{
    use WithFileUploads;
    public $dataCommunication = [];
    public $title;
    public $content;
    public $image;
    public $field_id;
    public $date;
    public $tag;
    public $belong_to = 'tintuc';
    public $dataField = [];
    public function mount()
    {
        $this->dataCommunication = [
            'tintuc' => 'Tin tức',
            'sukien' => 'Sự kiện',
            'hoatdongnoibo' => 'Hoạt động nội bộ',
            'thongdiepchutich' => 'Thông điệp chủ tịch',
            'thuchuctetcuachutich' => 'Thư chúc tết chủ tịch HDQT',
        ];
        $this->dataCommunication = collect($this->dataCommunication);
        // dd($this->dataComCommunication);
        $this->dataField = Field::all();

    }
    public function save()
    {
        if ($this->field_id == null) {
            $this->field_id = Field::first()->id;
        }
        $this->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'field_id' => 'required|integer',
            'image' => 'required|image|max:5120',
        ]);
        $path = $this->image->store('public/news/');
        Tiding::create([
            'title' => $this->title,
            'date' => $this->date ? $this->date : now(),
            'content' => $this->content,
            'field_id' => $this->field_id,
            'tag' => json_encode(explode(';', $this->tag)),
            'image' => $path,
            'belong_to' => $this->belong_to,
        ]);
        $this->dispatch('toastr', ['message' => 'Success']);

    }
    public function render()
    {
        return view('livewire.l-w-add-news');
    }
}
